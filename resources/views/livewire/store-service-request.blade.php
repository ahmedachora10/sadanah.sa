<div>
    <div class="col-12">
        @if($message = session('success'))
        <div class="messages alert alert-success alert-dismissible" role="alert">
            {{$message}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
    </div>
    <form method="POST" wire:submit="save" class="row" style="flex-direction: row !important">
        <div class="col-md-4 col-sm-6 col-12 mb-3">
            <x-dashboard.input-group type="text" wire:model.defer="form.name" name="form.name" title="" placeholder="{{trans('table.columns.name')}}(*)" />
        </div>

        <div class="col-md-4 col-sm-6 col-12 mb-3">
            <x-dashboard.input-group type="text" wire:model.defer="form.phone" name="form.phone" title="" placeholder="{{trans('table.columns.phone')}}(*)" />
        </div>

        <div class="col-md-4 col-12 mb-3">
            <x-dashboard.input-group type="file" name="attachments" wire:model.lazy="attachments"
                :title="trans('table.columns.attachments')" />
        </div>

        <div class="col-12 mb-3">
            <x-theme.form.label :required="false" class="mb-1"> {{trans('table.columns.description')}}(*) </x-theme.form.label>
            <x-theme.form.text-area wire:model.defer="form.description" class="form-control" name="form.description" cols="10"
                rows="6"></x-theme.form.text-area>
            <x-dashboard.error field="form.description" />
        </div>

        <div class="col-12">
            <div class="col-12 form_modal">
                <button class="send_button w-auto" type="submit">{{ trans('common.save') }}</button>
            </div>
        </div>
    </form>
</div>
