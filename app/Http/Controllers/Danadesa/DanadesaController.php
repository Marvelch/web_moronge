<?php

namespace App\Http\Controllers\Danadesa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Danadesa\DanadesaModel;
use Illuminate\Support\Facades\Storage;
use Auth;
USE Alert;
use Symfony\Component\HttpFoundation\Response;


class DanadesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laporandesa = DanadesaModel::All();

        return view('dana.danadesa',['laporandesa' => $laporandesa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
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
        $validatedData = $request->validate([
            'filelaporan' => 'required|mimes:pdf,xlx,csv|max:2048',
            'tentang' => 'required|max:150',
            'keterangan' => 'required|max:300'
        ]);

        $id = Auth::id();

        $pdf = new DanadesaModel();

        $extension = $request->file('filelaporan')->extension();
        $imgName = date('dmyHis').'.'.$extension;
        
        Storage::putFileAs('public/laporan',$request->file('filelaporan'),$imgName);

        $pdf->filelaporan = $imgName;
        $pdf->tentang = $request->input('tentang');
        $pdf->keterangan = $request->input('keterangan');
        $pdf->users_id = $id;
        $pdf->save();

        return back();
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
        $laporan = DanadesaModel::find($id);
        $laporan->delete();

        Alert::info('Berhasil', 'Laporan Berhasil Dihapus.');

        return back();
    }

    public function getDownload($filename)
{
    //PDF file is stored under project/public/download/info.pdf
    $file= public_path(). "\storage\laporan/".$filename;

    $headers = array(
              'Content-Type: application/pdf',
            );

    return response()->download($file, 'Laporan.pdf', $headers);
}
}
