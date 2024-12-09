<x-app-layout>
    <form action="{{ route('services.update', $service) }}" method="POST" enctype="multipart/form-data">
        <x-dashboard.cards.sample column="col-12">
            <div class="row">
                @csrf
                @method('PUT')
                <div class="col-12 mb-3">
                    <div class="mb-3">
                        <img src="{{ asset($service->thumbnail) }}" alt="image" width="60" height="60"
                            class="img-thumbnail">
                    </div>
                    <x-dashboard.input-group type="file" name="image" :title="trans('table.columns.image')" />
                    <x-size-notice key="service" />
                </div>
                <div class="col-md-6">
                    <x-dashboard.input-group :value="$service->name" type="text" name="name" :title="trans('table.columns.name')" />
                </div>
                <div class="col-md-6">
                    <x-dashboard.input-group :value="$service->price" type="text" name="price" :title="trans('table.columns.price')" />
                </div>
                <div class="col-12 mt-3">
                    <x-dashboard.label>{{ trans('table.columns.description') }}</x-dashboard.label>
                    <textarea class="form-control" name="description" cols="10" rows="6">{{ $service->description }}</textarea>
                    <x-dashboard.error field="description" />
                </div>
            </div>
        </x-dashboard.cards.sample>
    </form>
</x-app-layout>
