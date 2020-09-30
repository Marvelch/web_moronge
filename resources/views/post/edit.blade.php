@extends('layouts.app_primary')

@section('content')
<div class="container">
    <div class="row">
         <div class="col-md-12">

            <div class="card shadow p-3 mb-5 bg-white rounded">
                <div class="card-header primary-color primary-font"><i class="fas fa-file-import"></i> Ubah Postingan</i></div>
                @foreach($posts as $post)
                <form action="{{route('postingan.update',$post->id)}}" method="POST" enctype="multipart/form-data" autocomplete="off">
                @csrf
                @method('PUT')
                <div class="row d-flex justify-content-center">    
                    <div class="col-md-8">
                        <div class="form-group pt-2">
                            <label for="">Judul Postingan</label>
                            <input type="text" name="title" id="title" class="form-control" value="{{$post->title}}">
                            <small>
                                @error('title')
                                    {{ $message }}
                                @enderror
                            </small>
                        </div>
                        <div class="form-group pt-2">
                            <label for="">Kategori</label>
                            <select class="custom-select" name="category">
                                <option value="">&check; {{$post->category}}</option>
                                @foreach($category as $kategori)
                                <option value="{{$kategori->id}}">{{$kategori->category}}</option>
                                @endforeach
                            </select>
                            <small>
                                @error('category')
                                    {{ $message }}
                                @enderror
                            </small>
                        </div>
                        <div class="row">
                            <div class="col-md-6 pt-2">
                                <div class="form-group">
                                    <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="{{asset('uploads/'.$post->img)}}" alt="Card image cap" id="output_image"/>
                                    <div class="card-body">
                                        <p class="card-text"><small>Foto Sampul Postingan</small></p>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 pt-2">
                                <div class="form-group">
                                    <ul>
                                        <li>Tersedia untuk upload file <b>JPG</b> dan <b>PNG</b>.</li>
                                        <li>Ukuran File hingga <b>2048</b>.</li>
                                        <li>Tidak tersedia tombol Drag & Drop.</li>
                                        <li>Copy paste pada kolom konten tidak tersedia.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="form-group pt-2">
                            <label for="">Foto Sampul</label>
                           <div class="custom-file">
                                <input type="file" class="custom-file-input" id="validatedCustomFile" name="img" accept="image/*" onchange="preview_image(event)" value="{{$post->img}}">
                                <label class="custom-file-label" for="validatedCustomFile">Pilih...</label>
                            </div>
                            <small>
                                @error('img')
                                    {{ $message }}
                                @enderror
                            </small>
                        </div>
                        <div class="form-group pt-2">
                            <label for="">Buat Tulisan</label>
                            <textarea name="content">
                                {{$post->content}}
                            </textarea>
                            <small>
                                @error('content')
                                    {{ $message }}
                                @enderror
                            </small>
                        </div>
                        <div class="form-group pt-3">
                            <button class="btn btn-primary pr-3">Batal</button>
                            <button type="submit" onmouseover="mOver(this)" onmouseout="mOut(this)" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Posting</button>
                        </div>
                    </div>
                    </form>
                    @endforeach
                </div>
            </div> 
    
        </div>
    </div>

 <script>
        tinymce.init({
        selector: "textarea",
        plugins: [
            "advlist autolink lists link image charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table contextmenu paste"
        ],
        paste_preprocess: function (plugin, args) {
            console.log("Attempted to paste: ", args.content);
            // replace copied text with empty string
            args.content = '';
        },
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
    });

    function mOver(obj) {
    obj.innerHTML = '<i class="fas fa-paper-plane"></i> Posting'
    }

    function mOut(obj) {
    obj.innerHTML = '<i class="fas fa-thumbtack"></i> Posting'
    }

    function preview_image(event) 
    {
    var reader = new FileReader();
    reader.onload = function()
    {
    var output = document.getElementById('output_image');
    output.src = reader.result;
    }
    reader.readAsDataURL(event.target.files[0]);
    }
    </script>

@endsection
