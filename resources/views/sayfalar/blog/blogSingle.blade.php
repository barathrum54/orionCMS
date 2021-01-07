@extends('layouts.app')

@section('content')
    <div class="blog-left-sidebar-area ptb-100">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                    <div class="blog-content-area">
                        <div class="blog-content-img">
                            <a href="#"><img src="/uploads/{{ $blog->thumbnail }}" alt="" /></a>
                        </div>
                        <div class="post-content">
                            <h2 class="post-title">
                                <a href="#">{{ $blog->baslik }}</a>
                            </h2>
                            <ul class="post-meta">
                                <li>{{ date_format($blog->created_at, 'd.m.Y') }}</li>
                                <li>{{ $blog->etiketler }}</li>
                            </ul>
                            {!! $blog->icerik !!}
                            <div class="blog-widget">
                                {{ $blog->etiketler }}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
