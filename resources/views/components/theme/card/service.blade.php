<div class="tp-service-3-item p-relative mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s" style="height: {{app()->getLocale() == 'ar' ? '417px' : '552px'}};">
    <div class="tp-service-3-icon">
        <span>
            {{-- <i class="flaticon-livingroom"></i> --}}
            <img class="lazy" src="{{asset('theme/img/loading.webp')}}" data-src="{{asset($image)}}" alt="{{$title}}" width="55">
        </span>
    </div>
    <div class="tp-service-3-content">
        <h4 class="tp-service-3-title">{{ $title }}</h4>
        @if($description !== '')
        <p>{{ $description }}</p>
        @endif
        @if($link !== '')
        <div class="tp-service-3-btn">
            <a href="{{$link}}">
                <span><i class="fa-regular fa-arrow-right"></i></span>
            </a>
        </div>
        @endif
    </div>
</div>
