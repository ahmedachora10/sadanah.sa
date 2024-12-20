<section>

    <x-dashboard.headline :title="trans('sidebar.contact us')" />

    <x-dashboard.tables.table1 :columns="['name', 'email', 'message', 'blog', 'status']">

        {{-- <x-slot:title>
            <x-dashboard.input type="search" name="search" wire:model.live.debounce.250ms="search"
                placeholder="{{ trans('table.columns.search') }}" />
        </x-slot:title> --}}

        @forelse ($comments as $item)
        <tr wire:loading.class="opacity-50">
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->message }}</td>
            <td>
                <x-dashboard.badge color="primary">
                    {{ $item->blog?->title }}
                </x-dashboard.badge>
            </td>
            <td>
                <x-dashboard.badge wire:click="switch({{$item}})" :color="$item->status->color()">
                    {{ $item->status->name() }}
                </x-dashboard.badge>
            </td>

            <td>
                <x-dashboard.actions.container>
                    <x-dashboard.actions.delete wire:click="delete({{ $item }})" :livewire="true" />
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
        {{ $comments->links() }}
    </div>

</section>
