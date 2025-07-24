<div id="search-popup" class="invisible z-10 fixed inset-0 sm:flex sm:justify-center sm:items-center bg-black/50 size-full">
  <div class="bg-white sm:rounded-2xl max-sm:rounded-b-2xl max-sm:w-full w-lg overflow-hidden">
    <label for="search-form" class="flex items-center gap-2 p-4 cursor-text">
      <img class="h-lh select-none" src="{{ Vite::asset('resources/images/magnifying-glass.svg') }}">
      <input 
        id="search-form"
        class="outline-0 w-full text-neutral-900 placeholder:text-neutral-400"
        type="text"
        placeholder="Search..."
        autocomplete="off"
      >
    </label>
    <div 
      id="search-results"
      class="border-neutral-200 border-t overflow-y-auto"
    >
    {{-- Results --}}
    </div>
  </div>
</div>