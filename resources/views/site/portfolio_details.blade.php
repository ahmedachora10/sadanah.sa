<x-front-layout>

          <header
            class="header-project3 bg-img d-flex align-items-end"
            data-background="{{$work->background}}"
            data-overlay-dark="5"
          >
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <div class="caption">
                    <h1>
                      @if (app()->getLocale() == 'ar')
                      {{$work->client_name_ar}}
                      @else
                      {{$work->client_name_en}}
                      @endif
                    </h1>
                  </div>
                </div>
              </div>
            </div>
          </header>

          <!-- ==================== End Slider ==================== -->

          <!-- ==================== Start section ==================== -->

          <section class="section-padding">
            <div class="container">
              <div class="info mb-80 pb-20 bord-thin-bottom">
                <div class="row">
                  <div class="col-md-6 col-lg-3">
                    <div class="item mb-30">
                      <span class="opacity-8 mb-5">{{__('front.Category')}} :</span>
                      <h6>
                        @foreach ($work->tags as $tag)
                            {{$tag->name}}
                            @if(!$loop->last) - @endif
                        @endforeach
                      </h6>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-3">
                    <div class="item mb-30">
                      <span class="opacity-8 mb-5">{{__('front.Client')}} :</span>
                      <h6>
                        @if (app()->getLocale() == 'ar')
                        {{$work->client_name_ar}}
                        @else
                        {{$work->client_name_en}}
                        @endif
                      </h6>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-3">
                    <div class="item mb-30">
                      <span class="opacity-8 mb-5">{{__('front.Start Date')}} :</span>
                      <h6> {{$work->transaction_start_date}}</h6>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-3">
                    <div class="item">
                      <span class="opacity-8 mb-5">{{__('front.End Date')}} :</span>
                      <h6>{{$work->transaction_end_date}}</h6>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="col-lg-11">
                  <div class="row">
                    {{-- <div class="col-lg-5">
                      <h4 class="mb-50">01 . The Challenge</h4>
                    </div> --}}
                    <div class="col-12">
                      <div class="text">
                        <h5 class="mb-30 fw-400 line-height-40">
                          @if (app()->getLocale() == 'ar')
                          {{$work->description_ar}}
                          @else
                          {{$work->description_en}}
                          @endif
                        </h5>
                        <p class="fz-18">
                          @if (app()->getLocale() == 'ar')
                          {{$work->content_ar}}
                          @else
                          {{$work->content_en}}
                          @endif
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- ==================== End section ==================== -->

          <!-- ==================== Start section ==================== -->

          <div class="img-column">
            {{-- <div class="container"> --}}
              <div class="row justify-content-between">

                @if ($work->images)
                    @foreach ($work->images as $image)
                        <div class="col-md-6 col-12">
                            <div class="img md-mb30 border border-4 rounded">
                                {{$image}}
                            </div>
                        </div>
                    @endforeach
                @endif

              </div>
            {{-- </div> --}}
          </div>

          <!-- ==================== End section ==================== -->

          <!-- ==================== Start section ==================== -->

          {{-- <section class="section-padding">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-lg-11">
                  <div class="row">
                    <div class="col-lg-5">
                      <h4 class="mb-50">02 . The Solution</h4>
                    </div>
                    <div class="col-lg-7">
                      <div class="text">
                        <p class="fz-18">
                          There are many variations of passages of Lorem Ipsum
                          available, but the majority have suffered alteration
                          in some form, by injected humour, or randomised words
                          which don't look even slightly believable. If you are
                          going to use a passage of Lorem Ipsum, you need to be
                          sure there isn't anything embarrassing hidden in the
                          middle of text.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section> --}}

          <!-- ==================== End section ==================== -->

          <!-- ==================== Start section ==================== -->

          {{-- <div class="section-padding pt-0">
            <div class="container">
              <div class="img">
                <img src="assets/imgs/home-project/bg-3.jpg" alt="" />
              </div>
            </div>
          </div> --}}

          <!-- ==================== End section ==================== -->

          <!-- ==================== Start Next ==================== -->

          <section class="next-project sub-bg">
            <div class="container-fluid rest">
              <div class="row">
                @if ($previousWork)
                <div class="col-md-6 rest">
                  <div
                    class="text-left box bg-img"
                    data-background="{{$previousWork->thumbnail}}">
                    <div class="cont d-flex align-items-center">
                      <div>
                        <span class="mr-30 fz-30 ti-arrow-left"></span>
                      </div>
                      <div>
                        <h6
                          class="sub-title fz-16 mb-5"
                          data-i18n="prevProject">
                            {{__('front.Prev Project')}}
                        </h6>
                        <a href="{{route('portfolio.details',$previousWork)}}" class="fz-40 fw-600 stroke">
                          @if (app()->getLocale() == 'ar')
                          {{$previousWork->client_name_ar}}
                          @else
                          {{$previousWork->client_name_en}}
                          @endif
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                @endif
                @if ($nextWork)
                <div class="col-md-6 rest">
                  <div
                    class="text-right d-flex box bg-img"
                    data-background="{{$nextWork->thumbnail}}">
                    <div class="ml-auto">
                      <div class="cont d-flex align-items-center">
                        <div>
                          <h6
                            class="sub-title fz-16 mb-5"
                            data-i18n="nextProject"
                          >
                            {{__('front.Next Project')}}
                          </h6>
                          <a href="{{route('portfolio.details',$nextWork)}}" class="fz-40 fw-600 stroke">
                            @if (app()->getLocale() == 'ar')
                            {{$nextWork->client_name_ar}}
                            @else
                            {{$nextWork->client_name_en}}
                            @endif</a>
                        </div>
                        <div>
                          <span class="ml-30 fz-30 ti-arrow-right"></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                @endif

              </div>
            </div>
            <div>
              <a href="{{route('portfolio')}}" class="all-works-butn text-center">
                <span class="ti-view-grid fz-24 mb-10"></span>
                <span class="d-block fz-12 text-u ls1" data-i18n="allProject"
                  >all Projects</span
                >
              </a>
            </div>
          </section>

</x-front-layout>
