<x-app-layout>


    <x-theme.tab-list :route="route('our-services.update', $ourService)">
        <x-slot:arForm>
            <div class="col-md-6 col-12 mb-3">
                <div class="mb-3">
                    <img src="{{ asset($ourService->thumbnail) }}" alt="image" width="60" height="60" class="img-thumbnail">
                </div>

                <x-dashboard.input-group type="file" name="image" :title="trans('table.columns.image')" />
                <x-size-notice key="our_special" />
            </div>

            <div class="col-md-6 col-12 mb-3">
                @method('PUT')
                <x-dashboard.input-group type="text" name="title_ar" :value="$ourService->title_ar" :title="trans('table.columns.title')" />
            </div>

            <div class="col-12 mb-3">
                <x-dashboard.input-group type="text" name="description_ar" :value="$ourService->description_ar" :title="trans('table.columns.description')" />
            </div>
        </x-slot:arForm>

        <x-slot:enForm>
            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="title_en" :value="$ourService->title_en" :title="trans('table.columns.title')" />
            </div>

            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="description_en" :value="$ourService->description_en" :title="trans('table.columns.description')" />
            </div>
        </x-slot:enForm>
    </x-theme.tab-list>
</x-app-layout>
