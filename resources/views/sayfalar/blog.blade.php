@extends('layouts.app')

@section('content')
    <div class="blog-area ptb-80">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12">
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
                </div>
                <div class="col-md-9 col-sm-12">
                    <div class="blog-content-area">
                        <div class="blog-content-img">
                            <a href="#"><img src="img/blog/4.jpg" alt="" /></a>
                        </div>
                        <div class="post-content">
                            <h2 class="post-title">
                                <a href="#">Super Awesome Site Showcase</a>
                            </h2>
                            <ul class="post-meta">
                                <li>ARALIK 2, 2020</li>
                                <li>By <a href="#">Taha</a></li>
                                <li><a href="#">Marka</a>,<a href="#">Tasarım</a></li>
                                <li><a href="#">3 Yorum</a></li>
                            </ul>
                            <p>Phasellus consectetuer vestibulum elit. Aenean tellus metus, bibendum sed, posuere ac, mattis
                                non, nunc. Vestibulum fringilla pede sit amet augue. In turpis. Pellentesque posuere.
                                Praesent turpis. Maecenas vestibulum mollis diam. Pellentesque ut neque. Pellentesque
                                habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In dui
                                magna, posuere eget, vestibulum et, tempor auctor justo. In ac felis quis tortor malesuada
                                pretium.</p>
                            <a class="more">Devamını Oku <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="post-content-area ptb-60">
                        <div class="blog-content-img">
                            <a href="#"><img alt="" src="img/blog/5.jpg"></a>
                        </div>
                        <div class="post-content">
                            <h2 class="post-title">
                                <a href="#">The Handkerchief</a>
                            </h2>
                            <ul class="post-meta">
                                <li>October 24, 2018</li>
                                <li>By <a href="#">Benson</a></li>
                                <li><a href="#">Brand</a>,<a href="#">Design</a></li>
                                <li><a href="#">3 Comments</a></li>
                            </ul>
                            <p>Phasellus consectetuer vestibulum elit. Aenean tellus metus, bibendum sed, posuere ac, mattis
                                non, nunc. Vestibulum fringilla pede sit amet augue. In turpis. Pellentesque posuere.
                                Praesent turpis. Maecenas vestibulum mollis diam. Pellentesque ut neque. Pellentesque
                                habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In dui
                                magna, posuere eget, vestibulum et, tempor auctor justo. In ac felis quis tortor malesuada
                                pretium.</p>
                            <a class="more">Read more <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="video-area">
                        <div class="video">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="https://player.vimeo.com/video/193773669"></iframe>
                            </div>
                        </div>
                        <div class="post-content">
                            <h2 class="post-title">
                                <a href="#">Sportina Print Campaign</a>
                            </h2>
                            <ul class="post-meta">
                                <li>October 24, 2015</li>
                                <li>By <a href="#">Benson</a></li>
                                <li><a href="#">Brand</a>,<a href="#">Design</a></li>
                                <li><a href="#">3 Comments</a></li>
                            </ul>
                            <p>Phasellus consectetuer vestibulum elit. Aenean tellus metus, bibendum sed, posuere ac, mattis
                                non, nunc. Vestibulum fringilla pede sit amet augue. In turpis. Pellentesque posuere.
                                Praesent turpis. Maecenas vestibulum mollis diam. Pellentesque ut neque. Pellentesque
                                habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In dui
                                magna, posuere eget, vestibulum et, tempor auctor justo. In ac felis quis tortor malesuada
                                pretium.</p>
                            <a class="more">Read more <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
