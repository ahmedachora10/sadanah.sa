@props(['value' => null])
<div class="tp-contact-input p-relative">
    <textarea {{ $attributes }}>
        {{$value}}
    </textarea>
    {{$slot}}
</div>
