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
        <div class="container my-5 py-5 " id="form" name="form">
            <form action="/sukuyusu" method="post">
                @csrf
                <div class="row d-flex justify-content-center">
                    <div class="col-5">
                        <div class="form-group">
                            <label for="">ÜLKE ADI</label>
                            <input type="text" name="ulke_adi" id="ulke_adi" class="form-control" placeholder=""
                                aria-describedby="helpId">
                            <small id="helpId" class="text-muted">Ülke Adını Giriniz</small>
                        </div>
                        <div class="form-group">
                            <label for="">SU KUYUSU ADI</label>
                            <input type="text" name="su_kuyusu_adi" id="su_kuyusu_adi" class="form-control"
                                placeholder="" aria-describedby="helpId">
                            <small id="helpId" class="text-muted">Su Kuyusu Adını Giriniz</small>
                        </div>
                        <div class="form-group">
                            <label for="">SU KUYUSU NO</label>
                            <input type="text" name="su_kuyusu_no" id="su_kuyusu_no" class="form-control" placeholder=""
                                aria-describedby="helpId">
                            <small id="helpId" class="text-muted">Su Kuyusu No Giriniz</small>
                        </div>
                        <div class="form-group">
                            <label for="">SATIR SAYISI</label>
                            <input type="text" name="satir_sayisi" id="satir_sayisi" class="form-control" placeholder=""
                                aria-describedby="helpId">
                            <small id="helpId" class="text-muted">YUKARIDAN AŞAĞI KAÇ SATIR</small>
                        </div>
                        <div class="form-group">
                            <label for="">SÜTUN SAYISI</label>
                            <input type="text" name="sutun_sayisi" id="sutun_sayisi" class="form-control" placeholder=""
                                aria-describedby="helpId">
                            <small id="helpId" class="text-muted">SOLDAN SAĞA KAÇ SÜTUN</small>
                        </div>
                        <div class="form-group">
                            <label for="">TARİH</label>
                            <input type="text" name="tarih" id="tarih" class="form-control" placeholder=""
                                aria-describedby="helpId">
                            <small id="helpId" class="text-muted">Tarih Giriniz</small>
                        </div>
                        <div class="form-group">
                            <label for="">ÜLKE BAYRAĞI</label>
                            <input type="file" name="ulke_bayragi" id="ulke_bayragi">
                            <small id="helpId" class="text-muted">Ülke Bayrağı Yükleyin</small>
                        </div>

                        <div class="form-group d-flex flex-column">
                            <label for="">İSİMLER</label>
                            <textarea name="isimler" id="isimler" cols="30" rows="10"></textarea>
                            <small id="helpId" class="text-muted">İsimleri Alt Alta Giriniz.</small>
                        </div>
                        <button class="btn btn-primary" onclick="olustur()" type="submit">Oluştur</button>

                    </div>
                </div>
            </form>
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
    <script>
        function olustur() {
            var form = document.getElementById('form');
            var prod = document.getElementById('prod');
            if (document.getElementById('ulke_adi').value != null) {
                var ulkeAdi = document.getElementById('ulke_adi').value;
            }
            if (document.getElementById('su_kuyusu_no').value != null) {
                var suKuyusuNo = document.getElementById('su_kuyusu_no').value;
            }
            if (document.getElementById('tarih').value != null) {
                var tarih = document.getElementById('tarih').value;
            }
            if (document.getElementById('isimler').value != null) {
                var isimler = document.getElementById('isimler').value;
            }

            form.style.display = 'none';
            prod.classList.remove("hidden");


        }

    </script>
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
