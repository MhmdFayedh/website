<x-layout>
    <x-navbar/>
    <main class="text-white mt-10 container mx-auto">
        <h2 class="text-4xl mb-6"><span class="border-b-2 pb-2 border-[#1A64F5]">الأعمال - المشاريع</span></h2>
        <ul class="space-y-5">
            @foreach ($works as $work)

            @if ($work->active == 1)
            <li>
                <div class="flex gap-2 items-end text-xl">
                    <span class="text-base text-gray-400">
                        {{ $work->publish_at->format('Y M d') }}
                    </span>
                    <h3>
                        <a href="/works/{{ $work->id }}" class=" text-white border-transparent border-b-2 hover:border-b-[#1A64F5] duration-100">
                            {{ $work->name }} 
                        </a>
                    </h2>
                </div>
            </li>
            @endif
            @endforeach
        </ul>
    </main>
</x-layout>