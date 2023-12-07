<div class="container mx-auto px-4 my-8">
  <div class="font-bold">{{ $translatedInput('title') }}</div>
  <div>{!! $translatedInput('text') !!}</div>
  <ul class="list-disc">
    @foreach($block->getRelated('projects') as $project)
    <li><a href="{{ route('frontend.project', ['slug' => $project->slug]) }}">{{ $project->title }}</a></li>
    @endforeach
  </ul>
</div>