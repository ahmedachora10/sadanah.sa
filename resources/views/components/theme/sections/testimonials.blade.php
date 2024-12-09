<!-- testimonial area start -->
<section class="tp-testimonial-area p-relative pt-90 pb-70">
    <div class="tp-testimonial-bg" data-background="{{asset('theme/img/testimonial/testimonial-2-shape-1.png')}}"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tp-testimonial-title-wrapper text-center mb-60">
                    <x-theme.headline key="reviews" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="tp-testimonial-slider wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                <div class="tp-testimonial-active swiper-container fix">
                    <div class="swiper-wrapper">
                        @foreach ($reviews as $review)
                            <div class="swiper-slide">
                                <div class="tp-testimonial-item text-center p-relative">
                                    <div class="tp-testimonial-shape">
                                        <img class="lazy" src="{{asset('theme/img/loading.webp')}}" data-src="{{ asset('theme/img/testimonial/testimonial-2-shape-2.png') }}" alt="">
                                    </div>
                                    <div class="tp-testimonial-thumb">
                                        <img class="lazy" src="{{asset('theme/img/loading.webp')}}" data-src="{{asset('theme/img/testimonial/testimonial-2-1.jpg')}}" alt="">
                                    </div>
                                    <div class="tp-testimonial-content p-relative">
                                        <h4 class="tp-testimonial-title">{{$review->name}}</h4>
                                        <p>{{$review->comment}} </p>
                                        <div class="tp-testimonial-rating">
                                            @for ($i = 1; $i <= 5; $i++)
                                                @if ($i <= round($review->rate))
                                                    <i class="fa-solid fa-star"></i>
                                                @else
                                                    <i class="far fa-star"></i>
                                                @endif

                                            @endfor
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- testimonial area end -->
