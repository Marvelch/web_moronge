@extends('layouts.app_second')

@section('content_second')

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

@endsection
