@props(['image' => '', 'title' => '', 'description' => '', 'link' => '#'])
<div class="tp-blog-3-item mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".7s">
    <div class="p-relative fix d-flex justify-content-center align-items-center">
        <img class="lazy" src="{{asset('theme/img/loading.webp')}}" data-src="{{$image}}" alt="" height="300px">
        {{-- <div class="tp-blog-3-icon">
            <a href="blog-details.html"><i class="flaticon-next"></i></a>
        </div> --}}
    </div>
    <div class="tp-blog-3-content text-center z-index"style="height: {{app()->getLocale() == 'ar' ? '300px' : '400px'}} !important">
        {{-- <div class="tp-blog-3-meta pb-25">
            <span><i class="fa-light fa-circle-user"></i>By thempure</span>
            <span><i class="flaticon-tag"></i>Repair</span>
        </div> --}}
        <h4 class="tp-blog-3-title">{{ $title }}</h4>
        <p>{{ $description }}</p>
    </div>
</div>
