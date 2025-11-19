@props([
    'job' => [
        'title' => 'Test',
        'salary' => '$10,00 USD',
        'schedule' => 'fulltime',
    ]
])
<x-panel class="flex flex-col text-center">
    <div class="self-start text-sm">{{$job->employer->name}}</div>

    <div class="py-8 font-bold">
        <h3 class="group-hover:text-blue-800 text-xl transition-colors duration-200">{{$job->title}}</h3>
        <p class="text-sm mt-2">{{$job->schedule}} - From {{$job->salary}} </p>
    </div>


    <div class="flex justify-between items-center mt-auto">
        <div>
            @foreach ($job->tags as $tag)
                <x-tag size="small" innerHtml="{{$tag->name}}" />
            @endforeach
        </div>

        {{-- <img src="https://placehold.co/42x42" alt=""> --}}
        <x-employer-logo width="42" height="42"/>
    </div>
</x-panel>