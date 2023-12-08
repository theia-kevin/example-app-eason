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
    </div>
</body>

</html>