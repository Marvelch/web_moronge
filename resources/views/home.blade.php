@extends('layouts.app_primary')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header primary-color white-bold">{{ __('Laporan Masyarakat') }}</div>

        <div class="card-group">
          <div class="card">
            <div class="form-group">
              <small><i class="fas fa-comment-alt"></i> Total Laporan</small>
              <p>
                <h1>120</h1>
              </p>
            </div>
          </div>
          <div class="card">
            <div class="form-group">
              <small><i class="fas fa-bullhorn"></i> Laporan Selesai</small>
              <p>
                <h1>20</h1>
              </p>
            </div>
          </div>
          <div class="card">
            <div class="form-group">
              <small><i class="fas fa-exclamation-triangle"></i> Laporan Bermasalah</small>
              <p>
                <h1>2</h1>
              </p>
            </div>
          </div>
        </div>


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