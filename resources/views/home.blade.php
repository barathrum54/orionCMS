@extends('layouts.app')
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <a href="{{ $sliderArrayFirst->url }}" class="link">
                        <img class="d-block w-100 hidden-xs" src="/uploads/{{ $sliderArrayFirst->slider_gorsel }}" alt="">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown">
                                    {{ $sliderArrayFirst->slider_baslik }}</span>
                                </h2>
                                <p class="animate__animated animate__fadeInUp">{{ $sliderArrayFirst->slider_baslik }}</p>
                                <a href="{{ $sliderArrayFirst->url }}"
                                    class="btn-get-started animate__animated animate__fadeInUp scrollto">İnceleyin</a>
                            </div>
                        </div>
                    </a>
                </div>
                @foreach ($sliderArray as $item)
                    <div class="carousel-item">
                        <a href="{{ $item->url }}" class="link">
                            <img class="d-block w-100 hidden-xs" src="/uploads/{{ $item->slider_gorsel }}" alt="">
                            <div class="carousel-container">
                                <div class="container">
                                    <h2 class="animate__animated animate__fadeInDown">
                                        {{ $item->slider_baslik }}</span>
                                    </h2>
                                    <p class="animate__animated animate__fadeInUp">{{ $item->slider_baslik }}
                                    </p>
                                    <a href="{{ $item->url }}"
                                        class="btn-get-started animate__animated animate__fadeInUp scrollto">İnceleyin</a>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="row content">
                    <div class="col-lg-6">
                        <h2>{{ $data->ib_baslik }}</h2>
                        <h3>{{ $data->ib_alt_baslik }}</h3>
                        </h3>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <p>{{ $data->ib_metin }}</p>

                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Clients Section ======= -->
        @include('components.referanslar')

        <!-- ======= Services Section ======= -->
        @include('components.hizmetlerimiz')

        @include('components.portfolyo')

    </main><!-- End #main -->
@endsection
