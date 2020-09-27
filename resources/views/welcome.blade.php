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
        function Hitung(){
 
            var curText = document.formlaporan.laporantxtarea.value.length;
 
            var maxText = 20;
 
            var sisa = maxText - curText;
 
            var isi = document.getElementById('count');
            isi.innerHTML = sisa + ' Tersedia';
 
        }

        $(document).ready(function () {
        var canDownload = true;
        $(".buy").on("click", function () {
            if (canDownload === true) {
            $(this).addClass("loading").find("span, small").hide();
            setTimeout(function () {
                $(".loading").addClass("processing");
                canDownload = false;
                setTimeout(function () {
                $(".buy").removeClass("processing");
                setTimeout(function () {
                    $(".buy")
                    .removeClass("loading")
                    .addClass("success")
                    .find(".fa-check")
                    .fadeIn(100);
                    setTimeout(function () {
                    $(".download")
                        .addClass("active")
                        .children()
                        .fadeIn(100, function () {
                        $('meta[name="theme-color"]').attr("content", "#21d49a");
                        $(".buy").css("background-color", "#21d49a");
                        });
                    }, 1000);
                }, 400);
                }, 2800);
            }, 300);
            }
        });
        });

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
                    <h1 class="display-3">Video Header</h1>
                    <p class="lead mb-0">With HTML5 Video and Bootstrap 4</p>
                </div>
            </div>
        </div>
    </header>

    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <p>The HTML5 video element uses an mp4 video as a source. Change the source video to add in your own background! The header text is vertically centered using flex utilities that are build into Bootstrap 4.</p>
                    <p>The overlay color can be changed by changing the <code>background-color</code> of the <code>.overlay</code> class in the CSS.</p>
                    <p>Set the mobile fallback image in the CSS by changing the background image of the header element within the media query at the bottom of the CSS snippet.</p>
                    <p class="mb-0">
                        Created by <a href="https://startbootstrap.com">Start Bootstrap</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container banner-selection">
            <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-6 pt-4">
                <p>
                    <h3>APBDES</h3>
                </p>
                <p>Transparansi dana desa merupakan bentuk pengawasan penggunaan dan pengolalaan anggaran pendapatan dan belanja desa, serta sebagai sosialisasi dan wadah penerapan program "Padat Karya". Berikut kami sajikan grafik pendapatan dan belanja desa.</p>
            </div>
            <div class="col-md-4 pt-6">
                <div class="buy">
                <i class="fa fa-check" aria-hidden="true"></i>
                <span>Buy Now!</span>
                <small>US$39,99</small>
                <div class="download">
                    <i class="fas fa-shipping-fast" aria-hidden="true"></i>
                </div>
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
                        <h3>INFORMASI</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="my-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-sm">
                    <h3 class="my-5">BERITA</h3>
                    <div class="card shadow-sm mb-5 bg-white rounded" style="max-width: 600px;">
                        <div class="row no-gutters">
                            <div class="col-md-5" style="background: #868e96;">
                                <img src="https://cdn-2.tstatic.net/tribunmanadowiki/foto/bank/images/kota-manado-dari-it-center.jpg" class="card-img-top h-100" alt="...">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body welcome-primary-color">
                                    <h3 class="card-title white-color">Kampung Moronge</h3>
                                    <p class="card-text white-color">Alice is a freelance web designer and developer based in London. She is specialized in HTML5, CSS3, JavaScript, Bootstrap, etc.</p>
                                    <div class="btx btn-one">
                                        <span>BACA POSTINGAN</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
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

    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="form-group">
                    <div class="col-md-6">
                        <div class="card shadow p-3 mb-5 bg-white rounded" style="width: 30rem;">
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
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <div class="card shadow p-3 mb-5 bg-white rounded" style="width: 30rem;">
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
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <div class="card shadow p-3 mb-5 bg-white rounded" style="width: 30rem;">
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
                                <p>Layanan tentang pendidikan berisi tentang informasi pendidikan, yang menampilkan data dari tingkat pendidikan terendah hingga ke perguruan tinggi berdasarkan data desa.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <div class="card shadow p-3 mb-5 bg-white rounded" style="width: 30rem;">
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
                                <p>Layanan perizinan untuk mengakomodir berbagai jenis perizinan dengan aturan yang berbeda, alur proses yang fleksibel, agar prosesnya menjadi lebih mudah.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <div class="card shadow p-3 mb-5 bg-white rounded" style="width: 30rem;">
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
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <div class="card shadow p-3 mb-5 bg-white rounded" style="width: 30rem;">
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
                                <p>Layanan hukum membantu masyarakat untuk mendapatkan informasi tentang peraturan daerah hingga peraturan desa. Tersedia informasi tentang layanan hukum moronge.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <section>
        <div class="row banner-laporan-online">
            <div class="container">
                <div class="my-5">
                    <div class="col-sm">
                        <div class="form-group text-center">
                            <h3>LAPORAN ONLINE</h3>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <!-- kosong -->
                            </div>
                            <div class="col-md-6">
                                <form action="" name="formlaporan">
                                <div class="">
                                    <div class="form-group">
                                        <label for="">Nama Lengkap</label>
                                        <input type="text" name="" id="" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">NIK</label>
                                        <input type="text" name="" id="" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Keterangan Laporan</label>
                                        <textarea cols="30" rows="5" class="form-control" name="laporantxtarea" onKeyUp="Hitung()"></textarea>
                                        <small><p align='right' id='count'>20 Huruf</p></small>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary"> <i class="fas fa-paper-plane"></i> Kirim Laporan</button>
                                    </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-3">
                                <!-- kosong -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="row banner-selection">

        </div>
    </section>

    <script>
    function mOver(obj) {
    obj.innerHTML = "Thank You"
    }

    function mOut(obj) {
    obj.innerHTML = "Mouse Over Me"
    }
    </script>
</body>
</html>