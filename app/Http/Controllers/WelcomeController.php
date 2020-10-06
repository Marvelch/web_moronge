<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ArielMejiaDev\LarapexCharts\Facades\LarapexChart;

use Illuminate\Pagination\Paginator;
use App\Models\User;
use DB;

use App\Models\Post\PostModel;
use App\Models\Lapor\LaporModel;
use App\Models\Jadwal\JadwalModel;
use App\Models\Danadesa\DanadesaModel;
use App\Models\Category\CategoryModel;



class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agendas = JadwalModel::orderby('created_at', 'desc')->take(3)->get();
        $postingan = PostModel::orderby('created_at', 'desc')->take(2)->get();
        return view('welcome', ['postingan' => $postingan])->with('agendas',$agendas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:40',
            'nik' => 'min:16|max:16',
            'phone' => 'required|max:12|min:11',
            'report' => 'required|max:250'
         ],
            [
                'nama.required' => '* Data Nama Lengkap Bermasalah !',
                'nik.required' => '* Data NIK (Nomor Induk Kependudukan) Bermasalah !',
                'phone.required' => '* Data No Telpon Bermasalah !',
                'report.required' => '* Kolom laporan tidak boleh kosong dan maksimal 250 karakter huruf.'
            ]);

        $laporan = new LaporModel();

         $laporan->nama = $request->input('name');
         $laporan->nik = $request->input('nik');
         $laporan->phone = $request->input('phone');
         $laporan->report = $request->input('report');
         $laporan->status = "Proses";

         $laporan->save();

         return redirect('cfg_thanks');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news = PostModel::WHERE('id',$id)->get();
        $category = CategoryModel::all();

        $ids = PostModel::WHERE('id',$id)->get();

        foreach($ids as $idz)
        {
            $penulis = DB::table('users')
                    ->join('post','users.id','=','post.users_id')
                    ->select('name')
                    ->where('users_id',$idz->users_id)
                    ->get();
        }

        return view('news',['news' => $news])->with('category',$category)->with('penulis',$penulis);
    }

    public function penulis()
    {
        return $this->hashOne('App\Models\User','foreign_key');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function thanks()
    {
        return view('reported');
    }

    public function Allnews()
    {
        Paginator::useBootstrap();

        $news = PostModel::orderBy('created_at', 'desc')->paginate(5);
        $penulis = DB::table('users')
                    ->join('post','users.id','=','post.users_id')
                    ->select('name')
                    ->get();
        
        // Get Table Category
        $Category = CategoryModel::All();

        return view('allnews',['news' => $news])->with('penulis',$penulis)->with('Category',$Category);
    }

    public function danadesa()
    {
        $laporan = DanadesaModel::all();

        return view('dana',['laporan' => $laporan]);
    }

    public function profile()
    {
        return view('profil');
    }
}
