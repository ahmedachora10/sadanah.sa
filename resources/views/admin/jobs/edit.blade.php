<x-app-layout>
    <x-theme.tab-list :route="route('jobs.update', $job)">
        <x-slot:arForm>
            @method('PUT')
            <div class="col-md-4 col-12 mb-3">
                <x-dashboard.input-group type="text" name="title_ar" :value="$job->title_ar" :title="trans('table.columns.title')" />
            </div>
            <div class="col-md-4 col-12 mb-3">
                <x-dashboard.input-group type="text" name="number" :value="$job->number" :title="trans('table.columns.number')" />
            </div>
            <div class="col-md-4 col-12 mb-3">
                <select name="job_city" id="job_city" class="form-select">
                    <option value="" disabled>
                        {{ trans('table.columns.job city') }}
                    </option>
                    @foreach ($jobCities as $city)
                        <option value="{{ $city->id }}" @selected($city->id == $job->job_city_id)>{{ $city->name }}</option>
                    @endforeach
                </select>
                <x-dashboard.error field="job_city" />
            </div>
            <div class="col-12 mb-3">
                <x-dashboard.text-area type="text" name="responsibilities_ar" :value="$job->responsibilities_ar" :title="trans('table.columns.responsibilities')" />
            </div>
            <div class="col-12 mb-3">
                <x-dashboard.text-area type="text" name="requirements_ar" :value="$job->requirements_ar" :title="trans('table.columns.requirements')" />
            </div>

            <div class="col-12 mb-3">
                <x-dashboard.text-area type="text" name="experience_ar" :value="$job->experience_ar" :title="trans('table.columns.experience')" />
            </div>

            <div class="col-12 mb-3">
                <x-dashboard.text-area type="text" name="education_ar" :value="$job->education_ar" :title="trans('table.columns.education')" />
            </div>
        </x-slot:arForm>

        <x-slot:enForm>
            <div class="col-12 mb-3">
                <x-dashboard.input-group type="text" name="title_en" :value="$job->title_en" :title="trans('table.columns.title')" />
            </div>

            <div class="col-12 mb-3">
                <x-dashboard.text-area type="text" name="responsibilities_en" :value="$job->responsibilities_en" :title="trans('table.columns.responsibilities')" />
            </div>

            <div class="col-12 mb-3">
                <x-dashboard.text-area type="text" name="requirements_en" :value="$job->requirements_en" :title="trans('table.columns.requirements')" />
            </div>

            <div class="col-12 mb-3">
                <x-dashboard.text-area type="text" name="experience_en" :value="$job->experience_en" :title="trans('table.columns.experience')" />
            </div>

            <div class="col-12 mb-3">
                <x-dashboard.text-area type="text" name="education_en" :value="$job->education_en" :title="trans('table.columns.education')" />
            </div>

        </x-slot:enForm>
    </x-theme.tab-list>
</x-app-layout>
