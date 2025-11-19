@props([
    "width" => "90",
    "height" => "90"
])

<img class="flex rounded-xl" src="https://picsum.photos/id/{{ rand(0, 200) }}/{{$width}}/{{$height}}" alt="">
