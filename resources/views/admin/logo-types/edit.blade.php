<x-app-layout>
    <x-theme.tab-list :route="route('logo-types.update', $logoType)">
        <x-slot:arForm>
            @method('PUT')
            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="name_ar" :value="$logoType->name_ar" :title="trans('table.columns.name')" />
            </div>

            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group class="mb-3" type="file" name="attachments[]" :title="trans('table.columns.attachments')" multiple />

                <livewire:media-gallery :media="$logoType->media" />
            </div>
        </x-slot:arForm>

        <x-slot:enForm>
            <div class="col-12 mb-3">
                <x-dashboard.input-group type="text" name="name_en" :value="$logoType->name_en" :title="trans('table.columns.name')" />
            </div>

        </x-slot:enForm>
    </x-theme.tab-list>
</x-app-layout>
