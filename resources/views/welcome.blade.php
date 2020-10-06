@extends('layouts.app_second')

@section('content_second')

<header>
    <div class="overlay"></div>
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
        <source src="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4" type="video/mp4">
    </video>
    <div class="container h-100">
        <div class="d-flex h-100 text-center align-items-center">
            <div class="w-100 text-white">
                <h1 class="display-3">Desa Moronge</h1>
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
                <a class="button" role="button" onclick="window.location.href='{{url('cfg_dana')}}'">
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
                <h3 class="text-center">BERITA</h3>
                @foreach($postingan as $posting)
                <div class="card shadow p-3 mb-5 bg-white rounded mt-4">
                    <div class="row no-gutters">
                        <div class="col-md-6" style="background: #868e96;">
                            <img src="{{asset('uploads/'.$posting->img)}}" class="card-img-top img-resposive" alt="...">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h6 class="card-title uppercase"><b>{{$posting->title}}</b></h6>
                                <p class="card-text white-color">{!! \Illuminate\Support\Str::limit($posting->content, 160) !!}</p>
                                <button class="btn-key btn-key-border btn-key-round color-2 material-design" data-color="#00897b" onclick="window.location.href='{{url('cfg_show/'.$posting->id)}}'">Baca berita</button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="col-md-4">
                    <a class="button-primary welcome-primary-color" role="button" onclick="window.location.href='{{url('news')}}'">
                        <span><small>Lihat Semua Berita</small></span>
                        <div class="icon">
                            <i class="fas fa-angle-right fa-lg"></i>
                            <i class="fas fa-angle-down fa-lg"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm">
                <h3 class="text-center">INFORMASI</h3>
                <div class="row">
                    @foreach($agendas as $agenda)
                    <div class="col-md-1">
                        <!-- Kosong -->
                    </div>
                    <div class="col-md-11">
                        <div class="">
                            <div class="form-group">
                                <!-- <div class="circle">
                                        <span class="text"></span>
                                        <span class="icon">
                                            <i class="fas fa-history"></i>
                                        </span>
                                    </div> -->
                                <div class="form-group pt-2">
                                    <h5 class="uppercase primary-font-color"> {{$agenda->acara}}</h5>
                                    <span><small><i class="fas fa-calendar-check text-muted"></i> {{ Carbon\Carbon::parse($agenda->waktu)->format('d-m-Y') }}</small></span>
                                    <span class="pl-2 text-muted"><small><i class="far fa-clock"></i> {{ Carbon\Carbon::parse($agenda->waktu)->format('H:i') }}</small></span>
                                    <span class="pl-2 text-muted"><small><i class="fas fa-map-marker-alt"></i> {{$agenda->lokasi}}</small></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<hr>
