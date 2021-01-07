   <section id="features" class="features">
       <div class="container">

           <div class="section-title">
               <p>{{ $sssData->sss_baslik }}</p>
           </div>

           <div class="row">
               <div class="col-lg-3">
                   <ul class="nav nav-tabs flex-column">
                       @if ($sssData->sss_1_baslik != null)

                           <li class="nav-item">
                               <a class="nav-link active show" data-toggle="tab"
                                   href="#tab-1">{{ $sssData->sss_1_baslik }}</a>
                           </li>
                       @endif
                       @if ($sssData->sss_2_baslik != null)
                           <li class="nav-item">
                               <a class="nav-link" data-toggle="tab" href="#tab-2">{{ $sssData->sss_2_baslik }}</a>
                           </li>
                       @endif
                       @if ($sssData->sss_3_baslik != null)

                           <li class="nav-item">
                               <a class="nav-link" data-toggle="tab" href="#tab-3">{{ $sssData->sss_3_baslik }}</a>
                           </li>
                       @endif
                       @if ($sssData->sss_4_baslik != null)

                           <li class="nav-item">
                               <a class="nav-link" data-toggle="tab" href="#tab-4">{{ $sssData->sss_4_baslik }}</a>
                           </li>
                       @endif
                       @if ($sssData->sss_5_baslik != null)

                           <li class="nav-item">
                               <a class="nav-link" data-toggle="tab" href="#tab-5"> {{ $sssData->sss_5_baslik }}</a>
                           </li>
                       @endif

                   </ul>
               </div>
               <div class="col-lg-9 mt-4 mt-lg-0">
                   <div class="tab-content">
                       <div class="tab-pane active show" id="tab-1">
                           <div class="row">
                               <div class="col-lg-8 details order-2 order-lg-1">
                                   <h2>{{ $sssData->sss_1_baslik }}</h2>
                                   <p> {{ $sssData->sss_1_metin }}</p>
                               </div>
                               <div class="col-lg-4 text-center order-1 order-lg-2">
                                   <img src="assets/img/features-1.png" alt="" class="img-fluid">
                               </div>
                           </div>
                       </div>
                       <div class="tab-pane" id="tab-2">
                           <div class="row">
                               <div class="col-lg-8 details order-2 order-lg-1">
                                   <h2>{{ $sssData->sss_2_baslik }}</h2>

                                   <p> {{ $sssData->sss_2_metin }}</p>

                               </div>
                               <div class="col-lg-4 text-center order-1 order-lg-2">
                                   <img src="assets/img/features-2.png" alt="" class="img-fluid">
                               </div>
                           </div>
                       </div>
                       <div class="tab-pane" id="tab-3">
                           <div class="row">
                               <div class="col-lg-8 details order-2 order-lg-1">
                                   <h2>{{ $sssData->sss_3_baslik }}</h2>

                                   <p> {{ $sssData->sss_3_metin }}</p>

                               </div>
                               <div class="col-lg-4 text-center order-1 order-lg-2">
                                   <img src="assets/img/features-3.png" alt="" class="img-fluid">
                               </div>
                           </div>
                       </div>
                       <div class="tab-pane" id="tab-4">
                           <div class="row">
                               <div class="col-lg-8 details order-2 order-lg-1">
                                   <h2>{{ $sssData->sss_4_baslik }}</h2>

                                   <p> {{ $sssData->sss_4_metin }}</p>

                               </div>
                               <div class="col-lg-4 text-center order-1 order-lg-2">
                                   <img src="assets/img/features-4.png" alt="" class="img-fluid">
                               </div>
                           </div>
                       </div>
                       <div class="tab-pane" id="tab-5">
                           <div class="row">
                               <div class="col-lg-8 details order-2 order-lg-1">
                                   <h2>{{ $sssData->sss_5_baslik }}</h2>

                                   <p> {{ $sssData->sss_5_metin }}</p>

                               </div>
                               <div class="col-lg-4 text-center order-1 order-lg-2">
                                   <img src="assets/img/features-5.png" alt="" class="img-fluid">
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>

       </div>
   </section><!-- End Features Section -->
