<div>
<section id="hero" class="d-flex align-items-center" style="width: 100%;
        height: 100vh;
        background: url({{ $data->img ? asset('storage/'.$data->img):'front/ahmedgabril.jpg'}}) top center;
            background-attachment: scroll;
            background-size: auto;
            background-size: cover; ">
            <div class="container d-flex flex-column align-items-center" data-aos="zoom-in" data-aos-delay="100">
              <h1>{{$data->name}}</h1>
              <h2>{{$data->title}}</h2>
              <a class="btn btn-success mt-5" rel="download" href="{{asset('storage/'.$data->url)}}">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-download me-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"></path>
                <path fill-rule="evenodd" d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"></path>
                </svg>
                Download CSV
            </a>
              <div class="header-social-links mt-5">
                <a href="{{$sochal->twitter}}" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="{{$sochal->facebook}}" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="{{$sochal->instagram}}" class="instagram text-danger"><i class="bi bi-instagram"></i></a>
                <a href="{{$sochal->linkedin}}" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
                <a href="{{$sochal->youtube}}" class="youtube text-danger"><i class="bi bi-youtube"></i></i></a>

            </div>
            </div>
          </section><!-- End Hero -->
   <!-- ======= About Section ======= -->
         <livewire:front.aboutme/>

 <!-- End About Section -->

      <!-- ======= Services Section ======= -->
      <section id="services" class="services">
        <div class="container" data-aos="fade-up" dir="rtl">

          <div class="section-title">
            <h2>الخدمات وسابقه  الاعمال الخاصه</h2>
            <p></p>
          </div>

          <div class="row">


            <div class="col-md-4 col-sm-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('front/assets/img/serv.svg')}}"
                    style="height: 250px" class="card-img-top" alt="...">
                    <div class="card-body" >


                            <a href="{{route('services')}}" class="btn btn-outline-success d-block"
                            style="margin-top:35px">الخدمات</a>


                     </div>
                  </div>
            </div>

            <div class="col-md-4 col-sm-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('front/assets/img/port.svg')}}"
                    style="height: 250px" class="card-img-top" alt="...">
                    <div class="card-body" >

                        <a href="{{route('portfolio')}}" class="btn btn-outline-danger d-block"
                        style="margin-top:32px">سابقه الاعمال</a>


                     </div>
                  </div>
            </div>

            <div class="col-md-4 col-sm-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('front/assets/img/contactme.svg')}}"
                    style="height: 250px;" class="card-img-top" alt="...">
                    <div class="card-body" >

                        <a href="{{route('contactme')}}" class="btn btn-outline-primary d-block"
                        style="margin-top:31px">تواصل معنا </a>


                     </div>
                  </div>
            </div>



          </div>

        </div>
      </section><!-- End Services Section -->


        <!-- ======= Facts Section ======= -->
        <section id="facts" class="facts" dir="rtl">
          <div class="container" data-aos="fade-up">

            <div class="section-title">
              <h2>احصائات وتقارير</h2>

            </div>

            <div class="row counters">

              <div class="col-lg-3 col-6 text-center">
                <span data-purecounter-start="0" data-purecounter-end="{{$pro}}" data-purecounter-duration="1" class="purecounter"></span>
                <p>عدد العملاء</p>
              </div>

              <div class="col-lg-3 col-6 text-center">
                <span data-purecounter-start="0" data-purecounter-end="{{$pro}}" data-purecounter-duration="1" class="purecounter"></span>
                <p>عدد المشاريع</p>
              </div>

              <div class="col-lg-3 col-6 text-center">
                <span data-purecounter-start="0" data-purecounter-end="{{$hores}}" data-purecounter-duration="1" class="purecounter"></span>
                <p>ساعات الدعم </p>
              </div>

              <div class="col-lg-3 col-6 text-center">
                <span data-purecounter-start="0" data-purecounter-end="{{$serv}}" data-purecounter-duration="1" class="purecounter"></span>
                <p>الخدمات المقدمه</p>
              </div>

            </div>

          </div>
        </section><!-- End Facts Section -->
     {{--}}
        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
          <div class="container" data-aos="fade-up">

            <div class="section-title">
              <h2>Testimonials</h2>
              <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                    <h3>Saul Goodman</h3>
                    <h4>Ceo &amp; Founder</h4>
                    <p>
                      <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                      Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                      <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                    <h3>Sara Wilsson</h3>
                    <h4>Designer</h4>
                    <p>
                      <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                      Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                      <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                    <h3>Jena Karlis</h3>
                    <h4>Store Owner</h4>
                    <p>
                      <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                      Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                      <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                    <h3>Matt Brandon</h3>
                    <h4>Freelancer</h4>
                    <p>
                      <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                      Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                      <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                    <h3>John Larson</h3>
                    <h4>Entrepreneur</h4>
                    <p>
                      <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                      Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                      <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                  </div>
                </div><!-- End testimonial item -->

              </div>
              <div class="swiper-pagination"></div>
            </div>

          </div>
        </section><!-- End Testimonials Section -->
    {{--}}





</div>


    <!-- ======= Testimonials Section ======= -->
    @if ($feedback->count() > 0)
    <section id="testimonials" class="testimonials">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>اراء العملاء عن التعامل معنا </h2>
            <p>نحن فخورين باراء عملائنا الرائعه وجاهزون دائما لتقديم افضل مالدينا</p>
          </div>

          <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">

           @foreach ($feedback as $feed )
           <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="{{$feed->img ? asset('storage/'.$feed->img):'front/assets/img/testimonials/testimonials-5.jpg'}}" class="testimonial-img" alt="">
              <h3>{{$feed->name}}</h3>
              <h4>{{$feed->gabs}}</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                {!!$feed->feedback !!}
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->
           @endforeach


            </div>
            <div class="swiper-pagination"></div>
          </div>

        </div>
      </section><!-- End Testimonials Section -->
      <livewire:front.contact-me/>

    @endif

@push('addcss')

<style>



</style>
@endpush
@push('addjs')

<script>


</script>

@endpush
