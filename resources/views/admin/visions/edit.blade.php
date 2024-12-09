<x-app-layout>
    <div class="row">
        <div class="col-12">
            <form action="{{ route('visions.update', $vision) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                {{-- <h6 class="mt-4"> </h6> --}}
                <div class="nav-align-top mb-3">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a href="#" class="nav-link active" data-bs-toggle="tab"
                                data-bs-target="#headline-content-ar" role="tab" aria-selected="true">{{
                                trans('front.arabic') }}</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#" class="nav-link" data-bs-toggle="tab" data-bs-target="#headline-content-en"
                                role="tab" aria-selected="false" tabindex="-1">{{ trans('front.english') }}</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="headline-content-ar" role="tabpanel">
                            <div class="row g-3">
                                @method('PUT')
                                <div class="col-12 mb-3">
                                    <div class="mb-3">
                                        <img src="{{ asset($vision->thumbnail) }}" alt="image" width="60" height="60" class="img-thumbnail">
                                    </div>
                                    <x-dashboard.input-group type="file" name="image" :title="trans('table.columns.image')" />
                                    <x-size-notice key="service" />
                                </div>
                                <div class="col-md-6 col-12">
                                    <x-dashboard.input-group type="text" name="title_ar" :value="$vision->title_ar"
                                        :title="trans('table.columns.name')" />
                                </div>
                                <div class="col-12 mt-3">
                                    <x-dashboard.label>{{ trans('table.columns.description') }}</x-dashboard.label>
                                    <textarea class="form-control" name="description_ar" cols="10" rows="6">{{ $vision->description_ar }}</textarea>
                                    <x-dashboard.error field="description_ar" />
                                </div>
                            </div>
                            <div class="pt-4">
                                <button type="submit" class="btn btn-primary me-sm-3 me-1">{{ trans('common.save')
                                    }}</button>
                            </div>
                        </div>

                        <div class="tab-pane" id="headline-content-en" role="tabpanel">
                            <div class="row g-3">
                                {{-- <div class="col-12 mb-3">
                                    <x-dashboard.input-group type="file" name="image"
                                        :title="trans('table.columns.image')" />
                                    <x-size-notice key="service" />
                                </div> --}}
                                <div class="col-12">
                                    <x-dashboard.input-group type="text" name="title_en" :value="$vision->title_en"
                                        :title="trans('table.columns.title')" />
                                </div>
                                <div class="col-12 mt-3">
                                    <x-dashboard.label>{{ trans('table.columns.description') }}</x-dashboard.label>
                                    <textarea class="form-control" name="description_en" cols="10" rows="6">{{ $vision->description_en }}</textarea>
                                    <x-dashboard.error field="description_en" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
