<!doctype html>
<html @php(language_attributes())>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @php(do_action('get_header'))
    @php(wp_head())

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="preload" href="{{ Vite::asset('resources/fonts/Outfit-SemiBold.woff2') }}" as="font" type="font/woff2" crossorigin="">
    <link rel="preload" href="{{ Vite::asset('resources/fonts/Outfit-Regular.woff2') }}" as="font" type="font/woff2" crossorigin="">
    <link rel="preload" href="{{ Vite::asset('resources/fonts/Outfit-Medium.woff2') }}" as="font" type="font/woff2" crossorigin="">
  </head>

  <body @php(body_class('bg-neutral-50'))>
    @php(wp_body_open())

    <div id="app">
      <a class="sr-only focus:not-sr-only" href="#main">
        {{ __('Skip to content', 'sage') }}
      </a>

      @include('sections.header')

      <main id="main" class="main">
        @yield('content')
      </main>

      @include('sections.footer')
    </div>
    <div class="-z-5 fixed inset-0 gap-x-6 grid grid-cols-3 size-full container" aria-hidden="true">
      <div class="border-neutral-200 border-x"></div>
      <div class="border-neutral-200 border-x"></div>
      <div class="border-neutral-200 border-x"></div>
    </div>
    @php(do_action('get_footer'))
    @php(wp_footer())
  </body>
</html>
