<div>
    <div class="container">
      <div class="row mb-4">
          <div class="col-sm-4">
            <h1 class="m-0"> قسم من انا وتغير اللوجو</h1>
          </div><!-- /.col -->
          <div class="col-sm-8">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"><a class="ml-3" href="/home">الرئيسه</a>/</li>

              <li class="breadcrumb-item active"> <a href="">الصلاحيات</a></li>
              <li class="breadcrumb-item active"> <a href="http://127.0.0.1:8000/roles">الوظائف</a></li>

              <li class="breadcrumb-item active"> <a href="http://127.0.0.1:8000/user">المستخدمين</a></li>
              <li class="breadcrumb-item active"> <a href="http://127.0.0.1:8000/setting">الاعدادت</a></li>

            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
    </div>



      <hr class="mb-4">
      <div class="container-xl">
      <div class="row mb-4">
            <div class="col-12 text-center mb-5 text-success text-bold" style="font-size: 25px"> قسم من انا   وتغير اللوجو</div>
          <div class="col-12 col-md-8 ms-auto me-auto">

              <div class="app-card app-card-settings shadow-sm p-4">

                     <div class="app-card-body" x-data="{tab : 0}">
                      <ul class="nav nav-pills mb-5" id="pills-tab" role="tablist">
                          @can('بياناتى الشخصيه')
                          <li class="nav-item ">
                              <button class="nav-link":class="tab === 0 ?'active':''" x-on:click.prevent="tab = 0"  >بيانتى الشخصيه </button>
                            </li>
                          @endcan
                          @can('صوره الموقع الرئيسه')

                          <li class="nav-item">
                            <button class="nav-link" :class="tab === 1 ?'active':''" x-on:click.prevent="tab = 1"   type="button"   > صوره الموقع الرئيسه </button>
                          </li>
                          @endcan
                          @can('رفع ملف السيره الذاتيه')
                          <li class="nav-item" >
                            <button class="nav-link" :class="tab === 2 ?'active':''" x-on:click.prevent="tab = 2"  type="button"   >رفع ملف السره الذاتيه</button>
                          </li>
                          @endcan
                          @can('روابط التواصل الاجتماعى')
                          <li class="nav-item" >
                              <button class="nav-link" :class="tab === 3 ?'active':''" x-on:click.prevent="tab =3"  type="button"   > روابط التواصل الاجتماعى</button>
                            </li>
                            @endcan
                            @can('لوجو الموقع الرئيسى')
                          <li class="nav-item" >
                              <button class="nav-link" :class="tab === 4 ?'active':''" x-on:click.prevent="tab =4"  type="button"   >لوجو الموقع الرئيسى</button>
                            </li>
                            @endcan
                        </ul>
                        <div class="">
                          <div class="" x-show="tab === 0" >

                              <form  wire:submit.prevent="updateabout()">
                                  <div class="row">
                                      <div class="col-sm-6 form-group">
                                          <label for="">اسم المستخدم</label>
                                            <input class="form-control @error("form.name")  is-invalid
                                           @enderror"  type="text"
                                            wire:model="form.name"

                                             placeholder="(اجبارى*)اسم المستخدم"/>
                                            @error('form.name')
                                           <div class="invalid-feedback">
                                            {{$message}}
                                          </div>

                                           @enderror

                                       </div>
                                       <div class="col-sm-6 form-group">
                                          <label > حاله الحساب </label>
                                             <div class="@error("form.status")  is-invalid @enderror">

                                              <select class="form-control"style="padding-top:1px" wire:model="form.status">
                                                  <option >اختر حاله الحساب</option>

                                                  <option value="1">

                                                      مفعل
                                                  </option>
                                                  <option value="0">
                                                    غير مفعل

                                              </option>


                                              </select>
                                             </div>

                                            @error('form.status')
                                           <div class="invalid-feedback">
                                            {{$message}}
                                          </div>

                                           @enderror

                                       </div>


                                  <div class="mb-3 col-sm-12">
                                      <label for="setting-input-3" class="form-label">اوصف نفسك فى 30حرف </label>
                                      <textarea  wire:model="form.title" rows="2" class="form-control @error("form.title")  is-invalid @enderror"></textarea>

                                      @error('form.title')
                                      <div class="invalid-feedback">
                                       {{$message}}
                                     </div>

                                      @enderror

                                  </div>

                                  <div class="mb-4" x-data="{ description: @entangle('description').defer }"

                                  x-init="$watch('description', function (value) {
                                             $refs.trix.editor.loadHTML(value)
                                             var length = $refs.trix.editor.getDocument().toString().length
                                             $refs.trix.editor.setSelectedRange(length - 1)
                                             }
                                         )" wire:ignore>

                                         <label for="setting-input-3" class="form-label">تحدث عنك نفسك باستفاضه</label>
                                 @error('description')
                                 <span class="error d-inline-block"><i class="mdi mdi-alert-circle"> </i> {{$message}}</span>
                                 @enderror
                                 <input name="description" id="description" type="hidden" x-model="description">
                                 <div x-on:trix-change.debounce.1000ms="description = $refs.trix.value">
                                     <trix-editor x-ref="trix" input="description" class="overflow-y-scroll"
                                                  style="height: 20rem; "></trix-editor>
                                 </div>



                                  <button type="submit" class="btn app-btn-primary ptn-center mt-4">حفظ التغيرات</button>
                              </div>

                                  </div>
                              </form>

                          </div>


                          <div class=" " x-show="tab === 1"  >

                              <form wire:submit.prevent="uploadimg">
                                  @if ($img)
                              <div class=" col-sm-12 mb-4">


                                      <a wire:click.prevent="removeimage()" style="cursor: pointer" class="text-danger">
                                      x
                                          <img src="{{$img->temporaryUrl() }}" width="100%" height="250">

                                      </a>



                                </div>

                                @else

                                <div class=" col-sm-12 mb-4">
                                <img src="{{$realimage!==null? asset('storage/'.$realimage):'assets/images/No_image.jpg'}}" width="100%" height="250">

                            </div>
                                @endif


                                  <div class="mb-3 col-sm-12">
                                  <label for="{{$imageid++}}" class="form-label">اختر صوره المقدمه</label>
                                  <input  class="form-control @error("img")  is-invalid @enderror"
                                   wire:model="img" accept="image/*"

                                  type="file" id="{{$imageid++}}"/>
                                  <div wire:loading wire:target="img">
                                      <span class="text-success" >جارى  تحميل الصوره</span></div>

                                  @error('img')
                                  <div class="invalid-feedback">
                                   {{$message}}
                                 </div>

                                  @enderror

                              </div>
                              <button type="submit" class="btn app-btn-primary ptn-center">حفظ التغيرات</button>



                              </form>


                          </div>
                          <div class=" " x-show="tab === 2" >


                              <form wire:submit.prevent="uploadurl">
                              <div class="mb-3 col-sm-12">
                                  <label for="formFile" class="form-label">ملف السيره الذاتيه</label>
                                  <input class="form-control  @error("url")  is-invalid @enderror" wire:model="url" accept="" type="file" id="">
                                  <div wire:loading wire:target="url"><span class="text-success" >جارى  تحميل الملفات</span></div>

                                  @error('url')
                                  <div class="invalid-feedback">
                                   {{$message}}
                                 </div>

                                  @enderror

                              </div>
                              <button type="submit" class="btn app-btn-primary ptn-center">حفظ التغيرات</button>

                              </form>
                          </div>


                          <div class=" " x-show="tab === 3" >


                              <form class="" wire:submit.prevent="updatesoshal()" novalidate>
                                  <div class="row">
                                      <div class="col-sm-12 form-group">
                                          <label for="">facebook</label>
                                            <input class="form-control @error("formsochail.facebook")  is-invalid
                                           @enderror"  type="url"
                                            wire:model="formsochail.facebook"

                                           />
                                            @error('formsochail.facebook')
                                           <div class="invalid-feedback">
                                            {{$message}}
                                          </div>

                                           @enderror

                                       </div>
                                       <div class="col-sm-12 form-group">
                                          <label for=""> instgram</label>
                                            <input class="form-control @error("formsochail.instgram")  is-invalid
                                           @enderror"  type="url"
                                            wire:model="formsochail.instgram"

                                           />
                                            @error('formsochail.instgram')
                                           <div class="invalid-feedback">
                                            {{$message}}
                                          </div>

                                           @enderror

                                       </div>
                                       <div class="col-sm-12 form-group">
                                          <label > حاله الحساب </label>
                                             <div class="@error("formsochail.setstatus")  is-invalid @enderror">

                                              <select class="form-control"style="padding-top:1px"
                                               wire:model="formsochail.setstatus">
                                                  <option >اختر حاله الحساب</option>

                                                  <option value="1">

                                                      مفعل
                                                  </option>
                                                  <option value="0">
                                                    غير مفعل

                                              </option>


                                              </select>
                                             </div>

                                            @error('formsochail.setstatus')
                                           <div class="invalid-feedback">
                                            {{$message}}
                                          </div>

                                           @enderror

                                       </div>
                                       <div class="col-sm-12 form-group">
                                          <label for=""> linkedin</label>
                                            <input class="form-control @error("formsochail.linkedin")  is-invalid
                                           @enderror"  type="url"
                                            wire:model="formsochail.linkedin"

                                           />
                                            @error('formsochail.linkedin')
                                           <div class="invalid-feedback">
                                            {{$message}}
                                          </div>

                                           @enderror

                                       </div>
                                       <div class="col-sm-12 form-group">
                                          <label for=""> youtube</label>
                                            <input class="form-control @error("formsochail.youtube")  is-invalid
                                           @enderror"  type="url"
                                            wire:model="formsochail.youtube"

                                           />
                                            @error('formsochail.youtube')
                                           <div class="invalid-feedback">
                                            {{$message}}
                                          </div>

                                           @enderror

                                       </div>
                                       <div class="col-sm-12 form-group">
                                          <label for=""> twitter</label>
                                            <input class="form-control @error("formsochail.twitter")  is-invalid
                                           @enderror"  type="url"
                                            wire:model="formsochail.twitter"

                                           />
                                            @error('formsochail.twitter')
                                           <div class="invalid-feedback">
                                            {{$message}}
                                          </div>

                                           @enderror

                                       </div>
                                       <div class="col-sm-12 form-group">
                                          <label for=""> gmail</label>
                                            <input class="form-control @error("formsochail.gmail")  is-invalid
                                           @enderror"  type="email"
                                            wire:model="formsochail.gmail"

                                           />
                                            @error('formsochail.gmail')
                                           <div class="invalid-feedback">
                                            {{$message}}
                                          </div>

                                           @enderror

                                       </div>





                                  <button type="submit" class="btn app-btn-primary ptn-center mt-4">حفظ التغيرات</button>
                              </div>
                              </form>
                          </div>
                          <div class=" " x-show="tab === 4" >


                              <form wire:submit.prevent="uploadelogo">
                                  @if ($logo)
                                  <div class=" col-sm-12 mb-4">


                                          <a wire:click.prevent="removelogo()" style="cursor: pointer" class="text-danger">
                                          x
                                              <img src="{{$logo->temporaryUrl()}}" width="100%" height="250">

                                          </a>



                                    </div>
                                    @else

                                    <div class=" col-sm-12 mb-4 mt-4 ">
                                      <img src="{{$getlogo!==null? asset('storage/'.$getlogo):'assets/images/No_image.jpg'}}" width="100%" height="250">

                                  </div>

                                     @endif
                                  <div class="col-sm-12 form-group mb-4 ">
                                      <label >لوجو الموقع الرئيسى </label>
                                        <input type="file"
                                         class="form-control @error("logo") is-invalid @enderror"

                                        accept="image/*"
                                         wire:model="logo"/>


                                         <div wire:loading wire:target="logo">

                                          <div class="d-flex justify-content: center mt-4 mb-4">
                                              <div class="d-flex align-items-center">
                                                  <strong class="ms-4 text-success">جارى التحميل</strong>
                                                  <div class="spinner-border ml-auto text-success" role="status" aria-hidden="true"></div>
                                                </div>

                                           </div>
                                         </div>
                                      @error('icon')
                                      <div class="invalid-feedback">
                                       {{$message}}
                                     </div>

                                      @enderror



                                   </div>

                              <button type="submit" class="btn app-btn-primary ptn-center">حفظ التغيرات</button>

                              </form>
                          </div>
                        </div>


                  </div><!--//app-card-body-->

              </div><!--//app-card-->
          </div>
      </div><!--//row-->
      <hr class="my-4">

      </div>




</div>

@push('styles')
<link rel="stylesheet" href="{{asset('trix/trix.css')}}"/>

@endpush

@push('scripts')
<script type="text/javascript" src="{{asset('trix/trix.js')}}"></script>

<script>
$(function(){
  window.addEventListener('update',function(event){
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
title: event.detail.message
})
})
////imageupdate////
});///end minfunction
</script>
@endpush
