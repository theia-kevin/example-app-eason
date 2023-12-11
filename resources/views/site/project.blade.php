<!doctype html>
<html lang="en">

<head>
    <title>{{ $item->title }}</title>
    @vite('resources/css/app.css')
</head>

<body>
    @include('site.header')
    <div class="container mx-auto">
        {!! $item->renderBlocks() !!}
        <div class="space-y-8">
            @foreach($item->images('cover') as $projectImage)
            <img src="{{ $projectImage }}" alt="">
            @endforeach
        </div>
    </div>
</body>

</html>