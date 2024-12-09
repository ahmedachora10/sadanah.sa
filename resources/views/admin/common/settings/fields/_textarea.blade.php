<div
    class="form-group mb-3 {{ isset($field['column']) ? $field['column'] : 'col-md-6' }} {{ $errors->has($field['name'] ?? null) ? ' has-error' : '' }}">
    <label for="{{ $field['name'] ?? '' }}"
        class="mb-2">{{ trans('settings.' . strtolower($field['label'] ?? '')) }}</label>
    <textarea name="{{ $field['name'] ?? '' }}" class="form-control {{ $field['class'] ?? '' }}"
        id="{{ $field['name'] ?? '' }}" placeholder="{{ $field['label'] ?? '' }}">{{ old($field['name'] ?? '', \setting($field['name'] ?? '')) }}</textarea>
    @if (isset($field['dimension']))
        <x-size-notice :key="$field['dimension']" />
    @endif

    @if ($errors->has($field['name'] ?? ''))
        <small class="help-block">{{ $errors->first($field['name'] ?? '') }}</small>
    @endif
</div>
