

<nav
@if (app()->getLocale() =='ar')
dir="rtl"
@endif



class="fixed z-40 flex items-center justify-between w-full py-8 mb-24 font-extrabold shadow-lg bg-neutral-50 text-neutral-600 dark:bg-neutral-900 dark:text-neutral-200 dark:shadow-black/1 lg:flex-wrap " 
data-te-navbar-ref>

<div class="px-10">
<button
class="py-3 text-xl leading-none transition-shadow duration-150 ease-in-out bg-transparent border-0 hover:text-neutral-700 focus:text-neutral-700 dark:hover:text-white dark:focus:text-white lg:hidden"
type="button"
data-te-collapse-init
data-te-target="#navbarSupportedContentX"
aria-controls="navbarSupportedContentX"
aria-expanded="false"
aria-label="Toggle navigation">
<span class="[&>svg]:w-8">
  <svg
    xmlns="http://www.w3.org/2000/svg"
    fill="none"
    viewBox="0 0 24 24"
    stroke-width="1.5"
    stroke="currentColor"
    class="w-8 h-8">
    <path
      stroke-linecap="round"
      stroke-linejoin="round"
      d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
  </svg>
</span>
</button>
<div
class="!visible hidden flex-grow basis-[100%] items-center lg:!flex lg:basis-auto justify-between"
id="navbarSupportedContentX"
data-te-collapse-item>
<ul
class="flex flex-col mr-auto lg:flex-row"
data-te-navbar-nav-ref>
    <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
        <a
          class="block transition duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:hover:text-green-700 dark:focus:text-white lg:p-2 [&.active]:text-black/90"
          href="#!"
          data-te-nav-link-ref
          data-te-ripple-init
          data-te-ripple-color="light"
          >{{ __('fnavbar.home') }}</a
        >
      </li>
      <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
        <a
          class="block transition duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:hover:text-green-700 dark:focus:text-white lg:p-2 [&.active]:text-black/90"
          href="#!"
          data-te-nav-link-ref
          data-te-ripple-init
          data-te-ripple-color="light"
          > {{ __('fnavbar.Features') }}</a
        >
      </li>
      <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
        <a
          class="block transition duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:hover:text-green-700 dark:focus:text-white lg:p-2 [&.active]:text-black/90"
          href="#!"
          data-te-nav-link-ref
          data-te-ripple-init
          data-te-ripple-color="light"
          > {{ __('fnavbar.Pricing') }}</a
        >
      </li>
      <li class="mb-2 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
        <a
          class="block transition duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:hover:text-green-700 dark:focus:text-white lg:p-2 [&.active]:text-black/90"
          href="#!"
          data-te-nav-link-ref
          data-te-ripple-init
          data-te-ripple-color="light"
          > {{ __('fnavbar.about us') }}</a
        >
      </li>
  <li class="static lg:pr-2" data-te-nav-item-ref  >

   

   

    {{-- @if (Route::has('login'))
    <div class="z-10 text-right sm:fixed sm:top-5 sm:right-11">



        @auth
            <a   href="{{ url('/dashboard') }}"  class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
        @else
            <a href="{{ route('login') }}" wire:navigate  class="mr-3 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" wire:navigate class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
            @endif
        @endauth
    </div>
@endif --}}
  </li>
 
 
 
 
  {{-- <li class="static" data-te-nav-item-ref data-te-dropdown-ref>
    <a
      class="flex items-center py-2 pr-2 transition duration-150 ease-in-out whitespace-nowrap hover:text-neutral-700 focus:text-neutral-700 dark:hover:text-green-700 dark:focus:text-white lg:px-2"
      href="#"
      data-te-ripple-init
      data-te-ripple-color="light"
      type="button"
      id="dropdownMenuButtonX"
      data-te-dropdown-toggle-ref
      aria-expanded="false"
      data-te-nav-link-ref
      > {{  __('fnavbar.Mega menu')  }}
      <span class="w-2 ml-2">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 20 20"
          fill="currentColor"
          class="w-5 h-5">
          <path
            fill-rule="evenodd"
            d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
            clip-rule="evenodd" />
        </svg>
      </span>
    </a>
    <div
      class="absolute left-0 right-0 top-full z-[1000] mt-0 hidden w-full border-none bg-white bg-clip-padding text-neutral-600 shadow-lg dark:bg-neutral-700 dark:text-neutral-200 [&[data-te-dropdown-show]]:block"
      aria-labelledby="dropdownMenuButtonX"
      data-te-dropdown-menu-ref>
      <div class="px-6 py-5 lg:px-8">
        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-4">
          <div>
            <a
              href="#!"
              aria-current="true"
              class="block w-full px-6 py-2 transition duration-150 ease-in-out border-b border-neutral-200 hover:bg-neutral-50 hover:text-neutral-700 dark:border-neutral-500 dark:hover:bg-neutral-800 dark:hover:text-white"
              >Lorem ipsum</a
            >
            <a
              href="#!"
              aria-current="true"
              class="block w-full px-6 py-2 transition duration-150 ease-in-out border-b border-neutral-200 hover:bg-neutral-50 hover:text-neutral-700 dark:border-neutral-500 dark:hover:bg-neutral-800 dark:hover:text-white"
              >Dolor sit</a
            >
            <a
              href="#!"
              aria-current="true"
              class="block w-full px-6 py-2 transition duration-150 ease-in-out border-b border-neutral-200 hover:bg-neutral-50 hover:text-neutral-700 dark:border-neutral-500 dark:hover:bg-neutral-800 dark:hover:text-white"
              >Amet consectetur</a
            >
            <a
              href="#!"
              aria-current="true"
              class="block w-full px-6 py-2 transition duration-150 ease-in-out border-b border-neutral-200 hover:bg-neutral-50 hover:text-neutral-700 dark:border-neutral-500 dark:hover:bg-neutral-800 dark:hover:text-white"
              >Cras justo odio</a
            >
            <a
              href="#!"
              aria-current="true"
              class="block w-full px-6 py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-neutral-700 dark:hover:bg-neutral-800 dark:hover:text-white"
              >Adipisicing elit</a
            >
          </div>
          <div>
            <a
              href="#!"
              aria-current="true"
              class="block w-full px-6 py-2 transition duration-150 ease-in-out border-b border-neutral-200 hover:bg-neutral-50 hover:text-neutral-700 dark:border-neutral-500 dark:hover:bg-neutral-800 dark:hover:text-white"
              >Explicabo voluptas</a
            >
            <a
              href="#!"
              aria-current="true"
              class="block w-full px-6 py-2 transition duration-150 ease-in-out border-b border-neutral-200 hover:bg-neutral-50 hover:text-neutral-700 dark:border-neutral-500 dark:hover:bg-neutral-800 dark:hover:text-white"
              >Perspiciatis quo</a
            >
            <a
              href="#!"
              aria-current="true"
              class="block w-full px-6 py-2 transition duration-150 ease-in-out border-b border-neutral-200 hover:bg-neutral-50 hover:text-neutral-700 dark:border-neutral-500 dark:hover:bg-neutral-800 dark:hover:text-white"
              >Cras justo odio</a
            >
            <a
              href="#!"
              aria-current="true"
              class="block w-full px-6 py-2 transition duration-150 ease-in-out border-b border-neutral-200 hover:bg-neutral-50 hover:text-neutral-700 dark:border-neutral-500 dark:hover:bg-neutral-800 dark:hover:text-white"
              >Laudantium maiores</a
            >
            <a
              href="#!"
              aria-current="true"
              class="block w-full px-6 py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-neutral-700 dark:hover:bg-neutral-800 dark:hover:text-white"
              >Provident dolor</a
            >
          </div>
          <div>
            <a
              href="#!"
              aria-current="true"
              class="block w-full px-6 py-2 transition duration-150 ease-in-out border-b border-neutral-200 hover:bg-neutral-50 hover:text-neutral-700 dark:border-neutral-500 dark:hover:bg-neutral-800 dark:hover:text-white"
              >Iste quaerato</a
            >
            <a
              href="#!"
              aria-current="true"
              class="block w-full px-6 py-2 transition duration-150 ease-in-out border-b border-neutral-200 hover:bg-neutral-50 hover:text-neutral-700 dark:border-neutral-500 dark:hover:bg-neutral-800 dark:hover:text-white"
              >Cras justo odio</a
            >
            <a
              href="#!"
              aria-current="true"
              class="block w-full px-6 py-2 transition duration-150 ease-in-out border-b border-neutral-200 hover:bg-neutral-50 hover:text-neutral-700 dark:border-neutral-500 dark:hover:bg-neutral-800 dark:hover:text-white"
              >Est iure</a
            >
            <a
              href="#!"
              aria-current="true"
              class="block w-full px-6 py-2 transition duration-150 ease-in-out border-b border-neutral-200 hover:bg-neutral-50 hover:text-neutral-700 dark:border-neutral-500 dark:hover:bg-neutral-800 dark:hover:text-white"
              >Praesentium</a
            >
            <a
              href="#!"
              aria-current="true"
              class="block w-full px-6 py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-neutral-700 dark:hover:bg-neutral-800 dark:hover:text-white"
              >Laboriosam</a
            >
          </div>
          <div>
            <a
              href="#!"
              aria-current="true"
              class="block w-full px-6 py-2 transition duration-150 ease-in-out border-b border-neutral-200 hover:bg-neutral-50 hover:text-neutral-700 dark:border-neutral-500 dark:hover:bg-neutral-800 dark:hover:text-white"
              >Cras justo odio</a
            >
            <a
              href="#!"
              aria-current="true"
              class="block w-full px-6 py-2 transition duration-150 ease-in-out border-b border-neutral-200 hover:bg-neutral-50 hover:text-neutral-700 dark:border-neutral-500 dark:hover:bg-neutral-800 dark:hover:text-white"
              >Saepe</a
            >
            <a
              href="#!"
              aria-current="true"
              class="block w-full px-6 py-2 transition duration-150 ease-in-out border-b border-neutral-200 hover:bg-neutral-50 hover:text-neutral-700 dark:border-neutral-500 dark:hover:bg-neutral-800 dark:hover:text-white"
              >Vel alias</a
            >
            <a
              href="#!"
              aria-current="true"
              class="block w-full px-6 py-2 transition duration-150 ease-in-out border-b border-neutral-200 hover:bg-neutral-50 hover:text-neutral-700 dark:border-neutral-500 dark:hover:bg-neutral-800 dark:hover:text-white"
              >Sunt doloribus</a
            >
            <a
              href="#!"
              aria-current="true"
              class="block w-full px-6 py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-neutral-700 dark:hover:bg-neutral-800 dark:hover:text-white"
              >Cum dolores</a
            >
          </div>
        </div>
      </div>
    </div>
  </li> --}}



  <div class="relative pt-3" data-te-dropdown-ref="" data-te-dropdown-alignment="end">
    <!-- First dropdown trigger -->
    <a class="flex items-center ml-2 mr-2 text-gray-500 transition duration-200 hidden-arrow hover:text-green-500 hover:ease-in-out focus:text-red-500 disabled:text-black/30 motion-reduce:transition-none dark:text-white" href="#" id="dropdownMenuButton1" role="button" data-te-dropdown-toggle-ref="" aria-expanded="false">
      <!-- Dropdown trigger icon -->
      <span class="[&amp;>svg]:w-5">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="inline-block w-6 h-6">
            <path fill-rule="evenodd" d="M9.528 1.718a.75.75 0 01.162.819A8.97 8.97 0 009 6a9 9 0 009 9 8.97 8.97 0 003.463-.69.75.75 0 01.981.98 10.503 10.503 0 01-9.694 6.46c-5.799 0-10.5-4.701-10.5-10.5 0-4.368 2.667-8.112 6.46-9.694a.75.75 0 01.818.162z" clip-rule="evenodd"></path>
          </svg>
          <path fill-rule="evenodd" d="M5.25 9a6.75 6.75 0 0113.5 0v.75c0 2.123.8 4.057 2.118 5.52a.75.75 0 01-.297 1.206c-1.544.57-3.16.99-4.831 1.243a3.75 3.75 0 11-7.48 0 24.585 24.585 0 01-4.831-1.244.75.75 0 01-.298-1.205A8.217 8.217 0 005.25 9.75V9zm4.502 8.9a2.25 2.25 0 104.496 0 25.057 25.057 0 01-4.496 0z" clip-rule="evenodd"></path>
        </svg>
      </span>
      <!-- Notification counter -->
 
    </a>
    <!-- First dropdown menu -->
    <ul class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-neutral-700 [&amp;[data-te-dropdown-show]]:block" aria-labelledby="dropdownMenuButton1" data-te-dropdown-menu-ref="" style="">
      <!-- First dropdown menu items -->
      <li>


        <a
        id="theme-switcher"
        class="block w-full px-3 py-2 text-sm font-normal text-gray-700 bg-transparent whitespace-nowrap hover:bg-gray-100 focus:bg-gray-200 focus:outline-none active:text-zinc-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-gray-400 dark:text-gray-100 dark:hover:bg-gray-600 focus:dark:bg-gray-600"
        href="#"
        data-theme="light">
        <div class="pointer-events-none">
          <div
            class="inline-block w-[24px] text-center"
            data-theme-icon="light">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24"
              fill="currentColor"
              class="inline-block w-6 h-6">
              <path
                d="M12 2.25a.75.75 0 01.75.75v2.25a.75.75 0 01-1.5 0V3a.75.75 0 01.75-.75zM7.5 12a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM18.894 6.166a.75.75 0 00-1.06-1.06l-1.591 1.59a.75.75 0 101.06 1.061l1.591-1.59zM21.75 12a.75.75 0 01-.75.75h-2.25a.75.75 0 010-1.5H21a.75.75 0 01.75.75zM17.834 18.894a.75.75 0 001.06-1.06l-1.59-1.591a.75.75 0 10-1.061 1.06l1.59 1.591zM12 18a.75.75 0 01.75.75V21a.75.75 0 01-1.5 0v-2.25A.75.75 0 0112 18zM7.758 17.303a.75.75 0 00-1.061-1.06l-1.591 1.59a.75.75 0 001.06 1.061l1.591-1.59zM6 12a.75.75 0 01-.75.75H3a.75.75 0 010-1.5h2.25A.75.75 0 016 12zM6.697 7.757a.75.75 0 001.06-1.06l-1.59-1.591a.75.75 0 00-1.061 1.06l1.59 1.591z" />
            </svg>
          </div>
          <span data-theme-name="light">Light</span>
        </div>
      </a>
        

      </li>
      <li>
        <a
        id="theme-switcher"
        class="block w-full px-3 py-2 text-sm font-normal text-gray-700 bg-transparent whitespace-nowrap hover:bg-gray-100 focus:bg-gray-200 focus:outline-none active:text-zinc-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-gray-400 dark:text-gray-100 dark:hover:bg-gray-600 focus:dark:bg-gray-600"
        href="#"
        data-theme="dark"
        data-te-dropdown-item-ref>
        <div class="pointer-events-none">
          <div
            class="inline-block w-[24px] text-center"
            data-theme-icon="dark">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24"
              fill="currentColor"
              class="inline-block w-6 h-6">
              <path
                fill-rule="evenodd"
                d="M9.528 1.718a.75.75 0 01.162.819A8.97 8.97 0 009 6a9 9 0 009 9 8.97 8.97 0 003.463-.69.75.75 0 01.981.98 10.503 10.503 0 01-9.694 6.46c-5.799 0-10.5-4.701-10.5-10.5 0-4.368 2.667-8.112 6.46-9.694a.75.75 0 01.818.162z"
                clip-rule="evenodd" />
            </svg>
          </div>
          <span data-theme-name="dark">Dark</span>
        </div>
        
      </a>
      </li>
      <li>
        <a
        id="theme-switcher"
        class="block w-full px-3 py-2 text-sm font-normal text-gray-700 bg-transparent whitespace-nowrap hover:bg-gray-100 focus:bg-gray-200 focus:outline-none active:text-zinc-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-gray-400 dark:text-gray-100 dark:hover:bg-gray-600 focus:dark:bg-gray-600"
        href="#"
        data-theme="system"
        data-te-dropdown-item-ref>
        <div class="pointer-events-none">
          <div
            class="inline-block w-[24px] text-center"
            data-theme-icon="system">
            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" class="inline-block w-4" role="img" viewBox="0 0 640 512">
              <path fill="currentColor" d="M128 32C92.7 32 64 60.7 64 96V352h64V96H512V352h64V96c0-35.3-28.7-64-64-64H128zM19.2 384C8.6 384 0 392.6 0 403.2C0 445.6 34.4 480 76.8 480H563.2c42.4 0 76.8-34.4 76.8-76.8c0-10.6-8.6-19.2-19.2-19.2H19.2z"></path>
            </svg>
          </div>
          <span data-theme-name="system">system</span>
        </div>
        
      </a>
      </li>
    </ul>
  </div>

  <div class=" {{ app()->getLocale() =='en' ? 'ml-auto pr-5':'mr-auto pl-5' }}">

