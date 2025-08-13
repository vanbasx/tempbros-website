@props([
  'icon' => null,
])

<a 
  {{ $attributes }}
  class="group/link relative flex items-center max-xl:gap-3 cursor-pointer"
>
  <div class="flex justify-center items-center xl:group-hover/link:bg-neutral-100 max-xl:opacity-40 group-hover/link:opacity-100 rounded-full xl:size-10 transition-all shrink-0">
    {!! $icon !!}
  </div>
  <div class="xl:invisible xl:group-hover/nav:visible xl:group-hover/nav:opacity-100 xl:opacity-0 text-neutral-500 max-xl:text-neutral-900 group-hover/link:text-neutral-900 leading-none tracking-tighter transition-all xl:group-hover/nav:translate-x-1.5 duration-300">
    {!! $slot !!}
  </div>
</a>