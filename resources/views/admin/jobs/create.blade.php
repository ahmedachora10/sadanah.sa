<x-app-layout>
    <x-theme.tab-list :route="route('jobs.store')">
        <x-slot:arForm>
            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="title_ar" :title="trans('table.columns.title')" />
            </div>
            <div class="col-md-6 col-12 mb-3">
                <select name="type" id="type" class="form-select">
                    <option value="" disabled>
                        {{ trans('table.columns.job type') }}
                    </option>
                    @foreach ($jobTypes as $type)
                    <option value="{{ $type->value }}">{{ $type->name() }}</option>
                    @endforeach
                </select>
                <x-dashboard.error field="type" />
            </div>
            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="number" :title="trans('table.columns.job number')" />
            </div>
            <div class="col-md-6 col-12 mb-3">
                    <select name="job_city_id" id="job_city" class="form-select">
                        <option value="" disabled>
                            {{ trans('table.columns.job city') }}
                        </option>
                        @foreach ($jobCities as $city)
                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                        @endforeach
                    </select>
                    <x-dashboard.error field="job_city_id" />
            </div>
            <div class="col-12 mb-3">
                <x-dashboard.text-area type="text" name="responsibilities_ar" :title="trans('table.columns.responsibilities')" />
            </div>
            <div class="col-12 mb-3">
                <x-dashboard.text-area type="text" name="requirements_ar" :title="trans('table.columns.requirements')" />
            </div>

            <div class="col-12 mb-3">
                <x-dashboard.text-area type="text" name="experience_ar" :title="trans('table.columns.experience')" />
            </div>

            <div class="col-12 mb-3">
                <x-dashboard.text-area type="text" name="education_ar" :title="trans('table.columns.education')" />
            </div>
        </x-slot:arForm>

        <x-slot:enForm>
            <div class="col-12 mb-3">
                <x-dashboard.input-group type="text" name="title_en" :title="trans('table.columns.title')" />
            </div>
            <div class="col-12 mb-3">
                <x-dashboard.text-area type="text" name="responsibilities_en" :title="trans('table.columns.responsibilities')" />
            </div>

            <div class="col-12 mb-3">
                <x-dashboard.text-area type="text" name="requirements_en" :title="trans('table.columns.requirements')" />
            </div>

            <div class="col-12 mb-3">
                <x-dashboard.text-area type="text" name="experience_en" :title="trans('table.columns.experience')" />
            </div>

            <div class="col-12 mb-3">
                <x-dashboard.text-area type="text" name="education_en" :title="trans('table.columns.education')" />
            </div>

        </x-slot:enForm>
    </x-theme.tab-list>
</x-app-layout>
