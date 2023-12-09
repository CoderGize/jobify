 <div class="container-fluid px-vw-5 position-relative" data-aos="fade">
     <div class="position-absolute w-100 h-50 bg-black top-0 start-0"></div>
     <div class="position-relative py-vh-5 bg-cover bg-center rounded-5" style="background-image: url(/images/bg.webp)">
         <div class="container bg-black px-vw-5 py-vh-3 rounded-5 shadow">
             <div class="row d-flex align-items-center">

                 <div class="col-12 col-sm-6 text-center text-md-center mb-5">
                     <span class="h5 text-secondary fw-lighter">{!! $counter->title1 !!}</span>
                     <h2 class="display-huge fw-bolder" data-aos="zoom-in-left">+{{ $counter->num1 }}</h2>
                     <p class="h4 fw-lighter text-secondary">
                         {!! $counter->text1 !!}
                     </p>
                 </div>
                 <div class="col-12 col-sm-6 text-center text-md-center mb-5">
                     <span class="h5 text-secondary fw-lighter">{!! $counter->title2 !!}</span>
                     <h2 class="display-huge fw-bolder" data-aos="zoom-in-left">+{{ $counter->num2 }}</h2>
                     <p class="h4 fw-lighter text-secondary">
                         {!! $counter->text2 !!}
                     </p>
                 </div>
                 <div class="col-12 col-sm-6 text-center text-md-center mt-5">
                     <span class="h5 text-secondary fw-lighter">{!! $counter->text !!}</span>
                     <h2 class="display-huge fw-bolder" data-aos="zoom-in-left">+{{ $counter->num3 }}</h2>
                     <p class="h4 fw-lighter text-secondary">
                         {!! $counter->text3 !!}
                     </p>
                 </div>
                 <div class="col-12 col-sm-6 text-center text-md-center mt-5">
                     <span class="h5 text-secondary fw-lighter">{!! $counter->title4 !!}</span>
                     <h2 class="display-huge fw-bolder" data-aos="zoom-in-left">+{{ $counter->num4 }}</h2>
                     <p class="h4 fw-lighter text-secondary">
                         {!! $counter->text4 !!}
                     </p>
                 </div>
             </div>
         </div>

     </div>
 </div>
