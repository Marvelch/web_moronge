@extends('layouts.app_primary')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-12">
          <div class="card">
              <div class="card-header primary-color white-bold">{{ __('Laporan Masyarakat') }}</div>

              <div class="col-md-5">
                <div class="card-body">
                  <div class="form-group">
                    <table class="table table-borderless">
                      <tbody>
                        <tr>
                          <td><i class="fas fa-angle-right"></i> Diproses</td>
                          <td>7 Laporan</td>
                        </tr>
                        <tr>
                          <td><i class="fas fa-angle-right"></i> Belum Diproses</td>
                          <td>2 Laporan</td>
                        </tr>
                        
                      </tbody>
                    </table>
                  </div>
              </div>
              </div>
          </div>
      </div>
      <div class="col-md-12">
        <div class="card">
            <div class="card-header primary-color white-bold">Jadwal Desa</div>
            <div class="card-body">
              <div class="col-md-12">
                <div class="col-md-6">
                  <h3>Jadwal Terdekat</h3>
                  <small>Menampilkan jadwal <b>Desa Moronge</b></small>
                </div>
                <div class="d-flex justify-content-end">
                  <input type="button" value="Buat Jadwal">
                   <input type="button" value="Daftar Jadwal" class="ml-2">
                </div>
              </div>
              <div class="col-md-12">
                <table class="table table-borderless">
                  <thead>
                    <tr>
                      <th>Nama Acara</th>
                      <th>Tanggal</th>
                      <th>Lokasi</th>
                      <th>Keterangan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Adat Desa Moronge</td>
                      <td>28/03/2021</td>
                      <td>Desa Moronge</td>
                      <td>Pelaksanaan Acara adat untuk kampung moronge.</td>
                    </tr>
                  </tbody>
                </table>
              </div>  
            </div>
        </div>
      </div>
    </div>
</div>
 <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
      toolbar_mode: 'floating',
    });
  </script>

@endsection
