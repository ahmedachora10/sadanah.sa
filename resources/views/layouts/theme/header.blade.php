<header class="tp-header-area p-relative">
    {{-- <div class="tp-header-top d-none d-xl-block fix">
        <div class="container container-large">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="tp-header-top-info">
                        <a href="https://www.google.com/maps" target="_blank"><span><i
                                    class="fa-sharp fa-solid fa-location-dot"></i></span>Manchester 21, Zurich,
                            CH</a>
                        <a href="mailto:needhelp@company.com"><span><i
                                    class="fa-solid fa-envelope"></i></span>ishpatinfo@gmail.com</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="tp-header-top-right d-flex justify-content-end">
                        <div class="tp-header-top-right-color d-flex align-items-center">
                            <p>You can follow us:</p>
                            <div class="tp-header-top-social">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#"><i class="fa-brands fa-tiktok"></i></a>
                                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="tp-header-main-sticky tp-header-main p-relative">
        <div class="container container-large">
            <div class="row align-items-center">
                <div class="col-lg-2 col-md-3 col-6">
                    <div class="tp-header-logo">
                        <a href="{{route('home')}}">
                            <img width="150" src="{{asset(setting('logo'))}}" alt="Logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 d-none d-lg-block">
                    <div class="tp-header-main-menu">
                        <div class="tp-main-menu d-none d-xl-block">
                            <nav class="tp-main-menu-content">
                                <ul>
                                    @include('layouts.theme.menu')
                                    <li></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-9 col-6">
                    <div class="tp-header-main-right d-flex align-items-center justify-content-end">
                        <div class="tp-header-contact d-xl-flex align-items-center">
                            <div class="tp-header-contact-icon d-none d-xxl-block">
                                <a href="{{route('switch-language')}}">
                                    {{ app()->getLocale() == 'ar' ? 'English' : 'العربية' }}
                                </a>
                            </div>
                            <div class="tp-header-hamburger d-xl-none offcanvas-open-btn">
                                <button class="hamburger-btn">
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<header class="tp-header-area p-relative tp-int-menu tp-header-sticky-cloned">
    <div class="tp-header-main-sticky tp-header-main p-relative">
        <div class="container container-large">
            <div class="row align-items-center">
                <div class="col-lg-2 col-md-3 col-6">
                    <div class="tp-header-logo">
                        <a href="{{route('home')}}">
                            <img width="150" src="{{asset(setting('logo'))}}" alt="Logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 d-none d-lg-block">
                    <div class="tp-header-main-menu">
                        <div class="tp-main-menu d-none d-xl-block">
                            <nav class="tp-main-menu-content">
                                <ul>
                                    @include('layouts.theme.menu')
                                    <li></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-9 col-6">
                    <div class="tp-header-main-right d-flex align-items-center justify-content-end">
                        <div class="tp-header-contact d-xl-flex align-items-center">
                            <div class="tp-header-contact-icon d-none d-xxl-block">
                                <a href="{{route('switch-language')}}">
                                    {{ app()->getLocale() == 'ar' ? 'English' : 'العربية' }}
                                </a>
                            </div>
                            {{-- <div class="tp-header-contact-icon search-open-btn d-none d-xxl-block">
                                <span><i class="fa-sharp fa-regular fa-magnifying-glass"></i></span>
                            </div>
                            <div class="tp-header-contact-icon d-none d-xxl-block">
                                <button class="cartmini-open-btn"><i
                                        class="fa-sharp fa-light fa-cart-shopping"></i></button>
                            </div> --}}
                            {{-- <div class="tp-header-btn d-none d-xl-block">
                                <a class="tp-btn tp-icon-style d-none d-xl-block" href="contact.html">Get a Quote
                                    <span>
                                        <svg class="qodef-svg--custom-arrow qodef-m-arrow"
                                            xmlns="http://www.w3.org/2000/svg" width="14.2" height="14.2"
                                            viewBox="0 0 14.2 14.2">
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
                            </div> --}}
                            <div class="tp-header-hamburger d-xl-none offcanvas-open-btn">
                                <button class="hamburger-btn">
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
