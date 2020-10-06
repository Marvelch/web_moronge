@extends('layouts.app_second')

@section('content_second')
<section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 shadow p-3 mb-5 bg-white rounded">
                   <div class="form-group">
                       <div class="row pt-6">
                    <div class="col-md-8">
                    <article>
                        <p class="pl-2"><b>Laporan Dana Desa </b> tersedia sesuai dengan file pdf yang terdapat pada website. Penduduk <b>Desa Moronge</b><br> dapat mengakses dan mengunduh file laporan pada halaman web yang telah disediakan :</p>
                    </article>
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th>Dana Desa</th>
                                <th>File Laporan</th>
                                <th>Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($laporan as $pdf)
                            <tr>
                                <td>{{$pdf->tentang}}</td>
                                <td><button class="btn btn-info" onclick="window.location.href='{{url('download/'.$pdf->filelaporan)}}'"><i class="fas fa-file-download"></i></button></td>
                                <td>{{$pdf->created_at->format('d/m/Y')}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                    <div class="col-md-4">
                        <img src="img/download.gif" alt="Download Images" class="download-img" srcset="">
                    </div>
                   </div>
                   </div>
                </div>
            </div>
        </div>
    </section>

    @endsection
