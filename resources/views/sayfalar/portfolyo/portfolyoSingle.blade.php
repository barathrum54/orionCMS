@extends('layouts.app')
@section('content')
    <div class="blog-left-sidebar-area ptb-100">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                    <h1 class="text-center mt-3">{{ $portfolyo->baslik }}</h1>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="show-portfolio-thumbnail">
                        <img src="/uploads/{{ $portfolyo->thumbnail }}" alt="" srcset="">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="post-content">
                        {!! $portfolyo->content !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="post-galeri">
                        @foreach ($galeriArray as $galeri)
                            <div class="show-portfolio-galeri-item mt-4">
                                <img src="/uploads/{{ $galeri->path }}" alt="" srcset="">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
    </div>
@endsection
