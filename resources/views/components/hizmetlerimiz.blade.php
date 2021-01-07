<!-- ======= Services Section ======= -->
<section id="services" class="services">

    <div class="container">
        <div class="section-title">
            <h2>HİZMETLERİMİZ</h2>
            <p>SİZLERE SUNDUĞUMUZ HİZMETLER</p>
        </div>
        <div class="row">
            @if ($data->hizmetlerimiz_col1_baslik != null)

                <div class="col-md-6">
                    <div class="icon-box">
                        <i class="icofont-computer"></i>
                        <h4><a href="#">{{ $data->hizmetlerimiz_col1_baslik }}</a></h4>
                        <p>{{ $data->hizmetlerimiz_col1_metin }}</p>
                    </div>
                </div>
            @endif
            @if ($data->hizmetlerimiz_col2_baslik != null)

                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="icon-box">
                        <i class="icofont-chart-bar-graph"></i>
                        <h4><a href="#">{{ $data->hizmetlerimiz_col2_baslik }}</a></h4>
                        <p>{{ $data->hizmetlerimiz_col2_metin }}</p>
                    </div>
                </div>
            @endif
            @if ($data->hizmetlerimiz_col3_baslik != null)

                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="icon-box">
                        <i class="icofont-image"></i>
                        <h4><a href="#">{{ $data->hizmetlerimiz_col3_baslik }}</a></h4>
                        <p>{{ $data->hizmetlerimiz_col3_metin }}</p>
                    </div>
                </div>
            @endif
            @if ($data->hizmetlerimiz_col4_baslik != null)

                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="icon-box">
                        <i class="icofont-settings"></i>
                        <h4><a href="#">{{ $data->hizmetlerimiz_col4_baslik }}</a></h4>
                        <p>{{ $data->hizmetlerimiz_col4_metin }}</p>
                    </div>
                </div>
            @endif
            @if ($data->hizmetlerimiz_col5_baslik != null)

                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="icon-box">
                        <i class="icofont-earth"></i>
                        <h4><a href="#">{{ $data->hizmetlerimiz_col5_baslik }}</a></h4>
                        <p>{{ $data->hizmetlerimiz_col5_metin }}</p>

                    </div>
                </div>
            @endif
            @if ($data->hizmetlerimiz_col6_baslik != null)

                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="icon-box">
                        <i class="icofont-tasks-alt"></i>
                        <h4><a href="#">{{ $data->hizmetlerimiz_col6_baslik }}</a></h4>
                        <p>{{ $data->hizmetlerimiz_col6_metin }}</p>
                    </div>
                </div>
            @endif

        </div>

    </div>
</section><!-- End Services Section -->

<!-- ======= Features Section ======= -->


<!-- service-area-end -->
<!-- counter-area-start -->
