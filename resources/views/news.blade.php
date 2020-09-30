<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito';
        }
    </style>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Google maps api js  -->
    <script src="https://maps.google.com/maps/api/js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500;600&display=swap" rel="stylesheet">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="{{ asset('fonts/css/all.css') }}" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/key.css') }}" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script language='javascript'>
        (function() {
            var removeSuccess;

            removeSuccess = function() {
                return $('.button').removeClass('success');
            };

            $(document).ready(function() {
                return $('.button').click(function() {
                    $(this).addClass('success');
                    return setTimeout(removeSuccess, 100000);
                });
            });

        }).call(this);


        //# sourceURL=coffeescript
    </script>

</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light fixed-top bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true">
                            Beranda
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#" role="button">
                            Profil
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#" role="button">
                            Informasi
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#" role="button">
                            Potensi
                        </a>
                    </li>
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true">
                            Layanan
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Laporan</a>
                            <a class="dropdown-item" href="#">Pembuatan Surat</a>
                        </div>
                    </li>
                </ul>
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <li>
                        <div class="form-group">
                            <div class="input-group mb-4 border rounded-pill p-1">
                                <button id="button-addon3" type="button" class="btn btn-link text-success" disabled></button>
                                <input type="search" placeholder="Search" aria-describedby="button-addon3" class="form-control bg-none border-0">
                                <div class="input-group-append border-0">
                                    <button id="button-addon3" type="button" class="btn btn-link text-success"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <section>
        <div class="container banner-selection">
            <div class="row">
                <!-- Kosong -->
            </div>
        </div>
    </section>
    <section>
        <div class="container banner-selection">
            <div class="row">
                <h1>.
                    <!-- Kosong -->
                </h1>
            </div>
        </div>
    </section>
    <section class="my-5">
        <div class="container">
            <div class="row">
                @foreach($news as $berita)
                <div class="col-md-9">
                    <article>
                        <h3 class="uppercase">{{$berita->title}}</h3>
                        <img src="{{asset('uploads/'.$berita->img)}}" class="d-block img-news-resposive" alt="Desa Moronge">
                        <p>
                            {!! $berita->content !!}
                        </p>
                        
                        <p>Penulis : 
                            <b>
                                @foreach($penulis as $pnl)
                                    {{$pnl->name}}
                                @endforeach
                            </b>
                        </p>
                    </article>
                </div>
                @endforeach
                <div class="col-md-3 pt-3">
                    <h5 class="uppercase">Kategori</h5>
                    <ul class="list-group list-group-flush primary-font-color">
                        @foreach($category as $kategori)
                        <li class="list-group-item"><i class="fas fa-angle-right "></i> {{$kategori->category}}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-3">
                    <div class="outlineSocialShare">
                    <i class="fab fa-linkedin"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-facebook"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>