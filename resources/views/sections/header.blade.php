<header class="max-md:top-0 max-md:left-0 max-md:fixed pt-8 max-md:w-full">
  <div class="container">
    <div class="relative flex justify-between items-center max-md:bg-white max-md:shadow-xs max-md:p-2 max-md:pl-3 max-md:rounded-xl">
      {{-- Logo --}}
      <div class="flex items-center gap-4">
        <a 
          class="inline-block w-fit shrink-0" 
          href="{{ home_url('/') }}"
        >
          <img class="select-none" src="{{ Vite::asset('resources/images/logo.svg') }}">
        </a>
        <svg class="max-md:hidden" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.79167 10C5.71528 9.54859 5.51389 9.0625 5.1875 8.54167C4.86111 8.01391 4.39583 7.52432 3.79167 7.07292C3.19444 6.62153 2.59722 6.33333 2 6.20833V5.77083C2.59028 5.63194 3.15625 5.375 3.69792 5C4.24653 4.61806 4.70486 4.15972 5.07292 3.625C5.44792 3.07639 5.6875 2.53472 5.79167 2H6.22917C6.29167 2.34722 6.41667 2.70486 6.60417 3.07292C6.79167 3.43403 7.03125 3.78125 7.32292 4.11458C7.62151 4.44097 7.95484 4.73611 8.32292 5C8.87151 5.38889 9.43057 5.64583 10 5.77083V6.20833C9.61807 6.28472 9.22224 6.44097 8.8125 6.67708C8.40974 6.91319 8.03474 7.19443 7.6875 7.52083C7.34026 7.84026 7.05556 8.17708 6.83333 8.53125C6.50694 9.05208 6.30556 9.54167 6.22917 10H5.79167Z" fill="#A1A1A1"/></svg>
        <span class="max-md:hidden text-neutral-600 text-sm">
          WordPress Templates
        </span>
      </div>

      {{-- Buttons --}}
      <div class="flex max-xl:flex-row-reverse items-center gap-2">

        <button id="menu-btn" class="group xl:hidden flex justify-center items-center bg-white max-md:bg-neutral-100 shadow-xs rounded-xl size-13 cursor-pointer">
          <div class="relative w-5 h-3">
            <span class="top-0 left-0 absolute bg-neutral-950 rounded-full w-full h-0.5 group-[.active-menu]:rotate-45 transition-all group-[.active-menu]:translate-y-[5px] duration-400"></span>
            <span class="top-1/2 left-0 absolute bg-neutral-950 rounded-full w-2/3 group-[.active-menu]:w-full h-0.5 group-[.active-menu]:-rotate-45 transition-all -translate-y-1/2 duration-400"></span>
            <span class="bottom-0 left-0 absolute bg-neutral-950 group-[.active-menu]:opacity-0 rounded-full w-1/3 h-0.5 transition-all duration-400"></span>
          </div>
        </button>

        <button id="search-btn" class="flex justify-between items-center bg-white max-md:bg-neutral-100 shadow-xs hover:shadow-sm p-4 rounded-xl w-60 max-xl:w-fit transition-shadow cursor-text">
          <span class="max-xl:hidden text-neutral-400 text-sm">
            Search...
          </span>
          <img class="select-none" src="{{ Vite::asset('resources/images/magnifying-glass.svg') }}">
        </button>

        <a href="" class="max-md:hidden flex items-center gap-1 bg-accent shadow-xs p-4 rounded-xl font-medium text-sm cursor-pointer">
          <img class="select-none" src="{{ Vite::asset('resources/images/lightning.svg') }}">
          Get All Access
        </a>
        
      </div>
      {{-- Sidebar nav --}}
      <nav id="menu" class="group/nav max-xl:invisible top-0 max-md:top-24 max-xl:top-full max-xl:right-0 xl:left-0 fixed md:max-xl:absolute max-xl:opacity-0 xl:p-2 max-md:px-5 max-xl:pt-3 max-md:w-full xl:h-full">
        <div class="flex flex-col justify-between bg-white shadow-xs p-6 max-xl:p-8 rounded-xl w-24 max-md:w-full max-xl:w-55 xl:group-hover/nav:w-60 h-full transition-all xl:duration-350">
          <div class="max-xl:hidden">
            menu
          </div>
          <ul class="flex flex-col gap-2 max-xl:gap-5">
            <li>
              <x-link>
                <x-slot name="icon">
                  <img src="{{ Vite::asset('resources/images/home.svg') }}" alt="House" class="size-5 max-xl:size-4">
                </x-slot>
                <span>
                  Home
                </span>
              </x-link>
            </li>
            <li>
              <x-link>
                <x-slot name="icon">
                  <img src="{{ Vite::asset('resources/images/layers.svg') }}" alt="Layers" class="size-5 max-xl:size-4">
                </x-slot>
                <span>
                  Templates
                </span>
              </x-link>
            </li>
            <li>
              <x-link>
                <x-slot name="icon">
                  <img src="{{ Vite::asset('resources/images/blog.svg') }}" alt="Book" class="size-5 max-xl:size-4">
                </x-slot>
                <span>
                  Blog
                </span>
              </x-link>
            </li>
            <li>
              <x-link>
                <x-slot name="icon">
                  <img src="{{ Vite::asset('resources/images/support.svg') }}" alt="Bell" class="size-5 max-xl:size-4">
                </x-slot>
                <span>
                  Support
                </span>
              </x-link>
            </li>
          </ul>
          <div class="max-md:flex max-md:flex-col max-md:gap-2">
            <x-link>
              <x-slot name="icon">
                <img src="{{ Vite::asset('resources/images/x.svg') }}" alt="X logo twitter" class="size-5 max-xl:size-4">
              </x-slot>
              <div class="text-neutral-500 text-sm">
                x.com<span class="text-neutral-900">/tempbros</span>
              </div>
            </x-link>
          </div>
        </div>
      </nav>
    </div>
  </div>
  @include('partials.search-form')
</header>