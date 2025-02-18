<form wire:submit.prevent="save" method="post">

    @if (session('success'))
        <div class="messages">{{ session('success') }}</div>
    @endif

    <div class="controls row">
        <div class="col-lg-6">
            <div class="form-group mb-30">
                <input id="form_name" type="text" wire:model.defer="name" name="name" required="required"
                    placeholder="{{ __('front.first name') }}" />
                    <x-dashboard.error field="name" />
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group mb-30">

                <input id="form_name" type="text" wire:model.defer="second_name" name="second_name" required="required"
                    placeholder="{{ __('front.second name') }}" />
                <x-dashboard.error field="second_name" />
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group mb-30">

                <input id="form_email" class="text-start" type="email" wire:model.defer="email" name="email" required="required"
                    placeholder="{{ __('front.email') }}" />
                    <x-dashboard.error field="email" />
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group mb-30">
                <input id="form_phone" type="text" wire:model.defer="phone" name="phone" placeholder="{{ __('front.phone number') }}" />
                <x-dashboard.error field="phone" />
            </div>
        </div>

        <div class="col-12">
            <div class="form-group">
                <textarea id="form_message" wire:model.defer="message" name="message" rows="4" required="required" placeholder="{{ __('front.message') }}"></textarea>
                <x-dashboard.error field="message" />
            </div>
            <div class="mt-30">
                <button type="submit" class="butn butn-full butn-bord radius-30">
                    <span class="text" data-i18n="talk">{{ __('front.Let\'s Talk') }}</span>
                </button>
            </div>
        </div>
    </div>
</form>
