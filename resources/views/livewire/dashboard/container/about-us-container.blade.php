<section>

    <x-dashboard.headline :title="trans('sidebar.about us')" />

    <x-dashboard.tables.table1 :createAction="route('about-us.create')"
        :columns="['image', 'description']">

        {{-- <x-slot:title>
            <x-dashboard.input type="search" name="search" wire:model.live.debounce.250ms="search"
                placeholder="{{ trans('table.columns.search') }}" />
        </x-slot:title> --}}

        @forelse ($items as $item)
        <tr wire:loading.class="opacity-50">
            <td>{{ $item->id }}</td>
            <td><img src="{{ $item->thumbnail }}" alt="logo" width="40" height="40" class="rounded-circle"></td>
            <td>{{ $item->description }}</td>
            <td>
                <x-dashboard.actions.container>
                    <x-dashboard.actions.edit :href="route('about-us.edit', $item->id)">{{ trans('common.edit') }}
                    </x-dashboard.actions.edit>
                    <x-dashboard.actions.delete :route="route('about-us.destroy', $item)" />
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
        {{ $items->links() }}
    </div>

</section>
