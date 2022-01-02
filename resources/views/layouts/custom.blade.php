<!DOCTYPE html>
<html lang="en">
<head>
    <title> Admin Dashboard </title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="myprofil">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- FontAwesome JS-->
    <script defer src="assets/plugins/fontawesome/js/all.min.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">

    <!-- App CSS -->
    <!--<link id="theme-style" rel="stylesheet" href="assets/css/portal.css">-->
    <link id="" rel="stylesheet" href="/assets/css/rtl/light.css">

    <style>
        html,body{
            font-family: 'Cairo', sans-serif!important;
        }
        </style>


  @stack('styles')


  <!--<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>-->
  @livewireStyles






</head>
<body class="app app-login p-0">


      {{$slot}}





  <!-- ChartJS -->

  @livewireScripts
  <!-- Javascript -->

  <script src="/assets/plugins/jquery/jquery.min.js"></script>

  <script type="text/javascript" src="{{asset('js/app.js')}}"></script>


@stack('sc')



</body>
</html>
