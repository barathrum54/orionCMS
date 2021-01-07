@extends('layouts.app')

@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Hizmetlerimiz</h2>
                    <ol>
                        <li><a href="index.html">Anasayfa</a></li>
                        <li>Hizmetlerimiz</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Services Section ======= -->
        @include('components.hizmetlerimiz')
        @include('components.sss')
        <!-- ======= Features Section ======= -->


    </main><!-- End #main -->
    <!-- service-area-end -->
    <!-- counter-area-start -->
@endsection
