<x-app-layout>

    <x-theme.tab-list :route="route('team.update', $team)">
        <x-slot:arForm>
            @method('PUT')
            <div class="col-12 mb-3">
                <div class="mb-3">
                    <img src="{{ asset($team->thumbnail) }}" alt="image" width="60" height="60" class="img-thumbnail">
                </div>
                <x-dashboard.input-group type="file" name="image" :title="trans('table.columns.image')" />
                <x-size-notice key="team" />
            </div>
            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="name_ar" :value="$team->name_ar" :title="trans('table.columns.name')" />
            </div>
            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="job_name_ar" :value="$team->job_name_ar" :title="trans('table.columns.job name')" />
            </div>
            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="x" :value="$team->x"  :title="trans('رابط X')" />
            </div>
            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="snapchat" :value="$team->snapchat" :title="trans('رابط سناب شات')" />
            </div>
            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="tiktok" :value="$team->tiktok" :title="trans('رابط تيك توك')" />
            </div>
            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="instagram" :value="$team->instagram" :title="trans('رابط انستجرام')" />
            </div>
        </x-slot:arForm>
        <x-slot:enForm>
            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="name_en" :value="$team->name_en" :title="trans('table.columns.name')" />
            </div>
            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="job_name_en" :value="$team->job_name_en"
                    :title="trans('table.columns.job name')" />
            </div>
        </x-slot:enForm>
    </x-theme.tab-list>
</x-app-layout>
