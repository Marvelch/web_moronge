<?php

namespace App\Http\Controllers\Jadwal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Jadwal\JadwalController;
use App\Models\Jadwal\JadwalModel;
Use Alert;
use Auth;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jadwals = JadwalModel::all();

        return view('jadwal.jadwal',['jadwals' => $jadwals]);
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
        $id = Auth::id();
        
        $validatedData = $request->validate([
            'acara' => 'required|max:255',
            'waktu' => 'required',
            'lokasi' => 'required|max:255',
            'keterangan' => 'required|max:255'
         ],
            [
                'acara.required' => '* Kolom acara tidak boleh kosong !',
                'waktu.required' => '* Kolom waktu tidak boleh kosong !',
                'lokasi.required' => '* Kolom lokasi tidak boleh kosong !',
                'keterangan.required' => '* Kolom keterangan tidak boleh kosong !'
            ]);

            $jadwal = new JadwalModel();

            $jadwal->acara = $request->input('acara');
            $jadwal->waktu = $request->input('waktu');
            $jadwal->lokasi = $request->input('lokasi');
            $jadwal->keterangan = $request->input('keterangan');
            $jadwal->users_id = $id;
            
            $jadwal->save();
            Alert::success('Berhasil', 'Pembuatan Agenda Berhasil.');

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
        $jadwal = JadwalModel::find($id);
        $jadwal->delete();

        Alert::info('Berhasil', 'Agenda Berhasil Dihapus.');

        return back();
    }
}
