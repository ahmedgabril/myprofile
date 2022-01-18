<div>

    <div class="container-xl" >
        <div class="row mb-4">
            <div class="col-sm-4">
              <h1 class="m-0">الاعدادت العامه </h1>
            </div><!-- /.col -->
            <div class="col-sm-8">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active"><a class="ml-3" href="/home">الرئيسه</a>/</li>

                <li class="breadcrumb-item active"> <a href="">الصلاحيات</a></li>
                <li class="breadcrumb-item active"> <a href="{{route('role')}}">الوظائف</a></li>

                <li class="breadcrumb-item active"> <a href="{{route('getuser')}}">المستخدمين</a></li>
                <li class="breadcrumb-item active"> <a href="{{route('setting')}}">الاعدادت</a></li>

              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->


        <hr class="mb-4">
        <div class="row  settings-section">

            <div class="col-12 col-md-9 ms-auto me-auto" >

                <div class="app-card app-card-settings shadow-sm p-4" x-data="{open:true}">
                   <div class="cad-header">
                    <div class="mb-3 col-sm-2">
                        <div class="form-check form-switch mb-3">
                            <input class="form-check-input"
                             style="margin-top: 44px; cursor: pointer;"
                             type="checkbox"   x-on:click="open = ! open" checked="">
                        </div>

                    </div>
                    <div class="mb-3 col-sm-9 me-auto ms-auto text-center">
                        <label for="setting-input-1" class="form-label">بيانات الموقع<span class="ms-2" data-container="body" data-bs-toggle="popover" data-trigger="hover" data-placement="top" data-content="This is a Bootstrap popover example. You can use popover to provide extra info."><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                        <path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z"></path>
                        <circle cx="8" cy="4.5" r="1"></circle>
                        </svg></span></label>
                    </div>
                   </div>
                   <div  x-show="open" x-collapse>


                    <div class="app-card-body">

                        <form class="settings-form" wire:submit.prevent="updatesetting()">
                            <div class="row">
                            <div class="mb-3 col-sm-12 ">
                                <label for="setting-input-1" class="form-label">  اسم الموقع (حد اقصى 20 حرف لانه يستخدم بجوار اللوجو بواجهه الموقع)<span class="ms-2" data-container="body" data-bs-toggle="popover" data-trigger="hover" data-placement="top" data-content="This is a Bootstrap popover example. You can use popover to provide extra info."><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                <path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z"></path>
                                <circle cx="8" cy="4.5" r="1"></circle>
                                </svg></span></label>
                                <input type="text"wire:model="form.compnyname"
                                class="form-control @error("form.compnyname")  is-invalid
                                @enderror" id="setting-input-1" >

                                @error('form.compnyname')
                                <div class="invalid-feedback">
                                 {{$message}}
                               </div>
                               @enderror
                            </div>

                            <div class="mb-3 col-sm-6 ">
                                <label for="setting-input-3" class="form-label"> المدير العام</label>
                                <input type="text" wire:model="form.manger" class="form-control" id="setting-input-3" >
                            </div>

                            <div class="mb-3 col-sm-6">
                                <label for="setting-input-3" class="form-label">البريد الالكترونى</label>
                                <input type="email" wire:model="form.email" class="form-control" id="setting-input-3" >
                            </div>

                            <div class="mb-3 col-sm-6">
                                <label for="setting-input-3" class="form-label">رقم الموبايل</label>
                                <input type="number" wire:model="form.phone" class="form-control" id="setting-input-3" >
                            </div>

                            <div class="mb-3 col-sm-6">
                                <label for="setting-input-3" class="form-label">تليفون اخر</label>
                                <input type="number"wire:model="form.phone2" class="form-control" id="setting-input-3" >
                            </div>
                            <div class="mb-3 col-sm-12">
                            <label for="setting-input-3" class="form-label"> العنوان</label>

                            <textarea class="form-control"wire:model="form.address" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn app-btn-primary ptn-center">حفظ التغيرات</button>
                        </div>
                        </form>
                    </div><!--//app-card-body-->
                </div>
                </div><!--//app-card-->
            </div>
        </div><!--//row-->
        <hr class="my-4">

        </div><!--//row-->





        <hr class="mb-4">
        <div class="row  settings-section">

            <div class="col-12 col-md-9 ms-auto me-auto" >

                <div class="app-card app-card-settings shadow-sm p-4" x-data="{open:true}">
                   <div class="cad-header">
                    <div class="mb-3 col-sm-2">
                        <div class="form-check form-switch mb-3">
                            <input class="form-check-input"
                             style="margin-top: 44px; cursor: pointer;"
                             type="checkbox"   x-on:click="open = ! open" checked="">
                        </div>

                    </div>
                    <div class="mb-3 col-sm-9 me-auto ms-auto text-center">
                        <label for="setting-input-1" class="form-label"> قسم اعدادت الوتس اب <span class="ms-2" data-container="body" data-bs-toggle="popover" data-trigger="hover" data-placement="top" data-content="This is a Bootstrap popover example. You can use popover to provide extra info."><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                        <path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z"></path>
                        <circle cx="8" cy="4.5" r="1"></circle>
                        </svg></span></label>
                    </div>
                   </div>
                   <div  x-show="open" x-collapse>


                    <div class="app-card-body">

                        <form class="settings-form" wire:submit.prevent="handelwhatsup" >
                            <div class="row">


                            <div class="mb-3 col-sm-12">
                                <label for="setting-input-3" dir="ltr" class="form-label">رقم الموبايل</label>
                                <span>ملحوظه: [ رقم الموبايل  صالح لمصر فقط ويكتب بدون كود الدوله]</span>
                                <input type="text" wire:model="whatsup" class="form-control
                                 @error("whatsup")  is-invalid
                                @enderror"  >

                                @error('whatsup')
                                <div class="invalid-feedback">
                                 {{$message}}
                               </div>
                               @enderror
                            </div>

                            <div class="mb-3 col-sm-12">
                            <label for="setting-input-3" class="form-label"> نص  الرساله الترحبيه </label>

                            <textarea class="form-control"wire:model="whatsupmsg" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn app-btn-primary ptn-center">حفظ التغيرات</button>
                        </div>
                        </form>
                    </div><!--//app-card-body-->
                </div>
                </div><!--//app-card-->
            </div>
        </div><!--//row-->
        <hr class="my-4">
        <div class="row" style="margin-bottom: 30px">

                    {{--}}
                <div class="col-12 col-md-6 ms-auto me-auto ">
                <div class="app-card app-card-settings shadow-sm p-4">
                    <div class="card-header">
                      <div class="row">
                        <div class="mb-3 col-sm-2">
                            <button type="button" class="btn btn-tool" id="setting" data-card-widget="collapse">
                                <i class="fas fa-minus pluss"></i>
                              </button>

                          </div>
                        <div class="mb-3 col-sm-6 me-auto ms-auto text-center">
                            <label for="setting-input-1" class="form-label">اعدادت البرنامج<span class="ms-2" data-container="body" data-bs-toggle="popover" data-trigger="hover" data-placement="top" data-content="This is a Bootstrap popover example. You can use popover to provide extra info."><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                            <path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z"></path>
                            <circle cx="8" cy="4.5" r="1"></circle>
                            </svg></span></label>
                        </div>
                      </div>

                      </div>

                        <div class="app-card-body setting">
                            <form class="settings-form">

                                <div class="form-check mb-3">
                                    <input class="form-check-input" wire:change="activedarkmode" type="checkbox" wire:model="darkmode"  id="settings-checkbox-3" style="cursor: pointer">
                                    <label class="form-check-label" for="settings-checkbox-3" style="cursor:pointer">
                                      الوضع الليلى
                                    </label>
                                </div>



                            </form>
                        </div><!--//app-card-body-->


                </div><!--//app-card-->
             </div>
             {{--}}
        </div><!--//row-->




  </div><!--end min container-->
