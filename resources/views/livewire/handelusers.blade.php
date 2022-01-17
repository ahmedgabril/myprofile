<div>
    <div class="container">
        <div class="row mb-4">
            <div class="col-sm-4">
              <h1 class="m-0">اداره بيانات الحساب </h1>
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


    <div class="contianer-xl">

        <div class="row mb-4">


      <div class=" col-sm-8 me-auto ms-auto app-card app-card-settings shadow-sm p-4">

        <div class="app-card-body" x-data="{tab : 1}">
         <ul class="nav nav-pills mb-5" id="pills-tab" role="tablist">
             <li class="nav-item ">
               <button class="nav-link " :class="tab === 1 ?'active':''" x-on:click.prevent="tab = 1">بيانتى الشخصيه </button>
             </li>
             <li class="nav-item">
               <button class="nav-link" :class="tab === 3 ?'active':''" x-on:click.prevent="tab = 3" type="button"> تغير كلمه السر</button>
             </li>
             <li class="nav-item">
                <button class="nav-link" :class="tab === 2 ?'active':''" x-on:click.prevent="tab = 2" type="button"> تغير صوره الحساب </button>
              </li>

           </ul>
           <div class="">
             <div class="" x-show="tab ===1">

                 <form wire:submit.prevent="userinfo()">
                     <div class="row">
                         <div class="col-sm-12 form-group">
                             <label for="">اسم المستخدم</label>
                               <input class="form-control @error("name")  is-invalid

                               @enderror" dir="auto" type="text"
                               wire:model="name" >
                               @error('name')
                               <div class="invalid-feedback">
                                {{$message}}
                              </div>

                               @enderror


                          </div>
                          <div class="col-sm-12 form-group mb-4">
                            <label for=""> البريد الالكترونى</label>
                              <input class="form-control @error("email")  is-invalid

                              @enderror" dir="auto"  type="text"
                              wire:model="email" >
                              @error('email')
                              <div class="invalid-feedback">
                               {{$message}}
                             </div>

                              @enderror

                         </div>


                     <button type="submit" class="btn app-btn-primary ptn-center">حفظ التغيرات</button>
                 </div>
                 </form>

             </div>

             <div class=" " x-show="tab === 3" style="display: none;" autocomplete="off">


                <form wire:submit.prevent="changepassword">


                      <div class="col-sm-12 form-group mb-4 ">
                        <label> تغير كلمه السر</label>

                          <input type="password"class="form-control
                          @error("password")  is-invalid

                          @enderror" wire:model="password" autocomplete="new-password"/>

                          @error('password')
                          <div class="invalid-feedback">
                           {{$message}}
                         </div>

                          @enderror
                     </div>


                <button type="submit" class="btn app-btn-primary ptn-center">حفظ التغيرات</button>

                </form>
            </div>

             <div class=" " x-show="tab === 2" style="display: none;">

                 <form wire:submit.prevent="userimage">

                   <div class=" col-sm-12 mb-4">

                        @if ($image)
                        <div class=" col-sm-12 mb-4">


                                <a wire:click.prevent="removeuserimage()" style="cursor: pointer" class="text-danger">
                                x
                                    <img src="{{$image->temporaryUrl()}}" width="100%" height="250">

                                </a>

                          </div>
                          @else

                          <div class=" col-sm-12 mb-4 mt-4 ">
                            <img src="{{$realimage ? asset('storage/'.$realimage):'assets/images/No_image.jpg'}}" width="100%" height="250">

                        </div>

                           @endif
                        <div class="col-sm-12 form-group mb-4 ">
                            <label >الصوره الشخصيه</label>
                              <input type="file"
                               class="form-control @error("image") is-invalid @enderror"

                              accept="image/*"
                               wire:model="image"/>


                               <div wire:loading wire:target="image">

                                <div class="d-flex justify-content: center mt-4 mb-4">
                                    <div class="d-flex align-items-center">
                                        <strong class="ms-4 text-success">جارى التحميل</strong>
                                        <div class="spinner-border ml-auto text-success" role="status" aria-hidden="true"></div>
                                      </div>

                                 </div>
                               </div>
                            @error('image')
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

              </div>

          </div>
        </div>
</div>
@push('scripts')
<script>

$(function(){
    window.addEventListener('upadetuser',function(event){
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
window.addEventListener('upadetimage',function(event){
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
$("#userprofile").attr("src",`${event.detail.img}`);

})


});

</script>

@endpush
