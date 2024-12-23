<div class="row">

    @if (session('success'))
        <div class="col-12 mb-3">
            <div class="alert alert-primary">{{ session('success') }}</div>
        </div>
    @endif

    <div class="col-xl-6 col-lg-6 mb-3">
        <input type="hidden" wire:model.defer="form.job" name="form.job" disabled />
        <x-dashboard.input-group type="text" wire:model.defer="form.name" name="form.name" title="" :title="trans('table.columns.name')" />
    </div>

    <div class="col-xl-6 col-lg-6 mb-3">
        <x-dashboard.input-group type="text" wire:model.defer="form.email" name="form.email" title="" :title="trans('table.columns.email')" />
    </div>

    <div class="col-xl-6 col-lg-6 mb-3">
        <x-dashboard.input-group class="text-start" type="number" wire:model.defer="form.phone" name="form.phone" title="" :title="trans('table.columns.phone')" />
    </div>

    <div class="col-xl-6 col-lg-6 mb-3">
        <x-dashboard.input-group class="text-start" type="number" wire:model.defer="form.age" name="form.age" title="" :title="trans('table.columns.age')" />
    </div>

    <div class="col-xl-6 col-lg-6 mb-3">
        <x-dashboard.input-group type="text" wire:model.defer="form.specialization" name="form.specialization"
            title="" :title="trans('table.columns.specialization')" />
    </div>

    <div class="col-xl-6 col-lg-6 mb-3">
        <x-dashboard.input-group type="text" wire:model.defer="form.years_of_experience"
            name="form.years_of_experience" title="" :title="trans('table.columns.years of experience')" />
    </div>

    <div class="col-12 mb-3">
        <x-dashboard.text-area wire:model.defer="form.excerpt" title="" :title="trans('table.columns.excerpt')" name="form.excerpt" cols="10" rows="6">
            <x-dashboard.error field="form.excerpt" />
        </x-dashboard.text-area>
    </div>

    {{-- <div class="col-xl-6 col-lg-6 mb-3">
        <div class="country-select">
            <select class="form-select" name="job" id="job" wire:model.defer="form.job">
                <option value=""><x-dashboard.label>{{ trans('table.columns.job') }}</x-dashboard.label></option>
                @foreach ($jobs as $job)
                    <option value="{{ $job->id }}" @selected($job->id == $jobPost->id)>{{ $job->title }}</option>
                @endforeach
            </select>
            <x-dashboard.input-group type="text" wire:model.defer="form.job" name="form.job" disabled
                :title="trans('table.columns.job')" :palceholder="$jobPost->title" />
            <x-dashboard.error field="form.job" />
        </div>
    </div> --}}

    <div class="col-12 mb-3">
            <div class="country-select">
                <x-dashboard.label>{{ trans('table.columns.job city') }}</x-dashboard.label>
                <select class="form-select" name="job_city" id="job_city" wire:model.defer="form.job_city">
                    <option value="">
                        <x-dashboard.label>{{ trans('table.columns.job city') }}</x-dashboard.label>
                    </option>
                    @foreach ($jobCities as $city)
                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                    @endforeach
                </select>
                <x-dashboard.error field="form.job_city" />
            </div>
        </div>

    <div class="col-xl-6 col-lg-6 mb-3">
        <x-dashboard.input-group type="file" wire:model.defer="cv" name="cv" :title="trans('table.columns.cv')" />
    </div>

    <div class="col-xl-6 col-lg-6 mb-3">
        <x-dashboard.input-group type="file" wire:model.defer="attachments" name="attachments" :title="trans('table.columns.attachments')"
            multiple />
    </div>

    <div class="col-12">
        <button class="btn btn-warning" type="button" wire:click="save">{{ trans('send') }}</button>
    </div>
</div>