</div>
@push('styles')
<link rel="stylesheet" href="{{asset('phonecode/css/intlTelInput.css')}}">
@endpush
@push("scripts")

<script src="{{asset('phonecode/js/intlTelInput.js')}}"></script>

{{-- <script>
    var input = document.querySelector("#phone");

   var iti =  window.intlTelInput(input, {
    utilsScript: "{{asset('phonecode/js/intlTelInput.js')}}",

      allowDropdown: true,
      // autoHideDialCode: false,
      //autoPlaceholder: "off",
    //   dropdownContainer: document.body,
    //   excludeCountries: ["us"],
    //   formatOnDisplay: false,
    //   geoIpLookup: function(callback) {
    //     $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
    //       var countryCode = (resp && resp.country) ? resp.country : "";
    //       callback(countryCode);
    //     });
    //   },
      // hiddenInput: "full_number",
      // initialCountry: "auto",
      // localizedCountries: { 'de': 'Deutschland' },
      // nationalMode: true,
      // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
      // placeholderNumberType: "MOBILE",
       preferredCountries: ['eg', 'jp'],
      separateDialCode: true,

    });
    input.addEventListener("change",function(event){
        alert(iti);
    @this.set('whatsup',event.value);

    });
  </script> --}}
<script>
   $(function(){


      $("#publicst").on("click",function(){
        $(".plus").toggleClass("fas fa-plus");

       $(".publicst").slideToggle();



      });
      $("#setting").on("click",function(){
       $(".setting").slideToggle();
       $(".pluss").toggleClass("fas fa-plus");


      });

   });

   window.addEventListener('update-compny-info',function(event){
   const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 4500,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})

Toast.fire({
  icon: 'success',
  title: 'تم تحديث البيانات بنجاح'
})
   });

</script>
@endpush
