<!-- about area start -->
<section class="tp-about-3-area p-relative pb-120" id="about">
    <div class="tp-about-3-shape">
        <img class="shape-1" src="{{asset('theme/img/about/home-3/about-3-shape.png')}}" alt="">
        {{-- <img class="shape-2" src="{{$about?->thumbnail}}" alt=""> --}}
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="tp-about-3-thumb p-relative wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">
                    <div class="tp-hover-distort-wrapper">
                        <div class="canvas"></div>
                        <div class="tp-hover-distort" data-displacementImage="{{asset('theme/img/webgl/1.jpg')}}">
                            <img style="width: 70%; height: 518px" class="tp-hover-distort-img front" src="{{$about?->thumbnail}}" alt="">
                            <img style="width: 70%; height: 518px" class="tp-hover-distort-img back" src="{{$about?->thumbnail}}" alt="">
                        </div>
                    </div>
                    {{-- <div class="tp-hover-distort-wrapper shape-1">
                        <div class="canvas"></div>
                        <div class="tp-hover-distort" data-displacementImage="{{asset('theme/img/webgl/1.jpg')}}">
                            <img class="tp-hover-distort-img front" src="{{asset('theme/img/about/home-3/about-3-2.jpg')}}" alt="">
                            <img class="tp-hover-distort-img back" src="{{asset('theme/img/about/home-3/about-3-2.jpg')}}" alt="">
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="col-lg-7">
                <div class="tp-about-3-wrapper p-relative z-index-1 pt-90 wow fadeInRight" data-wow-duration="1s"
                    data-wow-delay=".3s">
                    <div class="tp-about-3-title-wrapper">
                        <x-theme.headline key="about" />
                        <p>{{$about?->description}}</p>
                    </div>
                    <div class="tp-about-3-btn d-flex align-items-center">
                        <a class="tp-btn tp-icon-style" href="{{route('contact')}}"> {{trans('contact us')}} <span><svg
                                    class="qodef-svg--custom-arrow qodef-m-arrow" xmlns="http://www.w3.org/2000/svg"
                                    width="14.2" height="14.2" viewBox="0 0 14.2 14.2">
                                    <g>
                                        <path d="M13.2 9V1h-8M13.4.8.7 13.5"></path>
                                        <path d="M13.2 9V1h-8M13.4.8.7 13.5"></path>
                                    </g>
                                    <g>
                                        <path d="M13.2 9V1h-8M13.4.8.7 13.5"></path>
                                        <path d="M13.2 9V1h-8M13.4.8.7 13.5"></path>
                                    </g>
                                </svg></span></a>
                        {{-- <div class="tp-counter-call d-flex align-items-center">
                            <div class="tp-counter-call-icon">
                                <span><i class="fa-regular fa-phone-volume"></i></span>
                            </div>
                            <div class="tp-counter-call-info">
                                <p>Talk to an expert </p>
                                <span><a href="tel:555-0111">+99 (786) 8765 3695</a></span>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about area end -->
