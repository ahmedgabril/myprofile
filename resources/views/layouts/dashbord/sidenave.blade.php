<!-- Sidenav -->
<nav
@if(app()->getLocale() =='ar')
dir="rtl"

@else
dir="ltr"

@endif
style="margin-top: 72px; {{ app()->getLocale() =='en'  ? 'transform: translateX(-100%)':''}}"
  id="sidenav-6"
 class="fixed   {{ app()->getLocale() =='en' ?
 'left-0':'right-0 '}} overflow-hidden  top-0 z-[1035] h-screen w-60 translate-x-full
 data-[te-sidenav-hidden='true']:-translate-x-0
 bg-white shadow-[0_4px_12px_0_rgba(0,0,0,0.07),_0_2px_4px_rgba(0,0,0,0.05)]



 dark:bg-zinc-800 "
 data-te-sidenav-init
 data-te-sidenav-accordion="true"
 @if (app()->getLocale() =='en' )
 data-te-sidenav-hidden="true" 

@endif
@if (app()->getLocale() =='ar')
 
data-te-sidenav-right="true"  
@endif
>
  <ul class="relative m-0   list-none px-[0.2rem]" data-te-sidenav-menu-ref>
    <hr class="my-4" />
    <li class="relative ">
      <a wire:navigate
      href="{{   route('homepage')  }}"
        class=" {{ request()->routeIs('homepage')?'bg-green-700 text-gray-100 dark:text-100 hover:bg-green-700 hover:text-gray-100':''}} flex h-12 cursor-pointer items-center truncate rounded-[5px] px-6 py-4 text-[1.2rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
        data-te-sidenav-link-ref>
        <span
          class="mr-2 {{ app()->getLocale() =='ar' ? 'ml-4':''}}[&>svg]:h-4 [&>svg]:w-4 [&>svg]:text-gray-400 dark:[&>svg]:text-gray-300">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            class="w-4 h-4">
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M15.182 15.182a4.5 4.5 0 01-6.364 0M21 12a9 9 0 11-18 0 9 9 0 0118 0zM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75zm-.375 0h.008v.015h-.008V9.75zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75zm-.375 0h.008v.015h-.008V9.75z" />
          </svg>
        </span>
        <span class="mr-2 ">{{ __('sidenav.dashboard') }}</span>
      </a>
    </li>
    <hr class="my-4" />
    <li class="relative">
      <a
        class=" {{ request()->routeIs('handelcategory')?'bg-green-700 text-gray-100 dark:text-100 hover:bg-green-700 hover:text-gray-100':''}} flex h-12 cursor-pointer items-center truncate rounded-[5px] px-6 py-4 text-[1.2rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
        data-te-sidenav-link-ref>
        <span
          class="mr-2 {{ app()->getLocale() =='ar' ? 'ml-4':''}} [&>svg]:h-4 [&>svg]:w-4 [&>svg]:text-gray-400 dark:[&>svg]:text-gray-300">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="currentColor"
            class="w-4 h-4">
            <path
              fill-rule="evenodd"
              d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-2.625 6c-.54 0-.828.419-.936.634a1.96 1.96 0 00-.189.866c0 .298.059.605.189.866.108.215.395.634.936.634.54 0 .828-.419.936-.634.13-.26.189-.568.189-.866 0-.298-.059-.605-.189-.866-.108-.215-.395-.634-.936-.634zm4.314.634c.108-.215.395-.634.936-.634.54 0 .828.419.936.634.13.26.189.568.189.866 0 .298-.059.605-.189.866-.108.215-.395.634-.936.634-.54 0-.828-.419-.936-.634a1.96 1.96 0 01-.189-.866c0-.298.059-.605.189-.866zm2.023 6.828a.75.75 0 10-1.06-1.06 3.75 3.75 0 01-5.304 0 .75.75 0 00-1.06 1.06 5.25 5.25 0 007.424 0z"
              clip-rule="evenodd" />
          </svg>
        </span>
        <span>{{ __('sidenav.categorys') }} </span>
        <span
          class="absolute {{ app()->getLocale() =='ar' ? 'left-0 mr-auto ml-[0.8rem]':'right-0 ml-auto mr-[0.8rem]'}}  transition-transform duration-300 ease-linear motion-reduce:transition-none [&>svg]:text-gray-600 dark:[&>svg]:text-gray-300"
          data-te-sidenav-rotate-icon-ref>
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
      <ul
        class="show !visible relative m-0 hidden list-none p-0 data-[te-collapse-show]:block "
        data-te-sidenav-collapse-ref>
        <li class="relative">
          <a 
          wire:navigate
          {{-- href="{{ route('handelcategory', [], 'POST') }}" --}}

          href="{{   route('handelcategory')  }}"
          
            class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 pl-[3.4rem] pr-6  text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
            data-te-sidenav-link-ref
            >
          {{ __('sidenav.handelcategorys') }}
            </a
          >
        </li>
      
      </ul>
    </li>
  </ul>
  <hr class="my-4" />
  <ul class="relative m-0 list-none px-[0.2rem]" data-te-sidenav-menu-ref>
    <li class="relative">
      <a
        class="flex h-12 cursor-pointer items-center truncate rounded-[5px] px-6 py-4 text-[1.2rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
        data-te-sidenav-link-ref>
        <span
          class="mr-4 [&>svg]:h-4 [&>svg]:w-4 [&>svg]:text-gray-400 dark:[&>svg]:text-gray-300">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            class="w-4 h-4">
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M15.182 15.182a4.5 4.5 0 01-6.364 0M21 12a9 9 0 11-18 0 9 9 0 0118 0zM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75zm-.375 0h.008v.015h-.008V9.75zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75zm-.375 0h.008v.015h-.008V9.75z" />
          </svg>
        </span>
        <span>Link 6</span>
      </a>
    </li>

  </ul>
</nav>
<!-- Sidenav -->

<!-- Toggler -->

<!-- Toggler -->

{{-- @push('jscode')
<script>
  const sidenav = document.getElementById('sidenav-6');
  sidenav.classList.add('hidden');
</script>
@endpush --}}