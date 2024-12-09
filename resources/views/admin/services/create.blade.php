<x-app-layout>
    <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
        <x-dashboard.cards.sample column="col-12">
            <div class="row">
                @csrf

                <div class="col-12 mb-3">
                    <x-dashboard.input-group type="file" name="image" :title="trans('table.columns.image')" />
                    <x-size-notice key="service" />
                </div>
                <div class="col-md-6">
                    <x-dashboard.input-group type="text" name="name" :title="trans('table.columns.name')" />
                </div>
                <div class="col-md-6">
                    <x-dashboard.input-group type="text" name="price" :title="trans('table.columns.price')" />
                </div>
                <div class="col-12 mt-3">
                    <x-dashboard.label>{{ trans('table.columns.description') }}</x-dashboard.label>
                    <textarea class="form-control" name="description" cols="10" rows="6"></textarea>
                    <x-dashboard.error field="description" />
                </div>


                <div class="col-12">
                    <x-dashboard.button type="submit" name="Save" class="btn-primary mt-3" />
                </div>
            </div>

        </x-dashboard.cards.sample>
    </form>
</x-app-layout>
