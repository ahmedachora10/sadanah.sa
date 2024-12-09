<x-app-layout>
    <div class="col-12 mb-4">
        <x-dropzone-form :action="route('our-works.add-images.store', $ourWork)" id="dropzone-basic" />
    </div>

    <x-dashboard.cards.sample column="col-12">
        <livewire:dashboard.media-container :model="$ourWork" :images="$ourWork->images" />
    </x-dashboard.cards.sample>

    <div class="pt-4 col-12">
        <a href="{{route('our-works.index')}}" class="btn btn-primary me-sm-3 me-1">{{ trans('common.save')
            }}</a>
    </div>

</x-app-layout>
