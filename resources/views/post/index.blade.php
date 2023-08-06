<x-layout>
    <x-navbar/>
    <main class="text-white mt-10 container mx-auto">
        <h2 class="text-4xl mb-6"><span class="border-b-2 pb-2 border-[#1A64F5]">التدوينات</span></h2>
        <ul class="space-y-5">
            @foreach ($posts as $post)
                <li>
                    <div class="flex gap-2 items-end text-xl">
                        <span class="text-base text-gray-400">
                            {{ $post->publish_at->format('Y M d') }}
                        </span>
                        <h3>
                            <a href="/posts/{{ $post->id }}" class=" text-white border-transparent border-b-2 hover:border-b-[#1A64F5] duration-100">
                                {{ $post->name }}
                            </a>
                        </h2>
                    </div>
                </li>
            @endforeach
        </ul>
    </main>
</x-layout>