<!--Carousel-->
<div
  id="carouselExampleCaptions"
  class="relative mb-24"
  data-te-carousel-init
  data-te-carousel-slide >
  <div
    class="relative w-full overflow-hidden after:clear-both after:block after:content-['']">
    <!--First Testimonial / Carousel item-->
    <div
      class="relative float-left -mr-[100%] hidden w-full text-center transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
      data-te-carousel-active
      data-te-carousel-item
      style="backface-visibility: hidden">
      <p
        class="max-w-4xl mx-auto text-xl italic text-neutral-700 dark:text-neutral-300">
        "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit,
        error amet numquam iure provident voluptate esse quasi, voluptas
        nostrum quisquam!"
      </p>
      <div class="flex justify-center mt-12 mb-6">
        <img
          src="https://tecdn.b-cdn.net/img/Photos/Avatars/img%20(2).webp"
          class="w-24 h-24 rounded-full shadow-lg dark:shadow-black/30"
          alt="smaple image" />
      </div>
      <p class="text-neutral-500 dark:text-neutral-300">- Anna Morian</p>
    </div>

    <!--Second Testimonial / Carousel item-->
    <div
      class="relative float-left -mr-[100%] hidden w-full text-center transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
      data-te-carousel-item
      style="backface-visibility: hidden">
      <p
        class="max-w-4xl mx-auto text-xl italic text-neutral-700 dark:text-neutral-300">
        "Neque cupiditate assumenda in maiores repudiandae mollitia
        adipisci maiores repudiandae mollitia consectetur adipisicing
        architecto elit sed adipiscing elit."
      </p>
      <div class="flex justify-center mt-12 mb-6">
        <img
          src="https://tecdn.b-cdn.net/img/Photos/Avatars/img%20(31).webp"
          class="w-24 h-24 rounded-full shadow-lg dark:shadow-black/30"
          alt="smaple image" />
      </div>
      <p class="text-neutral-500 dark:text-neutral-300">- Teresa May</p>
    </div>

    <!--Third Testimonial / Carousel item-->
    <div
      class="relative float-left -mr-[100%] hidden w-full text-center transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
      data-te-carousel-item
      style="backface-visibility: hidden">
      <p
        class="max-w-4xl mx-auto text-xl italic text-neutral-700 dark:text-neutral-300">
        "Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur est laborum neque
        cupiditate assumenda in maiores."
      </p>
      <div class="flex justify-center mt-12 mb-6">
        <img
          src="https://tecdn.b-cdn.net/img/Photos/Avatars/img%20(10).webp"
          class="w-24 h-24 rounded-full shadow-lg dark:shadow-black/30"
          alt="smaple image" />
      </div>
      <p class="text-neutral-500 dark:text-neutral-300">- Kate Allise</p>
    </div>
  </div>

  <!--Carousel Controls - prev item-->
  <button
    class="absolute bottom-0 left-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-black opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-black hover:no-underline hover:opacity-90 hover:outline-none focus:text-black focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none dark:text-white dark:opacity-50 dark:hover:text-white dark:focus:text-white"
    type="button"
    data-te-target="#carouselExampleCaptions"
    data-te-slide="prev">
    <span class="inline-block w-8 h-8">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        fill="none"
        viewBox="0 0 24 24"
        stroke-width="1.5"
        stroke="currentColor"
        class="w-6 h-6">
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          d="M15.75 19.5L8.25 12l7.5-7.5" />
      </svg>
    </span>
    <span
      class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
      >Previous</span
    >
  </button>
  <!--Carousel Controls - next item-->
  <button
    class="absolute bottom-0 right-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-black opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-black hover:no-underline hover:opacity-90 hover:outline-none focus:text-black focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none dark:text-white dark:opacity-50 dark:hover:text-white dark:focus:text-white"
    type="button"
    data-te-target="#carouselExampleCaptions"
    data-te-slide="next">
    <span class="inline-block w-8 h-8">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        fill="none"
        viewBox="0 0 24 24"
        stroke-width="1.5"
        stroke="currentColor"
        class="w-6 h-6">
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          d="M8.25 4.5l7.5 7.5-7.5 7.5" />
      </svg>
    </span>
    <span
      class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
      >Next</span
    >
  </button>
</div>