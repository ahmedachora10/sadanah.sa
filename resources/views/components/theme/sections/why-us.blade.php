<section class="tp-about-area p-relative pt-120 pb-120">
    <div class="tp-about-shape">
        <img src="{{asset('theme/img/about/about-1-5.png')}}" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="tp-about-thumb-wrapper">
                    <div class="tp-about-thumb">
                        {{-- <img class="shape-1" src="{{asset('theme/img/about/about-1-3.jpg')}}" alt="">
                        <img class="shape-2" src="{{asset('theme/img/about/about-1-4.png')}}" alt=""> --}}
                        {{-- <p>20</p> --}}
                        <div class="tp-hover-distort-wrapper top">
                            <div class="canvas"></div>
                            <div class="tp-hover-distort" data-displacementImage="{{asset('theme/img/webgl/1.jpg')}}">
                                <img class="tp-hover-distort-img front" width="470" height="518" src="{{asset('theme/img/speciality-1-'.app()->getLocale().'.jpg')}}"
                                    alt="">
                                <img class="tp-hover-distort-img back" width="470" height="518" src="{{asset('theme/img/speciality-1-'.app()->getLocale().'.jpg')}}"
                                    alt="">
                            </div>
                        </div>
                        <div class="tp-hover-distort-wrapper main" style="border: 15px solid #fff">
                            <div class="canvas"></div>
                            <div class="tp-hover-distort" data-displacementImage="{{asset('theme/img/webgl/1.jpg')}}">
                                <img class="tp-hover-distort-img front" width="470" height="622" src="{{asset('theme/img/speciality-2-'.app()->getLocale().'.jpg')}}" alt="">
                                <img class="tp-hover-distort-img back" width="470" height="622" src="{{asset('theme/img/speciality-1-'.app()->getLocale().'.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="tp-about-wrapper p-relative wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                    <div class="tp-about-title-wrapper">
                        <x-theme.headline key="why us" />
                    </div>
                    <div class="tp-about-icon-box d-flex pt-40 pb-5">
                        @foreach ($certificates ?? [] as $item)
                        <div class="tp-about-icon-content d-flex">
                            <div class="tp-about-icon">
                                <span>
                                    <img src="{{$item->thumbnail}}" alt="icon" width="50" height="60">
                                </span>
                            </div>
                            <h5>{{$item->title}}</h5>
                        </div>
                        @endforeach
                    </div>
                    <div class="tp-about-list">
                        <ul class="row justify-content-between align-items-start">
                            @foreach ($model->properties ?? [] as $item)
                                <li class="col-sm-6 col-12"><i class="fa-regular fa-check"></i> {{$item}}</li>
                            @endforeach
                        </ul>
                    </div>
                    {{-- <div class="tp-about-btn">
                        <a class="tp-btn tp-icon-style" href="about.html">Discover More <span> <svg
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
                        <img src="{{asset('theme/img/about/about-1-signature.png')}}" alt="">
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>
