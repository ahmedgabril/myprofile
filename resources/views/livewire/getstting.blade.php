<div>
      <div class="container">
        <div class="row mb-4">
            <div class="col-sm-4">
              <h1 class="m-0"> اعدادت الموقع  </h1>
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
              <div class="col-12 text-center mb-5 text-success text-bold" style="font-size: 25px">اضافه قسم عنى  bout me or</div>
            <div class="col-12 col-md-8 ms-auto me-auto">

                <div class="app-card app-card-settings shadow-sm p-4">

                    <div class="app-card-body">
                        <ul class="nav nav-pills mb-5" id="pills-tab" role="tablist">
                            <li class="nav-item " role="presentation">
                              <button class="nav-link {{$tapid == 0 ?'active':''}}" id="pills-home-tab"  data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">بيانتى الشخصيه </button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link {{$tapid == 1 ?'active':''}}" wire:click.prevent="$set('tapid','1')" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false"> رفع صوره </button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link {{$tapid == 2 ?'active':''}}" wire:click.prevent="$set('tapid','2')" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">رفع ملف السره الذاتيه</button>
                            </li>
                          </ul>
                          <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show {{$tapid== 0?'active':''}}" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">


                                <form class="settings-form" wire:submit.prevent="updateabout()">
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
                                        <label for="setting-input-3" class="form-label">اوصف نفسك فى 70 كلمه</label>
                                        <textarea  wire:model="form.title" rows="2" class="form-control @error("form.status")  is-invalid @enderror"></textarea>

                                        @error('form.title')
                                        <div class="invalid-feedback">
                                         {{$message}}
                                       </div>

                                        @enderror

                                    </div>




                                    <div class="mb-3 col-sm-12">
                                    <label for="setting-input-3" class="form-label">تحدث عنك نفسك باستفاضه</label>

                                    <textarea class="form-control" wire:model="form.dec" rows="4"></textarea>
                                    </div>

                                    <button type="submit" class="btn app-btn-primary ptn-center">حفظ التغيرات</button>
                                </div>
                                </form>

                            </div>
                            <div class="tab-pane fade show {{$tapid== 1 ?'active':''}}" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

                                <form wire:submit.prevent="uploadimg">

                                <div class=" col-sm-12 mb-4">
                                    @if ($img)

                                    <img src="{{$img->temporaryUrl() }}" width="100%" height="250">

                                    @else
                                    <img src="{{ asset('storage/'.$realimage)}}" width="100%" height="250">


                                   @endif
                                  </div>

                                    <div class="mb-3 col-sm-12">
                                    <label for="{{$imageid++}}" class="form-label">اختر صوره المقدمه</label>
                                    <input  class="form-control @error("img")  is-invalid @enderror" wire:model="img" accept="image/*" type="file" id="{{$imageid++}}">
                                    <div wire:loading wire:target="img"><span class="text-success" >جارى  تحميل الصوره</span></div>

                                    @error('img')
                                    <div class="invalid-feedback">
                                     {{$message}}
                                   </div>

                                    @enderror

                                </div>
                                <button type="submit" class="btn app-btn-primary ptn-center">حفظ التغيرات</button>



                                </form>


                            </div>
                            <div class="tab-pane fade show {{$tapid==2 ?'active':''}}" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">


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
                          </div>


                    </div><!--//app-card-body-->

                </div><!--//app-card-->
            </div>
        </div><!--//row-->
        <hr class="my-4">

        </div>




</div>
@push('scripts')
<script>

$(function(){
    window.addEventListener('aboutupdated',function(event){
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
title: 'تم اضافه تحديث البيانات بنجاح'
})


})
////imageupdate////

window.addEventListener('updateimg',function(event){
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
title: 'تم  تحديث بيانات الملف بنجاح'
})


})///endfunction

////url update////

window.addEventListener('updateurl',function(event){
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
title: 'تم  تحديث الصوره بنجاح'
})


})///endfunction


});///end minfunction
</script>
@endpush
