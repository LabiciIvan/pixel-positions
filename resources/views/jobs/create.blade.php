<x-layouts>
    <x-section-heading innerHtml="Create a new Job" />

    <x-forms.form method="POST" action="/jobs">

        <x-forms.input label="Title" name="title" />

        <x-forms.select label="Location" name="location">
            <option value="remote">Remote</option>
            <option value="site">On site</option>
        </x-forms.select>

        <x-forms.select label="Schedule" name="schedule">
            <option value="fulltime">Part Time</option>
            <option value="part-time">Full Time</option>
        </x-forms.select>

        <x-forms.input label="Salary" name="salary" />

        <x-forms.checkbox label="Feature (Cost extra)" name="featured" />

        <x-forms.input label="URL" name="url" />

        <x-forms.divider />
        
        <x-forms.input label="Tags" name="tags" placeholder="programmer, video, education" />

        <x-forms.button>Post job</x-forms.button>

    </x-forms.form>

</x-layouts>