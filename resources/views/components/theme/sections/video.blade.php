<!-- contact area start -->
<section class="tp-contact-area p-relative fix pt-190 pb-200">
    <div class="tp-contact-bg" data-background="{{asset('theme/img/video-bg.jpg')}}" @if(app()->getLocale() == 'en') style="transform: scaleX(-1);" @endif></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="tp-contact-title-wrapper p-relative wow fadeInLeft" data-wow-duration="1s"
                    data-wow-delay=".3s">

                    <x-theme.headline key="video" />

                    {{-- <div class="tp-contact-btn-box">
                        <a class="tp-btn tp-icon-style" href="contact.html">Get Started <span><svg
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
                        <a class="tp-btn tp-icon-style white" href="contact.html">Contact Us <span><svg
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
                    </div> --}}
                    <div class="tp-video-play p-relative" data-background="{{asset('theme/img/video-bg.jpg')}}">
                        <div class="tp-video-popup">
                            <a class="popup-video" href="{{setting('video')}}">
                                <span><i class="fa-regular fa-play"></i></span>
                                <p class="mb-0">{{trans('watch video')}}</p>
                            </a>
                        </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="tp-contact-thumb">
                    <img class="shape-main" width="438" height="546" src="{{asset('theme/img/video-'. app()->getLocale() .'.jpg')}}" alt="">
                    {{-- <img class="shape-1" src="{{asset('theme/img/contact/contact-1-shape1.png')}}" alt="">
                    <img class="shape-2" src="{{asset('theme/img/contact/contact-1-shape2.png')}}" alt="">
                    <img class="shape-3" src="{{asset('theme/img/contact/contact-1-shape3.png')}}" alt=""> --}}
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact area end -->
