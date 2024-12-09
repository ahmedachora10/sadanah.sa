
@props(['name', 'value' => null])
<x-theme.form.input {{ $attributes }} :name="$name" :value="$value ?? old($name)" :id="$name">
    <x-dashboard.error :field="$name" />
</x-theme.form.input>
