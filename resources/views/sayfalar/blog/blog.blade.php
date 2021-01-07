@extends('layouts.app')

@section('content')
    <div class="blog-area ptb-80">
        <div class="container">
            <div class="row">
                {{-- <div class="col-md-3 col-sm-12">
                    <div class="blog-widget">
                        <form id="search" action="#">
                            <input type="text" placeholder="Arama Metni..." />
                            <button>Ara</button>
                        </form>
                    </div>
                    <div class="blog-widget">
                        <div class="widget-title">
                            <h3>KATEGORİLER</h3>
                        </div>
                        <ul class="list-item">
                            <li><a href="#">Duyurular (4)</a></li>
                            <li><a href="#">Yaşam (16)</a></li>
                            <li><a href="#">Kampanyalar (12)</a></li>
                            <li><a href="#">Tasarım (7)</a></li>
                            <li><a href="#">Yazılım (11)</a></li>
                            <li><a href="#">Medya (9)</a></li>
                            <li><a href="#">Pazarlama (30)</a></li>
                        </ul>
                    </div>
                    <div class="blog-widget">
                        <div class="widget-title">
                            <h3>Etiketler</h3>
                        </div>
                        <ul class="Tagcloud">
                            <li><a href="#">Design</a></li>
                            <li><a href="#">Develop</a></li>
                            <li><a href="#">Seo</a></li>
                            <li><a href="#">jQuery</a></li>
                            <li><a href="#">Wordpress</a></li>
                            <li><a href="#">Angular</a></li>
                            <li><a href="#">Node</a></li>
                            <li><a href="#">Express</a></li>
                            <li><a href="#">Gulp</a></li>
                            <li><a href="#">Sass</a></li>
                            <li><a href="#">Bootstrap</a></li>
                            <li><a href="#">Html5</a></li>
                        </ul>
                    </div>
                    <div class="blog-widget">
                        <div class="widget-title">
                            <h3>Portfolyo</h3>
                        </div>
                        <ul class="Flickr-list">
                            <li>
                                <a href="#"><img src="img/footer/4.jpg" alt="" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="img/footer/5.jpg" alt="" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="img/footer/6.jpg" alt="" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="img/footer/7.jpg" alt="" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="img/footer/8.jpg" alt="" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="img/footer/9.jpg" alt="" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="img/footer/10.jpg" alt="" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="img/footer/11.jpg" alt="" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="img/footer/12.jpg" alt="" /></a>
                            </li>
                        </ul>
                    </div>
                    <div class="blog-widget">
                        <div class="widget-title">
                            <h3>Video</h3>
                        </div>
                        <div class="video">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="https://www.youtube.com/embed/c7TsM3G25UM"></iframe>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="col-md-12 col-sm-12">
                    @foreach ($blogData as $item)
                        <div class="blog-content-area">
                            <div class="blog-content-img">
                                <a href="/blog/{{ $item->id }}"><img src="/uploads/{{ $item->thumbnail }}" alt="" /></a>
                            </div>
                            <div class="post-content">
                                <h2 class="post-title">
                                    <a href="/blog/{{ $item->id }}">{{ $item->baslik }}</a>
                                </h2>
                                <ul class="post-meta">
                                    <li>{{ date_format($item->created_at, 'd.m.Y') }}</li>
                                    <li>{{ $item->etiketler }}</li>
                                </ul>
                                <div>
                                    {!! substr(strip_tags($item->icerik), 0, 150) !!}
                                </div>
                                <a class="more" href="/blog/{{ $item->id }}">Devamını Oku <i class="fa fa-angle-right"
                                        aria-hidden="true"></i></a>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
    </div>
@endsection
