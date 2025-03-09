<section>

    <x-dashboard.headline :title="trans('sidebar.questionnaire')" />

    <x-dashboard.tables.table1 :columns="['client name', 'client nationality', 'phone number', 'email', 'new client']">

        {{-- <x-slot:title>
            <x-dashboard.input type="search" name="search" wire:model.live.debounce.250ms="search"
                placeholder="{{ trans('table.columns.search') }}" />
        </x-slot:title> --}}

        @forelse ($items as $item)
            <tr wire:loading.class="opacity-50">
                <td>{{ $item->id }}</td>
                <td>{{ $item->client_name }}</td>
                <td>{{ $item->client_nationality }}</td>
                <td><x-dashboard.badge color="primary">{{ $item->phone_number }}</x-dashboard.badge></td>
                <td><x-dashboard.badge color="info">{{ $item->email }}</x-dashboard.badge></td>

                <td><x-dashboard.badge :color="$item->client_color?->color">{{ $item->client_color?->text }}</x-dashboard.badge></td>

                <td>
                    <x-dashboard.actions.container>
                        <a href="javascript:void()" wire:click="show({{$item}})" class="dropdown-item">
                            <i class="bx bx-show"></i>
                            {{__('show')}}
                        </a>
                        <a href="javascript:void()" wire:click="generatePDF({{$item}})" class="dropdown-item">
                            <i class="bx bx-file"></i>
                            {{__('Export as PDF')}}
                        </a>
                        <x-dashboard.actions.delete wire:click="delete({{$item}})" :livewire="true" />
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

    <x-dashboard.modals.modal1 id="questionnaire-details">
        <x-questionnaire-details :questionnaire="$questionnaire" />
    </x-dashboard.modals.modal1>
</section>
