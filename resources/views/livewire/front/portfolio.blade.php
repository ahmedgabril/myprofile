<div>


        <section id="portfolio" class="portfolio" style="padding-top: 50px!important">
            <div class="container aos-init aos-animate" data-aos="fade-up">

              <div class="section-title">
                <h2>معرض الاعمال</h2>
              </div>

              </div>
              <div class="row aos-init aos-animate"  data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12 d-flex justify-content-center">
                  <ul id="portfolio-flters">
                <li class="{{$getdata == 0?'filter-active':''}}" wire:click="getall()" >الكل</li>

                    @if ($cat)
                    @foreach ($cat as $index=>$catitem)

                    <li wire:click="getportf({{$catitem->id}})"    class="{{ $catitem->id == $getdata ?'filter-active':'' }} ">

                        {{$catitem->name}}</li>
                    @endforeach
                    @endif

                  </ul>
                </div>
              </div>



              <div class="text-center portfilo" wire:loading>
                <div class="spinner-border" role="status" style="overflow: hidden">
                   </div>

               </div>


              <div class="row" dir="rtl" wire:loading.remove wire:target="getportf">
                  @if ($getalldata)


                  @foreach ($getalldata as $key => $services )
                  <div class="col-md-4 col-sm-6 d-flex  aos-init aos-animate mb-4" data-aos="zoom-in" data-aos-delay="100">

                  <div class="card" style="border: 1px solid rgb(255 250 250 / 13%)!important;">
                    <div>
                      <img src="{{$services->icon!== null? asset('storage/'.$services->icon):'assets/images/no-image-en.png'}}" style="height: 225px;" class="card-img-top" alt="...">

                    </div>
                    <div class="card-body">
                    <h4><a href="#services">{{ $services->name}}</a></h4>
                      <p class="card-text" style="height: 95px;">{{Str::substr($services->title,0,130)}}<a href="#" class="text-danger"   data-bs-target="#showdec"
                        data-bs-toggle="modal" wire:click.prevent="getserdec({{$services->id}})"> {{ $services->title < Str::substr($services->title,0,70)?'اكمل القراءه':''}}</a></p>
                      <div class="d-flex justify-content-between" >
                        <span>
                            <button class="btn btn-outline-success btn-sm" type="button"
                            data-bs-target="#showdec"
                            data-bs-toggle="modal" wire:click.prevent="getserdec({{$services->id}})">تفاصيل المشروع</button>

                          </span>
                          <a  class="btn btn-outline-danger  btn-sm text-bold" href="{{ $services->project_url}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-link-45deg" viewBox="0 0 16 16">
                                <path d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z"/>
                                <path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243L6.586 4.672z"/>
                              </svg>
                                    رابط الموقع
                                </a>

                       </div>

                    </div>
                  </div>
                </div>

                  @endforeach
                  <div class="row mt-5 mb-5">
                    <div class="col-sm-8 me-auto ms-auto d-flex justify-content-center">
                     {{$getalldata->links()}}
                    </div>

                 </div>
                  @endif

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
                        <div class="contianer" style="    background-color: #212328;">
                            <div class="row">
                                <h2 class=" mb-4 mt-4 text-center"><a href="#services">{{ $item->name}}</a></h2>

                            </div>
                           </div>

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

                        @if ($item->video_url)
                        <div class="col-12 mt-5 mb-5">
                            <iframe width="100%" height="450"
                            {{parse_str( parse_url($item->video_url, PHP_URL_QUERY ), $my_array_of_vars )}}
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
                         <span class="text-bold text-success ms-4">
                              اسم المشروع :
                        </span>
                        {{$item->name}}
                            </li>
                            <li class="list-group-item">
                                <span class="text-bold text-success ms-4">
                                     اسم العميل :
                               </span>
                               {{$item->clint_name!== null ?$item->clint_name:'لم يتم ذكر اسم العميل  من قبل الاداره' }}
                                   </li>
                            <li class="list-group-item ">
                                <p class="card-text text-muted mb-4 mt-4">
                                <small class="text-muted ms-4">تاريخ انشاء المشروع :
                                </small>
                                {{$item->created_at?$item->created_at->diffForHumans():'لم يتم ادخال تاريخ انشاء المشروع من قبل الاداره'}}</p></li>

                            <li class="list-group-item "><a class="btn btn-success" href="{{$item->project_url}}"> الذهاب الى موقع المشروع  </a> </li>

                          </ul>



                    </div>
                     </div>
                     @endforeach
                     @endif



                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-danger btn-lg" data-bs-dismiss="modal">الغاء</button>
                    </div>
                     </div>

                </div>
              </div>
            </div>

          </section>


    </div>





