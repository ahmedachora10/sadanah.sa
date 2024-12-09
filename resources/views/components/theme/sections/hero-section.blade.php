@props(['sliders' => []])
<div id="showcase-slider-wrappper" class="showcase-slider-wrappper">

    <div class="port-showcase-slider-spaces p-relative">
        <div class="port-showcase-slider-wrap tp-slider-parallax fix" id="showcase-slider-holder"
            data-pattern-img="{{asset('theme/img/webgl/1.jpg')}}">
            <div class="swiper-container parallax-slider-active p-relative" id="showcase-slider">
                <div class="swiper-wrapper" id="trigger-slides">
                    <div class="tp-line-wrapper d-none d-md-block">
                        <div class="tp-line-item"></div>
                    </div>
                    <div class="tp-hero-bg"></div>
                    @foreach ($sliders as $slider)
                    @php
                        $styles = $slider->styles;
                        $top = $styles['top'] ?? 0;
                        $left = $styles['left'] ?? 0;
                        $right = $styles['right'] ?? 0;
                        $bottom = $styles['bottom'] ?? 0;

                        $css = '';

                        foreach($styles ?? [] as $key =>$value) {
                            $css .= "$key: $value" ."px;";
                        }

                    @endphp
                    <div class="swiper-slide">
                        <div @class(['slide-wrap overlay', 'active' => $loop->first]) style="opacity:0" data-slide="{{$loop->index}}"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="tp-hero-content p-relative">
                                        <div class="tp-hero-title-wrapper">
                                            {{-- <div class="tp-hero-title-pre">
                                                <div><span>trusted construction company</span></div>
                                            </div> --}}
                                            <div class="tp-hero-title">
                                                {{-- <div><span>We Build</span></div>
                                                <div><span>While You Rest</span></div> --}}
                                                {{-- <div><span>{{ $slider->title }}</span></div> --}}
                                            </div>
                                        </div>
                                        {{-- Button Position --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tp-hero-btn-wrap p-relative fix" style="position: absolute !important; {{$css}}">
                            <div class="tp-hero-button-wrapper d-flex flex-wrap align-items-center">
                                @if(!empty($slider->link))
                                <div class="tp-hero-btn">
                                    <a class="tp-btn tp-icon-style" href="{{$slider->link}}">Get Started
                                        <span><svg class="qodef-svg--custom-arrow qodef-m-arrow" xmlns="http://www.w3.org/2000/svg" width="14.2"
                                                height="14.2" viewBox="0 0 14.2 14.2">
                                                <g>
                                                    <path d="M13.2 9V1h-8M13.4.8.7 13.5"></path>
                                                    <path d="M13.2 9V1h-8M13.4.8.7 13.5"></path>
                                                </g>
                                                <g>
                                                    <path d="M13.2 9V1h-8M13.4.8.7 13.5"></path>
                                                    <path d="M13.2 9V1h-8M13.4.8.7 13.5"></path>
                                                </g>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="tp-slider-dot d-md-none"></div>
                <div class="tp-showcase-arrow-box">
                    <button type="button" class="hero-3-prev"><i class="fa-regular fa-arrow-left"></i></button>
                    <button type="button" class="hero-3-next"><i class="fa-regular fa-arrow-right"></i></button>
                </div>
            </div>
        </div>
    </div>

    <!-- canvas slider -->
    <div id="canvas-slider" class="canvas-slider">
        @foreach ($sliders as $slider)
        <div class="slider-img" data-slide="{{$loop->index}}"><img class="slide-img" src="{{asset($slider->thumbnail)}}" alt=""></div>
        @endforeach
    </div>
    <!--/canvas slider -->

</div>
