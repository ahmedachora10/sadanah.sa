<x-app-layout>

    <x-theme.tab-list :route="route('sliders.update', $slider)">
        <x-slot:arForm>
            @method('PUT')
            <div class="col-md-12 col-12 mb-3">

                {{-- <div class="mb-3">
                    <img src="{{ asset('storage/'.$slider->image_ar) }}" alt="image" width="60" height="60" class="img-thumbnail">
                </div> --}}

                <x-dashboard.input-group type="file" name="image_ar" :title="trans('table.columns.video')" />
                {{-- <x-size-notice key="slider" /> --}}
            </div>

            {{-- <div class="col-12 mb-3">
                <x-dashboard.input-group type="text" :value="$slider->link" name="link" :title="trans('table.columns.link')" />
            </div> --}}
            <div class="col-md-4 col-sm-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="top" :value="$slider->styles['top'] ?? ''" :title="trans('table.columns.top')" />
            </div>

            <div class="col-md-4 col-sm-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="right" :value="$slider->styles['right'] ?? ''" :title="trans('table.columns.middle')" />
            </div>

            {{-- <div class="col-md-3 col-sm-6 col-12 mb-3">
                <x-dashboard.input-group type="number" name="left" :value="$slider->styles['left'] ?? 0" :title="trans('table.columns.left')" />
            </div> --}}

            <div class="col-md-4 col-sm-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="bottom" :value="$slider->styles['bottom'] ?? ''" :title="trans('table.columns.bottom')" />
            </div>
        </x-slot:arForm>
        <x-slot:enForm>

            <div class="col-md-12 col-12 mb-3">

                {{-- <div class="mb-4">
                    <img src="{{ asset('storage/'. $slider->image_en) }}" alt="image" width="60" height="60" class="img-thumbnail">
                </div> --}}

                <x-dashboard.input-group type="file" name="image_en" :title="trans('table.columns.video')" />
                {{-- <x-size-notice key="slider" /> --}}
            </div>
            <div class="col-md-4 col-sm-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="top_ar" :value="$slider->styles_ar['top_ar'] ?? ''" :title="trans('table.columns.top')" />
            </div>

            <div class="col-md-4 col-sm-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="right_ar" :value="$slider->styles_ar['right_ar'] ?? ''" :title="trans('table.columns.middle')" />
            </div>

            <div class="col-md-4 col-sm-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="bottom_ar" :value="$slider->styles_ar['bottom_ar'] ?? ''" :title="trans('table.columns.bottom')" />
            </div>
        </x-slot:enForm>
    </x-theme.tab-list>
</x-app-layout>
