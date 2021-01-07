<div class="testimonial-area ptb-80 gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-3 col-md-6">
                <div class="section-title text-center">
                    <h2>MEMNUN MÜŞTERİLERİMİZDEN</h2>
                </div>
            </div>
            <div class="col-md-8 col-md-offset-2">
                <div class="testimonial-active owl-carousel">
                    <div class="testimonial-wrapper">
                        <div class="testimonial-info text-center">
                            <p>Hizmetleri ile iş yerimize doğrudan katkısı olan bu şirket ve değerli çalışanlarına çok
                                teşekkür ederiz.</p>
                            <span>Ahmet Ergüvan</span>
                        </div>
                    </div>
                    @foreach ($musteriyorumlari as $my)
                        <div class="testimonial-wrapper">
                            <div class="testimonial-info text-center">
                                <p>{{ $my->metin }}</p>
                                <span>{{ $my->isim }}</span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
