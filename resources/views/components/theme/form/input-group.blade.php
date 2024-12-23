
@props(['name', 'value' => null, 'placeholder' => ''])
<x-theme.form.input {{ $attributes }} :name="$name" :value="$value ?? old($name)" :id="$name" :placeholder="$placeholder"/>
<x-dashboard.error :field="$name" />
