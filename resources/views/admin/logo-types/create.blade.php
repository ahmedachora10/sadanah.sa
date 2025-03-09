<x-app-layout>
    <x-theme.tab-list :route="route('logo-types.store')">
        <x-slot:arForm>
            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="name_ar" :title="trans('table.columns.name')" />
            </div>
            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="file" name="attachments[]" :title="trans('table.columns.attachments')" multiple />
            </div>

        </x-slot:arForm>

        <x-slot:enForm>
            <div class="col-12 mb-3">
                <x-dashboard.input-group type="text" name="name_en" :title="trans('table.columns.name')" />
            </div>
        </x-slot:enForm>
    </x-theme.tab-list>
</x-app-layout>
