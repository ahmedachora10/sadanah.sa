<x-app-layout>

    <div class="col-12 mb-4">
        <x-dropzone-form :action="route('our-works.add-images.store', $ourWork)" id="dropzone-basic" />
    </div>

    <x-dashboard.cards.sample column="col-12">
        <livewire:dashboard.media-container :model="$ourWork" :images="$ourWork->images" />
    </x-dashboard.cards.sample>

    <x-theme.tab-list :route="route('our-works.update', $ourWork)">
        <x-slot:arForm>
            @method('PUT')
            <div class="col-md-6 col-12 mb-3">

                <div class="col-auto mb-2">
                    <img width="80" height="80" src="{{$ourWork->thumbnail}}" alt="">
                </div>
                <x-dashboard.input-group type="file" name="thumb" :title="trans('table.columns.image')" />
                {{-- <x-size-notice key="our_special" /> --}}
            </div>
            <div class="col-md-6 col-12 mb-3">

                <div class="col-auto mb-2">
                    <img width="80" height="80" src="{{$ourWork->background}}" alt="">
                </div>
                <x-dashboard.input-group type="file" name="bg_image" :title="trans('table.columns.background image')" />
                {{-- <x-size-notice key="our_special" /> --}}
            </div>

            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="client_name_ar" :value="$ourWork->client_name_ar"
                    :title="trans('table.columns.client name')" />
            </div>

            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="description_ar" :value="$ourWork->description_ar"
                    :title="trans('table.columns.description')" />
            </div>

            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="date" name="transaction_start_date" :value="$ourWork->transaction_start_date"
                    :title="trans('table.columns.start date')" />
            </div>

            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="date" name="transaction_end_date" :value="$ourWork->transaction_end_date"
                    :title="trans('table.columns.end date')" />
            </div>

            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="number" name="duration_of_work" :value="$ourWork->duration_of_work"
                    :title="trans('table.columns.duration of work')" />
            </div>

            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.label>{{trans('table.columns.section')}}</x-dashboard.label>
                <select name="tags[]" id="tags" class="form-select" multiple>
                    @foreach ($tags as $tag)
                    <option value="{{$tag->id}}" @selected($ourWork->tags->contains($tag->id))>{{ $tag->name }}</option>
                    @endforeach
                </select>
                <x-dashboard.error field="tags" />
            </div>

            <div class="col-12 mb-3">
                <x-dashboard.text-area name="content_ar" :value="$ourWork->content_ar" cols="30" rows="10" :title="trans('table.columns.content')" />
            </div>

        </x-slot:arForm>
        <x-slot:enForm>
            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="client_name_en" :value="$ourWork->client_name_en"
                    :title="trans('table.columns.client name')" />
            </div>

            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="description_en" :value="$ourWork->description_en"
                    :title="trans('table.columns.description')" />
            </div>

            <div class="col-12 mb-3">
                <x-dashboard.text-area name="content_en" :value="$ourWork->content_ar" cols="30" rows="10"
                    :title="trans('table.columns.content')" />
            </div>
        </x-slot:enForm>
    </x-theme.tab-list>

    @push('scripts')
        <script>
            const images = $('.remove-img');

            if(images.length) {
                images.each(function () {
                    $(this).click(function () {
                        const imgId = $(this).attr('data-id');

                        $.ajax({
                            url: '{{route("our-works.media.remove")}}',
                            method: 'POST',
                            data: {id:imgId},
                            contentType: 'json',
                            headers: {
                                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')
                            },
                            success: function(response) {

                            }
                        });
                    });
                });
            }
        </script>
    @endpush

</x-app-layout>
