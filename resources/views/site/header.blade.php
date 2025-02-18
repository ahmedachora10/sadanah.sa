@php
    $lang = app()->getLocale();
@endphp
<!DOCTYPE html>
<html lang="{{$lang}}" dir="{{$lang == 'ar' ? 'rtl' : 'ltr'}}">
  <head>
    <!-- Metas -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1"
    />
    <meta
      name="keywords"
      content="HTML5 Template sadnah Multi-Purpose themeforest"
    />
    <meta name="description" content="sadnah - Multi-Purpose HTML5 Template" />
    <meta name="author" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Title  -->
    <title id="pageTitle">{{ setting('app_name_'.$lang) }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('assets/imgs/logo.png')}}" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Allerta+Stencil&display=swap"
      rel="stylesheet"
    />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    @if(Route::currentRouteName() == 'home')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&display=swap" rel="stylesheet">
    <style>
        .almarai-light {
        font-family: "Almarai", sans-serif;
        font-weight: 300;
        font-style: normal;
        }

        .almarai-regular {
        font-family: "Almarai", sans-serif;
        font-weight: 400;
        font-style: normal;
        }

        .almarai-bold {
        font-family: "Almarai", sans-serif;
        font-weight: 700;
        font-style: normal;
        }

        .almarai-extrabold {
        font-family: "Almarai", sans-serif;
        font-weight: 800;
        font-style: normal;
        }
    </style>
    @endif
    <!-- Font -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins/bootstrap-'.$lang.'.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/satoshi.css')}}" />

    <!-- Plugins -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins.css')}}" />

    <!-- Core Style Css -->
        <link  rel="stylesheet" href="{{ asset('assets/css/style-'.$lang.'.css') }}?v={{str()->random(5)}}">
        {{-- <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"> --}}
        <style>
            .form-check-input:checked {
                background-color: var(--primary-color) !important;
                border-color: var(--primary-color) !important;
            }
        </style>
    @livewireStyles
  </head>

  <body>
    <!-- ==================== Start Loading ==================== -->

    <div class="loader-wrap">
      <svg viewBox="0 0 1000 1000" preserveAspectRatio="none">
        <path id="svg" d="M0,1005S175,995,500,995s500,5,500,5V0H0Z"></path>
      </svg>

      <div class="loader-wrap-heading">
        <div class="load-text">
          <span>L</span>
          <span>o</span>
          <span>a</span>
          <span>d</span>
          <span>i</span>
          <span>n</span>
          <span>g</span>
        </div>
      </div>
    </div>

    <!-- ==================== End Loading ==================== -->

    <div class="cursor"></div>

    <!-- ==================== Start progress-scroll-button ==================== -->

    <div class="progress-wrap cursor-pointer">
      <svg
        class="progress-circle svg-content"
        width="100%"
        height="100%"
        viewBox="-1 -1 102 102"
      >
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
      </svg>
    </div>

    <!-- ==================== End progress-scroll-button ==================== -->

    <div id="smooth-wrapper">
      <!-- ==================== Start Navbar ==================== -->

      <nav class="navbar navbar-expand-lg change blur">
        <div class="container">
          <!-- Logo -->
          <a class="logo icon-img-100" href="{{route('home')}}">
            <img
              style="max-height: 50px; object-fit: cover; width: 100%"
              src="{{asset('assets/imgs/logo.png')}}"
              data-logo-light="{{asset('assets/imgs/logo-light.png')}}"
              data-logo="{{asset('assets/imgs/logo.png')}}"
              alt="logo"
            />
          </a>
          {{-- {{__('front.home')}} --}}
          <!-- navbar links -->
          <div
            class="collapse navbar-collapse justify-content-center"
            id="navbarSupportedContent"
          >
            <ul class="navbar-nav">
              <li class="nav-item">
                <a
                  class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}"
                  href="{{route('home')}}"
                  role="button"
                  aria-haspopup="true"
                  aria-expanded="false"
                  ><span>{{__('front.home')}}</span></a
                >
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link {{ Route::currentRouteName() == 'about' ? 'active' : '' }}"
                  href="{{route('about')}}"
                  role="button"
                  aria-haspopup="true"
                  aria-expanded="false"
                  ><span>{{trans('front.about')}}</span></a>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link {{ Route::currentRouteName() == 'service' ? 'active' : '' }}"
                  href="{{route('service')}}"
                  role="button"
                  aria-haspopup="true"
                  aria-expanded="false"
                  ><span
                    >{{__('front.services')}}</span
                  ></a
                >
              </li>

              <li class="nav-item" >
                <a class="nav-link {{ Route::currentRouteName() == 'influencers' ? 'active' : '' }}" href="{{route('influencers')}}"
                  ><span
                    >{{__('front.Influencers')}}</span
                  ></a
                >
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link {{ Route::currentRouteName() == 'portfolio' ? 'active' : '' }}"
                  href="{{route('portfolio')}}"
                  role="button"
                  aria-haspopup="true"
                  aria-expanded="false"
                  ><span
                    >{{__('front.Portfolio')}}</span
                  ></a
                >
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link {{ Route::currentRouteName() == 'blog' ? 'active' : '' }}"
                  href="{{route('blog')}}"
                  role="button"
                  aria-haspopup="true"
                  aria-expanded="false"
                  ><span >{{__('front.Blogs')}}</span></a
                >
              </li>
            </ul>
          </div>

          <div class="topnav d-flex align-items-center justify-content-center">
            <div class="lang">
              @if (app()->getLocale() == 'ar')
                 <a href="{{route('switch-language', 'en')}}" id="langSwitcher">EN</a>
                 @else
                 <a href="{{route('switch-language', 'ar')}}" id="langSwitcher">AR</a>
                @endif

            </div>
            <div class="menu-icon cursor-pointer">
              <span class="icon ti-align-right"></span>
            </div>
          </div>
        </div>
      </nav>

      <div class="hamenu">
        <div class="logo icon-img-100">
          <img src="{{asset('assets/imgs/logo.png')}}" alt="" />
        </div>
        <div class="close-menu cursor-pointer ti-close"></div>
        <div class="container">
          <div class="row">
            <div class="col-lg-2">
              <div class="menu-text">
                <div class="text">
                  <h2 >{{__('front.Menu')}}</h2>
                </div>
              </div>
            </div>
            <div class="col-lg-7">
              <div class="menu-links">
                <ul class="main-menu rest">
                  <li>
                    <div class="o-hidden">
                      <a href="{{route('home')}}">
                        <div class="link cursor-pointer dmenu">
                          <span class="fill-text" >{{__('front.home')}}</span>
                        </div>
                      </a>
                    </div>
                    <div class="o-hidden">
                      <a href="{{route('about')}}">
                        <div class="link cursor-pointer dmenu">
                          <span class="fill-text" >{{trans('front.about')}}</span>
                        </div>
                      </a>
                    </div>
                    <div class="o-hidden">
                      <a href="{{route('service')}}">
                        <div class="link cursor-pointer dmenu">
                          <span class="fill-text"
                            >{{__('front.services')}}</span
                          >
                        </div>
                      </a>
                    </div>
                    <div class="o-hidden">
                      <a href="{{route('influencers')}}">
                        <div class="link cursor-pointer dmenu">
                          <span class="fill-text"
                            >{{__('front.Influencers')}}</span
                          >
                        </div>
                      </a>
                    </div>
                    <div class="o-hidden">
                      <a href="{{route('portfolio')}}">
                        <div class="link cursor-pointer dmenu">
                          <span class="fill-text"
                            >{{__('front.Portfolio')}}</span
                          >
                        </div>
                      </a>
                    </div>
                    <div class="o-hidden">
                      <a href="{{route('blog')}}">
                        <div class="link cursor-pointer dmenu">
                          <span class="fill-text" >{{__('front.Blogs')}}</span>
                        </div>
                      </a>
                    </div>

                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="cont-info">
                {{-- <div class="item mb-50">
                  <h6 class="sub-title mb-15 opacity-7" data-i18n="addres">
                    Address
                  </h6>
                  <h5>
                    541 Street, <br />
                    Cairo
                  </h5>

                </div> --}}

                <?php
                $x = setting('x');
                $instagram = setting('instagram');
                $linkedin = setting('linkedin');
                $telegram = setting('telegram');
                $tiktok = setting('tiktok');
                $snapchat = setting('snapchat');
                $youtube = setting('youtube');
                $footer_ar = setting('footer_ar');
                $footer_en = setting('footer_en');
                $phone = setting('phone');
                $email = setting('email');
                $fileUrl = setting('profile_file_ar');
                ?>

                <div class="item mb-50">
                  <h6 class="sub-title mb-15 opacity-7">
                    {{__('front.soical')}}
                  </h6>
                  <ul class="rest social-text">
                    <li class="cursor-pointer ml-50">
                      <a href="{{$x}}" target="_blank" class="hover-anim social-icon"
                        ><i class="fa-brands fa-x-twitter"></i>
                      </a>
                    </li>
                    <li class="cursor-pointer ml-50">
                      <a href="{{$linkedin}}" target="_blank" class="hover-anim social-icon"
                        ><i class="fab fa-linkedin mr-10"></i>
                      </a>
                    </li>
                    <li class="cursor-pointer ml-50">
                      <a href="{{$tiktok}}" target="_blank" class="hover-anim social-icon"
                        ><i class="fab fa-tiktok mr-10"></i>
                      </a>
                    </li>
                    <li class="cursor-pointer ml-50">
                      <a href="{{$youtube}}" target="_blank" class="hover-anim social-icon"
                        ><i class="fab fa-youtube mr-10"></i>
                      </a>
                    </li>
                    <li class="cursor-pointer ml-50">
                      <a href="{{$snapchat}}" target="_blank" class="hover-anim social-icon"
                        ><i class="fab fa-snapchat mr-10"></i>
                      </a>
                    </li>
                    <li class="=cursor-pointer ml-50">
                      <a href="{{$telegram}}" target="_blank" class="hover-anim social-icon"
                        ><i class="fab fa-telegram mr-10"></i>
                      </a>
                    </li>
                    <li class="cursor-pointer ml-50">
                      <a href="{{$instagram}}" target="_blank" class="hover-anim social-icon"
                        ><i class="fab fa-instagram mr-10"></i>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="item mb-40">
                  <h6 class="sub-title mb-15 opacity-7">
                   {{__('front.Contact Us')}}
                  </h6>
                  <h5>{{$email}}</h5>
                  <h5 class="underline mt-10">
                    <span class="text" style="direction: ltr; unicode-bidi: embed;">
                      {{$phone}}
                    </span>
                  </h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- ==================== End Navbar ==================== -->
