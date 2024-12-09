<div class="row" style="flex-direction: row !important">

    @if (session('success'))
        <div class="col-12 mb-3">
            <div class="alert alert-primary">{{ session('success') }}</div>
        </div>
    @endif

    <div class="col-md-6 col-12 mb-3">
        <x-theme.form.input-group type="text" wire:model.defer="form.name" name="form.name" :placeholder="trans('table.columns.name')" />
    </div>

    <div class="col-md-6 col-12 mb-3">
        <x-theme.form.input-group type="number" wire:model.defer="form.phone" name="form.phone" :placeholder="trans('table.columns.phone')" />
    </div>

    <div class="col-12 mb-3">
        <x-theme.form.input-group type="text" wire:model.defer="form.city" name="form.city" :placeholder="trans('table.columns.city')" />
    </div>

    <div class="col-12 mb-3">
        <x-theme.form.label :required="false" class="mb-1"> {{trans('table.columns.description')}} </x-theme.form.label>
        <x-theme.form.text-area wire:model.defer="form.description" class="form-control" name="form.description" cols="10"
            rows="6"></x-theme.form.text-area>
        <x-dashboard.error field="form.description" />
    </div>

    <div class="col-12">
        <div class="tp-contact-btn">
            <button class="tp-btn" type="button" wire:click="save">{{ trans('send') }}</button>
            <p class="ajax-response"></p>
        </div>
    </div>
</div>
