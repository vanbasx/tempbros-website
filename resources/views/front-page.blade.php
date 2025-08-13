@extends('layouts.app')

@section('content')
  <div class="container">
    <p class="mb-7 font-medium text-[28px]/9 tracking-tight">
      You don't need <span class="text-neutral-400">a designer</span>.
    </p>
    <h1 class="mb-18 font-semibold text-[136px]/30 text-balance tracking-tight">
      You need a
      <svg class="inline-block" width="72" height="72" viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="36" cy="36" r="36" fill="#D2FF37"/><path d="M40.4553 21.3639C40.625 20.6852 40.3029 19.9794 39.6792 19.6626C39.0554 19.3459 38.2956 19.5024 37.8477 20.0398L22.8477 38.0398C22.4751 38.4869 22.3948 39.1093 22.6416 39.6364C22.8885 40.1633 23.418 40.5001 24 40.5001H34.0788L31.5448 50.6363C31.3751 51.3149 31.6971 52.0208 32.3209 52.3375C32.9446 52.6543 33.7046 52.4978 34.1523 51.9604L49.1523 33.9604C49.5249 33.5132 49.6053 32.8909 49.3584 32.3639C49.1115 31.8368 48.582 31.5001 48 31.5001H37.9212L40.4553 21.3639Z" fill="#171717"/></svg>
      <x-highlight>powerful</x-highlight> 
      <svg class="inline-block" width="72" height="72" viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="72" height="72" rx="36" fill="#E5E5E5"/><circle cx="36" cy="36" r="16" stroke="#171717" stroke-width="4"/><path d="M37 20V20C43.6259 29.6377 43.6259 42.3623 37 52V52" stroke="#171717" stroke-width="4"/><path d="M35 20V20C28.3741 29.6377 28.3741 42.3623 35 52V52" stroke="#171717" stroke-width="4"/><path d="M51 42L41.2866 40.7049C37.7777 40.237 34.2223 40.237 30.7134 40.7049L21 42" stroke="#171717" stroke-width="4"/><path d="M21 30L30.7134 31.2951C34.2223 31.763 37.7777 31.763 41.2866 31.2951L51 30" stroke="#171717" stroke-width="4"/></svg>
      <x-highlight color="secondary">website</x-highlight> template.
    </h1>
    <div class="items-start gap-5 grid grid-cols-3 mb-18">
      <p class="max-w-92 text-neutral-500 text-xl/7">
        Launch a stunning website that looks like you hired a top design agency. In days.
      </p>
      <div class="flex items-center gap-3">
        <div class="flex -space-x-5">
          @for ($i = 0; $i < 5; $i++)
            <div class="bg-red-500 border-2 border-white rounded-full size-10"></div>
          @endfor
        </div>
        <div class="text-sm/4">
          <div class="mb-0.5 font-semibold">
            4.9/5
          </div>
          <span class="text-neutral-600">
            Loved by 2 645+ creators
          </span>
        </div>
      </div>
    </div>
    <div class="">
      buttos
    </div>
  </div>
@endsection




{{-- <span class="inline-block relative bg-accent rounded-full size-20">
  <img class="top-1/2 left-1/2 absolute size-10 -translate-x-1/2 -translate-y-1/2 select-none" src="{{ Vite::asset('resources/images/lightning.svg') }}">  
</span>  --}}