<div class="col-md-8 col-sm-10 col-12 mx-auto">
    <div class="row align-content-end">
        <div class="col-md-4 col-12 mb-3">
            <x-dashboard.input-group type="text" name="username" wire:model.defer="form.username"
                :title="trans('table.columns.name')" />
        </div>
        <div class="col-md-4 col-12 mb-3">
            <x-dashboard.input-group type="text" name="phone" wire:model.defer="form.phone"
                :title="trans('table.columns.phone')" />
        </div>
        <div class="col-md-4 col-12 mb-3">
            <x-dashboard.input-group type="email" name="email" wire:model.defer="form.email"
                :title="trans('table.columns.email')" />
        </div>
        <div class="col-12 mb-3">
            <x-dashboard.text-area type="text" name="content_provided" wire:model.defer="form.content_provided"
                :title="trans('table.columns.content provided')" />
        </div>

        @foreach ($socialMediaPlatforms as $item)
        <div class="col-12 mb-3">
            <h6 class="fw-bold text-muted my-3">{{ trans('front.' . $item) }}</h6>
        </div>

        <div class="col-md-4 col-12 mb-3">
            <x-dashboard.input-group type="text" name="{{ $item }}_username" wire:model.defer="form.{{ $item }}_username"
                :title="trans('table.columns.account')" />
        </div>
        <div class="col-md-4 col-12 mb-3">
            <x-dashboard.input-group type="text" name="{{ $item }}_link" wire:model.defer="form.{{ $item }}_link"
                :title="trans('table.columns.link')" />
        </div>
        <div class="col-md-4 col-12 mb-3">
            <x-dashboard.input-group type="number" name="{{ $item }}_followers"
                wire:model.defer="form.{{ $item }}_followers" :title="trans('table.columns.followers')" />
        </div>
        @endforeach

        <div class="col-md-6 col-12 mb-3">
            <x-dashboard.input-group type="text" name="interests" wire:model.defer="form.interests"
                :title="trans('table.columns.interests')" />
        </div>

        <div class="col-md-6 col-12 mb-3">
            <x-dashboard.input-group type="file" name="attachments" wire:model.defer="form.attachments"
                :title="trans('table.columns.attachments')" />
        </div>
        <div class="col-12">
            <button class="send_button w-auto">{{ trans('common.save') }}</button>
        </div>
    </div>
</div>
