<div>

    <section id="services" class="services">
        <div class="container aos-init aos-animate" data-aos="fade-up">

          <div class="section-title">
            <h2>الخدمات</h2>
          </div>



          <div class="row" dir="rtl">
              @if ($getserives)


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
               <div class="row mt-5 mb-5">
                   <div class="col-sm-8 me-auto ms-auto d-flex justify-content-center">
                    {{$getserives->links()}}
                   </div>

                </div>
              @endif

          </div>

        </div>




        <div class="modal fade " id="showdec" wire:ignore.self dir="rtl" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
            <div class="modal-dialog  modal-fullscreen-xxl-down">
              <div class="modal-content" style="background-color:#eee">
                <div class="modal-header" >
                  <h5 class="modal-title" id="showdec">تفاصيل الخدمه</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="text-center" wire:loading>
                    <div class="spinner-border" role="status">
                      <span class="visually-hidden">Loading...</span>
                    </div>
                  </div>
                <div class="modal-body" wire:loading.remove>



                      @if ($getserdata)
                 @foreach ($getserdata as $item )
                 <div class="card mb-3">
                    <h2 class=" mb-4 mt-4 text-center"><a href="#services">{{ $item->name}}</a></h2>


                    @if ($item->img)
                    <div class="contianer">
                        <div class="row">

                            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    @foreach ($item->img as $index=>$img )
                                    <div class="carousel-item {{$index == 0?'active':''}}" data-bs-interval="5000">
                                        <img src="{{asset('storage/'.$img )}}"
                                        class="d-block w-100" style="height: 450px; background-size: cover">
                                    </div>
                                    @endforeach
                                </div>

                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                              </div>





                        </div>
                    </div>


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
                    <p class="card-text mt-4 mb-5" style="background-color: black;
                    color: #fff;
                    padding: 23px;">
                        {{$item->title}}
                    </p>
                    @if ($item->dec)


                    <div class="col-12 card-text" style="line-height: normal;
                    background-color: black;
                    color: #fff;
                    padding: 23px;">


                       {!!$item->dec!!}

                    </div>
                     @endif

                    <ul class="list-group">
                        <li class="list-group-item">
                     <span class="text-bold text-danger">سعر المشروع : {{$item->price}}
                    </span>
                        </li>
                        <li class="list-group-item"><p class="card-text mb-4 mt-4">
                            <small class="text-muted" style="color: #a1a8af!important">تاريخ انشاء المشروع :{{$item->created_at?$item->created_at->diffForHumans():''}}
                            </small></p></li>
                            <li class="list-group-item ">
                            وسائل الدفع المتاحه حاليا فودافون كاش
                                     </li>
                                     <li class="list-group-item ">
            ضمان استرداد الاموال خلال 14 يوم من تاريخ الشراء طبقا للشروط والاحكام
                                    </li>
                        <li class="list-group-item "><button class="btn btn-success">اشترى الخدمه الان </button> </li>

                      </ul>



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

</div>
