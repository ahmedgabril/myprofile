<div class="pt-24">

 <div class="container mx-auto">
<!-- Button trigger modal -->
<button
  type="button"
  class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] mb-5"
  data-te-toggle="modal"
  data-te-target="#exampleModalVarying"
  data-te-whatever="@mdo"
  data-te-ripple-init
  data-te-ripple-color="light">
  {{ __('category.addcategory') }}
</button>

<!-- Modal -->
<div
wire:ignore.self
  data-te-modal-init
  class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
  id="exampleModalVarying"
  tabindex="-1"
  aria-labelledby="exampleModalVaryingLabel"
  aria-hidden="true">
  <div
    data-te-modal-dialog-ref
    class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px]">
    <div
      class="min-[576px]:shadow-[0_0.5rem_1rem_rgba(#000, 0.15)] pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
      <div
        class="flex items-center justify-between flex-shrink-0 p-4 border-b-2 border-opacity-100 rounded-t-md border-neutral-100 dark:border-opacity-50">
        <h5
          class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200"
          id="exampleModalVaryingLabel">
      {{ __('category.addcategory') }}
        </h5>
        <button
          type="button"
          class="box-content border-none rounded-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
          data-te-modal-dismiss
          aria-label="Close">
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
              d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      
      <form wire:submit.prevent="handelcat">
      <div class="relative flex-auto p-4" data-te-modal-body-ref>
        
          <div class="mb-3">
            <label for="recipient-name">{{ __('category.name') }} ar:</label>
            <input
            wire:model="name_ar"
              type="text"
              class="relative m-0 -mr-0.5 block w-full flex-auto rounded-l border border-solid border-neutral-400 bg-transparent bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6] text-neutral-700 outline-none transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:text-neutral-700 focus:shadow-[inset_0_0_0_1px_rgb(59,113,202)] focus:outline-none dark:border-neutral-400 dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:focus:border-primary"
              id="recipient-name" />
              @error('name_ar') <span class="text-danger ">{{ $message }}</span> @enderror

          
            </div>
          <div class="mb-3">
            <label for="recipient-name">{{ __('category.name') }} en:</label>
            <input
            wire:model="name_en"
              type="text"
              class="relative m-0 -mr-0.5 block w-full flex-auto rounded-l border border-solid border-neutral-400 bg-transparent bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6] text-neutral-700 outline-none transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:text-neutral-700 focus:shadow-[inset_0_0_0_1px_rgb(59,113,202)] focus:outline-none dark:border-neutral-400 dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:focus:border-primary"
              id="recipient-name" />
          
              @error('name_en') <span class="text-danger ">{{ $message }}</span> @enderror
            </div>
   
      
      </div>
      <div
        class="flex flex-wrap items-center justify-start flex-shrink-0 p-4 border-t-2 border-opacity-100 rounded-b-md border-neutral-100 dark:border-opacity-50">
   
        <button
          type="submit"
          
          class="ml-3 mr-2 inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
          data-te-ripple-init
          data-te-ripple-color="light">
         {{ __('public.save') }}
        </button>


        <button
        type="button"
        class="inline-block rounded bg-red-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-gray-100 transition duration-150 ease-in-out hover:bg-primary-accent-300 focus:bg-primary-accent-300 focus:outline-none focus:ring-0 active:bg-primary-accent-200 "
        data-te-modal-dismiss
        data-te-ripple-init
        data-te-ripple-color="light">
        {{ __('public.close') }}
      </button>

    
      </div>

    </form>
    </div>
  </div>
</div> 
<div class="grid gap-4 px-3 bg-white shadow lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-1 dark:bg-gray-800">
  <!--searsh-->
  <div class="mb-3">
    <input
   wire:model.live.debounce.500s="search"
      type="search"
      class="relative m-0 block w-full min-w-0 mt-4 flex-auto rounded border border-solid border-neutral-400 bg-transparent bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6] text-neutral-700 outline-none transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:text-neutral-700 focus:shadow-[inset_0_0_0_1px_rgb(59,113,202)] focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:focus:border-primary"
      id="exampleSearch"
      placeholder="{{ __('public.search') }}" />
  </div>
    <!--desorac-->

    <div class="w-full sel ">

      <select wire:model.live="orderby" id="countries" class="block w-full my-4 text-sm text-gray-900 border border-gray-400 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        {{-- <option selected value="desc">{{ __('public.sorting') }}</option> --}}
        <option value="desc">{{ __('public.Des') }}</option>
        <option value="asc">{{ __('public.Acs') }}</option>
      
        </select>
        
    </div>

    <!--filter-->
    <div class="w-full sel ">

      <select wire:model.live="rownumber" id="countries" class="block w-full my-4 text-sm text-gray-900 border border-gray-400 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        {{-- <option selected>{{ __('public.cols_number') }}</option> --}}
        <option value="2">2</option>

        <option value="5">5</option>
        <option value="10">10</option>
        <option value="15">15</option>
        <option value="20">20</option>
        <option value="35">35</option>
        <option value="50">50</option>
        <option value="100">100</option>
        <option value="150">150</option>



        </select>
        
    </div>
</div>

  
  <div class="p-4 bg-white shadow sm:p-8 dark:bg-gray-800 sm:rounded-lg">
            
    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
          <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
            <div class="overflow-hidden">
              <table class="min-w-full text-sm font-light text-left">
                <thead class="font-medium border-b border-neutral-400 dark:border-neutral-500">
                  <tr>
                    <th scope="col" class="px-6 py-4 text-center">#</th>
                    <th scope="col" class="px-6 py-4 text-center">{{ __('category.name') }}</th>
                    <th scope="col" class="px-6 py-4 text-center">{{ __('category.date') }}</th>
                    <th scope="col" class="px-6 py-4 text-center">{{ __('public.action') }}</th>

                   
                  </tr>
                </thead>
                <tbody>
                 @if ( $categorys->count() > 0)
                   
               
         @forelse ( $categorys as $index => $category )
           
 
           
     
   
         <tr
       class="transition duration-300 ease-in-out border-b hover:bg-neutral-400 dark:border-neutral-500 dark:hover:bg-neutral-600">
                    <td class="px-6 py-4 font-medium text-center whitespace-nowrap">{{$categorys->firstitem()+ $index  }}</td>
                    <td class="px-6 py-4 text-center whitespace-nowrap">{{$category->name  }}</td>
                    <td class="px-6 py-4 text-center whitespace-nowrap">{{Str::substr($category->created_at , 0, 10) }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                      <div class="flex justify-center">
                        <a role="button" class="text-green-600 star-email-button" data-te-index="0">

                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"></path>
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7.418 17.861 1 20l2.139-6.418m4.279 4.279 10.7-10.7a3.027 3.027 0 0 0-2.14-5.165c-.802 0-1.571.319-2.139.886l-10.7 10.7m4.279 4.279-4.279-4.279m2.139 2.14 7.844-7.844m-1.426-2.853 4.279 4.279"/>
                            </svg>
                        </a>
                        <a role="button" class="text-red-600 delete-email-button ms-2" data-te-index="0">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"></path>
                          </svg>
                        </a>
                      </div>
                    </td>

                  </tr>
                  @empty

                
                    <td colspan="42" class="relative pt-6 pb-8 text-center text-gray-100 bg-red-500 whitespace-nowrap top-5 ">no date yet</td>
                 
                  @endforelse   
                  @endif
                </tbody>

              </table>
              <div dir="ltr" class="pt-4">{{ $categorys->links() }}</div>

            </div>
          </div>
        </div>

          
   
        

</div>

 </div>

 </div>
</div> 
    




 
      
    
</div>