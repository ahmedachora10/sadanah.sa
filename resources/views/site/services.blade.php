<x-front-layout>
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
                    <a href="{{route('service.details',$service)}}" class="rmore mt-30">
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
</x-front-layout>
