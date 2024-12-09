<form enctype="multipart/form-data" {{ $attributes->merge([
    'class' => 'dropzone needsclick',
]) }}>
    <div class="dz-message needsclick">
        @if ($content)
            {{ $content }}
        @else
            Drop files here or click to upload
            {{-- <span class="note needsclick">(This is just a demo dropzone. Selected files are <strong>not</strong>
                actually uploaded.)</span> --}}
            <i class=""></i>
        @endif
    </div>
    <div class="fallback">
        <input name="{{ $fileName }}" type="file" />
    </div>
</form>
