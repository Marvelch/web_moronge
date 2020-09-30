@extends('layouts.app_primary')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow p-3 mb-5 bg-white rounded">
                <div class="card-header primary-color primary-font"><i class="fas fa-file-signature"></i> Agenda Desa</i></div>

                <div class="form-group pt-3 pl-3">
                    <div class="text-right">
                        <div class="form-group">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><i class="fas fa-plus-circle"></i> Buat Agenda</button>
                            <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" title="Layanan Bantuan"><i class="fas fa-info-circle"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <table class="table table-border">
                        <thead>
                            <tr>
                                <th>Acara</th>
                                <th>Tanggal</th>
                                <th>Jam</th>
                                <th>Lokasi</th>
                                <th>Keterangan</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($jadwals as $jadwal)
                            <tr>
                                <td>{{$jadwal->acara}}</td>
                                <td>{{ Carbon\Carbon::parse($jadwal->waktu)->format('d-m-Y') }}</td>
                                <td>{{ Carbon\Carbon::parse($jadwal->waktu)->format('H:i') }}</td>
                                <td>{{$jadwal->lokasi}}</td>
                                <td>{{$jadwal->keterangan}}</td>
                                <td>
                                    <form action="{{URL('jadwal/'.$jadwal->id)}}" method="POST">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                        <button type="submit" class="btn btn-warning"><i class="fas fa-trash-alt"></i></button>
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

<!-- Pop up form input -->
<form action="{{url('jadwal')}}" method="post">
    @csrf
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agenda Desa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Acara:</label>
                            <input type="text" name="acara" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Waktu:</label>
                            <input type="datetime-local" name="waktu" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Lokasi:</label>
                            <input type="text" class="form-control" name="lokasi" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Keterangan:</label>
                            <textarea class="form-control" name="keterangan" id="message-text"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan Agenda</button>
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