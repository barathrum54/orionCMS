     <section id="portfolio" class="portfolio">
         <div class="container">


             <div class="row portfolio-container">

                 @foreach ($portfolyoData as $item)

                     <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                         <div class="portfolio-wrap">
                             <img src="/uploads/{{ $item->thumbnail }}" class="img-fluid" alt="">
                             <div class="portfolio-info">
                                 <h4>{{ $item->baslik }}</h4>
                                 <div class="portfolio-links">
                                     <a href="/uploads/{{ $item->thumbnail }}" data-gall="portfolioGallery"
                                         class="venobox" title="App 1"><i class="bx bx-plus"></i></a>

                                 </div>
                             </div>
                         </div>
                     </div>
                 @endforeach


             </div>

         </div>
     </section><!-- End Portfolio Section -->
