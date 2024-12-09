<x-app-layout>

    <x-theme.tab-list :route="route('certificates.store')">
        <x-slot:arForm>
            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="file" name="image" :title="trans('table.columns.image')" />
                <x-size-notice key="our_special" />
            </div>

            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="title_ar" :title="trans('table.columns.title')" />
            </div>

        </x-slot:arForm>
        <x-slot:enForm>
            <div class="col-12">
                <x-dashboard.input-group type="text" name="title_en" :title="trans('table.columns.title')" />
            </div>
        </x-slot:enForm>
    </x-theme.tab-list>



</x-app-layout>
