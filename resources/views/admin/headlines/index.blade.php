<x-app-layout>


        <div class="row">
        @foreach ($sections as $item)
        @php
        $section = 'front.' . $item->section;
        @endphp
        <div class="col-md-6 col-12">
            <h6 class="mt-4"> {{ trans($section) }} </h6>
            <x-theme.tab-list :route="route('headlines.update', $item)" :key="'headline-content-'.$loop->index">
                <x-slot:arForm>
                    @method('PUT')
                    <div class="col-md-6 col-12 mb-3">
                        <x-dashboard.input-group type="text" name="title_ar" :value="$item->title_ar" :title="trans('table.columns.title')" />
                    </div>

                    <div class="col-md-6 col-12 mb-3">
                        <x-dashboard.input-group type="text" name="subtitle_ar" :value="$item->subtitle_ar" :title="trans('table.columns.subtitle')" />
                    </div>
                </x-slot:arForm>

                <x-slot:enForm>
                    <div class="col-md-6 col-12 mb-3">
                        <x-dashboard.input-group type="text" name="title_en" :value="$item->title_en" :title="trans('table.columns.title')" />
                    </div>

                    <div class="col-md-6 col-12 mb-3">
                        <x-dashboard.input-group type="text" name="subtitle_en" :value="$item->subtitle_en" :title="trans('table.columns.subtitle')" />
                    </div>
                </x-slot:enForm>
            </x-theme.tab-list>
        </div>
        @endforeach
    </div>
</x-app-layout>
