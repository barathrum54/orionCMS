@extends('layouts.app')

@section('content')
    <div class="breadcrumb-area">
        <div class="row">
            <div class="col-md-12">
                <img class="hakkimizdaBanner hidden-xs" src="img/team/hakkimizda.jpg" />
                <img class="hakkimizdaBanner hidden-lg" src="img/team/hakkimizda-mobil.jpg" />
            </div>
        </div>
    </div>
    <!-- breadcrumb-area-end -->
    <!-- about-area-start -->
    <div class="about-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center">

                        Profesyonel ekibimizde her zaman açık fikirli beyinlere yerimiz var.
                    </h2>
                    <h4 class="text-center">
                        <a href=""> ik@mtmedyajans.com </a>
                    </h4>
                    <div class="card">
                        <img class="card-img-top" src="holder.js/100x180/" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Açık Pozisyonlar</h4>
                            <p class="card-text">
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Kıdemli Yazılımcı
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center disabled">
                                    Kıdemli Grafiker
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Pazarlama Uzmanı
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center disabled">
                                    Halkla İlişkiler Uzmanı
                                </li>
                            </ul>
                            </p>
                        </div>
                    </div>
                    <br>
                    @include('components.iletisimformu')
                </div>


            </div>

        </div>
    </div>

@endsection
