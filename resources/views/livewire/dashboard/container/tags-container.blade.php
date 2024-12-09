<section>

    <x-dashboard.headline :title="trans('sidebar.sections')" />

    <x-dashboard.tables.table1 :createAction="route('tags.create')" :columns="['name']">

        {{-- <x-slot:title>
            <x-dashboard.input type="search" name="search" wire:model.live.debounce.250ms="search"
                placeholder="{{ trans('table.columns.search') }}" />
        </x-slot:title> --}}

        @forelse ($tags as $item)
            <tr wire:loading.class="opacity-50">
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>

                <td>
                    <x-dashboard.actions.container>
                        <x-dashboard.actions.edit
                            :href="route('tags.edit', $item->id)">{{ trans('common.edit') }}</x-dashboard.actions.edit>
                        <x-dashboard.actions.delete :route="route('tags.destroy', $item)" />
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
        {{ $tags->links() }}
    </div>
</section>
