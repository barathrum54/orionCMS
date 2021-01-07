@extends('layouts.app')

@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>İletişim</h2>
                    <ol>
                        <li><a href="/">Ana Sayfa</a></li>
                        <li>İletişim</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                {{-- <div>
                    <iframe style="border:0; width: 100%; height: 270px;"
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                        frameborder="0" allowfullscreen></iframe>
                </div> --}}

                <div class="row mt-5">

                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                                <i class="icofont-google-map"></i>
                                <h4>Adres:</h4>
                                <p>
                                    @foreach ($data as $d)
                                        <span class="text-black">{{ $d->fiziksel_adres }}</span>
                                    @endforeach
                                </p>
                            </div>

                            <div class="email">
                                <i class="icofont-envelope"></i>
                                <h4>Email:</h4>
                                <p>
                                    @foreach ($data as $d)
                                        <span class="text-black">{{ $d->iletisim_mail }}</span>
                                    @endforeach
                                </p>
                            </div>

                            <div class="phone">
                                <i class="icofont-phone"></i>
                                <h4>Telefon:</h4>
                                <p>
                                    @foreach ($data as $d)
                                        <span class="text-black">{{ $d->telefon1 }}</span>
                                    @endforeach
                                </p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0">

                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Adınız"
                                        data-rule="minlen:4" data-msg="En az 4 karakter giriniz" />
                                    <div class="validate"></div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Email adresi" data-rule="email"
                                        data-msg="Geçerli bir email adresi giriniz" />
                                    <div class="validate"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Başlık"
                                    data-rule="minlen:4" data-msg="En az 8 karakter giriniz" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" data-rule="required"
                                    data-msg="Mesajınızı giriniz" placeholder="Mesajınız"></textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="mb-3">
                                <div class="loading">Yükleniyor</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Mesajınız gönderilmiştir, teşekkür ederiz!</div>
                            </div>
                            <div class="text-center"><button type="submit">Gönder</button></div>
                        </form>

                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

@endsection
