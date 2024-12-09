<x-app-layout>
    <x-theme.tab-list :route="route('jobs.update', $job)">
        <x-slot:arForm>
            @method('PUT')
            <div class="col-12 mb-3">
                <x-dashboard.input-group type="text" name="title_ar" :value="$job->title_ar" :title="trans('table.columns.title')" />
            </div>
        </x-slot:arForm>

        <x-slot:enForm>
            <div class="col-12 mb-3">
                <x-dashboard.input-group type="text" name="title_en" :value="$job->title_en" :title="trans('table.columns.title')" />
            </div>

        </x-slot:enForm>
    </x-theme.tab-list>

</x-app-layout>
