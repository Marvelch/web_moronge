<?php

namespace App\Http\Controllers\Laporan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App\Models\Lapor\LaporModel;
Use Alert;
use DB;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        Paginator::useBootstrap();
        
        $laporan = LaporModel::All();

        $search =  $request->input('q');
        if($search!=""){
            $users = LaporModel::where(function ($query) use ($search){
                $query->where('phone', 'like', '%'.$search.'%')
                    ->orWhere('nik', 'like', '%'.$search.'%')
                    ->orWhere('nama', 'like', '%'.$search.'%');
            })
            ->paginate(2);
            $users->appends(['q' => $search]);
        }
        else{
            $users = LaporModel::paginate(2);
        }

        return view('laporan.laporanonline',['laporan' => $laporan])->with('data',$users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $status = $request->input('status_id');
        LaporModel::Where('id',$id)->update(array('status' => $status));
                
        Alert::success('Berhasil', 'Pembuatan Agenda Berhasil.');

            return back();
        // dd($id);
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

    public function search(Request $request)
    {
        //
    }

}
