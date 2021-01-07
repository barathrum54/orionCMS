@extends('layouts.app')

@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Hakkımızda</h2>
                    <ol>
                        <li><a href="/">Ana Sayfa</a></li>
                        <li>Hakkımızda</li>
                    </ol>
                </div>
                @include('components.hakkimizda')
            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= About Section ======= -->

        <!-- ======= Team Section ======= -->

    </main><!-- End #main -->

@endsection
