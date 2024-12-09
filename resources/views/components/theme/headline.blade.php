@props(['key' => '',])

@if($key !== '')
<span class="tp-section-title-pre">{{ headline($key)->title }}</span>
<h3 class="tp-section-title">{{headline($key)->subTitle}}</h3>
@else
<span></span>
@endif
