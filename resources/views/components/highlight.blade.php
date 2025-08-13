@props([
  'color' => null,
])

@php($class = match ($color) {
  'secondary' => 'before:bg-neutral-200',
  default => 'before:bg-accent',
})

<span {{ $attributes->merge(['class' => "before:block inline-block before:-z-1 before:absolute relative before:-inset-0.5 before:skew-y-1 {$class}"]) }}>
  <span class="relative text-neutral-900">
    {!! $slot !!}
  </span>
</span>