<x-layouts>
    <div class="py-10">

    <section class="font-bold text-4xl text-center pt-6">
        <h1>Let's Find Your Next Job</h1>

        <form action="" class="mt-6">
            <input type="text" class="bg-white/5 border border-white/10 rounded-xl px-5 py-4 w-full max-w-xl">
        </form>
    </section>

    <section class="pt-10">

        <x-section-heading innerHtml="Featured Jobs"/>

        <div class="grid lg:grid-cols-3 gap-8">
            <x-job-card />
            <x-job-card />
            <x-job-card />
        </div>

    </section>

    <section>

        <x-section-heading innerHtml="Tags"/>

        <div class="mt-6 space-x-1">
            <x-tag innerHtml="Tags" />
            <x-tag innerHtml="Tags" />
            <x-tag innerHtml="Tags" />
            <x-tag innerHtml="Tags" />
            <x-tag innerHtml="Tags" />
            <x-tag innerHtml="Tags" />
        </div>
    </section>

    <section>
        <x-section-heading innerHtml="Recent Jobs"/>

        <div class="mt-6 space-y-6">
            <x-job-card-wide />
            <x-job-card-wide />
            <x-job-card-wide />
        </div>
    </section>
    
    </div>

</x-layouts>
