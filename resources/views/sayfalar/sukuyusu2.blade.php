    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>

        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/font-awesome.min.css">
        <link rel="stylesheet" href="/css/pe-icon-7-stroke.css">
        <link rel="stylesheet" href="/css/owl.carousel.css">
        <link rel="stylesheet" href="/css/magnific-popup.css">
        <link rel="stylesheet" href="/css/meanmenu.css">
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/css/responsive.css">
    </head>

    <body>

        <div class="sk-main sk-bg1 pt-5" id="prod" name="prod">
            <div class="row d-flex align-center main-row justify-content-center mt-5 pt-5" style="z-index: 999">
                <div class="col-4 text-center" style="z-index: 999">
                    <img class="trbayrak" src="/img/sukuyusu/trbayrak.jpg" alt="">
                </div>
                <div class="col-4 text-center" style="z-index: 999">
                    <div class="arapcayaziwrap">
                        <img class="arapcayazi" src="/img/sukuyusu/arapcayazi.jpg" alt="">
                    </div>
                </div>
                <div class="col-4 text-center" style="z-index: 999">
                    <img class="trbayrak" src="/img/sukuyusu/trbayrak.jpg" alt="">
                </div>
            </div>

            <div class="row d-flex main-row justify-content-center">
                <div class="col-4 text-center" style="z-index: 999">
                    <img class="sakerlogo" src="/img/sukuyusu/sakerlogo.jpg" alt="">
                </div>
            </div>
            <div class="row d-flex main-row justify-content-center">

                <div class="col-11 text-center table-col" style="z-index: 999">
                    <div class="table-head">
                        <h1>{{ $data->su_kuyusu_adi }}</h1>
                    </div>

                    <table class="table table-striped table-curved table-inverse p-0 pt-0 mt-0"
                        style="border-bottom:10pt solid white">
                        <div id="field" data-field-id="{{ $data->isimler }}"></div>

                        <tbody>
                            @for ($a = 0; $a < $data->satir_sayisi; $a++)
                                <tr>
                                    @for ($i = 0; $i < $data->sutun_sayisi; $i++)
                                        <td> </td>
                                    @endfor
                                </tr>
                            @endfor

                            {{-- <tr>
                                @foreach (array_slice($data->isimler, 0, 6) as $item)
                                    <td>{{ $item }}</td>
                                @endforeach
                            </tr>
                            <tr>
                                @foreach (array_slice($data->isimler, 6, 6) as $item)
                                    <td>{{ $item }}</td>
                                    <div style="background-color: white !important; width:100%">
                                    </div>
                                @endforeach
                            </tr>
                            <tr>
                                @foreach (array_slice($data->isimler, 12, 6) as $item)
                                    <td>{{ $item }}</td>
                                @endforeach
                            </tr>
                            <tr>
                                @foreach (array_slice($data->isimler, 18, 6) as $item)
                                    <td>{{ $item }}</td>
                                @endforeach
                            </tr> --}}
                            <script type="text/javascript">
                                window.onload = function(e) {
                                    var cells = document.getElementsByTagName('td');
                                    var array = $('#field').data("field-id");
                                    for (let index = 0; index < array.length; index++) {
                                        cells[index].innerHTML = array[index];
                                    }
                                    console.log(array);
                                }

                            </script>
                        </tbody>
                    </table>
                </div>
            </div>
            <br><br>
            <br><br>
            <div class="row d-flex main-row justify-content-center mt-5 pt-5">
                <div class="col-3 text-center d-flex flex-column justify-content-end" style="z-index: 999">
                    <h3>MERHAMET KEŞFİ</h3>
                </div>
                <div class="col-6 text-center d-flex flex-column justify-content-end" style="z-index: 999">
                    <h1>{{ $data->ulke_adi }} {{ $data->tarih }}</h1>
                    <h2>NO: {{ $data->su_kuyusu_no }}</h2>

                </div>
                <div class="col-3 text-center d-flex flex-column justify-content-end" style="z-index: 999">
                    <h3>MERHAMET KEŞFİ</h3>
                </div>
            </div>
            <div class="sk-bg2"></div>

        </div>
    </body>
    <style>
        .main-row {
            padding: 0px !important;
            margin-right: 50px !important;
        }

        h1 {
            font-size: 200px;
            color: rgb(37, 32, 32);
        }

        h2 {
            font-size: 150px;
            font-weight: bolder;
            color: white;
        }

        h3 {

            font-size: 100px;
            font-weight: bolder;
            color: white;
        }

        .table-col {
            margin-top: -500px;
            height: 50%;
        }

        .table-head {
            background: white;
            border-radius: 100px 100px 0px 0px;
            margin-bottom: -10px;
            margin-right: 2px;
            padding-top: 50px;
            padding-bottom: 50px;
        }

        .table-head>h1 {
            color: green;
            font-size: 150px;
        }

        .table-striped>tbody>tr:nth-of-type(odd) {
            background-color: transparent;
            border: 10pt solid white;
        }

        .thead-inverse>tr {
            border-radius: 50%;

            background-color: white;
        }

        .table-striped>tbody>tr {
            background-color: white;
            border: 10pt solid white;

        }

        .table-striped>tbody>tr>td {
            border: 10pt solid white;

        }

        th {
            font-size: 100px
        }

        td {
            font-size: 100px
        }

        .sk-bg1 {
            background: url("/img/sukuyusu/bg2.png") right bottom no-repeat;
            width: 4910px;
            background-position: 0px 200px;
            height: 3320px;
        }

        .sk-bg2 {
            background: url("/img/sukuyusu/bg1.jpg") right bottom no-repeat;
            position: absolute;
            width: 4910px;
            top: 0;
            height: 3320px;
            z-index: -1;
        }

        .arapcayaziwrap {
            border-radius: 300px;
            overflow: hidden;
            height: 30%;
            margin-top: 150px;
            z-index: 999;
            background: white;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .arapcayazi {
            object-fit: cover;
            z-index: 999;
            width: 100%;
        }

        .sakerlogo {
            margin-top: -200px;
            border-radius: 50%;
            object-fit: contain;
            height: 50%;
            z-index: 999;

        }

        .trbayrak {
            object-fit: contain;
            height: 60%;
            z-index: 999;
        }

        body {
            overflow-x: scroll !important;
        }

    </style>

    <script src="/js/vendor/jquery-1.12.0.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/jquery.meanmenu.js"></script>
    <script src="/js/jquery.mixitup.min.js"></script>
    <script src="/js/jquery.magnific-popup.min.js"></script>
    <script src="/js/jquery.counterup.min.js"></script>
    <script src="/js/waypoints.min.js"></script>
    <script src="/js/plugins.js"></script>
    <script src="/js/main.js"></script>
    <script type='text/javascript'
        src='https://www.artandcrea.com/wp-content/themes/unicon/framework/js/smoothscroll.js'
        id='minti-smoothscroll-js'></script>
    <!-- Plugins -->
    <script src="/assets/js/scrollreveal.min.js"></script>
    <script src="/assets/js/waypoints.min.js"></script>
    <script src="/assets/js/imgfix.min.js"></script>

    <!-- Global Init -->
    <script src="/assets/js/custom.js"></script>

    <script src="/js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="/js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="/js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="/js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="/js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="/assets/js/slick.min.js"></script>
    <script src="/assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="/assets/js/isotope.pkgd.min.js"></script>

    <script src="/js/tagcanvas.js" type="text/javascript"></script>

    </html>
