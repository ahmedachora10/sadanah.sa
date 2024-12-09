<x-app-layout>

    <x-theme.tab-list :route="route('sliders.store')">
        <x-slot:arForm>

                <div class="col-md-6 col-12 mb-3">
                    <x-dashboard.input-group type="file" name="image_ar" :title="trans('table.columns.image')" />
                    <x-size-notice key="slider" />
                </div>

                <div class="col-md-6 col-12 mb-3">
                    <x-dashboard.input-group type="text" name="link" :title="trans('table.columns.link')" />
                </div>

                <div class="col-md-3 col-sm-6 col-12 mb-3">
                    <x-dashboard.input-group type="number" name="top" :title="trans('table.columns.top')" />
                </div>

                <div class="col-md-3 col-sm-6 col-12 mb-3">
                    <x-dashboard.input-group type="number" name="right" :title="trans('table.columns.right')" />
                </div>

                <div class="col-md-3 col-sm-6 col-12 mb-3">
                    <x-dashboard.input-group type="number" name="left" :title="trans('table.columns.left')" />
                </div>

                <div class="col-md-3 col-sm-6 col-12 mb-3">
                    <x-dashboard.input-group type="number" name="bottom" :title="trans('table.columns.bottom')" />
                </div>
        </x-slot:arForm>
        <x-slot:enForm>
            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="file" name="image_en" :title="trans('table.columns.image')" />
                <x-size-notice key="slider" />
            </div>
        </x-slot:enForm>
    </x-theme.tab-list>

</x-app-layout>
