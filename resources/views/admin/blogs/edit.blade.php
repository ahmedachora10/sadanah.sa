<x-app-layout>

    <x-theme.tab-list :route="route('blogs.update', $blog)">
        <x-slot:arForm>
            @method('PUT')
            <div class="col-md-6 col-12 mb-3">
                <div class="mb-3">
                    <img src="{{ asset($blog->thumbnail) }}" alt="image" width="60" height="60" class="img-thumbnail">
                </div>
                <x-dashboard.input-group type="file" name="image" :title="trans('table.columns.image')" />
                <x-size-notice key="team" />
            </div>
            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="title_ar" :value="$blog->title_ar" :title="trans('table.columns.title')" />
            </div>
            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="author" :value="$blog->author" :title="trans('table.columns.author')" />
            </div>
            <div class="col-12 mb-3">
                <x-dashboard.text-area name="content_ar" cols="30" rows="10" :value="$blog->content_ar" :title="trans('table.columns.content')" />
            </div>

        </x-slot:arForm>
        <x-slot:enForm>
            <div class="col-12 mb-3">
                <x-dashboard.input-group type="text" name="title_en" :value="$blog->title_en" :title="trans('table.columns.title')" />
            </div>
            <div class="col-12 mb-3">
                <x-dashboard.text-area name="content_en" cols="30" rows="10" :title="trans('table.columns.content')" :value="$blog->content_en" />
            </div>
        </x-slot:enForm>
    </x-theme.tab-list>
</x-app-layout>
