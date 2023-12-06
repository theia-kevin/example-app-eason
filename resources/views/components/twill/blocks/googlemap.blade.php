<div class="container mx-auto px-4 my-8">
  <div class="font-bold">{{ $translatedInput('title') }}</div>
  <div>{!! $translatedInput('text') !!}</div>
  <div class="w-full h-[25vh]" id="map" data-api-key="{{ $input('google_maps_api_key') }}"></div>
</div>
@vite(['resources/js/googlemap.js'])