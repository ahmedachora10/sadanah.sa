@props(['key'])
<div class="row mb-3">
    <div class="col-12 text-center" data-aos="fade">
        <h3 class="section-title-sub text-primary">{{ headline($key)?->title }}</h3>
        <h2 class="section-title mb-3">{{ headline($key)?->subtitle }}</h2>
    </div>
</div>
