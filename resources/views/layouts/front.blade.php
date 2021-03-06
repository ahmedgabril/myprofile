<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{$title}}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ getlogo() !== null ?asset('storage/'.getlogo()):'front/assets/img/apple-touch-icon.png'}}" rel="icon">
  <link href="{{asset('front/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
  <script defer src="../assets/plugins/fontawesome/js/all.min.js"></script>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('front/assets/vendor/aos/aos.css')}}"  rel="stylesheet">
  <link href="{{asset('front/assets/vendor/bootstrap/css/bootstrap.min.css')}}"      rel="stylesheet">
  <link href="{{asset('front/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('front/assets/vendor/boxicons/css/boxicons.min.css')}}"     rel="stylesheet">
  <link href="{{asset('front/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('front/assets/vendor/swiper/swiper-bundle.min.css')}}"   rel="stylesheet">
@stack('addcss')
  <!-- Template Main CSS File -->
  <link href="{{asset('front/assets/css/rtl.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Kelly - v4.7.0
  * Template URL: https://bootstrapmade.com/kelly-free-bootstrap-cv-resume-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
    html,body{
        font-family: 'Cairo', sans-serif!important;
    }
    </style>
    @livewireStyles
    {{-- <script async src='https://stackwhats.com/pixel/fae5b4ebfe5977b7607ff1d47dec9a'></script> --}}

</head>

<body>

    @include('fornt.assest.header')


      <main id="main" style="padding-top:36px">

       {{$slot}}
      </main>
      <div class="whatsup">
        <a href="https://wa.me/{{'+2'.getwhatsupnumber()}}?text={{getwhatsupmsg()}}">

            <i class="bi bi-whatsapp" style="font-size: 31px;
            color: white;
            padding: 1px 0px 0px 0px;"></i>
        </a>

    </div>
    @include('fornt.assest.footer')
    <div id="preloader"></div>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
@livewireScripts
    <!-- Vendor JS Files -->
    <script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>

    <script src="{{asset('front/assets/vendor/purecounter/purecounter.js')}}"></script>
    <script src="{{asset('front/assets/vendor/aos/aos.js')}}"></script>
    <script src="{{asset('front/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('front/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{asset('front/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('front/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('front/assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
    <script src="{{asset('front/assets/vendor/php-email-form/validate.js')}}"></script>
@stack('addjs')
    <!-- Template Main JS File -->
    <script src="{{asset('front/assets/js/main.js')}}"></script>

  </body>

  </html>
