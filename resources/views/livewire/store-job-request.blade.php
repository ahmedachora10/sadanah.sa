<div class="row">

    @if (session('success'))
        <div class="col-12 mb-3">
            <div class="alert alert-primary">{{ session('success') }}</div>
        </div>
    @endif

    <div class="col-xl-6 col-lg-6 mb-3">
        <x-theme.form.input-group type="text" wire:model.defer="form.name" name="form.name" :placeholder="trans('table.columns.name')" />
    </div>

    <div class="col-xl-6 col-lg-6 mb-3">
        <x-theme.form.input-group type="text" wire:model.defer="form.email" name="form.email" :placeholder="trans('table.columns.email')" />
    </div>

    <div class="col-xl-6 col-lg-6 mb-3">
        <x-theme.form.input-group type="number" wire:model.defer="form.phone" name="form.phone" :placeholder="trans('table.columns.phone')" />
    </div>

    <div class="col-xl-6 col-lg-6 mb-3">
        <x-theme.form.input-group type="number" wire:model.defer="form.age" name="form.age" :placeholder="trans('table.columns.age')" />
    </div>

    <div class="col-xl-6 col-lg-6 mb-3">
        <x-theme.form.input-group type="text" wire:model.defer="form.specialization" name="form.specialization"
            :placeholder="trans('table.columns.specialization')" />
    </div>

    <div class="col-xl-6 col-lg-6 mb-3">
        <x-theme.form.input-group type="text" wire:model.defer="form.years_of_experience"
            name="form.years_of_experience" :placeholder="trans('table.columns.years of experience')" />
    </div>

    <div class="col-12 mb-3">
        <x-theme.form.text-area wire:model.defer="form.excerpt" :placeholder="trans('table.columns.excerpt')" name="form.excerpt" cols="10" rows="6">
            <x-dashboard.error field="form.excerpt" />
        </x-theme.form.text-area>
    </div>

    <div class="col-xl-6 col-lg-6 mb-3">
        <div class="country-select">
            <select name="job" id="job" wire:model.defer="form.job">
                <option value=""><x-theme.form.label>{{ trans('table.columns.job') }}</x-theme.form.label></option>
                @foreach ($jobs as $job)
                    <option value="{{ $job->id }}">{{ $job->title }}</option>
                @endforeach
            </select>
            <x-dashboard.error field="form.job" />
        </div>
    </div>

    <div class="col-xl-6 col-lg-6 mb-3">
        <div class="country-select">
            <select name="job_city" id="job_city" wire:model.defer="form.job_city">
                <option value=""><x-theme.form.label>{{ trans('table.columns.job city') }}</x-theme.form.label></option>
                @foreach ($jobCities as $city)
                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                @endforeach
            </select>
            <x-dashboard.error field="form.job_city" />
        </div>
    </div>

    <div class="col-xl-6 col-lg-6 mb-3">
        <x-theme.form.input-group type="file" wire:model.defer="cv" name="cv" :title="trans('table.columns.cv')" />
    </div>

    <div class="col-xl-6 col-lg-6 mb-3">
        <x-theme.form.input-group type="file" wire:model.defer="attachments" name="attachments" :title="trans('table.columns.attachments')"
            multiple />
    </div>

    <div class="col-12">
        <button class="send_button" type="button" wire:click="save">{{ trans('send') }}</button>
    </div>
</div>
