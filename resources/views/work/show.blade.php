<x-layout>
    <x-navbar/>
    <main class="container mx-auto mt-10 space-y-6">
        {{-- Post Image --}}
        <div class="flex justify-center items-center flex-col space-y-4 text-white text-5xl">
                <h1>{{ $work->name }}</h1>
                    <span class=" text-sm text-gray-400">{{ $work->user->name }} |  {{$work->publish_at->format('Y-m-d') }}</span>
            <div class="border-b-2 pb-6">
                <img src="{{ asset('storage/'.$work->thumbnail) }}" class="block aspect-video w-full max-h-80 object-cover object-center" alt="">
            </div>
        </div>
        {{-- Post Body --}}
        <div class=" text-white post-body leading-9 flex justify-start items-start flex-col pt-7">
            {!! $work->body !!}
        </div>
    </main>
</x-layout>