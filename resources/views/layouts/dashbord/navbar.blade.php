<!-- Main navigation container -->


<nav

@if (LaravelLocalization::getCurrentLocaleDirection() =='rtl')
dir="rtl"
@endif
  class=" fixed flex-no-wrap  flex w-full items-center justify-between bg-[#FBFBFB] py-2  shadow-md shadow-black/5 dark:bg-neutral-800 dark:shadow-black/10 lg:flex-wrap lg:justify-start lg:py-4 pb-2 ">
  <div class="flex items-center justify-center w-full px-3 py-3 flex-nowrap">
    
    <!-- Collapsible navigation container -->
    <div
      class=" flex-grow basis-[100%] items-center lg:!flex lg:basis-auto justify-start"
      id="navbarSupportedContent12"
      data-te-collapse-item>
      <!-- Logo -->

      <!-- Left navigation links -->
      <button
      class=" ml-8 inline-block rounded bg-gray-600 px-4 py-2.5 text-xs font-medium uppercase leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-primary-700 hover:shadow-lg focus:bg-primary-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-primary-800 active:shadow-lg"
      data-te-sidenav-toggle-ref
      data-te-target="#sidenav-6"
      aria-controls="#sidenav-6"
      aria-haspopup="true">
      <span class="block [&>svg]:h-5 [&>svg]:w-5 [&>svg]:text-white">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 24 24"
          fill="currentColor"
          class="w-5 h-2">
          <path
            fill-rule="evenodd"
            d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
            clip-rule="evenodd" />
        </svg>
      </span>
    </button>
    </div>

    <!-- Right elements -->
    <div class=" {{ LaravelLocalization::getCurrentLocaleDirection() =='ltr' ? 'ml-auto ':'mr-auto' }}">

      <div class="relative" data-te-dropdown-ref
      
      ">
          <button
            class="flex items-center whitespace-nowrap rounde bg-transparent px-2 pb-2 pt-2.5 text-xs font-extrabold uppercase leading-normal text-white 
      
            type="button"
            id="dropdownMenuMediumButton"
            data-te-dropdown-toggle-ref
            aria-expanded="false"
            data-te-ripple-init
            data-te-ripple-color="light">
            <img src="{{
              LaravelLocalization::getCurrentLocaleNative() == 'English' ?  asset('united.svg') :asset('egypt.svg')}}" width="25" height="25"/> 
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
      
      
            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
        
            <li wire:key="{{ $localeCode }}">
                <a
              
                class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600"
      
           
                data-te-dropdown-item-ref
                wire:navigate
                 rel="alternate"
                 hreflang="
                 {{ $localeCode }}" 
                 href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
            
      
                 <img src="{{
                  $properties['native'] == 'English' ?  asset('united.svg') :asset('egypt.svg')}}" width="25" height="25"/> 
{{ app()->getLocale() }}
                </a>
            </li>
        @endforeach
    
      
     
          

          
          </ul>
        </div>
      
      
      
      
      </div>
      
  




    <!--darkmode-->


    <div class="relative " data-te-dropdown-ref="" data-te-dropdown-alignment="end">
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
  




    
      <!-- Container with two dropdown menus -->

      
      {{-- <div
        class="relative"
        data-te-dropdown-ref
        data-te-dropdown-alignment="end">
        <!-- First dropdown trigger -->
        <a
          class="flex items-center ml-3 mr-6 text-gray-500 transition duration-200 hidden-arrow hover:text-green-500 hover:ease-in-out focus:text-red-400 disabled:text-black/30 motion-reduce:transition-none dark:text-white"
          href="#"
          id="dropdownMenuButton1"
          role="button"
          data-te-dropdown-toggle-ref
          aria-expanded="false">
          <!-- Dropdown trigger icon -->
          <span class="[&>svg]:w-5">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24"
              fill="currentColor"
              class="w-5 h-5">
              <path
                fill-rule="evenodd"
                d="M5.25 9a6.75 6.75 0 0113.5 0v.75c0 2.123.8 4.057 2.118 5.52a.75.75 0 01-.297 1.206c-1.544.57-3.16.99-4.831 1.243a3.75 3.75 0 11-7.48 0 24.585 24.585 0 01-4.831-1.244.75.75 0 01-.298-1.205A8.217 8.217 0 005.25 9.75V9zm4.502 8.9a2.25 2.25 0 104.496 0 25.057 25.057 0 01-4.496 0z"
                clip-rule="evenodd" />
            </svg>
          </span>
          <!-- Notification counter -->
          <span
            class="absolute -mt-4 ml-2.5 rounded-full bg-danger px-[0.35em] py-[0.15em] text-[0.6rem] font-bold leading-none text-white"
            >1</span
          >
        </a>
        <!-- First dropdown menu -->
        <ul
          class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-neutral-700 [&[data-te-dropdown-show]]:block"
          aria-labelledby="dropdownMenuButton1"
          data-te-dropdown-menu-ref>
          <!-- First dropdown menu items -->
          <li>
            <a
              class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-white/30"
              href="#"
              data-te-dropdown-item-ref
              >Action</a
            >
          </li>
          <li>
            <a
              class="block w-full py-2 text-sm font-normal bg-transparent px- whitespace-nowrap text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-white/30"
              href="#"
              data-te-dropdown-item-ref
              >Another action</a
            >
          </li>
          <li>
            <a
              class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-white/30"
              href="#"
              data-te-dropdown-item-ref
              >Something else here</a
            >
          </li>
        </ul>
     
     
     
     
     
     
     
     
      </div> --}}

      <!-- Second dropdown container -->

    
      <div
        class="relative"
        data-te-dropdown-ref
        data-te-dropdown-alignment="end">
        <!-- Second dropdown trigger -->
        <a
          class="flex items-center transition duration-150 ease-in-out hidden-arrow whitespace-nowrap motion-reduce:transition-none"
          href="#"
          id="dropdownMenuButton2"
          role="button"
          data-te-dropdown-toggle-ref
          aria-expanded="false">
          <!-- User avatar -->
          <img
            src="https://tecdn.b-cdn.net/img/new/avatars/2.jpg"
            class="rounded-full"
            style="height: 25px; width: 25px"
            alt=""
            loading="lazy" />
        </a>
        <!-- Second dropdown menu -->
        <ul
          class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-neutral-700 [&[data-te-dropdown-show]]:block"
          aria-labelledby="dropdownMenuButton2"
          data-te-dropdown-menu-ref>
          <!-- Second dropdown menu items -->
          <li>
            <a
           
              class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-white/30"
              href="{{ route('dashboard') }}"
              data-te-dropdown-item-ref
              >name : {{ auth()->user()->name ??'' }}</a
            >
          </li>
          <li>
            <a
            wire:navigate
              class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-white/30"
              href="    {{ route('profile') }}"
              data-te-dropdown-item-ref
              >{{ __('sidenav.profile') }}</a
            >
          </li>
          <li>
            <a
         
              class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-white/30"
              href="#"
              wire:click="logout"
              data-te-dropdown-item-ref
              >{{ __('sidenav.logout') }}</a
            >
          </li>
        </ul>
      </div>
    
    
    </div>
  </div>
</nav>

@script()
{{-- 

  window.addEventListener('DOMContentLoaded', function () {

    {{ LaravelLocalization::getCurrentLocale() == 'en'? app()->setLocale('en'): app()->setLocale('ar')}}
      {{-- window.addEventListener('languageChanged', function (event) {
          this.$data.language = event.detail;
      }); --}}
  }); 
   --}}

  </script>

@endscript