<div class="relative" data-te-dropdown-ref>
    <button
      class="flex items-center whitespace-nowrap rounde bg-transparent px-6 pb-2 pt-2.5 text-xs font-extrabold uppercase leading-normal text-white 

      type="button"
      id="dropdownMenuMediumButton"
      data-te-dropdown-toggle-ref
      aria-expanded="false"
      data-te-ripple-init
      data-te-ripple-color="light">
      <img src="{{
       app()->getLocale() =='en' ?  asset('united.svg') :asset('egypt.svg')}}" width="30" height="30"/> 
      {{-- {{ LaravelLocalization::getCurrentLocaleNative() }} --}}
      <span class="w-2 ml-2">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 20 20"
          fill="currentColor"
          class="w-5 h-5">
          <path
            fill-rule="evenodd"
            d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
            clip-rule="evenodd" />
        </svg>
      </span>
    </button>
    <ul style="font-family: 'Cairo', sans-serif!important"
      class="absolute  z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-neutral-700 [&[data-te-dropdown-show]]:block"
      aria-labelledby="dropdownMenuMediumButton"
      data-te-dropdown-menu-ref>


      @foreach(config('app.supportedLocales') as $localekey => $data)
        
  
      <li>
          <a wire:navigate     class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600"

       
          data-te-dropdown-item-ref rel="alternate"
           hreflang="
           
           {{ $localekey }}" 
           href="{{ route('locale',$localekey) }}">
      

           <img src="{{
            $data['name'] == 'English' ?  asset('united.svg') :asset('egypt.svg')}}" width="40" height="40"/> 

           {{ $data['name'] }} 
          </a>
      </li>
  @endforeach

     
    
    </ul>
  </div>




