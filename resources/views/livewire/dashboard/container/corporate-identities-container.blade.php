<section>

    <x-dashboard.headline :title="trans('sidebar.corporate identities')" />

    <x-dashboard.tables.table1 :createAction="route('corporate-identities.create')" :columns="['name']">

        {{-- <x-slot:title>
            <x-dashboard.input type="search" name="search" wire:model.live.debounce.250ms="search"
                placeholder="{{ trans('table.columns.search') }}" />
        </x-slot:title> --}}

        @forelse ($identities as $item)
            <tr wire:loading.class="opacity-50">
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>

                <td>
                    <x-dashboard.actions.container>
                        <x-dashboard.actions.edit
                            :href="route('corporate-identities.edit', $item->id)">{{ trans('common.edit') }}</x-dashboard.actions.edit>
                        <x-dashboard.actions.delete :route="route('corporate-identities.destroy', $item)" />
                    </x-dashboard.actions.container>
                </td>
            </tr>
        @empty
            <tr>
                <td>{{ trans('table.empty') }}</td>
            </tr>
        @endforelse
    </x-dashboard.tables.table1>

    <div class="mt-4">
        {{ $identities->links() }}
    </div>
</section>
