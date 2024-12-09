@include('site.header')

      <div id="smooth-content">
        <main class="main-bg">
          <!-- ==================== Start Header ==================== -->

          <header
            class="page-header bg-img section-padding"
            data-background="assets/imgs/header/b5.jpg"
            data-overlay-dark="9">
            <div class="container pt-100">
              <div class="text-center">
                <h1>
                  @if (session()->get('lang') == 'ar')
                  {{$service->title_ar}}
                  @else  
                  {{$service->title_en}}
                  @endif
                </h1>
                <div class="mt-15">
                  <a href="{{route('home')}}" data-i18n="home">{{__('front.home')}}</a>
                  <span class="padding-rl-20">|</span>
                  <a href="{{route('service')}}" data-i18n="services"
                    >{{__('front.services')}}</a
                  >
                  <span class="padding-rl-20">|</span>
                  <span style="color: var(--primary-color)">
                    @if (session()->get('lang') == 'ar')
                    {{$service->title_ar}}
                    @else  
                    {{$service->title_en}}
                    @endif
                  </span>
                </div>
              </div>
            </div>
          </header>

          <!-- ==================== End Header ==================== -->

          <!-- ==================== Start Services ==================== -->

          <section class="services-details section-padding">
            <div class="container">
              <div class="sec-head text-center mb-80">
                <div class="row justify-content-center">
                  <div class="col-lg-8">
                    <div>
                      {{-- <h6 class="sub-title main-color mb-15">
                        Web and Mobile Development
                      </h6> --}}
                      <h4>
                        @if (session()->get('lang') == 'ar')
                        {{$service->title_ar}}
                        @else  
                        {{$service->title_en}}
                        @endif
                      </h4>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row serv-imgs mt-80">
                
                <div class="col-lg-8">
                  <div class="img o-hidden radius-15">
                    <img
                    class="serv_details_img"
                      src="{{asset('storage/'.$service->image)}}"
                      alt=""
                      data-speed="auto"
                      data-lag="0"
                    />
                  </div>
                </div>
              </div>
              <div class="row mt-80">
                <div class="col-lg-12">
                  <div class="text md-mb50">
                    <p>
                      @if (session()->get('lang') == 'ar')
                      {{$service->description_ar}}
                      @else  
                      {{$service->description_en}}
                      @endif
                    </p>
                  </div>
                </div>

              
                {{-- <div class="col-lg-8">
                  <div class="row">
                    <div class="col-md-6">
                      <ul class="rest list-arrow">
                        <li class="nowrap">
                          <span class="icon">
                            <svg
                              width="100%"
                              height="100%"
                              viewBox="0 0 9 8"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M7.71108 3.78684L8.22361 4.29813L7.71263 4.80992L4.64672 7.87832L4.13433 7.36688L6.87531 4.62335H1.11181H0.750039H0.388177L0.382812 0.718232H1.10645L1.11082 3.90005H6.80113L4.12591 1.22972L4.63689 0.718262L7.71108 3.78684Z"
                                fill="#14cf93"
                              ></path>
                            </svg>
                          </span>
                          <h6 class="inline fw-400">Amazing communication.</h6>
                        </li>
                        <li class="mt-10 nowrap">
                          <span class="icon">
                            <svg
                              width="100%"
                              height="100%"
                              viewBox="0 0 9 8"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M7.71108 3.78684L8.22361 4.29813L7.71263 4.80992L4.64672 7.87832L4.13433 7.36688L6.87531 4.62335H1.11181H0.750039H0.388177L0.382812 0.718232H1.10645L1.11082 3.90005H6.80113L4.12591 1.22972L4.63689 0.718262L7.71108 3.78684Z"
                                fill="#14cf93"
                              ></path>
                            </svg>
                          </span>
                          <h6 class="inline fw-400">
                            Best trendinf designing experience.
                          </h6>
                        </li>
                        <li class="mt-10 nowrap">
                          <span class="icon">
                            <svg
                              width="100%"
                              height="100%"
                              viewBox="0 0 9 8"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M7.71108 3.78684L8.22361 4.29813L7.71263 4.80992L4.64672 7.87832L4.13433 7.36688L6.87531 4.62335H1.11181H0.750039H0.388177L0.382812 0.718232H1.10645L1.11082 3.90005H6.80113L4.12591 1.22972L4.63689 0.718262L7.71108 3.78684Z"
                                fill="#14cf93"
                              ></path>
                            </svg>
                          </span>
                          <h6 class="inline fw-400">Email & Live chat.</h6>
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-6">
                      <ul class="rest list-arrow">
                        <li class="nowrap">
                          <span class="icon">
                            <svg
                              width="100%"
                              height="100%"
                              viewBox="0 0 9 8"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M7.71108 3.78684L8.22361 4.29813L7.71263 4.80992L4.64672 7.87832L4.13433 7.36688L6.87531 4.62335H1.11181H0.750039H0.388177L0.382812 0.718232H1.10645L1.11082 3.90005H6.80113L4.12591 1.22972L4.63689 0.718262L7.71108 3.78684Z"
                                fill="#14cf93"
                              ></path>
                            </svg>
                          </span>
                          <h6 class="inline fw-400">Amazing communication.</h6>
                        </li>
                        <li class="mt-10 nowrap">
                          <span class="icon">
                            <svg
                              width="100%"
                              height="100%"
                              viewBox="0 0 9 8"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M7.71108 3.78684L8.22361 4.29813L7.71263 4.80992L4.64672 7.87832L4.13433 7.36688L6.87531 4.62335H1.11181H0.750039H0.388177L0.382812 0.718232H1.10645L1.11082 3.90005H6.80113L4.12591 1.22972L4.63689 0.718262L7.71108 3.78684Z"
                                fill="#14cf93"
                              ></path>
                            </svg>
                          </span>
                          <h6 class="inline fw-400">
                            Best trendinf designing experience.
                          </h6>
                        </li>
                        <li class="mt-10 nowrap">
                          <span class="icon">
                            <svg
                              width="100%"
                              height="100%"
                              viewBox="0 0 9 8"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M7.71108 3.78684L8.22361 4.29813L7.71263 4.80992L4.64672 7.87832L4.13433 7.36688L6.87531 4.62335H1.11181H0.750039H0.388177L0.382812 0.718232H1.10645L1.11082 3.90005H6.80113L4.12591 1.22972L4.63689 0.718262L7.71108 3.78684Z"
                                fill="#14cf93"
                              ></path>
                            </svg>
                          </span>
                          <h6 class="inline fw-400">Email & Live chat.</h6>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div> --}}
              </div>
            </div>
          </section>

          <!-- ==================== End Services ==================== -->

          <!-- ==================== Start process ==================== -->

          {{-- <section class="process section-padding pt-0">
            <div class="container">
              <div class="sec-head mb-80">
                <h6 class="sub-title main-color mb-25" data-i18n="process">
                  Our Process
                </h6>
                <div class="bord pt-25 bord-thin-top d-flex align-items-center">
                  <h2 class="fw-600">
                    Business <span class="fw-200">Development</span>
                  </h2>
                  <div class="ml-auto">
                    <a href="page-about3.html" class="go-more">
                      <span class="text" data-i18n="viewMore">View More</span>
                      <span class="icon ti-arrow-top-right"></span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="row md-marg">
                <div class="col-lg-3 col-md-6 item md-mb50">
                  <div class="icon-img-60 mb-30">
                    <img src="assets/imgs/serv-icons/3.png" alt="" />
                  </div>
                  <h5 class="mb-15">Research</h5>
                  <p>
                    Clarifying and translating insights into foundation and
                    creative approach
                  </p>
                  <div class="o-hidden">
                    <a href="page-about3.html" class="rmore to-in mt-30">
                      <span class="sub-title" data-i18n="readMore"
                        >Read More</span
                      >
                      <img
                        src="assets/imgs/arrow-right.png"
                        alt=""
                        class="icon-img-20 ml-5"
                      />
                    </a>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 item md-mb50">
                  <div class="icon-img-60 mb-30">
                    <img src="assets/imgs/serv-icons/4.png" alt="" />
                  </div>
                  <h5 class="mb-15">Concept</h5>
                  <p>
                    Clarifying and translating insights into foundation and
                    creative approach
                  </p>
                  <div class="o-hidden">
                    <a href="page-about3.html" class="rmore to-in mt-30">
                      <span class="sub-title" data-i18n="readMore"
                        >Read More</span
                      >
                      <img
                        src="assets/imgs/arrow-right.png"
                        alt=""
                        class="icon-img-20 ml-5"
                      />
                    </a>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 item sm-mb50">
                  <div class="icon-img-60 mb-30">
                    <img src="assets/imgs/serv-icons/5.png" alt="" />
                  </div>
                  <h5 class="mb-15">Implement</h5>
                  <p>
                    Clarifying and translating insights into foundation and
                    creative approach
                  </p>
                  <div class="o-hidden">
                    <a href="page-about3.html" class="rmore to-in mt-30">
                      <span class="sub-title" data-i18n="readMore"
                        >Read More</span
                      >
                      <img
                        src="assets/imgs/arrow-right.png"
                        alt=""
                        class="icon-img-20 ml-5"
                      />
                    </a>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 item">
                  <div class="icon-img-60 mb-30">
                    <img src="assets/imgs/serv-icons/6.png" alt="" />
                  </div>
                  <h5 class="mb-15">Handover</h5>
                  <p>
                    Clarifying and translating insights into foundation and
                    creative approach
                  </p>
                  <div class="o-hidden">
                    <a href="page-about3.html" class="rmore to-in mt-30">
                      <span class="sub-title" data-i18n="readMore"
                        >Read More</span
                      >
                      <img
                        src="assets/imgs/arrow-right.png"
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

          <!-- ==================== Start Testimonials ==================== -->

          {{-- <section class="testimonials-crev section-padding pb-0 bg-img" data-background="assets/imgs/background/2.jpg">
            <div class="container">
              <div class="row justify-content-end">
                <div class="col-lg-10">
                  <div class="sec-head mb-80">
                    <h2 class="fw-600 fz-70" data-i18n="clientSay2">
                      What People
                    </h2>
                    <h2>
                      <span class="fw-200" data-i18n="clientSayy">Say?</span>
                    </h2>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-11 position-re">
                  <div
                    class="testim-swiper testim1"
                    data-carousel="swiper"
                    data-loop="true"
                    data-space="30"
                  >
                    <div
                      id="content-carousel-container-unq-testim"
                      class="swiper-container"
                      data-swiper="container"
                    >
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <div class="item d-flex align-items-center">
                            <div>
                              <div class="fit-img circle">
                                <img src="assets/imgs/testim/t1.jpg" alt="" />
                              </div>
                            </div>
                            <div class="content ml-100">
                              <div class="text">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="256.721"
                                  height="208.227"
                                  viewBox="0 0 256.721 208.227"
                                  id="null"
                                  class="qout-svg"
                                >
                                  <path
                                    id="Path_76570"
                                    data-name="Path 76570"
                                    d="M-23.723-530.169v97.327H-121.05v-68.7q0-40.076,13.359-73.472T-62.845-639.9l36.259,28.625Q-63.8-570.244-68.57-530.169Zm158.395,0v97.327H37.345v-68.7q0-40.076,13.359-73.472T95.55-639.9l36.259,28.625Q94.6-570.244,89.825-530.169Z"
                                    transform="translate(121.55 640.568)"
                                    fill="none"
                                    stroke="#1a1a1a"
                                    stroke-width="1"
                                    opacity="0.322"
                                  ></path>
                                </svg>
                                <h4>
                                  I have been hiring people in this space for a
                                  number of years and I have never seen this
                                  level of professionalism. It really feels like
                                  you are working with a team that can get the
                                  job done.
                                </h4>
                              </div>
                              <div
                                class="info d-flex align-items-center pt-40 mt-40 bord-thin-top"
                              >
                                <div>
                                  <h5>Adam Beckley</h5>
                                  <span class="sub-title main-color"
                                    >Envato Client</span
                                  >
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
          </section> --}}

          <!-- ==================== End Testimonials ==================== -->

          <!-- ==================== Start Services ==================== -->

          {{-- <section class="services section-padding">
            <div class="container">
              <div class="sec-head mb-80">
                <h6
                  class="sub-title main-color mb-25"
                  data-i18n="ourSpecialize"
                >
                  Our Specialize
                </h6>
                <div class="bord pt-25 bord-thin-top d-flex align-items-center">
                  <h2 class="fw-600" data-i18n="weHave">What We Have</h2>
                  <h2 style="margin-inline-start: 0.5rem" data-i18n="offer">
                    <span class="fw-200">to Offer</span>
                  </h2>
                  <div class="ml-auto">
                    <a href="{{route('service')}}" class="go-more">
                      <span class="text" data-i18n="viewServices"
                        >View all services</span
                      >
                      <span class="icon ti-arrow-top-right"></span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="row">
                @foreach ($services as $service)
                <div class="col-lg-4">
                  <div class="item-box radius-15 md-mb30">
                    <div class="icon mb-40 opacity-5">
                      <img src="{{asset('storage/'.$service->image)}}" alt="" />
                    </div>
                    <h5 class="mb-15">
                      @if (session()->get('lang') == 'ar')
                      {{$service->title_ar}}
                      @else  
                      {{$service->title_en}}
                      @endif
                    </h5>
                    <p>
                      @if (session()->get('lang') == 'ar')
                      {{$service->description_ar}}
                      @else  
                      {{$service->description_en}}
                      @endif
                    </p>
                    <a href="{{route('service.details',['id'=>$service->id])}}" class="rmore mt-30">
                      <span class="sub-title" data-i18n="readMore"
                        >Read More</span
                      >
                      <img
                        src="assets/imgs/arrow-right.png"
                        alt=""
                        class="icon-img-20 ml-5"
                      />
                    </a>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </section> --}}

          <!-- ==================== End Services ==================== -->

          <!-- ==================== Start FAQS ==================== -->

          {{-- <section class="faqs section-padding pt-0">
            <div class="container">
              <div class="row justify-content-between">
                <div class="col-lg-5 valign">
                  <div class="faq-img md-mb50">
                    <img src="assets/imgs/intro/03.jpg" alt="" />
                  </div>
                </div>
                <div class="col-lg-6 valign">
                  <div class="full-width">
                    <div class="sec-head mb-50">
                      <h6 class="sub-title main-color mb-15" data-i18n="faq">
                        FAQS
                      </h6>
                      <h3>Frequently asked questions</h3>
                    </div>
                    <div class="list-serv">
                      <div class="accordion bord">
                        <div
                          class="item active mb-15 wow fadeInUp"
                          data-wow-delay=".1s"
                        >
                          <div class="title">
                            <h6>Designing Content With AI Power</h6>
                            <span class="ico ti-plus"></span>
                          </div>
                          <div class="accordion-info">
                            <p class="">
                              Taken possession of my entire soul, like these
                              sweet mornings of spring which i enjoy with my
                              whole.
                            </p>
                          </div>
                        </div>

                        <div
                          class="item mb-15 wow fadeInUp"
                          data-wow-delay=".3s"
                        >
                          <div class="title">
                            <h6>Talented, Professional & Expert Team</h6>
                            <span class="ico ti-plus"></span>
                          </div>
                          <div class="accordion-info">
                            <p class="">
                              Taken possession of my entire soul, like these
                              sweet mornings of spring which i enjoy with my
                              whole.
                            </p>
                          </div>
                        </div>

                        <div class="item wow fadeInUp" data-wow-delay=".5s">
                          <div class="title">
                            <h6>We Build and Activate Brands</h6>
                            <span class="ico ti-plus"></span>
                          </div>
                          <div class="accordion-info">
                            <p class="">
                              Taken possession of my entire soul, like these
                              sweet mornings of spring which i enjoy with my
                              whole.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section> --}}

          <!-- ==================== End FAQS ==================== -->
        </main>
        @include('site.footer')
