@extends('layouts.app')

@section('content')
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->

    <link href="/assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/assets/vendor/venobox/venobox.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="/assets/css/grafikTasarim.css" rel="stylesheet">
    <div id="header"></div>
    <section id="intro" class="mt-5">

        <div class="intro-text">
            <h2>Grafik & Tasarım Hizmetleri</h2>
            <p>Profesyonel tasarım ekibimiz ile en trend ve yaratıcı tasarımlara ulaşın.</p>
            <a href="#about" class="btn-get-started scrollto">Hemen İnceleyin</a>
        </div>

        <div class="product-screens">

            <div class="product-screen-1 wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="0.6s">
                <img src="/assets/img/product-screen-1.png" alt="">
            </div>

            <div class="product-screen-2 wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="0.6s">
                <img src="/assets/img/product-screen-2.png" alt="">
            </div>

            <div class="product-screen-3 wow fadeInUp" data-wow-duration="0.6s">
                <img src="/assets/img/product-screen-3.png" alt="">
            </div>

        </div>

    </section><!-- End Intro Section -->


    <!-- ======= About Section ======= -->
    <section id="about" class="section-bg">
        <div class="container-fluid">
            <div class="section-header">
                <h3 class="section-title">Neler Yapıyoruz?</h3>
                <span class="section-divider"></span>
                <p class="section-description">
                    Size ve markanıza her açıdan katma değer sağlayacak yaratıcı ve zengin tasarımlar üretiyoruz. <br>
                    Profesyonel Tasarım Ekibimiz ile ihtiyaçlarınız tasarımlarına kavuşsun, fikirleriniz hayat bulsun.
                </p>
            </div>

            <div class="row">
                <div class="col-lg-6 about-img wow fadeInLeft">
                    <img src="/assets/img/markalar.webp" alt="">
                </div>

                <div class="col-lg-6 content wow fadeInRight">
                    <h2>Profesyonel Tasarımlar, Markanızı En İyi ve En Kaliteli Biçimde Yansıtır</h2>
                    <h3>Tasarımlarınıza verdiğiniz önem, markanıza verdiğiniz önemdir. Sizin ve markanız için en doğru
                        kaynakları kullanarak, etkileyici ve yaratıcı tasarımlara imza atabiliriz.</h3>
                    <p> Markanız ile her platformda kullanıma uygun içerikler, tanıtım grafikleri, infografikler ve daha
                        birçok şey oluşturabiliriz.
                    </p>

                    <ul>
                        <li><i class="ion-android-checkmark-circle"></i> Trendleri takip etmek çok önemlidir; Çünkü
                            müşteriler aşina oldukları şeylere güven duyarlar.</li>
                        <li><i class="ion-android-checkmark-circle"></i> İşi profesyonellere bırakarak, tüm düşüncelerden
                            kurtulun. Markanızı emanet ettiğiniz marka, tasarımları ve referansları ile güven vermelidir.
                            <strong>MT Medya Ajans</strong> Tasarım Ekibi gibi.
                        </li>
                        <li><i class="ion-android-checkmark-circle"></i> Çalışmalarınız size ve markanıza uygunluğu için
                            titiz analizler yapıyoruz. Markanızı yansıtmayan tasarım çalışmalarına yüzlerce lira vermeyin.
                        </li>
                    </ul>
                    <h3>Peki Nasıl Başlarsınız?</h3>
                    <p> Sizin ve markanızın, hedeflerini ve ihtiyaçlarını tespit ediyor, buna uygun çalışmaların başlangıcı
                        için yol planı çiziyoruz.
                    </p>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Featuress Section ======= -->
    <section id="features">
        <div class="container">

            <div class="row">

                <div class="col-lg-8 offset-lg-4">
                    <div class="section-header wow fadeIn" data-wow-duration="1s">
                        <h3 class="section-title">Sunduğumuz Hizmetler</h3>
                        <span class="section-divider"></span>
                    </div>
                </div>

                <div class="col-lg-4 col-md-5 features-img">
                    <img src="/assets/img/gd.png" alt="" class="wow fadeInLeft">
                </div>

                <div class="col-lg-8 col-md-7 ">

                    <div class="row">

                        <div class="col-lg-6 col-md-6 box wow fadeInRight">
                            <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
                            <h4 class="title"><a href="">Markalar için <br> Tasarım Faaliyetleri</a></h4>
                            <p class="description">Markanız için neye ihtiyacınız varsa -bu bir ambalaj da olabilir, bir
                                banner tasarımı da olabilir- tüm tasarım isteklerine cevap veriyoruz.</p>
                        </div>
                        <div class="col-lg-6 col-md-6 box wow fadeInRight" data-wow-delay="0.1s">
                            <div class="icon"><i class="ion-ios-flask-outline"></i></div>
                            <h4 class="title"><a href="">Marka Tasarım Analizi</a></h4>
                            <p class="description">Sizin için markanızın çizgisine kendi analitik yorumumuzu katıyoruz.
                                Avantaj ve dezavantajlarınızı size yalın ve anlaşılır bir dille açıklayan bir rapor
                                sunuyoruz.</p>
                        </div>
                        <div class="col-lg-6 col-md-6 box wow fadeInRight" data-wow-delay="0.2s">
                            <div class="icon"><i class="ion-social-buffer-outline"></i></div>
                            <h4 class="title"><a href="">Özel Tasarım Faaliyetleri</a></h4>
                            <p class="description">Piyasada isteklerinize karşılık bulamadığınızda, sizin için buradayız.
                                Neye ihtiyacınız olduğunu belirleyip sizi mükemmel tasarımlara ulaştırabiliriz.
                            </p>
                        </div>
                        <div class="col-lg-6 col-md-6 box wow fadeInRight" data-wow-delay="0.3s">
                            <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
                            <h4 class="title"><a href="">Arayüz ve Kullanıcı Deneyimi Tasarımı</a></h4>
                            <p class="description">Dijital projeleriniz için arayüz ve kullanıcı deneyimi(UX) tasarımı
                                yapabilecek profesyonellere ulaşmak için hemen harekete geçin. Sizi zirve neredeyse oraya
                                taşıyabiliriz.</p>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </section><!-- End Featuress Section -->

    <!-- ======= Advanced Featuress Section ======= -->
    <section id="advanced-features">

        <div class="features-row section-bg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <img class="advanced-feature-img-right wow fadeInRight" src="/assets/img/kabakevi1.jpeg" alt="">
                        <div class="wow fadeInLeft">
                            <h2>Markanız İçin Ne Gerekiyorsa O !</h2>
                            <h3>Baskıya girecek veya dijitalde barınacak işleriniz tamamı için profesyonel ekibimiz hazır.
                            </h3>
                            <p>Siz de işlerinizi bize emanet eden tüm marka sahipleri gibi, işinizi bize emanet edin,
                                tasarımlarımızla markanızı olması gerektiği yere taşıyalım.</p>
                            <p>Tasarım faaliyetlerinin tamamında tüm trendler ve klasikler arasından, markanıza yönelik en
                                uygun çizgiyi bulup, sizin için özel ve profesyonel tasarımlar oluşturalım.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="features-row">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <img class="advanced-feature-img-left" src="/assets/img/advanced-feature-2.jpg" alt="">
                        <div class="wow fadeInRight">
                            <h2>Tam Yerinde, Tam Zamanında !</h2>
                            <i class="ion-ios-paper-outline" class="wow fadeInRight" data-wow-duration="0.5s"></i>
                            <p class="wow fadeInRight" data-wow-duration="0.5s">Sizin için planladığımız yol haritası ile
                                nereye ne zaman varacağınızı bilin. A'dan Z'ye tüm grafik tasarım projelerinizde ajandamızı
                                belirleyip, sadık kalarak çalışıyoruz.</p>
                            <i class="ion-ios-color-filter-outline wow fadeInRight" data-wow-delay="0.2s"
                                data-wow-duration="0.5s"></i>
                            <p class="wow fadeInRight" data-wow-delay="0.2s" data-wow-duration="0.5s">Hata kabul etmeyen
                                grafik tasarım projelerinde, hataları minimuma indirmek için ekibimizde sadece
                                profesyoneller ile çalışıyoruz. Referanslarımızda sağladığımız güvenin teminatını,
                                tecrübelerimiz ile veriyoruz.</p>
                            <i class="ion-ios-barcode-outline wow fadeInRight" data-wow-delay="0.4"
                                data-wow-duration="0.5s"></i>
                            <p class="wow fadeInRight" data-wow-delay="0.4s" data-wow-duration="0.5s">Projelerin, tüm dönüm
                                noktalarında, sizinle şeffaf ve güncel biçimde çalışarak, her hususta bilgilendirme
                                yapıyoruz. Beraber çalıştığımız projelerin tamamında, revizyonlarınız doğrultusunda hareket
                                ediyor, sürprize yer bırakmıyoruz. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section><!-- End Advanced Featuress Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 text-center text-lg-left">
                    <h3 class="cta-title">Hemen Başlayın!</h3>
                    <p class="cta-text"> Markanızı zirveye taşıyacak doğru kararı alın ve hemen tasarım projenizi başlatın.
                        Profesyonel ekibimiz ihtiyaçlarınızı en iyi biçimde anlayıp, çalışmalara hemen başlasın.
                    </p>
                </div>
                <div class="col-lg-3 cta-btn-container text-center">
                    <a class="cta-btn align-middle" href="/iletisim">İletişim Kurun</a>
                </div>
            </div>

        </div>
    </section><!-- End Call To Action Section -->

    <!-- ======= More Features Section ======= -->

    <!-- ======= Clients Section ======= -->

    <!-- ======= Pricing Section ======= -->
    <section id="gallery">
        <div class="container-fluid">
            <div class="section-header">
                <h3 class="section-title">Portfolyo</h3>
                <span class="section-divider"></span>
                <p class="section-description">İncelemeniz İçin Tasarımlarımızdan Bazılarını Sizler İçin Sunduk</p>
            </div>

            <div class="row no-gutters">

                @foreach ($gtPortfolyo as $item)

                    <div class="col-lg-4 col-md-6">
                        <div class="gallery-item wow fadeInUp">
                            <a href="/portfolyo/{{ $item->id }}">
                                <img src="/uploads/{{ $item->thumbnail }}" alt="">
                            </a>
                        </div>
                    </div>
                @endforeach



            </div>

        </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq">
        <div class="container">

            <div class="section-header">
                <h3 class="section-title">Sık Sorulan Sorular</h3>
                <span class="section-divider"></span>
                <p class="section-description">Aklınızdaki tüm sorular ve düşünceler için bizimle iletişime geçmekten
                    çekinmeyin</p>
            </div>

            <ul id="faq-list" class="wow fadeInUp">
                <li>
                    <a data-toggle="collapse" class="collapsed" href="#faq1">Sizinle Çalışmaya Nasıl Başlayabilirim? <i
                            class="ion-android-remove"></i></a>
                    <div id="faq1" class="collapse" data-parent="#faq-list">
                        <p>
                            İletişim kanallarımızı kullanarak, müşteri temsilcimiz ile görüşebilir, merak ettiğiniz tüm
                            detayları öğrenebilirsiniz. Projede hemfikir olduktan sonrasında ise, detaylar bize ulaştığında
                            size belirtilen tarihler arasında projenizi tamamlıyor ve tüm süreçlerde size rapor sunuyoruz.
                        </p>
                    </div>
                </li>

                <li>
                    <a data-toggle="collapse" href="#faq2" class="collapsed">Tasarım Fiyatlarınız Nedir? <i
                            class="ion-android-remove"></i></a>
                    <div id="faq2" class="collapse" data-parent="#faq-list">
                        <p>
                            Örnek fiyat veren diğer firmalardan bizi ayıran özelliğimiz, tasarımın niteliği ve niceliğine
                            göre fiyat vererek tüm markaların bütçesi dahilinde davranmamızdır. Tasarım ekibimizin
                            incelemeleri sonucunda, bütçeniz dahilinde ulaşılabilir fiyatlara tüm tasarım isteklerinize
                            çözümler sunabiliriz.
                        </p>
                    </div>
                </li>

                <li>
                    <a data-toggle="collapse" href="#faq3" class="collapsed">Peki Yapılan Tasarımı Beğenmezsem? <i
                            class="ion-android-remove"></i></a>
                    <div id="faq3" class="collapse" data-parent="#faq-list">
                        <p>Profesyonel ekibimiz ile mükemmel tasarımların garantisini veriyoruz. Tüm tasarım projelerimizde
                            revizyon haklarınız saklı kalmaktadır. Dilediğinizde tasarımınız
                            üzerinde tasarımsal değişiklikler yapabilir, istediğiniz zaman fikir belirtebilir, revize
                            edebilirsiniz.
                        </p>
                    </div>
                </li>

                <li>
                    <a data-toggle="collapse" href="#faq4" class="collapsed">Kimlerle Çalışıyorsunuz? <i
                            class="ion-android-remove"></i></a>
                    <div id="faq4" class="collapse" data-parent="#faq-list">
                        <p>
                            Şirketimizin <strong> "Sıfır Ayrımcılık Politikası" </strong> gereğince, hiçbir faktöre bağlı
                            kalmadan,
                            başarabileceğimizi düşündüğümüz tüm projeleri kabul ediyoruz.
                        </p>
                    </div>
                </li>

                <li>
                    <a data-toggle="collapse" href="#faq5" class="collapsed">Çok Özel Bir Tasarım Fikrim Var, Size
                        Güvenebilir miyim? <i class="ion-android-remove"></i></a>
                    <div id="faq5" class="collapse" data-parent="#faq-list">
                        <p>
                            Çalıştığımız tüm müşterilerimizin, şahıs, fikir ve marka haklarına saygılı, üstün gizlilik ve
                            %100 güven amaçlı bir çalışma politikası yürüttüğümüz için, tüm ticari sırlarınız, markanızın ve
                            şahsınızın tüm faaliyetleri ile tüm kişisel verileriniz, ilgili kanunlar çerçevesinde firmamız
                            tarafından muhafaza edilmektedir.
                        </p>
                    </div>
                </li>

                <li>
                    <a data-toggle="collapse" href="#faq6" class="collapsed">Fikrimi Projelendirdim, Fakat Ödemesi Nasıl
                        Olacak? <i class="ion-android-remove"></i></a>
                    <div id="faq6" class="collapse" data-parent="#faq-list">
                        <p>
                            Fikriniz, projelenip fiyatlandırıldıktan sonra, temsilciniz ile anlaştığınız biçimde size tahsis
                            edilen ödeme kanallarını kullanarak ödemelerinizi kolaylıkla yapabilirsiniz.
                        </p>
                    </div>
                </li>

            </ul>

        </div>
    </section><!-- End Frequently Asked Questions Section -->
    @include('components.iletisimFormu')

    <!-- ======= Team Section ======= -->


    <!-- ======= Gallery Section ======= -->

    <!-- ======= Contact Section ======= -->


    <script src="/assets/vendor/jquery/jquery.min.js"></script>
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="/assets/vendor/php-email-form/validate.js"></script>
    <script src="/assets/vendor/wow/wow.min.js"></script>
    <script src="/assets/vendor/venobox/venobox.min.js"></script>
    <script src="/assets/vendor/superfish/superfish.min.js"></script>
    <script src="/assets/vendor/hoverIntent/hoverIntent.js"></script>

    <!-- Template Main JS File -->
    <script src="/assets/js/grafikTasarim.js"></script>

    <!-- service-area-end -->
    <!-- counter-area-start -->
@endsection
