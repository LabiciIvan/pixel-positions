<x-layouts>

    <x-section-heading innerHtml="Job results" />

    @if($jobs)
        @foreach ($jobs as $job)
            <x-job-card :job="$job" class="mb-5"/>
        @endforeach
    @else
        <div>No jobs found.</div>
    @endif

</x-layouts>