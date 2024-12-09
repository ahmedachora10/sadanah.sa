<section>

    <x-dashboard.headline :title="trans('sidebar.our team')" />

    <x-dashboard.tables.table1 :createAction="route('our-team.create')" :columns="['image', 'name', 'job name']">

        @forelse ($members as $item)
        <tr wire:loading.class="opacity-50">
            <td>{{ $item->id }}</td>
            <td><img src="{{ asset($item->thumbnail) }}" alt="image" width="40" height="40" class="rounded-circle"></td>
            <td>{{ $item->name ?? '-' }}</td>
            <td>{{ $item->job_name ?? '-' }}</td>
            {{-- <td>{{ $item->linkedin }} - {{ $item->twitter }}</td> --}}
            <td>
                <x-dashboard.actions.container>
                    <x-dashboard.actions.edit :href="route('our-team.edit', $item->id)">{{ trans('common.edit') }}
                    </x-dashboard.actions.edit>
                    <x-dashboard.actions.delete :route="route('our-team.destroy', $item->id)" />
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
        {{ $members->links() }}
    </div>

</section>
