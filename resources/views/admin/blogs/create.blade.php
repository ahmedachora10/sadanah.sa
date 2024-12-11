<x-app-layout>

    <x-theme.tab-list :route="route('blogs.store')">
        <x-slot:arForm>
            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="file" name="image" :title="trans('table.columns.image')" />
                <x-size-notice key="team" />
            </div>
            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="title_ar" :title="trans('table.columns.title')" />
            </div>

            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="author" :title="trans('table.columns.author')" />
            </div>

            <div class="col-12 mb-3">
                <x-dashboard.text-area name="content_ar" cols="30" rows="10" :title="trans('table.columns.content')" />
            </div>

        </x-slot:arForm>
        <x-slot:enForm>
            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="title_en" :title="trans('table.columns.title')" />
            </div>
            <div class="col-12 mb-3">
                <x-dashboard.text-area name="content_en" cols="30" rows="10" :title="trans('table.columns.content')" />
            </div>
        </x-slot:enForm>
    </x-theme.tab-list>

</x-app-layout>
