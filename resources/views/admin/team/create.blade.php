<x-app-layout>

    <x-theme.tab-list :route="route('team.store')">
        <x-slot:arForm>
            <div class="col-12 mb-3">
                <x-dashboard.input-group type="file" name="image" :title="trans('table.columns.image')" />
                <x-size-notice key="team" />
            </div>
            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="name_ar" :title="trans('table.columns.name')" />
            </div>
            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="job_name_ar" :title="trans('table.columns.job name')" />
            </div>
            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="x" :title="trans('رابط X')" />
            </div>
            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="snapchat" :title="trans('رابط سناب شات')" />
            </div>
            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="tiktok" :title="trans('رابط تيك توك')" />
            </div>
            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="instagram" :title="trans('رابط انستجرام')" />
            </div>
            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="whatsapp" :title="trans('table.columns.whatsapp')" />
            </div>
            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="number" value="0" name="x_followers" :title="trans('متابعين X')" />
            </div>
            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="number" value="0" name="instagram_followers" :title="trans('متابعين انستجرام')" />
            </div>
            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="number" value="0" name="snapchat_followers" :title="trans('متابعين سناب شات')" />
            </div>
            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="number" value="0" name="tiktok_followers" :title="trans('متابعين تيك توك')" />
            </div>
        </x-slot:arForm>
        <x-slot:enForm>
            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="name_en" :title="trans('table.columns.name')" />
            </div>
            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="job_name_en" :title="trans('table.columns.job name')" />
            </div>
        </x-slot:enForm>
    </x-theme.tab-list>

</x-app-layout>
