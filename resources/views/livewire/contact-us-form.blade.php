<form wire:submit.prevent="save">
    <div class="row g-4">
        @if (session('success'))
            <div class="col-12">
                <span class="d-block mb-3 alert bg-primary text-white">{{ session('success') }}</span>
            </div>
        @endif
        <div class="col-md-6">
            <x-theme.form.input-group type="text" wire:model.defer="name" name="name" :placeholder="trans('table.columns.name')" />
        </div>
        <div class="col-md-6">
            <x-theme.form.input-group type="text" wire:model.defer="email" name="email" :placeholder="trans('table.columns.email')" />
        </div>

        <div class="col-md-6">
            <x-theme.form.input-group type="text" wire:model.defer="phone" name="phone" :placeholder="trans('table.columns.phone')" />
        </div>

        <div class="col-md-6">
            <x-theme.form.input-group type="text" wire:model.defer="subject" name="subject" :placeholder="trans('table.columns.subject')" />
        </div>

        <div class="col-12">
            <x-theme.form.text-area wire:model.defer="message" :placeholder="trans('table.columns.message')"
                name="message" cols="10" rows="6">
                <x-dashboard.error field="message" />
            </x-theme.form.text-area>
        </div>

        <div class="col-12">
            <div class="tp-contact-btn">
                <button class="tp-btn" type="button" wire:click="save">{{ trans('send') }}</button>
                <p class="ajax-response"></p>
            </div>
        </div>
    </div>
</form>
