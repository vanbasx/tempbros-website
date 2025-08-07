@props([
  'href' => null,
  'blank' => false,
  'text' => null,
])

<a 
  href="{{ $href }}" 
  @if($blank) target="_blank" @endif 
  class="group/link relative flex items-center gap-1.5 max-xl:gap-3"
>
  <div class="flex justify-center items-center xl:group-hover/link:bg-neutral-100 rounded-full xl:size-10 transition-colors duration-200 ease-in-out shrink-0">
    {!! $slot !!}
  </div>
  <span class="xl:invisible xl:group-hover/nav:visible xl:group-hover/nav:opacity-100 xl:opacity-0 text-neutral-500 max-xl:text-neutral-900 group-hover/link:text-neutral-900 leading-none transition-all duration-200 ease-in-out shrink-0">
    {{ $text }}
  </span>
</a>