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
