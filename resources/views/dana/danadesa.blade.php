@extends('layouts.app_primary')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow p-3 mb-5 bg-white rounded">
                <div class="card-header primary-color primary-font"><i class="fas fa-file-signature"></i> Pengelolaan Dana Desa</i></div>

                <div class="form-group pt-3 pl-3">
                    <div class="text-right">
                        <div class="form-group">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><i class="fas fa-plus-circle"></i> Upload Laporan</button>
                            <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" title="Layanan Bantuan"><i class="fas fa-info-circle"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                   <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th>Dana Desa</th>
                                <th>Keterangan</th>
                                <th>File Laporan</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($laporandesa as $laporan)
                            <tr>
                                <td>{{$laporan->tentang}}</td>
                                <td style="width:60%">{{$laporan->keterangan}}</td>
                                <td><button class="btn btn-info" onclick="window.location.href='{{url('download/'.$laporan->filelaporan)}}'"><i class="fas fa-file-download"></i></button></td>
                                <td>
                                    <form action="{{url('desa/'.$laporan->id)}}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-warning"><i class="fas fa-trash-alt"></i></button></td>
                                    </form>
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

<!-- Pop up form input -->
<form action="{{url('desa')}}" method="post" enctype="multipart/form-data" autocomplete="off">
    @csrf
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">PDF</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Dana Desa</label>
                        <input type="text" name="tentang" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="filelaporan" id="validatedCustomFile">
                            <label class="custom-file-label" for="validatedCustomFile">Pilih File...</label>
                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Katerangan</label>
                        <textarea name="keterangan" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Upload Laporan</button>
                </div>
            </div>
        </div>
    </div>
</form>

 <!-- Pop up help -->
 <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Bantuan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <ul>
            <li>Menginput waktu Bulan / Hari / Tahun Jam - Menit -PM.</li>
            <li>Perhatikan penggunaan AM / PM</li>
        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>

<script>
    $('#exampleModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text('New message to ' + recipient)
        modal.find('.modal-body input').val(recipient)
    })
</script>
@endsection