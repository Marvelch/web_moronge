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
        function Hitung() {

            var curText = document.formlaporan.laporantxtarea.value.length;

            var maxText = 20;

            var sisa = maxText - curText;

            var isi = document.getElementById('count');
            isi.innerHTML = sisa + ' Tersedia';

        }

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
                            Keuangan
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Data Keuangan</a>
                            <a class="dropdown-item" href="#">Pengelolaan</a>
                        </div>
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
    <header>
        <div class="overlay"></div>
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4" type="video/mp4">
        </video>
        <div class="container h-100">
            <div class="d-flex h-100 text-center align-items-center">
                <div class="w-100 text-white">
                    <h1 class="display-3">Moronge Satu</h1>
                    <p class="lead mb-0">Kecamatan Moronge, Kabupaten Kepulauan Talaud, Sulawesi Utara</p>
                </div>
            </div>
        </div>
    </header>
<!-- 
    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-5 mx-auto">
                    <p>The HTML5 video element uses an mp4 video as a source. Change the source video to add in your own background! The header text is vertically centered using flex utilities that are build into Bootstrap 4.</p>
                    <p>The overlay color can be changed by changing the <code>background-color</code> of the <code>.overlay</code> class in the CSS.</p>
                    <p>Set the mobile fallback image in the CSS by changing the background image of the header element within the media query at the bottom of the CSS snippet.</p>
                    <p class="mb-0">
                        Created by <a href="https://startbootstrap.com">Start Bootstrap</a>
                    </p>
                </div>
            </div>
        </div>
    </section> -->

    <section>
        <div class="container banner-selection">
            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-6 pt-4">
                    <p>
                        <h3>Dana Desa</h3>
                    </p>
                    <p>Transparansi dana desa merupakan bentuk pengawasan penggunaan dan pengolalaan anggaran pendapatan dan belanja desa, serta sebagai sosialisasi dan wadah penerapan program "Padat Karya". Berikut kami sajikan grafik pendapatan dan belanja desa.</p>
                </div>
                <div class="col-md-4 pt-4">
                    <a class="button" role="button">
                        <span>Selengkapnya</span>
                        <div class="icon">
                            <i class="fas fa-angle-right fa-lg"></i>
                            <i class="fas fa-angle-down fa-lg"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container banner-informasi">
            <div class="row text-center">
                <div class="col-md pt-3">
                    <div class="col-sm">
                        <h3>INFORMASI</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <h3 class="my-5 text-center">BERITA</h3>
                    @foreach($postingan as $posting)
                    <div class="card shadow-sm mb-5 bg-white rounded" style="max-width: 600px;">
                        <div class="row no-gutters">
                            <div class="col-md-5" style="background: #868e96;">
                                <img src="{{asset('uploads/'.$posting->img)}}" class="card-img-top h-100" alt="...">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body welcome-primary-color">
                                    <h5 class="card-title white-color uppercase">{{$posting->title}}</h5>
                                    <p class="card-text white-color">{!! \Illuminate\Support\Str::limit($posting->content, 80) !!}</p>
                                    <div class="btx btn-one">
                                        <span>Selengkapnya</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="col-sm text-center">
                    <h3 class="my-5">INFORMASI</h3>
                    <form>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <h5 class="uppercase pl-5">Lomba desa moronge satu</h5>
                                    <div class="form-group">
                                        <span class="pl-7"><small><i class="fas fa-calendar-check"></i> 27/03/2020</small></span>
                                        <span class="pl-1"><small><i class="far fa-clock"></i> 19.00 - 21.00</small></span>
                                        <span class="pl-1"><small><i class="fas fa-map-marker-alt"></i> Balai Desa Moronge</small></span>
                                    </div>
                                    <div class="form-group">
                                        <ul id="buttons">
                                            <li class="fb">
                                                <a href="#facebook" title="Facebook">
                                                    <i class="fas fa-calendar-check"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container banner-hr">
        </div>
    </section>

    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <h3 class="text-center">POTENSI & PRODUK</h3>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container banner-informasi">
            <div class="row text-center">
                <div class="col-md pt-3">
                    <div class="col-sm">
                        <h3>SISTEM INFORMASI PELAYANAN PUBLIK</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- clear  -->
    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card shadow p-3 mb-5 bg-white rounded">
                        <div class="form-group">
                            <ul id="buttons">
                                <li class="fb">
                                    <a href="#facebook" title="Facebook">
                                        <i class="fas fa-street-view"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="form-group card-layanan">
                            <p>Layanan kependudukan membantu untuk memudahkan masyarakat mendapatkan informasi dan mengurus secara mandiri keperluan administratifnya.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card shadow p-3 mb-5 bg-white rounded">
                        <div class="form-group">
                            <ul id="buttons">
                                <li class="fb">
                                    <a href="#facebook" title="Facebook">
                                        <i class="fas fa-map-marked-alt"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="form-group card-layanan">
                            <p>Pelayanan pendaftaran tanah, pelayanan pengukuran bidang tanah, pemeliharaan data pertanahan dan informasi mengenai layanan pertanahan lainnya.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card shadow p-3 mb-5 bg-white rounded">
                        <div class="form-group">
                            <ul id="buttons">
                                <li class="fb">
                                    <a href="#facebook" title="Facebook">
                                        <i class="fas fa-graduation-cap"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="form-group card-layanan">
                            <p>Layanan tentang pendidikan berisi tentang informasi pendidikan, yang menampilkan data dari tingkat pendidikan terendah hingga ke perguruan tinggi.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card shadow p-3 mb-5 bg-white rounded">
                        <div class="form-group">
                            <ul id="buttons">
                                <li class="fb">
                                    <a href="#facebook" title="Facebook">
                                        <i class="fas fa-id-badge"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="form-group card-layanan">
                            <p>Layanan perizinan mengakomodir berbagai jenis perizinan dengan aturan yang berbeda, alur proses yang fleksibel, agar prosesnya menjadi lebih mudah.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card shadow p-3 mb-5 bg-white rounded">
                        <div class="form-group">
                            <ul id="buttons">
                                <li class="fb">
                                    <a href="#facebook" title="Facebook">
                                        <i class="fas fa-heartbeat"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="form-group card-layanan">
                            <p>Layanan kesehatan yaitu layanan informasi yang membagikan tentang lokasi, sarana dan prasarana kesehatan dari tingkat desa hingga kabupaten.</p>
                        </div>
                    </div>
                </div>
            <div class="col-md-6">
                <div class="card shadow p-3 mb-5 bg-white rounded">
                    <div class="form-group">
                        <ul id="buttons">
                            <li class="fb">
                                <a href="#facebook" title="Facebook">
                                    <i class="fas fa-gavel"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="form-group card-layanan">
                        <p>Layanan hukum membantu masyarakat untuk mendapatkan informasi tentang peraturan daerah hingga peraturan desa.</p>
                    </div>
                </div>
            </div>
            
            </div>
        </div>
    </section>
    
    <form action="" method="post">
    <section>
        <div class="banner-laporan-online">
            <div class="container">
                <div class="my-5">
                    <div class="col-sm">
                        <div class="form-group text-center">
                            <h3>LAPORAN ONLINE</h3>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                
                            </div>
                            <div class="col-md-6">
                                <form action="" name="formlaporan">
                                    <div class="">
                                        <div class="form-group">
                                            <label for="">Nama Lengkap</label>
                                            <input type="text" name="name" id="name" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="">NIK</label>
                                            <input type="text" name="nik" id="nik" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Telpon</label>
                                            <input type="text" name="phone" id="phone" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Keterangan Laporan</label>
                                            <textarea cols="30" rows="5" class="form-control" name="laporantxtarea" onKeyUp="Hitung()"></textarea>
                                            <small>
                                                <p align='right' id='count'>20 Huruf</p>
                                            </small>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary"> <i class="fas fa-paper-plane"></i> Kirim Laporan</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-3">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </form>
    <section>
        <div class="banner-selection">
            <div class="container">
                <div class="row">
                    <div class="my-5">
                        <div class="row">
                            <div class="col-md-8">
                                <h3>SISTEM INFORMASI GEOSPASIAL</h3>
                                <p>Sistem Informasi Geospasial (SIG Desa) memuat segala informasi berbasis lokasi. SIG Desa dapat digunakan sebagai alat bantu dalam perumusan kebijakan.</p>
                            </div>
                            <div class="col-md-4">
                                <a class="button" role="button">
                                    <span>Selengkapnya</span>
                                    <div class="icon">
                                        <i class="fas fa-angle-right fa-lg"></i>
                                        <i class="fas fa-angle-down fa-lg"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 

    <section>
        <div id="map-container-3" class="z-depth-1" style="height: 300px"></div>
    </section> 

    <section>
        <div class="banner-footer">
            <div class="container">
                <div class="row my-5">
                    <div class="col-md-4">
                        <h7 class="uppercase">Tentang desa moronge</h7>
                        <p class="pt-4">Desa moronge bagian dari kabupaten kepulauan talaud. Moronge adalah sebuah kecamatan di Kabupaten Kepulauan Talaud, Sulawesi Utara, Indonesia.</p>
                    </div>
                    <div class="col-md-4">
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
                    <div class="col-md-4">
                        <h7 class="uppercase">Media sosial desa</h7>
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

    <script>
        function mOver(obj) {
            obj.innerHTML = "Thank You"
        }

        function mOut(obj) {
            obj.innerHTML = "Mouse Over Me"
        }

        // Satellite map
        function satellite_map() {
            var var_location = new google.maps.LatLng(48.856847, 2.296832);

            var var_mapoptions = {
                center: var_location,
                zoom: 16,
                mapTypeId: "satellite"
            };

            var var_map = new google.maps.Map(
                document.getElementById("map-container-3"),
                var_mapoptions
            );

            var var_marker = new google.maps.Marker({
                position: var_location,
                map: var_map,
                title: "Paris, France"
            });
        }

        // Regular map
        function regular_map() {
            var var_location = new google.maps.LatLng(40.725118, -73.997699);

            var var_mapoptions = {
                center: var_location,
                zoom: 14
            };

            var var_map = new google.maps.Map(
                document.getElementById("map-container"),
                var_mapoptions
            );

            var var_marker = new google.maps.Marker({
                position: var_location,
                map: var_map,
                title: "New York"
            });
        }

        // Custom map
        function custom_map() {
            var var_location = new google.maps.LatLng(40.725118, -73.997699);

            var var_mapoptions = {
                center: var_location,
                zoom: 14,
                styles: [{
                        featureType: "administrative",
                        elementType: "all",
                        stylers: [{
                            visibility: "off"
                        }]
                    },
                    {
                        featureType: "poi",
                        elementType: "all",
                        stylers: [{
                            visibility: "simplified"
                        }]
                    },
                    {
                        featureType: "road",
                        elementType: "all",
                        stylers: [{
                            visibility: "simplified"
                        }]
                    },
                    {
                        featureType: "water",
                        elementType: "all",
                        stylers: [{
                            visibility: "simplified"
                        }]
                    },
                    {
                        featureType: "transit",
                        elementType: "all",
                        stylers: [{
                            visibility: "simplified"
                        }]
                    },
                    {
                        featureType: "landscape",
                        elementType: "all",
                        stylers: [{
                            visibility: "simplified"
                        }]
                    },
                    {
                        featureType: "road.highway",
                        elementType: "all",
                        stylers: [{
                            visibility: "off"
                        }]
                    },
                    {
                        featureType: "road.local",
                        elementType: "all",
                        stylers: [{
                            visibility: "on"
                        }]
                    },
                    {
                        featureType: "road.highway",
                        elementType: "geometry",
                        stylers: [{
                            visibility: "on"
                        }]
                    },
                    {
                        featureType: "road.arterial",
                        elementType: "all",
                        stylers: [{
                            visibility: "off"
                        }]
                    },
                    {
                        featureType: "water",
                        elementType: "all",
                        stylers: [{
                                color: "#5f94ff"
                            },
                            {
                                lightness: 26
                            },
                            {
                                gamma: 5.86
                            }
                        ]
                    },
                    {
                        featureType: "road.highway",
                        elementType: "all",
                        stylers: [{
                                weight: 0.6
                            },
                            {
                                saturation: -85
                            },
                            {
                                lightness: 61
                            }
                        ]
                    },
                    {
                        featureType: "landscape",
                        elementType: "all",
                        stylers: [{
                                hue: "#0066ff"
                            },
                            {
                                saturation: 74
                            },
                            {
                                lightness: 100
                            }
                        ]
                    }
                ]
            };

            var var_map = new google.maps.Map(
                document.getElementById("map-container-2"),
                var_mapoptions
            );

            var var_marker = new google.maps.Marker({
                position: var_location,
                map: var_map,
                title: "New York"
            });
        }

        // Initialize maps
        google.maps.event.addDomListener(window, "load", satellite_map);
        google.maps.event.addDomListener(window, "load", regular_map);
        google.maps.event.addDomListener(window, "load", custom_map);
    </script>
</body>

</html>