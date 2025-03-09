<div class="d-flex flex-wrap justify-content-start align-items-center">
    @foreach ($media as $item)
        <div class="mx-2 shadow position-relative">
            <img src="{{$item?->getUrl()}}" width="100" height="100" class="rounded-1" alt="{{$item->name}}">
            <button type="button" role="button" wire:click="remove({{$item->id}})" class="position-absolute btn btn-danger rounded-0 px-1 py-1" style="top: 0px; left: 0px;">
                <i class="bx bx-trash text-white"></i>
        </button>
        </div>
    @endforeach
</div>
