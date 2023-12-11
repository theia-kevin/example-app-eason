<div class="container mx-auto px-4 my-8">
  <div class="font-bold">{{ $translatedInput('title') }}</div>
  <div>{!! $translatedInput('text') !!}</div>
  <ul class="list-disc flex gap-8">
    @foreach($block->getRelated('projects') as $project)
    <li>
      <a href="{{ route('frontend.project', ['slug' => $project->slug]) }}">
        {{ $project->title }}
        <img class="object-cover object-center w-[200px] h-[300px]" src="{{ $project->image('cover') }}" alt="">
      </a>
    </li>
    @endforeach
  </ul>
</div>