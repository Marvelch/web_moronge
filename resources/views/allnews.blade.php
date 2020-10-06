@extends('layouts.app_second')

@section('content_second')

<section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h4 class="uppercase ml-3"> berita desa</h4>
                    <div class="col-md-12 mt-4">
                        @foreach($news as $berita)
                        <div class="card shadow-sm mb-5 bg-white rounded">
                            <div class="row no-gutters">
                                <div class="col-md-5" style="background: #868e96;">
                                    <img src="{{asset('uploads/'.$berita->img)}}" class="card-img-top img-fluid img-resposive" alt="...">
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body">
                                        <h5 class="card-title uppercase">{{$berita->title}}</h5>
                                        <p class="card-text">{!! \Illuminate\Support\Str::limit($berita->content, 220) !!}</p>

                                        <div class="btx btn-one welcome-primary-color" onclick="window.location.href='{{url('cfg_show/'.$berita->id)}}'">
                                            <span>Selengkapnya</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-3">
                    <h4 class="uppercase ml-3"> kategori</h4>
                    @foreach($Category as $kategori)
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item primary-font-color"><i class="fas fa-caret-right"></i> {{$kategori->category}}</li>
                        </ul>
                    @endforeach
                </div>
                {{ $news->links() }}
            </div>
        </div>
        </div>
        </div>
    </section>

@endsection
