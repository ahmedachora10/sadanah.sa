<x-app-layout>

    <form action="{{ route('support.update', $support) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <x-dashboard.cards.sample column="col-12">

            <div class="row align-items-end">

                <div class="col-md-6 col-12 mb-3">
                    <x-dashboard.input-group type="text" :value="$support->name" name="name" :title="trans('table.columns.name')" />
                </div>

                <div class="col-md-6 col-12 mb-3">
                    <x-dashboard.input-group type="text" :value="$support->contact" name="contact" :title="trans('table.columns.content')" />
                </div>

                {{-- <div class="col-md-6 col-12 mb-3">
                    <x-dashboard.input-group type="text" :value="$support->title_en" name="title_en" :title="trans('table.columns.title_en')" />
                </div> --}}

                <div class="col-12">
                    <x-dashboard.button type="submit" name="Save" class="btn-primary mt-3" />
                </div>
            </div>

        </x-dashboard.cards.sample>

    </form>

</x-app-layout>
