<section id="clients" class="clients section-bg">
    <div class="container">

        <div class="row">
            @foreach ($referanslar as $item)
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="/uploads/{{ $item->grafik }}" class="img-fluid" alt="" />
                </div>

            @endforeach

        </div>

    </div>
</section><!-- End Clients Section -->
