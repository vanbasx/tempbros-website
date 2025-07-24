<header class="py-8">
  <div class="flex justify-between items-center container">
    <div class="flex items-center gap-4">
      <a 
        class="inline-block w-fit shrink-0" 
        href="{{ home_url('/') }}"
      >
        <img class="select-none" src="{{ Vite::asset('resources/images/logo.svg') }}">
      </a>
      <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.79167 10C5.71528 9.54859 5.51389 9.0625 5.1875 8.54167C4.86111 8.01391 4.39583 7.52432 3.79167 7.07292C3.19444 6.62153 2.59722 6.33333 2 6.20833V5.77083C2.59028 5.63194 3.15625 5.375 3.69792 5C4.24653 4.61806 4.70486 4.15972 5.07292 3.625C5.44792 3.07639 5.6875 2.53472 5.79167 2H6.22917C6.29167 2.34722 6.41667 2.70486 6.60417 3.07292C6.79167 3.43403 7.03125 3.78125 7.32292 4.11458C7.62151 4.44097 7.95484 4.73611 8.32292 5C8.87151 5.38889 9.43057 5.64583 10 5.77083V6.20833C9.61807 6.28472 9.22224 6.44097 8.8125 6.67708C8.40974 6.91319 8.03474 7.19443 7.6875 7.52083C7.34026 7.84026 7.05556 8.17708 6.83333 8.53125C6.50694 9.05208 6.30556 9.54167 6.22917 10H5.79167Z" fill="#A1A1A1"/></svg>
      <span class="text-neutral-600 text-sm">
        WordPress Templates
      </span>
    </div>
    <div class="flex items-center gap-2">
      <button id="search-btn" class="flex justify-between items-center bg-white shadow-xs hover:shadow-sm p-4 rounded-xl w-60 text-neutral-400 text-sm transition-shadow cursor-text">
        Search...
        <img class="select-none" src="{{ Vite::asset('resources/images/magnifying-glass.svg') }}">
      </button>
      <button class="flex items-center gap-1 bg-accent shadow-xs p-4 rounded-xl text-sm cursor-pointer">
        <img class="select-none" src="{{ Vite::asset('resources/images/lightning.svg') }}">
        Get All Access
      </button>
    </div>
  </div>



  {{-- @if (has_nav_menu('primary_navigation'))
    <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
    </nav>
  @endif --}}
</header>

@include('partials.search-form')