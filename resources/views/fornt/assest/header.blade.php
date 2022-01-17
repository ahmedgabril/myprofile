<header id="header" class="fixed-top">
    <div class="container-fluid d-flex justify-content-between align-items-center">

      <h1 class="logo me-auto me-lg-0"><a href="/"><img src="{{asset('storage/'.getlogo())}}"></a>{{getsitename()}}</h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="{{request()->is('/')?'active':''}}" href="{{route('home')}}">الرئيسه</a></li>
          <li><a class="{{request()->is('aboutme')?'active':''}}" href="{{route('aboutme')}}">من انا</a></li>
          <li><a class="{{request()->is('services')?'active':''}}" href="{{route('services')}}">الخدمات</a></li>
          <li><a class="{{request()->is('portfolio')?'active':''}}" href="{{route('portfolio')}}">سابقه الاعمال </a></li>
          <li><a class="{{request()->is('contactme')?'active':''}}" href="{{route('contactme')}}">تواصل معنا </a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->



    </div>

  </header><!-- End Header -->
