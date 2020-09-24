@extends('layouts.app_primary')

@section('content')
<div class="container">
    <div class="row">
         <div class="col-md-12">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="card shadow p-3 mb-5 bg-white rounded">
                <div class="card-header primary-color primary-font"><i class="fas fa-file-signature"></i> Postingan Desa</i></div>
                
                <form action="{{url('posting')}}" method="post" enctype="multipart/form-data" autocomplete="off">
                @csrf
                <div class="row d-flex justify-content-center">
                    <div class="col-md-8">
                        <div class="form-group pt-2">
                            <label for="">Judul Postingan</label>
                            <input type="text" name="title" id="title" class="form-control" placeholder="Pembangunan Desa Moronge">
                            <small>
                                @error('title')
                                    {{ $message }}
                                @enderror
                            </small>
                        </div>
                        <div class="form-group pt-2">
                            <label for="">Kategori</label>
                            <select class="custom-select" name="category">
                                <option value="">Pilih Kategori</option>
                                <option value="1">Pendidikan</option>
                                <option value="2">Pengembangan</option>
                                <option value="3">Pelatihan</option>
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
                                    <img class="card-img-top" src="https://www.shapespark.com/v103/img/upload-share.png" alt="Card image cap" id="output_image"/>
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
                                <input type="file" class="custom-file-input" id="validatedCustomFile" name="img" accept="image/*" onchange="preview_image(event)">
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
                            <textarea name="content" id="content">
                                
                            </textarea>
                            <small>
                                @error('content')
                                    {{ $message }}
                                @enderror
                            </small>
                        </div>
                        <div class="form-group pt-3">
                            <button type="submit" onmouseover="mOver(this)" onmouseout="mOut(this)" class="btn btn-primary">Posting <i class="fas fa-paper-plane"></i></button>
                        </div>
                    </div>
                </div> 
            <!-- End row content posting blog -->
            </form>
            
            </div> 
        <!-- End card -->
        
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
    obj.innerHTML = 'Posting <i class="fas fa-paper-plane"></i>'
    }

    function mOut(obj) {
    obj.innerHTML = 'Posting <i class="fas fa-thumbtack"></i>';
    }

    // window.onload = () => {
    // const myInput = document.getElementById('content');
    // myInput.onpaste = e => e.preventDefault();
    // }

  </script>

@endsection
