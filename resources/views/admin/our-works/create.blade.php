<x-app-layout>

    <x-theme.tab-list :route="route('our-works.store')">
        <x-slot:arForm>
            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="file" name="thumb" :title="trans('table.columns.image')" />
                <x-size-notice key="our_special" />
            </div>

            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="file" name="bg_image" :title="trans('table.columns.background image')" />
                <x-size-notice key="our_special" />
            </div>

            <div class="col-12 mb-3">

            </div>

            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="client_name_ar" :title="trans('table.columns.client name')" />
            </div>

            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="description_ar" :title="trans('table.columns.description')" />
            </div>

            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="date" name="transaction_start_date" :title="trans('table.columns.start date')" />
            </div>

            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="date" name="transaction_end_date" :title="trans('table.columns.end date')" />
            </div>

            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="number" name="duration_of_work" :title="trans('table.columns.duration of work')" />
            </div>

            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.label>{{trans('table.columns.section')}}</x-dashboard.label>
                <select name="tag_id" id="tag_id" class="form-select">
                    @foreach ($tags as $tag)
                        <option value="{{$tag->id}}">{{ $tag->name }}</option>
                    @endforeach
                </select>
                <x-dashboard.error field="tag_id" />
            </div>

            <div class="col-12 mb-3">
                <x-dashboard.text-area name="content_ar" cols="30" rows="10" :title="trans('table.columns.content')" />
            </div>

        </x-slot:arForm>
        <x-slot:enForm>
            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="client_name_en" :title="trans('table.columns.client name')" />
            </div>

            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="description_en" :title="trans('table.columns.description')" />
            </div>

            <div class="col-12 mb-3">
                <x-dashboard.text-area name="content_en" cols="30" rows="10" :title="trans('table.columns.content')" />
            </div>
        </x-slot:enForm>
    </x-theme.tab-list>



</x-app-layout>
