<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Desa Moronge</title>

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
               <img src="{{asset('img/logo.jpg')}}" alt="" srcset="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto uppercase">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('/')}}" role="button" data-toggle="dropdown" aria-haspopup="true">
                            Beranda
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('profile')}}" role="button">
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
                            <div class="input-group mb-4 border rounded-pill">
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
        <div class="container banner-ops">
            <div class="row">
                <h1>.
                    <!-- Kosong -->
                </h1>
            </div>
        </div>
    </section>

    @yield('content_second')


    <section>
        <div class="banner-footer">
            <div class="container">
                <div class="row my-5">
                    <div class="col-md-3">
                        <h7 class="uppercase">Tentang desa moronge</h7>
                        <p class="pt-4 cap text-justify"><small>Desa moronge adalah desa kecil bagian dari kabupaten kepulauan talaud. Moronge adalah sebuah kecamatan di Kabupaten Kepulauan Talaud, Sulawesi Utara, Indonesia.</small></p>
                    </div>
                    <div class="col-md-3">
                        <h7 class="uppercase">Berlangganan email</h7>
                        <form class="pt-4">
                            <div class="form-row align-items-center">
                                <div class="col-sm-10 my-1">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="inlineFormInputGroupUsername">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fas fa-paper-plane"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-3">
                        <h7 class="uppercase pl-2">Hubungi Kami</h7>
                        <div class="form-group pt-2 cap">
                            <small>
                                
                            Bertanya Langsung kepada kami dengan layanan telepon berikut :
                            <br>
                            <div class="pt-1">
                                Ibu Mira : +6282217797027
                            </div>
                            <div>
                                Pak Putrus : +62223321352
                            </div>
                            </small>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h7 class="uppercase pl-2">Media sosial desa</h7>
                        <div class="form-group pt-3">
                            <table>
                                <tr>
                                    <th><i class="fab fa-facebook-square fa-2x"></i></th>
                                    <th class="pl-3"><i class="fab fa-twitter-square fa-2x"></i></th>
                                    <th class="pl-3"><i class="fab fa-instagram-square fa-2x"></i></th>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>