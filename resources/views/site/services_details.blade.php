@include('site.header')

    @php
        $title = $service->{'title_'.app()->getLocale()};
        $description = $service->{'description_'.app()->getLocale()};
    @endphp

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
                  {{$title}}
                </h1>
                <div class="mt-15">
                  <a href="{{route('home')}}" data-i18n="home">{{__('front.home')}}</a>
                  <span class="padding-rl-20">|</span>
                  <a href="{{route('service')}}" data-i18n="services"
                    >{{__('front.services')}}</a
                  >
                  <span class="padding-rl-20">|</span>
                  <span style="color: var(--primary-color)">
                    {{$title}}
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
                    <div class="row justify-content-start align-items-center">
                        <div class="col-auto">
                            <img class="serv_details_img" width="90" src="{{asset('storage/'.$service->image)}}" alt="" data-speed="auto" data-lag="0" />
                        </div>
                      <div class="col-md-8 col-9 text-start">
                        <h4>
                            {{$title}}
                        </h4>
                      </div>
                    </div>
                    <div class="col-12">
                        <div class="text md-mb50 ">
                            <p class="fs-6 text-start">
                                {{$description}}
                            </p>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
              {{-- <div class="row mt-80">
                <div class="col-lg-12">
                  <div class="text md-mb50">
                    <p>
                      {{$description}}
                    </p>
                  </div>
                </div>
              </div> --}}
            </div>
          </section>
        </main>
        @include('site.footer')
