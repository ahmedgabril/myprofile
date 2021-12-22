<div>

    <main id="main" style="padding-top:35px">
        <section id="hero" class="d-flex align-items-center" style="width: 100%;
        height: 100vh;
        background: url({{asset('storage/'.$data->img)}}) top center;
            background-attachment: scroll;
            background-size: auto;
            background-size: cover; ">
            <div class="container d-flex flex-column align-items-center" data-aos="zoom-in" data-aos-delay="100">
              <h1>{{$data->name}}</h1>
              <h2>{{$data->title}}</h2>
              <a href="about.html" class="btn-about">download Cv</a>
            </div>
          </section><!-- End Hero -->
        <!-- ======= About Section ======= -->
        <section id="about" class="about">
          <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>عنى </h2>
                <p></p>
              </div>

            <div class="card mb-3" style="max-width: 1190px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="{{asset('storage/'.$data->img)}}" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title text-center mb-4">{{$data->name}}</h5>
                      <p class="card-text  text-center text-wrap text-primary mb-4">
                        {{$data->title}}
                      </p>
                      <div class="text-center text-wrap">
                        {{$data->dec}}
                      </div>
                    </div>
                  </div>
                </div>
              </div>


        </section><!-- End About Section -->

        <!-- ======= Skills Section ======= -->
        <section id="skills" class="skills">
          <div class="container" data-aos="fade-up">

            <div class="section-title">
              <h2>المهارات</h2>
              <p></p>
            </div>

            <div class="row skills-content">


                @foreach ($getskills as $skill )
                <div class="col-lg-6">
                <div class="progress">
                   <span class="skill">{{$skill->name}} <i class="val {{ $skill->rate < 50 ?'text-danger':'text-success'}}">{{$skill->rate}}%</i></span>
                   <div class="progress-bar-wrap">
                     <div class="progress-bar" role="progressbar" aria-valuenow="{{$skill->rate}}" aria-valuemin="0" aria-valuemax="100"></div>
                   </div>
                 </div>
                </div>
                @endforeach



              </div>


          </div>
        </section><!-- End Skills Section -->

        <!-- ======= Facts Section ======= -->
        <section id="facts" class="facts">
          <div class="container" data-aos="fade-up">

            <div class="section-title">
              <h2>احصائات وتقارير</h2>

            </div>

            <div class="row counters">

              <div class="col-lg-3 col-6 text-center">
                <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                <p>عدد العملاء</p>
              </div>

              <div class="col-lg-3 col-6 text-center">
                <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                <p>عدد المشاريع</p>
              </div>

              <div class="col-lg-3 col-6 text-center">
                <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                <p>ساعات الدعم </p>
              </div>

              <div class="col-lg-3 col-6 text-center">
                <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                <p>العمل الشاق</p>
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




        <section id="services" class="services">
            <div class="container aos-init aos-animate" data-aos="fade-up">

              <div class="section-title">
                <h2>الخدمات</h2>
              </div>



              <div class="row" dir="rtl">
                  @foreach ($getserives as $key => $services )
                  <div class="col-md-4 col-sm-6 d-flex  aos-init aos-animate mb-4" data-aos="zoom-in" data-aos-delay="100">

                  <div class="card" style="border: 1px solid rgb(255 250 250 / 13%)!important;">
                    <div>
                      <img src="{{$services->icon!== null? asset('storage/'.$services->icon):'assets/images/no-image-en.png'}}" style="height: 160px;" class="card-img-top" alt="...">

                    </div>
                    <div class="card-body">
                    <h4><a href="#services">{{ $services->name}}</a></h4>
                      <p class="card-text" style="height: 165px;">{{Str::substr($services->title,0,200)}}<a href="#" class="text-danger"> المزيد..</a></p>
                      <div class="d-flex justify-content-between" >
                        <span>
                            <button class="btn btn-outline-success btn-sm" type="button"
                            data-bs-target="#showdec"
                            data-bs-toggle="modal" wire:click.prevent="getserdec({{$services->id}})">تفاصيل الخدمه</button>

                          </span>
                          <button type="button" class="btn btn-outline-danger  btn-sm text-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"></path>
                                    <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"></path>
                                    <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"></path>
                                    <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"></path>
                                    </svg>
                                    {{ $services->price}}
                          </button>

                       </div>

                    </div>
                  </div>
                </div>

                  @endforeach

              </div>

            </div>



            <div class="modal fade " id="showdec" wire:ignore.self dir="rtl" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                <div class="modal-dialog modal-fullscreen-xxl-down">
                  <div class="modal-content">
                    <div class="modal-header" >
                      <h5 class="modal-title" id="showdec">تفاصيل الخدمه</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body"  >
                     @if ($getserdata)
                     @foreach ($getserdata as $item )
                     <div class="card mb-3">
                        <h2 class=" mb-4 mt-4 text-center"><a href="#services">{{ $item->name}}</a></h2>

                        <img src="{{$item->icon!== null? asset('storage/'.$item->icon):'assets/images/no-image-en.png'}}" style="height: 400px;"
                         class="card-img-top mb-4 mt-4" alt="...">


                        @if ($item->img)
                        <img src="{{$item->img}}" style="height: 400px;" class="card-img-top mb-4 mt-4" alt="...">

                        @endif
                        @if ($item->url)
                        <div class="col-12 mt-5 mb-5">
                            <iframe width="100%" height="450"
                            {{parse_str( parse_url( $item->url, PHP_URL_QUERY ), $my_array_of_vars )}}
                             src="https://www.youtube.com/embed/{{$my_array_of_vars['v']}}" title="YouTube video player"
                             frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                         </div>
                        @endif
                        <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text">
                            {{$item->title}}
                        </p>
                        <div class="col-12 card-text">
                           {{$item->dec}}

                        </div>


                        <p class="card-text mb-4 mt-4"><small class="text-muted">تاريخ انشاء المشروع :{{$item->created_at?$item->created_at->diffForHumans():''}}</small></p>
                    <span class="text-bold text-danger">سعر المشروع : {{$item->price}}</span>
                    </div>
                     </div>
                     @endforeach
                     @endif



                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">الغاء</button>
                    </div>
                     </div>
                </div>
              </div>
            </div>
          </section>

          <section id="portfolio" class="portfolio">
            <div class="container aos-init aos-animate" data-aos="fade-up">

              <div class="section-title">
                <h2>Portfolio</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
              </div>

              <div class="row aos-init" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12 d-flex justify-content-center">
                  <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-app">App</li>
                    <li data-filter=".filter-card">Card</li>
                    <li data-filter=".filter-web">Web</li>
                  </ul>
                </div>
              </div>

              <div class="row portfolio-container aos-init" data-aos="fade-up" data-aos-delay="200" style="position: relative; height: 927.567px;">

                <div class="col-lg-4 col-md-6 portfolio-item filter-app" style="position: absolute; left: 0px; top: 0px;">
                  <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <h4>App 1</h4>
                      <p>App</p>
                      <div class="portfolio-links">
                        <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web" style="position: absolute; left: 320px; top: 0px;">
                  <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <h4>Web 3</h4>
                      <p>Web</p>
                      <div class="portfolio-links">
                        <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app" style="position: absolute; left: 640px; top: 0px;">
                  <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <h4>App 2</h4>
                      <p>App</p>
                      <div class="portfolio-links">
                        <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card" style="position: absolute; left: 640px; top: 196.5px;">
                  <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <h4>Card 2</h4>
                      <p>Card</p>
                      <div class="portfolio-links">
                        <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web" style="position: absolute; left: 320px; top: 228.467px;">
                  <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <h4>Web 2</h4>
                      <p>Web</p>
                      <div class="portfolio-links">
                        <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app" style="position: absolute; left: 0px; top: 330.067px;">
                  <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <h4>App 3</h4>
                      <p>App</p>
                      <div class="portfolio-links">
                        <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card" style="position: absolute; left: 640px; top: 422.217px;">
                  <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <h4>Card 1</h4>
                      <p>Card</p>
                      <div class="portfolio-links">
                        <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card" style="position: absolute; left: 640px; top: 644.35px;">
                  <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <h4>Card 3</h4>
                      <p>Card</p>
                      <div class="portfolio-links">
                        <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web" style="position: absolute; left: 320px; top: 700.934px;">
                  <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <h4>Web 3</h4>
                      <p>Web</p>
                      <div class="portfolio-links">
                        <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                      </div>
                    </div>
                  </div>
                </div>

              </div>

            </div>
          </section>
        </main><!-- End #main -->


</div>