<section class="my-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <h3 class="text-center">POTENSI & PRODUK</h3>
                </div>
                <div class="form-group pt-4 text-justify">
                    <p>Potensi desa adalah segenap sumber daya alam dan sumber daya manusia yang dimiliki desa sebagai modal dasar yang perlu dikelola dan dikembangkan untuk kelangsungan dan perkembangan desa. Desa Moronge memiliki banyak potensi yang belum dimanfaatkan secara optimal untuk mewujudkan kesejahteraan rakyat. Potensi tersebut meliputi antara lain: potensi sumber daya alam (SDA), potensi sumber daya manusia (SDM), potensi sumberdaya sosial budaya.</p>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="col-md-4">
                        <a class="button-primary welcome-primary-color" role="button" onclick="window.location.href='{{url('news')}}'">
                            <span><small>Potensi Desa</small></span>
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
                        <div class="circle">
                            <span class="text"></span>
                            <span class="icon">
                                <i class="fas fa-id-card-alt"></i>
                            </span>
                        </div>
                        <p>Layanan kependudukan membantu untuk memudahkan masyarakat mendapatkan informasi dan mengurus secara mandiri keperluan administratifnya.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card shadow p-3 mb-5 bg-white rounded">
                    <div class="form-group">
                        <div class="circle">
                            <span class="text"></span>
                            <span class="icon">
                                <i class="fas fa-map-marked-alt"></i>
                            </span>
                        </div>
                        <p>Pelayanan pendaftaran tanah, pelayanan pengukuran bidang tanah, pemeliharaan data pertanahan dan informasi mengenai layanan pertanahan lainnya.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card shadow p-3 mb-5 bg-white rounded">
                    <div class="form-group">
                        <div class="circle">
                            <span class="text"></span>
                            <span class="icon">
                                <i class="fas fa-graduation-cap"></i>
                            </span>
                        </div>
                        <p>Layanan tentang pendidikan berisi tentang informasi pendidikan, yang menampilkan data dari tingkat pendidikan terendah hingga ke perguruan tinggi.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card shadow p-3 mb-5 bg-white rounded">
                    <div class="form-group">
                        <div class="circle">
                            <span class="text"></span>
                            <span class="icon">
                                <i class="fas fa-key"></i>
                            </span>
                        </div>
                        <p>Layanan perizinan mengakomodir berbagai jenis perizinan dengan aturan yang berbeda, alur proses yang fleksibel, agar prosesnya menjadi lebih mudah.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card shadow p-3 mb-5 bg-white rounded">
                    <div class="form-group">
                        <div class="circle">
                            <span class="text"></span>
                            <span class="icon">
                                <i class="fas fa-heartbeat"></i>
                            </span>
                        </div>
                        <p>Layanan kesehatan yaitu layanan informasi yang membagikan tentang lokasi, sarana dan prasarana kesehatan dari tingkat desa hingga kabupaten.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card shadow p-3 mb-5 bg-white rounded">
                    <div class="form-group">
                        <div class="circle">
                            <span class="text"></span>
                            <span class="icon">
                                <i class="fas fa-gavel"></i>
                            </span>
                        </div>
                        <p>Layanan hukum membantu masyarakat untuk mendapatkan informasi tentang peraturan daerah hingga peraturan desa. Mempermudah masyarakat mengetahui peraturan desa.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<form action="{{url('cfg_laporan')}}" method="post" autocomplete="off">
    @csrf
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
                                <div class="form-group">
                                    <label for="">Nama Lengkap</label>
                                    <input type="text" name="name" id="name" class="form-control">
                                    <small>
                                        @error('name')
                                        {{ $message }}
                                        @enderror
                                    </small>
                                </div>
                                <div class="form-group">
                                    <label for="">NIK</label>
                                    <input type="text" name="nik" id="nik" class="form-control">
                                    <small>
                                        @error('nik')
                                        {{ $message }}
                                        @enderror
                                    </small>
                                </div>
                                <div class="form-group">
                                    <label for="">Telpon</label>
                                    <input type="text" name="phone" id="phone" class="form-control">
                                    <small>
                                        @error('phone')
                                        {{ $message }}
                                        @enderror
                                    </small>
                                </div>
                                <div class="form-group">
                                    <label for="">Keterangan Laporan</label>
                                    <textarea cols="30" rows="5" class="form-control" name="report"></textarea>
                                    <small>
                                        @error('report')
                                        {{ $message }}
                                        @enderror
                                    </small>
                                </div>
                                <div class="form-group pt-3">
                                    <button type="submit" class="btn-key color-2 material-design" data-color="#004740"> Kirim Laporan</button>
                                </div>
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
                            <a class="button" role="button" target="_blank" href="https://www.google.co.id/maps/place/Moronge,+Kabupaten+Kepulauan+Talaud,+Sulawesi+Utara/@3.9133844,126.6765227,11902m/data=!3m2!1e3!4b1!4m5!3m4!1s0x328d25e95a036925:0x80a05ef21717a396!8m2!3d3.9138304!4d126.7118971">
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

<script>
    var canvas = {},
        centerX = 0,
        centerY = 0,
        color = "",
        containers = document.getElementsByClassName("material-design");
    (context = {}),
    (element = {}),
    (radius = 0),
    (requestAnimFrame = (function() {
        return (
            window.requestAnimationFrame ||
            window.mozRequestAnimationFrame ||
            window.oRequestAnimationFrame ||
            window.msRequestAnimationFrame ||
            function(callback) {
                window.setTimeout(callback, 1000 / 60);
            }
        );
    })()),
    (init = function() {
        containers = Array.prototype.slice.call(containers);
        for (var i = 0; i < containers.length; i += 1) {
            canvas = document.createElement("canvas");
            canvas.addEventListener("click", press, false);
            containers[i].appendChild(canvas);
            canvas.style.width = "100%";
            canvas.style.height = "100%";
            canvas.width = canvas.offsetWidth;
            canvas.height = canvas.offsetHeight;
        }
    }),
    (press = function(event) {
        color = event.toElement.parentElement.dataset.color;
        element = event.toElement;
        context = element.getContext("2d");
        radius = 0;
        centerX = event.offsetX;
        centerY = event.offsetY;
        context.clearRect(0, 0, element.width, element.height);
        draw();
    }),
    (draw = function() {
        context.beginPath();
        context.arc(centerX, centerY, radius, 0, 2 * Math.PI, false);
        context.fillStyle = color;
        context.fill();
        radius += 2;
        if (radius < element.width) {
            requestAnimFrame(draw);
        }
    });

    init();
</script>
@endsection