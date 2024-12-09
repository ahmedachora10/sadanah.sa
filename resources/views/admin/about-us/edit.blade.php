<x-app-layout>

    <x-theme.tab-list :route="route('about-us.update', $aboutU)">
        <x-slot:arForm>
            @method('PUT')
            <div class="col-12 mb-3">
                <div class="row">
                    @foreach ($images as $img)
                        <div class=" col-auto mx-2 position-relative mb-2">
                            <img width="80" height="80" src="{{$img->getUrl()}}" alt="">
                            <a data-id="{{$img->id}}" href="#!" class="position-absolute remove-img" style="top: -10px;right: 7px;">
                                <i class="fas fa-trash text-danger"></i>
                            </a>
                        </div>
                    @endforeach
                </div>
                <x-dashboard.input-group type="file" name="images[]" multiple :title="trans('table.columns.image')" />
                <x-size-notice key="our_special" />
            </div>

            <div class="col-12 mb-3">
                <x-dashboard.input-group type="text" name="description_ar" :value="$aboutU->description_ar"
                    :title="trans('table.columns.description')" />
            </div>
        </x-slot:arForm>
        <x-slot:enForm>
            <div class="col-12 mb-3">
                <x-dashboard.input-group type="text" name="description_en" :value="$aboutU->description_en"
                    :title="trans('table.columns.description')" />
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
                            url: '{{route("about-us.media.remove")}}',
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
