
@include('site.header')
<div id="smooth-content">
  <main class="main-bg">
    <!-- ==================== Start Header ==================== -->

    <section class="home2-slider slider slider-prlx">
      <div class="video-container">
        <div class="video-overlay"></div>
        <video autoplay muted loop class="background-video">
             @if (app()->getLocale() == 'ar')
               <source src="{{asset('storage/'.$slider->image_ar)}}" type="video/mp4" />
               <source src="{{asset('storage/'.$slider->image_ar)}}" type="video/ogg" />
               <source src="{{asset('storage/'.$slider->image_ar)}}" type="video/webm" />
             @else
               <source src="{{asset('storage/'.$slider->image_en)}}" type="video/mp4" />
               <source src="{{asset('storage/'.$slider->image_en)}}" type="video/ogg" />
               <source src="{{asset('storage/'.$slider->image_en)}}" type="video/webm" />
             @endif

        </video>
        @if (app()->getLocale() == 'ar')
        <div class="container">
          <div class="caption text-center">
            <h2 class="" data-swiper-parallax="-2000">

                {{$slider->styles['top']}}
            </h2>
            <h1>
              <span data-swiper-parallax="-1000">
                {{$slider->styles['right']}}
              </span>
            </h1>
            <p class="intro-text">
              {{$slider->styles['bottom']}}
            </p>
          </div>
        </div>
        @else
        <div class="container">
          <div class="caption text-center">
            <h2 class="" data-swiper-parallax="-2000">
                {{$slider->styles_ar['top_ar']}}
            </h2>
            <h1>
              <span data-swiper-parallax="-1000">
                {{$slider->styles_ar['right_ar']}}
              </span>
            </h1>
            <p class="intro-text">
              {{$slider->styles_ar['bottom_ar']}}
            </p>
          </div>
        </div>
        @endif

      </div>
    </section>

    <!-- ==================== End Header ==================== -->
          <!-- ==================== start about sadnah ==================== -->
          <section class="section-padding overflow-hidden">
            <div class="container">
              <div class="sec-head mb-80">
                <h6 class="sub-title main-color mb-25" >
                 {{__('front.our specials')}}
                </h6>
                <div
                  class="bord pt-25 bord-thin-top d-flex align-items- justify-content-center"
                >
                  <h2 class="fw-600 text-u"> {{__('front.about sadnah')}}</h2>
                </div>
                <p class="text-center mt-2">
                  @if (app()->getLocale() == 'ar')
                  {{$about->description_ar}}
                  @else
                  {{$about->description_en}}
                  @endif
                </p>
              </div>
              <div class="row row-cols-1 row-cols-md-3 g-4 g-y-4 cont-cards">
                @foreach ($visions as $vision)
                <div class="col mb-3 mb-lg-0">
                  <div class="card about-intro h-100">
                      <img src="{{asset('storage/'.$vision->image)}}" class="card-img-top img_vision" alt="about sadnah"/>
                      <div class="card-body">
                      <h5 class="card-title">
                        @if (app()->getLocale() == 'ar')
                        {{$vision->title_ar}}
                        @else
                        {{$vision->title_en}}
                        @endif
                      </h5>
                      <p class="card-text">
                        @if (app()->getLocale() == 'ar')
                        {{$vision->description_ar}}
                        @else
                        {{$vision->description_en}}
                        @endif
                      </p>
                    </div>
                  </div>
                </div>
                @endforeach


                </div>
              </div>
            </div>
          </section>

          <!-- =================== start about sadnah ==================== -->

          <!-- ==================== Start Services ==================== -->

          <section class="services section-padding pb-0">
            <div class="container">
              <div class="sec-head mb-80">
                <h6 class="sub-title main-color mb-25" >
                  {{__('front.services')}}
                </h6>

                <div class="bord pt-25 bord-thin-top d-flex align-items-center">
                <h2 class="fw-600 text-u"> {{__('front.We Provide')}}</h2>
              </div>
              </div>
              <div class="row row-cols-2 row-cols-md-4 row-cols-lg-5 g-3 g-y-3">
                @foreach ($services as $service)
                <div class="col">
                  <div class="item-box2 mb-30">
                    <div class="icon mb-2">
                       <img class="img_icon_services" src="{{asset('storage/'.$service->image)}}" alt="">
                      {{-- <i class="services-icon fab fa-digital-ocean"></i> --}}
                    </div>
                    <h6 class="services_title">
                      @if (app()->getLocale() == 'ar')
                      {{$service->title_ar}}
                      @else
                      {{$service->title_en}}
                      @endif
                    </h6>
                    <p class="services_info">
                      @if (app()->getLocale() == 'ar')
                      {{$service->description_ar}}
                      @else
                      {{$service->description_en}}
                      @endif
                    </p>
                    <a
                      href="{{route('service.details',['id'=>$service->id])}}"
                      class="see_more text-{{app()->getLocale() == 'ar' ? 'start' : 'end'}}"
                      style="display: none"
                    >
                      <span>{{__('common.show more')}}</span>
                    </a>
                    <a href="{{route('service.details',['id'=>$service->id])}}" class="rmore">
                      <div class="arrow">
                        <img
                          src="{{asset('assets/imgs/arrow-right.png')}}"
                          alt=""
                          class="icon-img-20"
                        />
                      </div>
                    </a>
                  </div>
                </div>
                @endforeach

              </div>
              <div
                class="ml-auto d-flex align-items-center justify-content-center mt-4"
              >
                <a href="{{route('service')}}" class="go-more go-more-services">
                  <span class="text" >{{__('front.View all')}} </span>
                  <span class="icon ti-arrow-top-right"></span>
                </a>
              </div>
            </div>
          </section>

          <!-- ==================== End Services ==================== -->

          <!-- ==================== Start Portfolio ==================== -->

          <section class="work-carsouel section-padding position-re o-hidden">
            <div class="container">
              <div class="sec-head mb-80">
                <h6 class="sub-title main-color mb-25" >
                  {{__('front.Portfolio')}}
                </h6>
                <div class="bord pt-25 bord-thin-top d-flex align-items-center">
                  <h2 class="fw-600 text-u ls1" data-i18n="featuredProject">
                  {{__('front.Portfolio')}}
                  </h2>

                  <div class="ml-auto">
                    <div class="swiper-arrow-control">
                      <div class="swiper-button-prev">
                        <span class="ti-arrow-left"></span>
                      </div>
                      <div class="swiper-button-next">
                        <span class="ti-arrow-right"></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="container-fluid rest project-banner">
              <div class="row">
                <div class="col-12">
                  <div
                    class="work-crus work-crus5 out"
                    data-carousel="swiper"
                    data-items="5"
                    data-center="center"
                    data-loop="true"
                    data-space="30"
                    data-swiper-speed="1000">
                    <div id="content-carousel-container-unq-w" class="swiper-container" data-swiper="container">
                      <div class="swiper-wrapper">
                        @foreach ($works as $work)
                        <div class="swiper-slide">
                          <div class="item">
                            <div class="img">
                              <img src="{{$work->thumbnail}}" alt="work"/>
                              <div class="cont">
                                <span class="mb-5">
                                  @if (app()->getLocale() == 'ar')
                                  {{$work->tag->name_ar}}
                                  @else
                                  {{$work->tag->name_en}}
                                  @endif
                                </span>
                                <h6 class="fz-18">
                                  @if (app()->getLocale() == 'ar')
                                  {{$work->client_name_ar}}
                                  @else
                                  {{$work->client_name_en}}
                                  @endif
                                </h6>
                              </div>
                              <a href="{{route('portfolio.details',['id'=>$work->id])}}" class="plink"></a>
                            </div>
                          </div>
                        </div>
                      @endforeach
                    </div>
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="ml-auto d-flex align-items-center justify-content-center mt-4"
              >
                <a
                  href="{{route('portfolio')}}"
                  class="go-more go-more-services go-fullbg"
                >
                  <span class="text"
                    >{{__('front.View all')}}</span
                  >
                  <span class="icon ti-arrow-top-right"></span>
                </a>
              </div>
            </div>
          </section>

          <!-- ==================== End Portfolio ==================== -->

          <!-- ==================== Start numbers ==================== -->

          <section class="numbers">
            <div class="video-background">
              <video autoplay muted loop class="background-video">
                <source src="{{asset('assets/videos/numbers.mp4')}}" type="video/mp4" />
              </video>
              <div class="overlay"></div>
            </div>

            <div class="container">
              <div class="row justify-content-center">
                @foreach ($statistics as $statistic)
                <div class="col-lg-4 col-md-6">
                  <div class="item d-flex align-items-center justify-content-center md-mb50">
                    <h2 class="fz-80 line-height-1" data-number="{{$statistic->count}}">0</h2>
                    <div class="d-flex flex-column">
                      <span class="sub-title opacity-7 ml-30 d-block">
                        @if (app()->getLocale() == 'ar')
                        {{$statistic->title_ar}}
                        @else
                        {{$statistic->title_en}}
                        @endif
                      </span>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </section>

          <!-- ==================== End numbers ==================== -->

          <!-- ==================== Start about ==================== -->

          <section class="about-crev section-padding position-re">
            <div class="container">
              <div class="row lg-marg">
                <div class="col-lg-6">
                  <div class="left-block mt-100 md-mb50">
                    <div class="d-flex align-items-center">
                      <!-- <div>
                         <div class="info">
                          <h6>
                            Sam <br />
                            Peterson
                          </h6>
                          <p class="nowrap">Ceo Manager</p>
                        </div>
                      </div> -->
                      <div>
                        <div class="img fit-img radius-30">
                          <img
                            style="
                              height: 400px;
                              width: 100%;
                              object-fit: cover;
                            "
                            src="https://images.pexels.com/photos/2102416/pexels-photo-2102416.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                            alt=""
                          />
                        </div>
                      </div>
                    </div>
                    <div class="mz-shap">
                      <svg
                        height="100%"
                        viewBox="0 0 610 547"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M116.134 529.548C116.134 538.642 123.506 546.015 132.6 546.015H211.63C211.635 546.015 211.638 546.011 211.638 546.007V546.007C211.638 546.003 211.642 545.999 211.646 545.999H592.691C601.786 545.999 609.158 538.627 609.158 529.533L609.157 251.366C609.157 242.272 601.785 234.899 592.691 234.899H401.097C392.003 234.899 384.631 227.527 384.631 218.433V112.465C384.631 103.371 377.259 95.999 368.164 95.999H214.466C205.372 95.999 198 88.6268 198 79.5327V16.4662C198 7.37219 190.628 0 181.534 0H88.4662C79.3722 0 72 7.37219 72 16.4662V104.534C72 113.628 79.3722 121 88.4662 121H166.917C176.011 121 183.383 128.372 183.383 137.466V273.565C183.383 282.659 176.011 290.031 166.917 290.031H116.134H116.134H16.5634C7.46936 290.031 0.0971666 297.403 0.0971666 306.497V445.923C0.0971666 455.017 7.46935 462.39 16.5634 462.39H99.6677C108.762 462.39 116.134 469.762 116.134 478.856V529.548Z"
                          fill="#f5f7f9"
                        ></path>
                      </svg>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 valign m-0">
                  <div class="content full-width">
                  <div class="sec-head mb-30">
                      <h6
                        class="sub-title mb-15 main-color"

                      >
                      {{__('front.our specials')}}
                      </h6>
                      <h2 >{{__('front.head about')}}</h2>
                    </div>
                    <div class="">
                      <div class="">
                        <div class="text">
                          <p class="skill-info">
                            @if (app()->getLocale() == 'ar')
                            {{$whyU->properties_ar}}
                            @else
                            {{$whyU->properties_en}}
                            @endif
                          </p>
                        </div>
                        <div class="mt-50 row row-cols-1 row-cols-md-2 g-4">
                          @foreach ($certificates as $certificate)
                          <div class="col mb-3">
                            <div
                              class="item-skill d-flex align-items-start justify-content-start">
                              <i class="far fa-check-circle"></i>
                              <p class="item-info" >
                                @if (app()->getLocale() == 'ar')
                                {{$certificate->title_ar}}
                                @else
                                {{$certificate->title_en}}
                                @endif
                              </p>
                            </div>
                          </div>
                          @endforeach


                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="line-overlay opacity-7">
              <svg
                viewBox="0 0 1728 1101"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M-43 773.821C160.86 662.526 451.312 637.01 610.111 733.104C768.91 829.197 932.595 1062.9 602.782 1098.75C272.969 1134.6 676.888 25.4306 1852 1"
                  style="stroke-dasharray: 3246.53, 0"
                ></path>
              </svg>
            </div>
          </section>

          <!-- ==================== End about ==================== -->

          <!-- ==================== Start Testimonials ==================== -->

          <!-- <section class="testimonials-crev section-padding pb-0 bg-img"
                    data-background="{{asset('assets/imgs/bg-say.jpg')}}">
                    <div class="container">
                        <div class="row justify-content-end">
                            <div class="col-lg-10">
                                <div class="sec-head mb-80">
                                    <h2 class="fw-600 fz-70" data-i18n="clientSay">What <br> People <span class="fw-200">Say?</span></h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-11 position-re">
                                <div class="testim-swiper testim1" data-carousel="swiper" data-loop="true" data-space="30">
                                    <div id="content-carousel-container-unq-testim" class="swiper-container"
                                        data-swiper="container">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="item d-flex align-items-center">
                                                    <div>
                                                        <div class="fit-img circle">
                                                            <img src="{{asset('assets/imgs/people.jpg')}}" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="content ml-100">
                                                        <div class="text">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="256.721"
                                                                height="208.227" viewBox="0 0 256.721 208.227" id="null"
                                                                class="qout-svg">
                                                                <path id="Path_76570" data-name="Path 76570"
                                                                    d="M-23.723-530.169v97.327H-121.05v-68.7q0-40.076,13.359-73.472T-62.845-639.9l36.259,28.625Q-63.8-570.244-68.57-530.169Zm158.395,0v97.327H37.345v-68.7q0-40.076,13.359-73.472T95.55-639.9l36.259,28.625Q94.6-570.244,89.825-530.169Z"
                                                                    transform="translate(121.55 640.568)" fill="none"
                                                                    stroke="#1a1a1a" stroke-width="1" opacity="0.322">
                                                                </path>
                                                            </svg>
                                                            <h4>I have been hiring people in this
                                                                space for a number of years
                                                                and I have never seen this level of
                                                                professionalism. It really feels like you are
                                                                working with a team that can get the job
                                                                done.</h4>
                                                        </div>
                                                        <div
                                                            class="info d-flex align-items-center pt-40 mt-40 bord-thin-top">
                                                            <div>
                                                                <h5>Mohamed</h5>
                                                                <span class="sub-title main-color">Envato Client</span>
                                                            </div>
                                                            <div class="ml-auto">
                                                                <div class="rate-stars fz-14">
                                                                    <span class="rate main-color">
                                                                        <i class="fas fa-star"></i>
                                                                        <i class="fas fa-star"></i>
                                                                        <i class="fas fa-star"></i>
                                                                        <i class="fas fa-star"></i>
                                                                        <i class="fas fa-star"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-arrow-control control-abslout">
                                    <div class="swiper-button-prev">
                                        <span class="ti-arrow-left"></span>
                                    </div>
                                    <div class="swiper-button-next">
                                        <span class="ti-arrow-right"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> -->

          <!-- ==================== End Testimonials ==================== -->

          <!-- ==================== Start Team For Desktop ==================== -->

          <section
            class="team team_banner_desktop section-padding d-none d-lg-block">
            <div class="">
              <div class="sec-head mb-80 container">
                <h6 class="sub-title main-color mb-25" >
                {{__('front.Influencers')}}
                </h6>
                <div class="bord pt-25 bord-thin-top d-flex align-items-center justify-content-between">
                  <h2
                    class="fw-600"

                    style="text-transform: uppercase"
                  >{{__('front.Influencers')}}</h2>

                <a href="{{route('influencers')}}" class="go-more">
                    <span class="text">{{ trans('front.follow them') }}</span>
                    <span class="icon ti-arrow-top-right"></span>
                </a>
                </div>
              </div>
              <div dir="{{app()->getLocale() == 'ar' ? 'rtl' : 'ltr'}}" class="team-slider-wrapper swiper swiper-influencers">
                <div class="row team-slider swiper-wrapper">
                  @foreach ($infs as $inf)

                  <div class="col-lg-3 cont-slide swiper-slide">
                    <div class="item md-mb50 for_home">
                      <div class="img">
                        <a href="{{route('influencers.details',$inf)}}">
                          <img
                            class="img-team"
                            src="{{asset('storage/'.$inf->image)}}"
                            alt=""
                          />
                          <div class="info">
                            <span class="fz-12">
                              @if (app()->getLocale() == 'ar')
                              {{$inf->job_name_ar}}
                              @else
                              {{$inf->job_name_en}}
                              @endif
                            </span>
                            <h6 class="fz-18">
                              @if (app()->getLocale() == 'ar')
                              {{$inf->name_ar}}
                              @else
                              {{$inf->name_en}}
                              @endif
                            </h6>
                          </div>
                        </a>
                      </div>
                      <div class="social">
                        <div class="links">
                          @if($inf->snapchat)<a href="{{$inf->snapchat}}" target="_blank"><i class="fab fa-snapchat"></i></a>@endif
                          @if($inf->x)<a href="{{$inf->x}}" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>@endif
                          @if($inf->instagram)<a href="{{$inf->instagram}}" target="_blank"><i class="fab fa-instagram"></i></a>@endif
                          @if($inf->tiktok)<a href="{{$inf->tiktok}}" target="_blank"><i class="fab fa-tiktok"></i></a>@endif
                          @if($inf->whatsapp)<a href="{{$inf->whatsapp}}" target="_blank"><i class="fab fa-whatsapp"></i></a>@endif
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach



                </div>
              </div>
            </div>
          </section>

          <!-- ==================== End Team For Desktop ==================== -->

          <!-- ==================== Start Team For Mobile ==================== -->

          <section class="team team_mobile overflow-hidden d-lg-none">
            <div class="container">
              <div class="sec-head mb-80">
                <h6 class="sub-title main-color mb-25" >
                  {{__('front.Influencers')}}
                </h6>
                <div class="bord pt-25 bord-thin-top d-flex align-items-center justify-content-between">
                  <h2 class="fw-600" >{{__('front.Influencers')}}</h2>
                  <h2
                    class="fw-200"
                    data-i18n="meetOurLeg"
                    style="margin-inline-start: 0.5rem"
                  ></h2>

                  <a href="{{route('influencers')}}" class="go-more">
                    <span class="text">{{ trans('front.follow them') }}</span>
                    <span class="icon ti-arrow-top-right"></span>
                </a>
                </div>
              </div>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <div dir="{{app()->getLocale() == 'ar' ? 'rtl' : 'ltr'}}" class="team-crus swiper-container-team swiper swiper-influencers">
                    <div class="swiper-wrapper">
                      <!-- Slide 1 -->
                      @foreach ($infs as $inf)

                      <div class="swiper-slide">
                        <div class="item md-mb50 for_home">
                          <div class="img">
                            <img
                              class="img-team"
                              src="{{asset('storage/'.$inf->image)}}"
                              alt=""
                            />
                            <a href="{{route('influencers.details',$inf)}}">
                              <div class="info">
                                <span class="fz-12">
                                  @if (app()->getLocale() == 'ar')
                                  {{$inf->job_name_ar}}
                                  @else
                                  {{$inf->job_name_en}}
                                  @endif
                                </span>
                                <h6 class="fz-18">
                                  @if (app()->getLocale() == 'ar')
                                  {{$inf->name_ar}}
                                  @else
                                  {{$inf->name_en}}
                                  @endif
                                </h6>
                              </div>
                            </a>
                          </div>
                          <div class="social">
                            <div class="links">
                              <a href="#0"><i class="fab fa-facebook-f"></i></a>
                              <a href="#0"><i class="fa-brands fa-x-twitter"></i></a>
                              <a href="#0"><i class="fab fa-instagram"></i></a>
                              <a href="#0"><i class="fab fa-snapchat"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                      @endforeach

                    </div>
                  </div>
                </div>
              </div>
              <div
                class="ml-auto d-flex align-items-center justify-content-center mt-4"
              >
                <a
                  href="{{route('influencers')}}"
                  class="go-more go-more-services go-fullbg"
                >
                  <span class="text" data-i18n="viewProject"
                    >{{__('front.View all')}}</span
                  >
                  <span class="icon ti-arrow-top-right"></span>
                </a>
              </div>
            </div>
          </section>

          <!-- ==================== End Team For Mobile ==================== -->

          <!-- ==================== Start Blog ==================== -->

          <section class="blog-list-half section-padding sub-bg">
            <div class="container">
              <div class="sec-head mb-80">
                <h6 class="sub-title main-color mb-25" data-i18n="ourBlog">
                  {{__('front.Blogs')}}
                </h6>
                <div class="bord pt-25 bord-thin-top d-flex align-items-center">
                  <h2 class="fw-600" data-i18n="readLatestNews">{{__('front.Blogs')}}</h2>
                  <h2
                    class="fw-200"
                    style="margin-inline-start: 0.5rem">
                  </h2>
                </div>
              </div>
              <div class="row">
                @foreach ($blogs as $blog)
                <div class="col-lg-6">
                  <div class="item main-bg md-mb50">
                    <div class="row rest">
                      <div class="col-lg-6 col-md-5 img rest">
                        <img
                          src="{{asset('storage/'.$blog->image)}}"
                          alt="blog"
                          class="img-post img-blog-home"
                        />
                        <div class="author d-flex align-items-center">
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-7 cont valign">
                        <div class="full-width">
                          <h5>
                            <a href="{{route('blog.details',['id'=>$blog->id])}}">
                              @if (app()->getLocale() == 'ar')
                              {{$blog->title_ar}}
                              @else
                              {{$blog->title_en}}
                              @endif
                            </a>
                          </h5>
                          <span class="date fz-12 ls1 text-u opacity-7 mt-80">
                            {{ $blog->created_at->format('d F Y') }}
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                @endforeach

              </div>
              <div
                class="ml-auto d-flex align-items-center justify-content-center mt-4"
              >
                <a href="{{route('blog')}}" class="go-more">
                  <span class="text" data-i18n="viewPosts">{{__('front.View all')}}</span>
                  <span class="icon ti-arrow-top-right"></span>
                </a>
              </div>
            </div>
          </section>

          <!-- ==================== End Blog ==================== -->
          <!-- ==================== Start brands ==================== -->

          <section class="clients-section">
            <div class="clients-carso2">
              <div class="container">
                <div class="row justify-content-center">
                  <div
                    class="col-lg-3 col-12 clients-inner mb-3s text-center d-flex align-items-center justify-content-start"
                  >
                    <h2 class="fw-600" data-i18n="clientsWorked">
                      {{trans('front.our clients')}}
                    </h2>
                  </div>
                  <div class="col-lg-9 col-12">
                    <div dir="{{app()->getLocale() == 'ar' ? 'rtl' : 'ltr'}}" class="clients-banner swiper swiper-clients">
                      <div class="clients-images swiper-wrapper">

                        @foreach ($clients as $client)
                        <div class="client-item swiper-slide col-auto" style="width: auto !important">
                          <a target="_blank" href="{{$client->link}}">
                            <img

                              class="img-item"
                              src="{{asset('storage/'.$client->image)}}"
                              alt="client"
                            />
                          </a>
                        </div>
                        @endforeach



                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- ==================== End brands ==================== -->
          <!-- instagram section -->

          <!-- <section class="instgram section-padding overflow-hidden mb-4">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <div class="insta-crus swiper-container-insta">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <div class="item insta">
                          <div class="img">
                            <img
                              src="https://images.pexels.com/photos/17614476/pexels-photo-17614476/free-photo-of-holding-a-smartphone-with-the-threads-app-with-the-meta-platforms-logo-in-the-background.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                              alt=""
                            />
                            <div class="overlay">
                              <i class="fab fa-instagram"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="item insta">
                          <div class="img">
                            <img
                              src="https://images.pexels.com/photos/9368777/pexels-photo-9368777.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                              alt=""
                            />
                            <div class="overlay">
                              <i class="fab fa-instagram"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="item insta">
                          <div class="img">
                            <img
                              src="https://images.pexels.com/photos/29349385/pexels-photo-29349385/free-photo-of-close-up-photo-of-hands-holding-smartphone-outdoors.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                              alt=""
                            />
                            <div class="overlay">
                              <i class="fab fa-instagram"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="item insta">
                          <div class="img">
                            <img
                              src="https://images.pexels.com/photos/5437583/pexels-photo-5437583.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                              alt=""
                            />
                            <div class="overlay">
                              <i class="fab fa-instagram"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="item insta">
                          <div class="img">
                            <img
                              src="https://images.pexels.com/photos/607812/pexels-photo-607812.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                              alt=""
                            />
                            <div class="overlay">
                              <i class="fab fa-instagram"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="item insta">
                          <div class="img">
                            <img
                              src="https://images.pexels.com/photos/11911058/pexels-photo-11911058.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                              alt=""
                            />
                            <div class="overlay">
                              <i class="fab fa-instagram"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section> -->

          <!-- instagram section end -->
        </main>

        @include('site.footer')
