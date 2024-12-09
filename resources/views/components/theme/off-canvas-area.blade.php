<div class="offcanvas__area">
    <div class="offcanvas__close">
        <button class="offcanvas__close-btn offcanvas-close-btn">
            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11 1L1 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" />
                <path d="M1 1L11 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </button>
    </div>
    <div class="offcanvas__wrapper">
        <div class="offcanvas__content">
            <div class="offcanvas__top mb-40">
                <div class="offcanvas__logo">
                    <a href="index.html">
                        <img src="{{asset(setting('logo'))}}" width="100" alt="logo">
                    </a>
                </div>
            </div>

            <div class="tp-main-menu-mobile fix d-xl-none mb-30"></div>

            <div class="offcanvas-info mb-30">
                <h4 class="offcanvas__title">{{ ucwords(trans('contacts')) }}</h4>

                @if(!empty(setting('email')))
                <div class="offcanvas__contact-content d-flex">
                    <div class="offcanvas__contact-content-icon">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div class="offcanvas__contact-content-content">
                        <a href="mailto:{{setting('email')}}"> {{setting('email')}} </a>
                    </div>
                </div>
                @endif
                @if(!empty(setting('phone')))
                <div class="offcanvas__contact-content d-flex">
                    <div class="offcanvas__contact-content-icon">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div class="offcanvas__contact-content-content">
                        <a href="tel:{{setting('phone')}}"> {{setting('phone')}} </a>
                    </div>
                </div>
                @endif
            </div>
            <div class="offcanvas__social">
                @foreach ([
                'facebook' => 'fab fa-facebook-f',
                'instagram' => 'fa-brands fa-instagram',
                'linkedin' => 'fa-brands fa-linkedin',
                'twitter' => 'fab fa-twitter',
                'snapchat' => 'fab fa-snapchat'
                ] as $media => $icon)
                @continue(empty(setting($media)))

                <a href="{{setting($media)}}" class="icon {{$media}}"><i class="{{$icon}}"></i></a>
                @endforeach
                {{-- <a class="icon facebook" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="icon twitter" href="#"><i class="fab fa-twitter"></i></a>
                <a class="icon youtube" href="#"><i class="fab fa-youtube"></i></a>
                <a class="icon linkedin" href="#"><i class="fab fa-linkedin"></i></a> --}}
            </div>
        </div>
    </div>
</div>
<div class="body-overlay"></div>