</div>


</ul>

</div>


</div>
<div class="px-8 logo ">


  <img src="{{ asset('logo (5).png') }}" width="260" height="160" alt="logo">


</div>

</nav>
@push('scripts')
<script>

    // On page load or when changing themes, best to add inline in `head` to avoid FOUC
    (function () {
  if (localStorage.theme === 'dark' || (!('theme'
 
in
 
localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    document.documentElement.classList.add('dark');
  } else {
    document.documentElement.classList.remove('dark');
  };
  
  function setDarkTheme() {
    document.documentElement.classList.add('dark');
    localStorage.theme = 'dark';
  };
  
  function setLightTheme() {
    document.documentElement.classList.remove('dark');
    localStorage.theme = 'light';
  };
  function setSystemTheme() {
  if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
    setDarkTheme();
  } else {
    setLightTheme();
  }
}

  function onThemeSwitcherItemClick(event) {
    const theme = event.target.dataset.theme;
    
    if (theme === 'system') {
      localStorage.removeItem('theme');
      setSystemTheme();
    } else if (theme === 'dark') {
      setDarkTheme();
    } else {
      setLightTheme();
    }
  };
  
  const themeSwitcherItems = document.querySelectorAll('#theme-switcher');
  themeSwitcherItems.forEach((item) => {
    item.addEventListener('click', onThemeSwitcherItemClick);
  });
})();
  </script> 
@endpush