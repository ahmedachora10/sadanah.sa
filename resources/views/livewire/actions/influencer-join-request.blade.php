<div class="col-md-8 col-sm-10 col-12 mx-auto">
    <x-dashboard.alert />
    <form method="POST" wire:submit="save" class="row align-content-end" x-data="{
        platforms: {
            @foreach ($socialMediaPlatforms as $item)
                '{{ $item }}': false, @endforeach
        }
    }">
        <div class="col-md-4 col-12 mb-3">
            <x-dashboard.input-group type="text" name="form.username" wire:model.defer="form.username"
                :title="trans('table.columns.name')" />
        </div>
        <div class="col-md-4 col-12 mb-3">
            <x-dashboard.input-group type="text" name="form.phone" wire:model.defer="form.phone" :title="trans('table.columns.phone')" />
        </div>
        <div class="col-md-4 col-12 mb-3">
            <x-dashboard.input-group type="email" name="form.email" wire:model.defer="form.email" :title="trans('table.columns.email')" />
        </div>
        <div class="col-12 mb-3">
            <x-dashboard.text-area type="text" name="form.content_provided" wire:model.defer="form.content_provided"
                :title="trans('table.columns.content provided')" />
        </div>

        @foreach ($socialMediaPlatforms as $item)
            <div class="col-12 mb-3">

                <div class="my-3 mx-2">
                    <div class="form-check form-switch">
                        <input class="form-check-input" x-model="platforms['{{ $item }}']" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">
                            <h6 class="fw-bold text-muted">{{ trans('front.' . $item) }}</h6>
                        </label>
                    </div>
                </div>

            </div>

            <div class="col-md-4 col-12 mb-3" x-show="platforms['{{ $item }}']">
                <x-dashboard.input-group type="text" name="form.{{ $item }}_username"
                    wire:model.defer="form.{{ $item }}_username" :title="trans('table.columns.account')" x-bind:disabled="!platforms['{{ $item }}']" />
            </div>
            <div class="col-md-4 col-12 mb-3" x-show="platforms['{{ $item }}']">
                <x-dashboard.input-group type="text" name="form.{{ $item }}_link"
                    wire:model.defer="form.{{ $item }}_link" :title="trans('table.columns.link')" x-bind:disabled="!platforms['{{ $item }}']" />
            </div>
            <div class="col-md-4 col-12 mb-3" x-show="platforms['{{ $item }}']">
                <x-dashboard.input-group type="number" name="form.{{ $item }}_followers"
                    wire:model.defer="form.{{ $item }}_followers" :title="trans('table.columns.followers')" x-bind:disabled="!platforms['{{ $item }}']" />
            </div>
        @endforeach

        <div class="col-md-6 col-12 mb-3">
            <x-dashboard.input-group type="text" name="form.interests" wire:model.defer="form.interests"
                :title="trans('table.columns.interests')" />
        </div>

        <div class="col-12 form_modal">
            <button class="send_button w-auto" type="submit">{{ trans('common.save') }}</button>
        </div>
    </form>
</div>
