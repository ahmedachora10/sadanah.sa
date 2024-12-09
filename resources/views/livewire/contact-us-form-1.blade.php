<form wire:submit.prevent="save">
    @if (session('success'))
    <div class="col-12">
        <span class="d-block mb-3 alert bg-primary text-white">{{ session('success') }}</span>
    </div>
    @endif
    <div class="tp-contact-7-form">
        <input type="text" wire:model.defer="name" @error('name') class="mb-0" @enderror name="name" placeholder="{{trans('table.columns.name')}}">
        <x-dashboard.error class="mb-3" field="name" />
        <input type="email" wire:model.defer="email" @error('email') class="mb-0" @enderror name="email" placeholder="{{trans('table.columns.email')}}">
        <x-dashboard.error class="mb-3" field="email" />
        <input type="text" wire:model.defer="phone" @error('phone') class="mb-0" @enderror name="phone" placeholder="{{trans('table.columns.phone')}}">
        <x-dashboard.error class="mb-3" field="phone" />
        <input type="text" wire:model.defer="subject" @error('subject') class="mb-0" @enderror name="subject" placeholder="{{trans('table.columns.subject')}}">
        <x-dashboard.error class="mb-3" field="subject" />
        <textarea wire:model.defer="message" @error('message') class="mb-0" @enderror placeholder="{{trans('table.columns.message')}}"
        name="message"></textarea>
        <x-dashboard.error class="mb-3" field="message" />
        <div class="tp-contact-7-submit">
            <button class="tp-btn w-100" type="button" wire:click="save">{{ trans('send') }}</button>
        </div>
    </div>
</form>
