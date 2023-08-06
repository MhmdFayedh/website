@props(
    [
        'link' => '#',
        'name' => 'غير معرف',
    ]
)

<li  {{ $attributes->merge(['class' => 'text-white ']) }}>
    <a href="{{ $link }}">{{ $name }}.</a>
</li>