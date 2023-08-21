<div class="flex justify-center">
    <h1 class="text-6xl backgroundText font-bold opacity-5 z-0 pointer-events-none absolute">{{ $slot }}</h1>
    <h2 class="text-4xl before:content-[''] before:ml-1 before:bg-[#1A64F5] before:w-3 before:h-6 before:inline-block before:rounded-md my-5" id="{{ $id }}">{{ $slot }}</h2>
</div>