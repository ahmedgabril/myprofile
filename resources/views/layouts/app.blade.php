<!DOCTYPE html>
<html lang="en">
<head>
    <title>Portal - Bootstrap 5 Admin Dashboard Template For Developers</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- FontAwesome JS-->
    <script defer src="assets/plugins/fontawesome/js/all.min.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">

    <!-- App CSS -->
    <!--<link id="theme-style" rel="stylesheet" href="assets/css/portal.css">-->



   <!-- <link id="lightm" rel="stylesheet" media="(prefers-color-scheme:light)"
     href="assets/css/rtl/light.css">-->

            @if(auth()->user()->name == auth()->user()->name && auth()->user()->darkmode !== 0)
            <link id="" rel="stylesheet"
            href="assets/css/rtl/dark.css">
            @else
            <link id="" rel="stylesheet"
            href="assets/css/rtl/light.css">
            @endif
  @stack('styles')


  <!--<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>-->
  @livewireStyles


  <style>
    html,body{
        font-family: 'Cairo', sans-serif!important;
    }
       @media print {

           button,a,select,input{
           display: none!important;

           }


       }
       .loader{
           position: fixed;
           top :0;
           left:0;
           background-color: #191c24;
           display:flex;
           justify-content: center;
           align-items: center;
           height: 100%;
           width:100%;
           z-index: 1000000;

       }
       .disaper{
           animation: pre 1.4s forwards;


       }
       @keyframes pre {
        50%{
               opacity: 1.1;

           }
           70%{
               opacity: 0.4;

           }
           100%{
               opacity: 0;
               visibility: hidden;
           }
       }
       </style>




</head>

<body class="app">

     	 <div class="loader disaper flex-column justify-content-center align-items-center">
        <img  src="assets/img/pre3.gif" alt="ahmedgabril" height="170" width="170" >

     </div>




    <!-- BEGIN: Header-->


      @include("baespage/header")





  <div class="app-wrapper">

    <div class="app-content pt-3 p-md-3 p-lg-4">





           {{$slot}}








      <!-- /.content-header -->


      <!-- Main content -->




<!-- ./wrapper -->
<footer class="app-footer">
    <div class="container text-center py-3">
         <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
    <small class="copyright">Designed with <i class="fas fa-heart" style="color: #fb866a;"></i> by <a class="app-link" href="#" target="_blank">AhmedGabril</a></small>

    </div>
</footer><!--//app-footer-->
@livewireScripts
   <!-- Javascript -->

   <script src="/assets/plugins/jquery/jquery.min.js"></script>

   <script type="text/javascript" src="{{asset('/js/app.js')}}"></script>

<!-- jQuery -->

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<script>

   $(function(){


    $('.loader').addClass("disaper");
     window.Livewire.on("update-darkmode",function(){

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
  title: 'تم اضافه تحديث حاله الوضع الليلى بنجاح'
});



    });

   @if (session()->has('message'))
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
  title: 'welecom ..{{ session('message') }} '
})
/*
Swal.fire({
  position: 'top-start',
   toast: true,
   timerProgressBar: true,
  icon: 'success',
  title: 'welecom ..{{ session('message') }} ',
  showConfirmButton: false,
  timer: 2500
})*/
@endif

  });
</script>


@stack('scripts')

   <script src="/assets/plugins/popper.min.js"></script>
   <script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
{{--}}
   <!-- Charts JS -->
   <script src="/assets/plugins/chart.js/chart.min.js"></script>
   <script src="/assets/js/index-charts.js"></script>
{{--}}
   <!-- Page Specific JS -->
   <script src="/assets/js/app.js"></script>

</body>
</html>

