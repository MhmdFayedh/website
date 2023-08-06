<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta dir="rtl">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mhmd Fayehd's blog</title>
    <link rel="stylesheet" href="/path/to/styles/default.min.css">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <link rel="stylesheet"
    href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/styles/default.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/highlight.min.js"></script>

</head>
<body class="  bg-[#131313]">
    <x-navbar />
    <main class="container mx-auto mt-10 space-y-6">
        {{-- Post Image --}}
        <div class="flex justify-center items-center flex-col space-y-4 text-white text-5xl">
                <h1>{{ $post->name }}</h1>
                    <span class=" text-sm text-gray-400">{{ $post->user->name }} |  {{$post->publish_at->format('Y-m-d') }}</span>
            <div class="border-b-2 pb-6">
                <img src="http://127.0.0.1/storage/{{ $post->thumbnail }}" class="h-1/4" alt="">
            </div>
        </div>
        {{-- Post Body --}}
        <div class=" text-white post-body leading-9 flex justify-start items-start flex-col pt-7">
            {!! $post->body !!}
        </div>
    </main>

<script>hljs.highlightAll();</script>
</body>
</html>