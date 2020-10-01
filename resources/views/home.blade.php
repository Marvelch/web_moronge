@extends('layouts.app_primary')

@section('content')
<style>

</style>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="alert alert-primary" role="alert">
        Perhatikan laporan masyarakat pada bagian <b><u>Halaman Laporan Masyarakat</u></b>
      </div>
      <div class="card">
        <div class="card-body">
          <p>Selamat </p>
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