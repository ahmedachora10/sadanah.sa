@include('site.header')
      <div id="smooth-content">
        <main class="main-bg ">
          <!-- ==================== Start Team ==================== -->

          <section class="team-single">
            <div class="container-fluid">
              <div class="row xlg-marg">
                <div class="col-lg-6">
                  <div class="img">
                    <img
                      src="{{asset('storage/'.$inf->image)}}"
                      alt=""
                      data-speed="0.2"
                      data-lag="0"
                    />
                  </div>
                </div>
                <div class="col-lg-6 valign mt-5">
                  <div class="cont">
                    <h1>
                      @if (app()->getLocale() == 'ar')
                      {{$inf->name_ar}}
                      @else
                      {{$inf->name_en}}
                      @endif
                    </h1>
                    <h6 class="text-u ls1 opacity-8">
                      @if (app()->getLocale() == 'ar')
                      {{$inf->job_name_ar}}
                      @else
                      {{$inf->job_name_en}}
                      @endif
                    </h6>
                    <div class="mt-4">
                      @if (app()->getLocale() == 'ar')
                      {{$inf->description_ar}}
                      @else
                      {{$inf->description_en}}
                      @endif
                    </div>
                    <div class="text main-bg">

                      <div class="social">
                        <div class="links">
                            <a href="{{$inf->snapchat}}" target="_blank">
                                <i class="fab fa-snapchat"></i>
                            </a>
                            <a href="{{$inf->x}}" target="_blank">
                                <i class="fa-brands fa-x-twitter"></i>
                            </a>
                            <a href="{{$inf->instagram}}" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="{{$inf->tiktok}}" target="_blank">
                                <i class="fab fa-tiktok"></i>
                            </a>

                        </div>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- ==================== End Team ==================== -->

          <!-- ==================== Start Skills ==================== -->

          <section class="skills section-padding">
            <div class="container">
              <div class="row">
                <div class="col-lg-5">
                  <div class="skil-progs md-mb80">
                    @if (app()->getLocale() == 'ar')
                    <h3>{{__('front.followers')}} <span class="fw-300">{{__('front.Social')}}</span></h3>
                    @else
                    <h3>{{__('front.Social')}} <span class="fw-300">{{__('front.followers')}}</span></h3>
                    @endif
                    <p class="fz-13 mt-15">
                      @if (app()->getLocale() == 'ar')
                      {{$inf->social_followers_text_ar}}
                      @else
                      {{$inf->social_followers_text_en}}
                      @endif
                    </p>


                    <div class="skill-item mt-50">
                      <h6 class="fz-16 mb-10">{{__('front.X')}}: {{$inf->x_folowers}}</h6>
                      <div class="skill-progress">
                        <div class="progres" data-value="{{$inf->x_folowers}}"></div>
                      </div>
                    </div>
                    <div class="skill-item mt-30">
                      <h6 class="fz-16 mb-10">{{__('front.snapchat')}}: {{$inf->snapchat_folowers}}</h6>
                      <div class="skill-progress">
                        <div class="progres" data-value="{{$inf->snapchat_folowers}}"></div>
                      </div>
                    </div>
                    <div class="skill-item mt-30">
                      <h6 class="fz-16 mb-10">{{__('front.tiktok')}}: {{$inf->tiktok_folowers}}</h6>
                      <div class="skill-progress">
                        <div class="progres" data-value="{{$inf->tiktok_folowers}}"></div>
                      </div>
                    </div>
                    <div class="skill-item mt-30">
                      <h6 class="fz-16 mb-10">{{__('front.instagram')}}: {{$inf->instagram_folowers}}</h6>
                      <div class="skill-progress">
                        <div class="progres" data-value="{{$inf->instagram_folowers}}"></div>
                      </div>
                    </div>


                  </div>
                </div>

              </div>
            </div>
          </section>

          <!-- ==================== End Skills ==================== -->
        </main>


        @include('site.footer')
          <style>

          main {
            margin-top: 60px;
          }
                  .navbar {
                    background: #1a1a1a;
                  }

          </style>
