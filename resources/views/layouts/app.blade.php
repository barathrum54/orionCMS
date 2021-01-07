<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/favicon.ico">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>MT Medya | Marka PR Hizmetleri </title>


    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">



    <!-- Template Main CSS File -->
    <link href="/css/style.css" rel="stylesheet">



</head>

<body class="smooth-scroll">


    <div id="app">
        <div class="mainwrap">
            <div class="navwrap ">
                <header>
                    <div class="container d-flex align-items-center">

                        <h1 class="logo"><a href="/">
                                @foreach ($data as $item)
                                    <img src="/uploads/{{ $item->firma_logo }}" class="logo" alt="Logo">
                                @endforeach
                            </a></h1>
                        <!-- Uncomment below if you prefer to use an image logo -->
                        <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

                        <nav class="nav-menu d-none d-lg-block">

                            <ul>
                                <li class="main-menu-item"><a href="/">Ana Sayfa</a></li>
                                <li class="main-menu-item"><a href="/hakkimizda">Hakkımızda</a></li>
                                <li class="main-menu-item"><a href="/hizmetlerimiz">Hizmetlerimiz</a>
                                </li>
                                <li class="main-menu-item"><a href="/portfolyo">Galeri</a></li>
                                <li class="main-menu-item"><a href="/iletisim">İletişim</a></li>

                            </ul>

                        </nav><!-- .nav-menu -->

                        <a href="/iletisim" class="get-started-btn ml-auto">İletişime Geçin</a>

                    </div>

                </header>
            </div>
            <div class="contentwrap">
                @yield('content')
            </div>
        </div>

    </div>

    <div id="preloader"></div>

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info">
                            <h3>
                                @foreach ($data as $d)
                                    <span class="text-black">{{ $d->marka }}</span>
                                @endforeach
                            </h3>
                            <p>
                                @foreach ($data as $d)
                                    <span class="text-black">{{ $d->fiziksel_adres }}</span>
                                @endforeach
                                <br>
                                <strong>Telefon:</strong>
                                @foreach ($data as $d)
                                    <span class="text-black">{{ $d->telefon1 }}</span>
                                @endforeach
                                <br>
                                <strong>Email:</strong>
                                @foreach ($data as $d)
                                    <span class="text-black">{{ $d->iletisim_mail }}</span>
                                @endforeach
                            </p>
                            <div class="social-links mt-3">
                                @foreach ($data as $d)
                                    <a href="{{ $d->twitter_link }}" class="twitter"><i class="bx bxl-twitter"></i></a>
                                    <a href="{{ $d->facebook_link }}" class="facebook"><i
                                            class="bx bxl-facebook"></i></a>
                                    <a href="{{ $d->instagram_link }}" class="instagram"><i
                                            class="bx bxl-instagram"></i></a>
                                    <a href="{{ $d->googleplus_link }}" class="google-plus"><i
                                            class="bx bxl-skype"></i></a>
                                    <a href="{{ $d->linkedin_link }}" class="linkedin"><i
                                            class="bx bxl-linkedin"></i></a>

                                @endforeach

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Menü</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="/">Ana Sayfa</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="/hakkimizda">Hakkımızda</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="/hizmetlerimiz">Hizmetlerimiz</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="/galeri">Galeri</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="/iletisim">İletişim</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">

                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Haber Bültenimize Kayıt Olun</h4>
                        <p>Haber bültenimize kayıt olarak son duyurular ve haberlerle güncel kalın.</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Kayıt Olun">
                        </form>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>DNA ULUS GRUP</span></strong>. Tüm Hakları Saklıdır
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/sailor-free-bootstrap-theme/ -->
                Designed by <a href="https://webmavi.com/">Web Mavi</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    </div>

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
    <script src="/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="/vendor/php-email-form/validate.js"></script>
    <script src="/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="/vendor/venobox/venobox.min.js"></script>
    <script src="/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="/vendor/owl.carousel/owl.carousel.min.js"></script>

    <!-- Template Main JS File -->
    <script src="/js/main.js"></script>


</body>

</html>
