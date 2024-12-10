@include('site.header')


      <div id="smooth-content">
        <main class="main-bg">
          <!-- ==================== Start Header ==================== -->

          <header
            class="page-header bg-img section-padding"
            data-background="assets/imgs/header/bg1.jpg"
            data-overlay-dark="9"
          >
            <div class="container pt-100">
              <div class="text-center">
                <h1 data-i18n="Portfolio"></h1>
                <div class="mt-15">
                  <a href="{{route('home')}}" data-i18n="home">{{__('front.home')}}</a>
                  <span class="padding-rl-20">|</span>
                  <span
                    style="color: var(--primary-color)"
                    data-i18n="portfolio"
                    >{{__('front.Portfolio')}}</span
                  >
                </div>
              </div>
            </div>
          </header>

          <!-- ==================== End Header ==================== -->

          <!-- ==================== Start Portfolio ==================== -->

          <section class="work-stand section-padding sub-bg">
            <div class="container-xxl">
              <div class="row">
                <!-- filter links -->
                <div class="filtering col-12 mb-50 text-center">
                  <div class="filter">
                    <span class="text" data-i18n="filter">{{__('front.filter')}}</span>
                    <span data-filter="*" class="active" data-i18n="showAll"
                      >{{__('front.View all')}}</span>
                      @foreach ($tags as $tag)
                      <span data-filter=".{{$tag->id}}">
                        @if (app()->getLocale() == 'ar')
                        {{$tag->name_ar}}
                        @else
                        {{$tag->name_en}}
                        @endif
                      </span>
                      @endforeach
                  </div>
                </div>
              </div>
              <div class="gallery row stand-marg">

                @foreach ($works as $work)

                <div class="col-lg-4 col-md-6 items {{$work->tag_id}}">
                  <div class="item mt-40">
                    <div class="img">
                      <img class="project_img" src="{{$work->thumbnail}}" alt="" />
                    </div>
                    <div class="cont mt-20">
                      <h5 class="fz-22">
                        <a href="{{route('portfolio.details',['id'=>$work->id])}}">
                          @if (app()->getLocale() == 'ar')
                          {{$work->client_name_ar}}
                          @else
                          {{$work->client_name_en}}
                          @endif
                        </a>
                      </h5>
                      <p>
                        @if (app()->getLocale() == 'ar')
                          {{$work->tag->name_ar}}
                          @else
                          {{$work->tag->name_en}}
                          @endif
                      </p>
                    </div>
                  </div>
                </div>
                @endforeach


              </div>
            </div>
          </section>

          <!-- ==================== End Portfolio ==================== -->
        </main>

        @include('site.footer')
