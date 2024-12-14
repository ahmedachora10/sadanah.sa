
<section>

    <x-dashboard.headline :title="trans('sidebar.contact us')" />

    <x-dashboard.tables.table1 :columns="['name', 'email', 'phone']">

        {{-- <x-slot:title>
            <x-dashboard.input type="search" name="search" wire:model.live.debounce.250ms="search"
                placeholder="{{ trans('table.columns.search') }}" />
        </x-slot:title> --}}

        @forelse ($data as $item)
        <tr wire:loading.class="opacity-50">
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->phone }}</td>
            <td><a href="#" class="btn btn-sm btn-primary" wire:click="readMore({{ $item }})">
                    <i class="bx bx-show me-1"></i>
                    {{ trans('show') }}</a></td>
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
        {{ $data->links() }}
    </div>

    <x-dashboard.modals.modal1 id="showMessage">
        <div class="col-12">
            <ul class="list-unstyled my-3 py-1">
                @foreach ($request?->getFillable() ?? [] as $item)
                @if(in_array($item, ['instagram','snapchat','tiktok','youtube','x']))
                    @foreach ($request->$item ?? [] as $inf)
                        <li class="d-flex align-items-center mb-4">
                            <i class="bx bx-check"></i>
                            <span class="fw-medium mx-2">{{trans('table.columns.'.$item.'_'.$inf)}}:</span>
                            <span>{{$inf}}</span>
                        </li>
                    @endforeach
                @else
                <li class="d-flex align-items-center mb-4">
                    <i class="bx bx-check"></i>
                    <span class="fw-medium mx-2">{{trans('table.columns.'.$item)}}:</span>
                    <span>{{$request?->$item}}</span>
                </li>
                @endif
                @endforeach
            </ul>
        </div>
    </x-dashboard.modals.modal1>


</section>
