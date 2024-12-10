@include('site.header')
      <div id="smooth-content">
        <main class="main-bg">
          <!-- ==================== Start Header ==================== -->

          <header
            class="page-header-cerv bg-img section-padding"
            data-background="{{asset('assets/imgs/header/2.jpg')}}"
            data-overlay-dark="4"
          >
            <div class="container pt-100 ontop">
              <div class="text-center">
                <h1 class="fz-100" data-i18n="Services">{{__('front.services')}}</h1>
                <div class="mt-15">
                  <a href="{{route('home')}}" data-i18n="home">{{__('front.home')}}</a>
                  <span class="padding-rl-20">|</span>
                  <span style="color: var(--primary-color)" data-i18n="services"
                    >{{__('front.services')}}</span
                  >
                </div>
              </div>
            </div>
          </header>

          <!-- ==================== End Header ==================== -->

          <!-- ==================== Start Services ==================== -->

          <section class="services-boxs section-padding">
            <div class="container">
              <div class="sec-head mb-80">
                <h6 class="sub-title main-color mb-25">{{__('front.services')}}</h6>
                <div class="bord pt-25 bord-thin-top d-flex align-items-center">
                  <h2 class="fw-600 text-u ls1">
                    {{__('front.WHAT WE')}}<span class="fw-200">{{__('front.OFFER')}}</span>
                  </h2>
                </div>
              </div>
              <div class="row pt-30">
                @foreach ($services as $service)
                <div class="col-lg-3 col-md-6 items">
                  <div class="item-box bg md-mb50">
                    <div class="icon mb-40 opacity-5">
                      <img src="{{asset('storage/'.$service->image)}}" alt="service" />
                    </div>
                    <h5 class="mb-15 text-u">
                      @if (app()->getLocale() == 'ar')
                     {{$service->title_ar}}
                     @else
                     {{$service->title_en}}
                     @endif
                    </h5>
                    <p>
                      @if (app()->getLocale() == 'ar')
                      {{$service->description_ar}}
                      @else
                      {{$service->description_en}}
                      @endif
                    </p>
                    <a href="{{route('service.details',['id'=>$service->id])}}" class="rmore mt-30">
                      <span class="sub-title">{{__('common.order now')}}</span>
                      <img
                        src="{{asset('assets/imgs/arrow-right.png')}}"
                        alt=""
                        class="icon-img-20 ml-5"
                      />
                    </a>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </section>

          <!-- ==================== End Services ==================== -->

          <!-- ==================== Start Marquee ==================== -->

          <section>
            <div class="main-marq xlrg o-hidden">
              <div class="slide-har st1">
                <div class="box">
                  <div class="item">
                    <h4 class="d-flex align-items-center">
                      <span>Amazing Design</span>
                      <span class="fz-50 ml-50 stroke icon">*</span>
                    </h4>
                  </div>
                  <div class="item">
                    <h4 class="d-flex align-items-center">
                      <span>Amazing Design</span>
                      <span class="fz-50 ml-50 stroke icon">*</span>
                    </h4>
                  </div>
                  <div class="item">
                    <h4 class="d-flex align-items-center">
                      <span>Amazing Design</span>
                      <span class="fz-50 ml-50 stroke icon">*</span>
                    </h4>
                  </div>
                  <div class="item">
                    <h4 class="d-flex align-items-center">
                      <span>Amazing Design</span>
                      <span class="fz-50 ml-50 stroke icon">*</span>
                    </h4>
                  </div>
                  <div class="item">
                    <h4 class="d-flex align-items-center">
                      <span>Amazing Design</span>
                      <span class="fz-50 ml-50 stroke icon">*</span>
                    </h4>
                  </div>
                </div>
                <div class="box">
                  <div class="item">
                    <h4 class="d-flex align-items-center">
                      <span>Amazing Design</span>
                      <span class="fz-50 ml-50 stroke icon">*</span>
                    </h4>
                  </div>
                  <div class="item">
                    <h4 class="d-flex align-items-center">
                      <span>Amazing Design</span>
                      <span class="fz-50 ml-50 stroke icon">*</span>
                    </h4>
                  </div>
                  <div class="item">
                    <h4 class="d-flex align-items-center">
                      <span>Amazing Design</span>
                      <span class="fz-50 ml-50 stroke icon">*</span>
                    </h4>
                  </div>
                  <div class="item">
                    <h4 class="d-flex align-items-center">
                      <span>Amazing Design</span>
                      <span class="fz-50 ml-50 stroke icon">*</span>
                    </h4>
                  </div>
                  <div class="item">
                    <h4 class="d-flex align-items-center">
                      <span>Amazing Design</span>
                      <span class="fz-50 ml-50 stroke icon">*</span>
                    </h4>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- ==================== End Marquee ==================== -->

          <!-- ==================== Start process ==================== -->

          {{-- <section class="process section-padding">
            <div class="container">
              <div class="sec-head mb-80">
                <h6 class="sub-title main-color mb-25">Our Process</h6>
                <div class="bord pt-25 bord-thin-top d-flex align-items-center">
                  <h2 class="fw-600">
                    Business <span class="fw-200">Development</span>
                  </h2>
                  <div class="ml-auto">
                    <a href="page-about2.html" class="go-more">
                      <span class="text">View More</span>
                      <span class="icon ti-arrow-top-right"></span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="row md-marg">
                <div class="col-lg-3 col-md-6 item md-mb50">
                  <div class="icon-img-60 mb-30">
                    <img src="{{asset('assets/imgs/serv-icons/3.png')}}" alt="" />
                  </div>
                  <h5 class="mb-15">Research</h5>
                  <p>
                    Clarifying and translating insights into foundation and
                    creative approach
                  </p>
                  <div class="o-hidden">
                    <a href="page-about2.html" class="rmore to-in mt-30">
                      <span class="sub-title">Read More</span>
                      <img
                        src="{{asset('assets/imgs/arrow-right.png')}}"
                        alt=""
                        class="icon-img-20 ml-5"
                      />
                    </a>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 item md-mb50">
                  <div class="icon-img-60 mb-30">
                    <img src="{{asset('assets/imgs/serv-icons/4.png')}}" alt="" />
                  </div>
                  <h5 class="mb-15">Concept</h5>
                  <p>
                    Clarifying and translating insights into foundation and
                    creative approach
                  </p>
                  <div class="o-hidden">
                    <a href="page-about2.html" class="rmore to-in mt-30">
                      <span class="sub-title">Read More</span>
                      <img
                        src="{{asset('assets/imgs/arrow-right.png')}}"
                        alt=""
                        class="icon-img-20 ml-5"
                      />
                    </a>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 item sm-mb50">
                  <div class="icon-img-60 mb-30">
                    <img src="{{asset('assets/imgs/serv-icons/5.png')}}" alt="" />
                  </div>
                  <h5 class="mb-15">Implement</h5>
                  <p>
                    Clarifying and translating insights into foundation and
                    creative approach
                  </p>
                  <div class="o-hidden">
                    <a href="page-about2.html" class="rmore to-in mt-30">
                      <span class="sub-title">Read More</span>
                      <img
                        src="{{asset('assets/imgs/arrow-right.png')}}"
                        alt=""
                        class="icon-img-20 ml-5"
                      />
                    </a>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 item">
                  <div class="icon-img-60 mb-30">
                    <img src="{{asset('assets/imgs/serv-icons/6.png')}}" alt="" />
                  </div>
                  <h5 class="mb-15">Handover</h5>
                  <p>
                    Clarifying and translating insights into foundation and
                    creative approach
                  </p>
                  <div class="o-hidden">
                    <a href="page-about2.html" class="rmore to-in mt-30">
                      <span class="sub-title">Read More</span>
                      <img
                        src="{{asset('assets/imgs/arrow-right.png')}}"
                        alt=""
                        class="icon-img-20 ml-5"
                      />
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </section> --}}

          <!-- ==================== End process ==================== -->

          <!-- ==================== Start Blog ==================== -->

          <!-- <section class="blog-list-half section-padding sub-bg">
            <div class="container">
              <div class="sec-head mb-80">
                <h6 class="sub-title main-color mb-25">Our Blog</h6>
                <div class="bord pt-25 bord-thin-top d-flex align-items-center">
                  <h2 class="fw-600">
                   <span class="fw-200">News</span>
                  </h2>
                  <div class="ml-auto">
                    <a href="{{route('blog')}}" class="go-more">
                      <span class="text">View all posts</span>
                      <span class="icon ti-arrow-top-right"></span>
                    </a>
                  </div>
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
                          alt=""
                          class="img-post"
                        />
                        {{-- <div class="author d-flex align-items-center">
                          <div>
                            <div class="fit-img icon-img-50 circle">
                              <img src="{{asset('assets/imgs/blog/author.png')}}" alt="" />
                            </div>
                          </div>
                          <div class="ml-15 fz-14">
                            <div>
                              <span class="opacity-7">Posted by</span
                              ><br />UI-ThemeZ
                            </div>
                          </div>
                        </div> --}}
                      </div>
                      <div class="col-lg-6 col-md-7 cont valign">
                        <div class="full-width">
                          {{-- <div class="tags mb-15">
                            <a href="blog-list.html">Marketing</a>
                          </div> --}}
                          <h5>
                            <a href="{{route('blog.details',['id'=>$blog->id])}}">
                              @if (app()->getLocale() == 'ar')
                              {{$blog->title_ar}}
                              @else
                              {{$blog->title_en}}
                              @endif</a
                            >
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
            </div>
          </section> -->

          <!-- ==================== End Blog ==================== -->

          <!--
                <section class="portfolio-tab crev section-padding">
                    <div class="container">
                        <div class="sec-head mb-80">
                            <h6 class="sub-title main-color mb-25" data-i18n="ourSpecialize">Our Specialize</h6>
                            <div class="bord pt-25 bord-thin-top d-flex align-items-center">
                                <h2 class="fw-600" data-i18n="weHave">What We Have </h2> <h2 style="margin-inline-start: .5rem;" data-i18n="offer"><span class="fw-200">to Offer</span></h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-5 d-flex align-items-center justify-content-center">
                                <div class="glry-img">
                                    <div id="tab-1" class="bg-img tab-img current"
                                        data-background="{{asset('assets/imgs/works/1/1.jpg')}}"></div>
                                    <div id="tab-2" class="bg-img tab-img" data-background="{{asset('assets/imgs/works/1/2.jpg')}}">
                                    </div>
                                    <div id="tab-3" class="bg-img tab-img" data-background="{{asset('assets/imgs/works/1/3.jpg')}}">
                                    </div>
                                    <div id="tab-4" class="bg-img tab-img" data-background="{{asset('assets/imgs/works/1/4.jpg')}}">
                                    </div>
                                    <div id="tab-5" class="bg-img tab-img" data-background="{{asset('assets/imgs/works/1/5.jpg')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 offset-lg-1 content">
                                <div class="cluom mb-30 current" data-tab="tab-1">
                                    <div class="info">
                                        <h6 class="sub-title opacity-7">Development</h6>
                                        <h4>Web Developments</h4>
                                    </div>
                                    <div class="img">
                                        <img src="{{asset('assets/imgs/works/1/1.jpg')}}" alt="">
                                    </div>
                                    <div class="more text-u ls1 fz-12">
                                        <a href="page-services-details.html" data-i18n="viewDetails">View Details <i class="ml-15 ti-arrow-top-right"></i></a>
                                    </div>
                                </div>
                                <div class="cluom mb-30" data-tab="tab-2">
                                    <div class="info">
                                        <h6 class="sub-title opacity-7"> Design</h6>
                                        <h4>Designing</h4>
                                    </div>
                                    <div class="img">
                                        <img src="{{asset('assets/imgs/works/1/2.jpg')}}" alt="">
                                    </div>
                                    <div class="more text-u ls1 fz-12">
                                        <a href="page-services-details.html" data-i18n="viewDetails">View Details <i class="ml-15 ti-arrow-top-right"></i></a>
                                    </div>
                                </div>
                                <div class="cluom mb-30" data-tab="tab-3">
                                    <div class="info">
                                        <h6 class="sub-title opacity-7">Marketing</h6>
                                        <h4>Digital Marketing</h4>
                                    </div>
                                    <div class="img">
                                        <img src="{{asset('assets/imgs/works/1/3.jpg')}}" alt="">
                                    </div>
                                    <div class="more text-u ls1 fz-12">
                                        <a href="page-services-details.html" data-i18n="viewDetails">View Details <i class="ml-15 ti-arrow-top-right"></i></a>
                                    </div>
                                </div>
                                <div class="cluom mb-30" data-tab="tab-4">
                                    <div class="info">
                                        <h6 class="sub-title opacity-7">Graphic Design</h6>
                                        <h4>Product Design</h4>
                                    </div>
                                    <div class="img">
                                        <img src="{{asset('assets/imgs/works/1/4.jpg')}}" alt="">
                                    </div>
                                    <div class="more text-u ls1 fz-12">
                                        <a href="page-services-details.html" data-i18n="viewDetails">View Details <i class="ml-15 ti-arrow-top-right"></i></a>
                                    </div>
                                </div>
                                <div class="cluom" data-tab="tab-5">
                                    <div class="info">
                                        <h6 class="sub-title opacity-7">Marketing</h6>
                                        <h4>Digital Marketing</h4>
                                    </div>
                                    <div class="img">
                                        <img src="{{asset('assets/imgs/works/1/5.jpg')}}" alt="">
                                    </div>
                                    <div class="more text-u ls1 fz-12">
                                        <a href="page-services-details.html" data-i18n="viewDetails">View Details <i class="ml-15 ti-arrow-top-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>







                <section class="main-feat section-padding bg-img" data-background="{{asset('assets/imgs/header/bg-4.png')}}" data-overlay-dark="9">
                    <div class="container">
                        <div class="sec-head mb-80">
                            <div class="row justify-content-between">
                                <div class="col-lg-6 md-mb50">
                                    <h6 class="sub-title main-color mb-15" data-i18n="ourServices">Our ServicesOur Services</h6>
                                    <h2 class="fw-600 fz-70">What We Can Do For <span class="fw-300">Our Clients</span></h2>
                                </div>
                                <div class="col-lg-5 d-flex align-items-end">
                                    <div class="text full-width pb-40 bord-thin-bottom">
                                        <p>Our design services starts and ends with a best-in-class experience strategy that builds brands. Through a process of iteration and prototyping design interfaces that bring joy to people</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-between">
                            <div class="col-lg-6">
                                <div class="img md-mb50">
                                    <img src="{{asset('assets/imgs/intro/2.jpg')}}" alt="" class="radius-15">
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="item mb-50">
                                            <h5 class="mb-15">UI-UX Design</h5>
                                            <ul class="rest dot-list">
                                                <li class="mb-10">Website Design</li>
                                                <li class="mb-10">UI/UX Design</li>
                                                <li class="mb-10">Mobile App Development</li>
                                                <li>Animations</li>
                                            </ul>
                                        </div>
                                        <div class="item sm-mb50">
                                            <h5 class="mb-15">Developments</h5>
                                            <ul class="rest dot-list">
                                                <li class="mb-10">Website Design</li>
                                                <li class="mb-10">UI/UX Design</li>
                                                <li class="mb-10">Mobile App Development</li>
                                                <li>Animations</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="item mb-50">
                                            <h5 class="mb-15">Product Design</h5>
                                            <ul class="rest dot-list">
                                                <li class="mb-10">Website Design</li>
                                                <li class="mb-10">UI/UX Design</li>
                                                <li class="mb-10">Mobile App Development</li>
                                                <li>Animations</li>
                                            </ul>
                                        </div>
                                        <div class="item">
                                            <h5 class="mb-15">Content</h5>
                                            <ul class="rest dot-list">
                                                <li class="mb-10">Website Design</li>
                                                <li class="mb-10">UI/UX Design</li>
                                                <li class="mb-10">Mobile App Development</li>
                                                <li>Animations</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>



                <section class="testimonials-crev section-padding pb-0 bg-img"
                    data-background="{{asset('assets/imgs/background/2.jpg')}}">
                    <div class="container">
                        <div class="row justify-content-end">
                            <div class="col-lg-10">
                                <div class="sec-head mb-80">
                                    <h2 class="fw-600 fz-70" data-i18n="clientSay2">What People</h2><h2> <span class="fw-200" data-i18n="clientSayy">Say?</span></h2>
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
                                                            <img src="{{asset('assets/imgs/testim/t1.jpg')}}" alt="">
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
                                                                <h5>Adam Beckley</h5>
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
                </section>





                <section class="brands-crev simple pt-40">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 mt-100 order-md-2">
                                <div class="row">
                                    <div class="col-6 item ontop">
                                        <div class="img">
                                            <img src="{{asset('assets/imgs/brands/01.png')}}" alt="">
                                        </div>
                                        <span class="top-left">
                                            <svg viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                class="w-23 2xl:w-[3.2rem] h-auto">
                                                <rect y="11" width="23" height="0.671958" fill="#222"></rect>
                                                <rect x="12" width="23" height="0.671957" transform="rotate(90 12 0)"
                                                    fill="#222"></rect>
                                            </svg>
                                        </span>
                                        <span class="top-right">
                                            <svg viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                class="w-23 2xl:w-[3.2rem] h-auto">
                                                <rect y="11" width="23" height="0.671958" fill="#222"></rect>
                                                <rect x="12" width="23" height="0.671957" transform="rotate(90 12 0)"
                                                    fill="#222"></rect>
                                            </svg>
                                        </span>
                                        <span class="bottom-left">
                                            <svg viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                class="w-23 2xl:w-[3.2rem] h-auto">
                                                <rect y="11" width="23" height="0.671958" fill="#222"></rect>
                                                <rect x="12" width="23" height="0.671957" transform="rotate(90 12 0)"
                                                    fill="#222"></rect>
                                            </svg>
                                        </span>
                                        <span class="bottom-right">
                                            <svg viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                class="w-23 2xl:w-[3.2rem] h-auto">
                                                <rect y="11" width="23" height="0.671958" fill="#222"></rect>
                                                <rect x="12" width="23" height="0.671957" transform="rotate(90 12 0)"
                                                    fill="#222"></rect>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="col-6 item">
                                        <div class="img">
                                            <img src="{{asset('assets/imgs/brands/02.png')}}" alt="">
                                        </div>
                                        <span class="top-right">
                                            <svg viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                class="w-23 2xl:w-[3.2rem] h-auto">
                                                <rect y="11" width="23" height="0.671958" fill="#222"></rect>
                                                <rect x="12" width="23" height="0.671957" transform="rotate(90 12 0)"
                                                    fill="#222"></rect>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 offset-lg-1 md-hide valign">
                                <div class="sec-head nocurve">
                                    <div class="ontop">
                                        <h6 class="sub-title main-color mb-15" data-i18n="specialThanks">Special Thanks To</h6>
                                        <h3 class="fw-600 text-u ls1" data-i18n="allOur">All our
                                        </h3> <h3 style="margin-inline-start: .5rem;"><span class="fw-200" data-i18n="partners">partners</span></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 order-md-1">
                                <div class="row">
                                    <div class="col-lg-3 col-6 item empty">
                                        <div class="text">
                                            <h2 class="fz-80">6k<span class="fz-30">+</span></h2>
                                            <h6 class="sub-title" data-i18n="satifiedClients">Satisfied Clients</h6>
                                        </div>
                                        <span class="bottom-left">
                                            <svg viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                class="w-23 2xl:w-[3.2rem] h-auto">
                                                <rect y="11" width="23" height="0.671958" fill="#222"></rect>
                                                <rect x="12" width="23" height="0.671957" transform="rotate(90 12 0)"
                                                    fill="#222"></rect>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="col-lg-3 col-6 item">
                                        <div class="img">
                                            <img src="{{asset('assets/imgs/brands/03.png')}}" alt="">
                                        </div>
                                        <span class="top-right">
                                            <svg viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                class="w-23 2xl:w-[3.2rem] h-auto">
                                                <rect y="11" width="23" height="0.671958" fill="#222"></rect>
                                                <rect x="12" width="23" height="0.671957" transform="rotate(90 12 0)"
                                                    fill="#222"></rect>
                                            </svg>
                                        </span>
                                        <span class="bottom-left">
                                            <svg viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                class="w-23 2xl:w-[3.2rem] h-auto">
                                                <rect y="11" width="23" height="0.671958" fill="#222"></rect>
                                                <rect x="12" width="23" height="0.671957" transform="rotate(90 12 0)"
                                                    fill="#222"></rect>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="col-lg-3 col-6 item ontop">
                                        <div class="img">
                                            <img src="{{asset('assets/imgs/brands/04.png')}}" alt="">
                                        </div>
                                        <span class="top-left">
                                            <svg viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                class="w-23 2xl:w-[3.2rem] h-auto">
                                                <rect y="11" width="23" height="0.671958" fill="#222"></rect>
                                                <rect x="12" width="23" height="0.671957" transform="rotate(90 12 0)"
                                                    fill="#222"></rect>
                                            </svg>
                                        </span>
                                        <span class="top-right">
                                            <svg viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                class="w-23 2xl:w-[3.2rem] h-auto">
                                                <rect y="11" width="23" height="0.671958" fill="#222"></rect>
                                                <rect x="12" width="23" height="0.671957" transform="rotate(90 12 0)"
                                                    fill="#222"></rect>
                                            </svg>
                                        </span>
                                        <span class="bottom-left">
                                            <svg viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                class="w-23 2xl:w-[3.2rem] h-auto">
                                                <rect y="11" width="23" height="0.671958" fill="#222"></rect>
                                                <rect x="12" width="23" height="0.671957" transform="rotate(90 12 0)"
                                                    fill="#222"></rect>
                                            </svg>
                                        </span>
                                        <span class="bottom-right">
                                            <svg viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                class="w-23 2xl:w-[3.2rem] h-auto">
                                                <rect y="11" width="23" height="0.671958" fill="#222"></rect>
                                                <rect x="12" width="23" height="0.671957" transform="rotate(90 12 0)"
                                                    fill="#222"></rect>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="col-lg-3 col-6 item">
                                        <div class="img">
                                            <img src="{{asset('assets/imgs/brands/05.png')}}" alt="">
                                        </div>
                                        <span class="top-right">
                                            <svg viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                class="w-23 2xl:w-[3.2rem] h-auto">
                                                <rect y="11" width="23" height="0.671958" fill="#222"></rect>
                                                <rect x="12" width="23" height="0.671957" transform="rotate(90 12 0)"
                                                    fill="#222"></rect>
                                            </svg>
                                        </span>
                                        <span class="bottom-right">
                                            <svg viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                class="w-23 2xl:w-[3.2rem] h-auto">
                                                <rect y="11" width="23" height="0.671958" fill="#222"></rect>
                                                <rect x="12" width="23" height="0.671957" transform="rotate(90 12 0)"
                                                    fill="#222"></rect>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>





                <section class="blog-list-half section-padding">
                    <div class="container">
                        <div class="sec-head mb-80">
                            <h6 class="sub-title main-color mb-25" data-i18n="ourBlog">Our Blog</h6>
                            <div class="bord pt-25 bord-thin-top d-flex align-items-center">
                                <h2 class="fw-600" data-i18n="readLatest">Read Latest </h2> <h2 style="margin-inline-start: .5rem;" class="fw-200" data-i18n="readLatestNews">News</h2>
                                <div class="ml-auto">
                                    <a href="blog-list.html" class="go-more">
                                        <span class="text" data-i18n="viewPosts">View all posts</span>
                                        <span class="icon ti-arrow-top-right"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="item main-bg md-mb50">
                                    <div class="row rest">
                                        <div class="col-lg-6 col-md-5 img rest">
                                            <img src="{{asset('assets/imgs/blog/b/2.jpg')}}" alt="" class="img-post">
                                            <div class="author d-flex align-items-center">
                                                <div>
                                                    <div class="fit-img icon-img-50 circle">
                                                        <img src="{{asset('assets/imgs/blog/author.png')}}" alt="">
                                                    </div>
                                                </div>
                                                <div class="ml-15 fz-14">
                                                    <div><span class="opacity-7" data-i18n="postedBy">Posted by</span><br>UI-sadnah</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-7 cont valign">
                                            <div class="full-width">
                                                <div class="tags mb-15">
                                                    <a href="blog-list.html">Marketing</a>
                                                </div>
                                                <h5>
                                                    <a href="blog-details.html">Free advertising for your online
                                                        business.</a>
                                                </h5>
                                                <span class="date fz-12 ls1 text-u opacity-7 mt-80">August 6,
                                                    2022</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="item main-bg">
                                    <div class="row rest">
                                        <div class="col-lg-6 col-md-5 img rest">
                                            <img src="{{asset('assets/imgs/blog/b/3.jpg')}}" alt="" class="img-post">
                                            <div class="author d-flex align-items-center">
                                                <div>
                                                    <div class="fit-img icon-img-50 circle">
                                                        <img src="{{asset('assets/imgs/blog/author.png')}}" alt="">
                                                    </div>
                                                </div>
                                                <div class="ml-15 fz-14">
                                                    <div><span class="opacity-7" data-i18n="postedBy">Posted by</span><br>UI-sadnah</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-7 cont valign">
                                            <div class="full-width">
                                                <div class="tags mb-15">
                                                    <a href="blog-list.html">Marketing</a>
                                                    <a href="blog-list.html">Design</a>
                                                </div>
                                                <h5>
                                                    <a href="blog-details.html">Business meeting 2023 in San
                                                        Francisco.</a>
                                                </h5>
                                                <span class="date fz-12 ls1 text-u opacity-7 mt-80">August 6,
                                                    2022</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> -->
        </main>

        @include('site.footer')
