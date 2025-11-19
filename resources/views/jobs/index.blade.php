<x-layouts>
    <div class="py-10">

    <section class="font-bold text-4xl text-center pt-6">
        <h1>Let's Find Your Next Job</h1>

        <x-forms.form action="/search" class="mt-6">
            <x-forms.input :label="false" name="q" type="text" class="bg-white/5 border border-white/10 rounded-xl px-5 py-4 w-full max-w-xl" />
        </x-forms.form>
    </section>

    <section class="pt-10">

        <x-section-heading innerHtml="Featured Jobs"/>

        <div class="grid lg:grid-cols-3 gap-8">
            @foreach ($featuredJobs as $job)
                <x-job-card :job="$job" />
            @endforeach
        </div>

    </section>

    <section>

        <x-section-heading innerHtml="Tags"/>

        <div class="mt-6 space-x-1 space-y-1">
            @if ($tags)
                @foreach ($tags as $tag)
                    <x-tag innerHtml="{{$tag->name}}" size="base" />
                @endforeach
            @endif
        </div>
    </section>

    <section>
        <x-section-heading innerHtml="Recent Jobs"/>

        <div class="mt-6 space-y-6">
            @foreach ($jobs as $job)
                <x-job-card-wide :job="$job"/>
            @endforeach
        </div>
    </section>
    
    </div>

</x-layouts>
