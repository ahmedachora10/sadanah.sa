<x-app-layout>
    <x-theme.tab-list :route="route('corporate-identities.update', $corporateIdentity)">
        <x-slot:arForm>
            @method('PUT')
            <div class="col-12 mb-3">
                <x-dashboard.input-group type="text" name="name_ar" :value="$corporateIdentity->name_ar" :title="trans('table.columns.name')" />
            </div>
        </x-slot:arForm>

        <x-slot:enForm>
            <div class="col-12 mb-3">
                <x-dashboard.input-group type="text" name="name_en" :value="$corporateIdentity->name_en" :title="trans('table.columns.name')" />
            </div>
        </x-slot:enForm>
    </x-theme.tab-list>
</x-app-layout>
