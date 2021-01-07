@extends('layouts.app')

@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Galeri</h2>
                    <ol>
                        <li><a href="/">Ana Sayfa</a></li>
                        <li>Galeri</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Portfolio Section ======= -->
        @include('components.portfolyo')

    </main><!-- End #main -->

@endsection
