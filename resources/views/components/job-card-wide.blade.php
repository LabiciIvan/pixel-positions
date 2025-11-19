@props(['job'])

<x-panel class="flex gap-x-6">
    <div class="rounded-xl">
        <x-employer-logo />
    </div>

    <div class="flex-1 flex-col">
        <a href="#" class="self-start text-sm text-gray-400">{{$job->employer->name}}</a>

        <h3 class="font-bold text-xl mt-3 group-hover:text-blue-800 transition-colors duration-200">{{$job->title}}</h3>

        <p class="text-sm text-gray-300 mt-2">{{$job->schedule}} - From {{$job->salary}}</p>
    </div>


    <div>
        @foreach ($job->tags as $tag)
            <x-tag size="small" innerHtml="{{$tag->name}}" />
        @endforeach
    </div>
</x-panel>