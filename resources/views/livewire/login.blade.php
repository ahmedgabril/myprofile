<div >
    <div class="row g-0 app-auth-wrapper">
    <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
        <div class="d-flex flex-column align-content-end">

            <div class="app-auth-body mx-auto">
                <div class="app-auth-branding mb-4"><a class="app-logo" href="index.html"><img class="logo-icon me-2" src="assets/images/app-logo.svg" alt="logo"></a></div>
                <h2 class="auth-heading text-center mb-5">تسجيل الدخول  فى One Click</h2>
                <div class="auth-form-container text-start">
                    <form class="" wire:submit.prevent="login" novalidate>
                        <div class="row">
                        <div class=" col-md-12 email mb-3 text-end" >
                            <label class="sr-only" for="signin-email">البريد الالكترونى</label>
                            <input id="signin-email" name="signin-email"
                             type="email"wire:model="data.email"
                             class=" form-control signin-email
                              @error('data.email') is-invalid @enderror"
                                placeholder="البريد الالكترونى" >

                          @error('data.email')
                          <div class="invalid-feedback text-end">
                            <strong>{{ $message }}</strong>
                            </div>
                            @enderror
                        </div><!--//form-group-->


                        <div class=" col-md-12 password mb-3">
                            <label class="sr-only" for="signin-password">كلمه المرور</label>

                            <input id="signin-password"
                             name="signin-password" type="password"
                              wire:model="data.password" class="form-control @error('data.password')
                               is-invalid @enderror signin-password" placeholder="كلمه السر"
                               />

                                 @error('data.password')
                                    <div class="invalid-feedback text-end" >
                                        <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                    </div>

                            <div class=" row extra justify-content-between" style="margin-top:30px">
                                <div class="col-6">
                                    <div class="form-check">
                                        <input class="form-check-input" wire:model.defer="data.remember_token" type="checkbox" value="" >
                                        <label class="form-check-label" >
                                       تذكرنى
                                        </label>
                                    </div>
                                </div><!--//col-6-->
                                <div class="col-6">
                                    <div class="forgot-password text-end">
                                        <a href="reset-password.html">نسيت كلمه السر?</a>
                                    </div>
                                </div><!--//col-6-->
                            </div><!--//extra-->


                        </div><!--//form-group-->
                        <div class="text-center">
                            <button type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto">تسجيل الدخول</button>
                        </div>
                        </div>
                    </form>

                </div><!--//auth-form-container-->

            </div><!--//auth-body-->

            <footer class="app-auth-footer">
                <div class="container text-center py-3">
                     <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
                <small class="copyright">Designed with <i class="fas fa-heart" style="color: #fb866a;"></i> by <a class="app-link" href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>

                </div>
            </footer><!--//app-auth-footer-->
        </div><!--//flex-column-->



    <div class="col-12 col-md-5 col-lg-6 h-100 auth-background-col">
        <div class="auth-background-holder">
        </div>
        <div class="auth-background-mask"></div>
        <div class="auth-background-overlay p-3 p-lg-5">
            <div class="d-flex flex-column align-content-end h-100">
                <div class="h-100"></div>
                <div class="overlay-content p-3 p-lg-4 rounded">
                    <h5 class="mb-3 overlay-title">Explore Portal Admin Template</h5>
                    <div> You can download and view the template license <a href="https://themes.3rdwavemedia.com/bootstrap-templates/admin-dashboard/portal-free-bootstrap-admin-dashboard-template-for-developers/">here</a>.</div>
                </div>
            </div>
        </div><!--//auth-background-overlay-->
    </div><!--//auth-background-col-->
    </div>






<div>
@push('sc')

<script>

/*
      window.addEventListener('statuserror',function(event){

Swal.fire({
icon: 'error',
title: 'Oops...',
text: 'تم ايقاف حسابك  تواصل مع الاداره',

});


return;

  });*/
  $(function() {


   Livewire.on('errorhand',function(event){

Swal.fire({
icon: 'error',
title: 'Oops...',
text: 'البيانات المدخله غير صحيحه او ربما تم ايفاق حسابك',

});


return;

  });
/*
  Livewire.on('statuserror',function(event){


Swal.fire({
icon: 'info',
title: 'تنبيه',
text: 'تم ايقاف حسابك راجع الادره  لمعرفه السبب',

//footer: '<a href="">Why do I have this issue?</a>'
});




  });
  */
  });
</script>
 @endpush

