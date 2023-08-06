@props(
    [
        'src' => '',
        'alt' => '',
        'span' => '6',
    ]
)

    <div
    class="col-span-{{ $span }} overflow-hidden border border-[#524f4f] rounded bg-[#2C2A2A]"
    >
        {{-- Card header --}}
        <div
        class=" mb-2 p-0"
        >
            <img
            src="{{ $src }}"
            alt="{{ $alt }}"
            class=" block w-full max-h-80 aspect-video object-cover object-center duration-200 hover:scale-105 ease-in-out"
            >
        </div>

        {{-- Card body --}}
        <div class="text-xl mb-3 mt-3 mr-1 pb-0">
            {{ $slot }}
        </div>


    </div>