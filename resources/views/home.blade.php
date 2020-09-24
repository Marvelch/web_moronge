@extends('layouts.app_primary')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header primary-color white-bold">{{ __('Laporan Masyarakat') }}</div>

                <div class="card-body">
                   
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
