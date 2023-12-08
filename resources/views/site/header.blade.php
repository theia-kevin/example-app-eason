<div class="container mx-auto px-4 flex items-center justify-between bg-red-500">
    {!! $item->renderBlocks() !!}
    <x-menu />
    <ul class="flex space-x-4">
        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
        <li>
            <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                {{ $properties['native'] }}
            </a>
        </li>
        @endforeach
    </ul>
</div>