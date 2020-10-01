@extends('layouts.app_primary')

@section('content')
<div class="container">
    <div class="row">
         <div class="col-md-12">
             <div class="card-body">
                <div class="card shadow p-3 mb-5 bg-white rounded">
                    <div class="card-header primary-color primary-font"><i class="fas fa-file-signature"></i> Daftar Laporan Masyarakat</i></div>
                    <div class="form-group">
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th>Telepon</th>
                                    <th>Nama Lengkap</th>
                                    <th>NIK</th>
                                    <th>Keterangan</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($laporan as $lapor)
                                <tr>
                                    <td>{{$lapor->phone}}</td>
                                    <td>{{$lapor->nama}}</td>
                                    <td>{{$lapor->nik}}</td>
                                    <td>{{$lapor->report}}</td>
                                    <td>
                                        <select class="form-control" name="status_id">
                                            <option value="">Pilih Status</option>
                                            <option value="proses">Proses</option>
                                            <option value="selesai">Selesai</option>
                                            <option value="bermasalah">Bermasalah</option>
                                        </select>
                                    </td>
                                    <td>
                                        <form action="{{url('laporan'.$lapor->id)}}" method="post">
                                            @method('PUT')
                                            @crsf
                                            <button class="btn btn-warning" title="Status"><i class="fas fa-bookmark"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>    
                </div>
                </div>
             </div>
         </div>
    </div>
</div>

@endsection
