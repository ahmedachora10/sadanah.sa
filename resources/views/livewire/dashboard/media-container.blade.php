<div>
    @foreach ($images?->reverse() as $img)
    <div wire:loading.class="opacity-50" class="dz-preview dz-processing dz-image-preview dz-success dz-complete">
        <div class="dz-details">
            <div class="dz-thumbnail">
                <img data-dz-thumbnail alt="" src="{{$img->getUrl()}}">
                <span class="dz-nopreview">No preview</span>
                <div class="dz-success-mark"></div>
                <div class="dz-error-mark"></div>
                <div class="dz-error-message"><span data-dz-errormessage></span></div>
                <div class="progress">
                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100"
                        data-dz-uploadprogress style="width: 100%;">
                    </div>
                </div>
            </div>
            <div class="dz-filename" data-dz-name>{{$img->name}}</div>
            <div class="dz-size" data-dz-size>
                {{$img->human_readable_size}}
                <a class="dz-remove" href="#!" data-dz-remove wire:click="delete({{$img->id}})">Remove file</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
