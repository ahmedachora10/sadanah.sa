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
        {{ $data->links() }}
    </div>

    <x-dashboard.modals.modal1 id="showMessage">
        <div class="col-12">
            <ul class="list-unstyled my-3 py-1">
                @foreach ($request?->getFillable() ?? [] as $item)
                @if(in_array($item, ['instagram','snapchat','tiktok','youtube','x']))
                <li class="mt-3 mb-2">
                    <h5 class="text-muted fw-bold">{{ trans('front.'.$item) }}</h5>
                </li>
                @foreach ($request->$item ?? [] as $key => $inf)
                <li class="d-flex align-items-center mb-4">
                    <i class="bx bx-check"></i>
                    <span class="fw-medium mx-2">{{trans('table.columns.'.$key)}}:</span>
                    <span>@if($key == 'link') <a class="text-warning" href="{{$inf}}" target="_blank"><i
                                class="bx bx-link-external"></i></a> @else {{$inf}} @endif</span>
                </li>
                @endforeach
                @else
                <li class="d-flex align-items-center mb-4">
                    <i class="bx bx-check"></i>
                    <span class="fw-medium mx-2">{{trans('table.columns.'.str($item)->replace('_', '
                        ')->value())}}:</span>
                    <span>{{$request?->$item}}</span>
                </li>
                @endif
                @endforeach
                @if($request?->thumbnail != '')
                <li class="d-flex align-items-center mb-4">
                    <i class="bx bx-check"></i>
                    <span class="fw-medium mx-2">{{trans('table.columns.attachments')}}:</span>
                    <a href="{{$request?->thumbnail}}" target="_blank">
                        <i class="bx bx-file text-primary"></i>
                    </a>
                </li>
                @endif
            </ul>
        </div>
    </x-dashboard.modals.modal1>
</section>
