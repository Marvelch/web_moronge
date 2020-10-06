@extends('layouts.app_primary')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card-body">
                <div class="card shadow p-3 mb-5 bg-white rounded">
                    <div class="card-header primary-color primary-font"><i class="fas fa-file-signature"></i> Daftar Laporan Masyarakat</i></div>
                    <!-- Search Bar -->
                    <div class="form-group pt-4">
                        <form action="">
                            <div class="col-md-12">
                                <table>
                                    <tr>
                                        <td><input class="form-control" name="q" type="search" placeholder="NIK / Telpon" aria-label="Search"></td>
                                        <td><button class="btn btn-warning my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button></td>
                                    </tr>
                                </table>
                            </div>
                        </form>
                    </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <table class="table">
                                    <thead>
                                        <tr>
                                        <th scope="col">NIK</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Telpon</th>
                                        <th scope="col">Masalah</th>
                                        <th scope="col">Bantuan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $user)
                                        <tr>
                                            <td scope="col">{{$user->nik}}</td>
                                            <td scope="col">{{$user->nama}}</td>
                                            <td scope="col">{{$user->phone}}</td>
                                            <td scope="col">{{$user->report}}</td>
                                            <td scope="col">
                                                <form action="{{route('laporan.update',$user->id)}}" method="post" enctype="multipart/form-data" autocomplete="off">
                                                @csrf
                                                @method('PUT')
                                                <select class="form-control" name="status_id">
                                                        <option value="">&#10004; {{$user->status}}</option>
                                                        <option value="Proses">Proses</option>
                                                        <option value="Selesai">Selesai</option>
                                                        <option value="Bermasalah">Bermasalah</option>
                                                    </select>
                                                <div class="pt-2">
                                                    <button type="submit" class="btn btn-warning" title="Status"><i class="fas fa-bookmark"></i> Simpan</button>
                                                </div>
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
            {{ $data->links() }}
        </div>
    </div>
</div>

<!-- <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card-body">
                <div class="card shadow p-3 mb-5 bg-white rounded">
                    <div class="card-header primary-color primary-font"><i class="fas fa-file-signature"></i> Daftar Laporan Masyarakat</i></div>
                    <div class="form-group">
                            <table class="table table-border">
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
                                                <form action="{{route('laporan.update',$lapor->id)}}" method="post" enctype="multipart/form-data" autocomplete="off">
                                                @csrf
                                                @method('PUT')
                                                <select class="form-control" name="status_id">
                                                        <option value="">&#10004; {{$lapor->status}}</option>
                                                        <option value="Proses">Proses</option>
                                                        <option value="Selesai">Selesai</option>
                                                        <option value="Bermasalah">Bermasalah</option>
                                                    </select>
                                                <div class="pt-2">
                                                    <button type="submit" class="btn btn-warning" title="Status"><i class="fas fa-bookmark"></i> Simpan</button>
                                                </div>
                                                </form>
                                            </td>
                                        </tr>
                                    
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" id="search" name="search"></input>
                    </div>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>NIK</th>
                                <th>Telpon</th>
                                <th>Keterangan</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div> -->

@endsection