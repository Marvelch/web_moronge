@extends('layouts.app_primary')

@section('content')
<div class="container">
    <div class="row">
         <div class="col-md-12">

            <div class="card shadow p-3 mb-5 bg-white rounded">
                <div class="card-header primary-color primary-font"><i class="fas fa-file-signature"></i> Kumpulan Postingan</i></div>
                
                <div class="row">
                @foreach($posts as $post)
                  <div class="col-md-6">
                    <div class="form-group">
                    <div class="card mb-3" style="max-width: 540px;">
                      <div class="row no-gutters">
                        <div class="col-md-4">
                          <img src="{{ asset ('uploads/'. $post->img) }}" class="card-img pl-1 pt-1" alt="...">
                        </div>
                        <div class="col-md-6">
                          <div class="card-body">
                            <h5 class="card-title">{{$post->title}}</h5>
                            <p class="card-text pl-1 pt-2">
                            <small class="text-muted">{{$post->created_at}}</small>
                            <br><small class="text-muted">Penulis : Marvel Ch</small></p>
                            <p class="card-text">
                              <?php
                               $id_hash = Crypt::encryptString($post->id);
                              ?>
                              <a href="{{url('postingan/'.$id_hash.'/edit')}}" class="btn btn-primary" title="Mengubah Postingan {{$post->title}}"><i class="fas fa-marker"></i></a>
                              <button class="btn btn-warning" title="Hapus {{$post->title}}"><i class="fas fa-trash-alt"></i></button>
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>
                  @endforeach
                </div>   
              </div> 
              {{ $posts->links() }}   
            </div> 
        <!-- End card -->
        </div>
    </div>
</div>

 <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
      toolbar_mode: 'floating',
    });

    function mOver(obj) {
    obj.innerHTML = 'Posting <i class="fas fa-paper-plane"></i>'
    }

    function mOut(obj) {
    obj.innerHTML = 'Posting <i class="fas fa-thumbtack"></i>';
    }

  </script>

@endsection
