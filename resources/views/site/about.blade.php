@include('site.header')


      <div id="smooth-content">
        <main class="main-bg">
          <!-- ==================== Start Header ==================== -->

          <header
            class="page-header-cerv bg-img section-padding"
            data-background="assets/imgs/header/2.jpg"
            data-overlay-dark="4"
          >
            <div class="container pt-100 ontop">
              <div class="text-center">
                <h1 class="fz-100" data-i18n="About">{{__('front.about')}}</h1>
                <div class="mt-15">
                  <a href="{{route('home')}}" data-i18n="home">{{__('front.home')}}</a>
                  <span class="padding-rl-20">|</span>
                  <span style="color: var(--primary-color)" data-i18n="about"
                    >{{__('front.about')}}</span
                  >
                </div>
              </div>
            </div>
          </header>

          <!-- ==================== End Header ==================== -->

          <!-- ==================== Start intro ==================== -->

          <section class="page-intro position-re">
            <div class="container section-padding">
              <div class="row">
                <div class="col-lg-5">
                  <h6 class="sub-title main-color">{{__('front.About Company')}}</h6>
                </div>
                </div>
                <div class="row mt-3">
                <div class="col-lg-5">
                    <div class="icon mb-40 opacity-5">
                      <img src="{{$about->thumbnail}}" alt="service" />
                    </div>
                </div>
                <div class="col-lg-7">
                  <div class="text">
                    <h4>
                      @if (session()->get('lang') == 'ar')
                      {{$about->description_ar}}
                     @else  
                     {{$about->description_en}}

                     @endif
                    </h4>
                  </div>
                </div>
                </div>
              </div>
            </div>
            <div class="line-overlay">
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

          <!-- ==================== End intro ==================== -->
          @if (session()->get('lang') == 'ar')
          <!-- ==================== Start intro ==================== -->

          <section class="page-intro-cerv section-padding">
            <div class="container">
              <div class="row">
                <div class="col-lg-8 bord-thin-right rest">
                  <div class="row justify-content-end rest">
                    <div class="col-md-5 rest">
                      <div class="cont">
                        <div class="mb-40">
                          <h2 class="fz-100 numb-font">1.</h2>
                        </div>
                        <h4>
                              
                          رسالتنا
                        </h4>
                        <div class="text mt-30">
                          <p>
                            بناء جسور عظيمة من الثّقة والأمان والإبداع ليحظى شريكنا بخطوات آمنة في سيره إلى القمّة.                       
                          </p>
                        </div>

                          </div>
                    </div>
                    <div class="col-md-5 rest">
                      <div class="img fit-img bord-thin-left">
                        <img src="assets/imgs/intro/02.jpg" alt="" />
                      </div>
                    </div>
                  </div>
                  <div class="row justify-content-end bord-thin-top rest">
                    <div class="col-md-5 rest">
                      <div class="img fit-img">
                        <img src="assets/imgs/intro/03.jpg" alt="" />
                      </div>
                    </div>
                    <div class="col-md-5 rest">
                      <div class="cont bord-thin-left">
                        <div class="mb-40">
                          <h2 class="fz-100 numb-font">2.</h2>
                        </div>
                        <h4>رؤيتنا</h4>
                        <div class="text mt-30">
                          <p>
                            نعتزم تحقيق رؤانا الخاصّة التي تتمثّل بجعل سدنة شركة رائدة مبتكِرة ومنافسة في مجالها والوجهة الأولى لكلّ منشأة تبحث عن سادنٍ لها، ونعتزم تحقيق رؤية مملكتنا العظيمة ٢٠٣٠ بدعم وتطوير القطاع التجاري وزيادة نموّه وازدهاره.
                          </p>

                          </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 rest">
                  <div class="bord-thin-top mt-100 position-re">
                    <div class="row">
                      <div class="col-md-11">
                        <div class="cont">
                          <div class="mb-40">
                            <h2 class="fz-100 numb-font">3.</h2>
                          </div>
                          <h4>أهدافنا</h4>
                          <div class="text mt-30">
                            <p>
                              نهدف إلى إمداد كلّ منشأة بما تحتاجه من خبرة ومشورة وتطوير داخلي يشمل كافّة الأقسام وحماية قانونيّة. ونهدف إلى رفع اسمنا واسم كلّ شريك لنا على كل قمّة.
                            </p>
                            </div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="bg-dots bg-img"
                      data-background="assets/imgs/patterns/dots.png"
                    ></div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- ==================== End intro ==================== -->
          @else
          <!-- ==================== Start intro ==================== -->

          <section class="page-intro-cerv section-padding">
            <div class="container">
              <div class="row">
                <div class="col-lg-8 bord-thin-right rest">
                  <div class="row justify-content-end rest">
                    <div class="col-md-5 rest">
                      <div class="cont">
                        <div class="mb-40">
                          <h2 class="fz-100 numb-font">1.</h2>
                        </div>
                        <h4>
                              
                          Our Message
                        </h4>
                        <div class="text mt-30">
                          <p>
                            Building great bridges of trust, security, and creativity so that our partner can take secure steps toward reaching the top.
                          </p>

                          </div>
                      </div>
                    </div>
                    <div class="col-md-5 rest">
                      <div class="img fit-img bord-thin-left">
                        <img src="assets/imgs/intro/02.jpg" alt="" />
                      </div>
                    </div>
                  </div>
                  <div class="row justify-content-end bord-thin-top rest">
                    <div class="col-md-5 rest">
                      <div class="img fit-img">
                        <img src="assets/imgs/intro/03.jpg" alt="" />
                      </div>
                    </div>
                    <div class="col-md-5 rest">
                      <div class="cont bord-thin-left">
                        <div class="mb-40">
                          <h2 class="fz-100 numb-font">2.</h2>
                        </div>
                        <h4>Our Vision</h4>
                        <div class="text mt-30">
                          <p>
                            We are determined to achieve our own vision, which is to make the stewards of the company a leading, innovative, and competitive entity in its field, and the first choice for every organization seeking a steward. We are also committed to realizing the great vision of our Kingdom, 2030, by supporting and developing the commercial sector, increasing its growth and prosperity.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 rest">
                  <div class="bord-thin-top mt-100 position-re">
                    <div class="row">
                      <div class="col-md-11">
                        <div class="cont">
                          <div class="mb-40">
                            <h2 class="fz-100 numb-font">3.</h2>
                          </div>
                          <h4>Our Goals</h4>
                          <div class="text mt-30">
                            <p>
                              We aim to provide every organization with the expertise, advice, and internal development it needs, covering all departments, along with legal protection. Our goal is to raise our name and the name of every partner with us to the highest peak.
                            </p>

                            </div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="bg-dots bg-img"
                      data-background="assets/imgs/patterns/dots.png"
                    ></div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- ==================== End intro ==================== -->
          @endif

          <!-- ==================== Start Team ==================== -->

          <section class="team section-padding">
            <div class="container">
              <div class="sec-head mb-80">
                <h6 class="sub-title main-color mb-25">{{__('front.Our Team')}}</h6>
                <div class="bord pt-25 bord-thin-top d-flex align-items-center">
                  <h2 class="fw-600" data-i18n="ourTeam">
                    {{__('front.Meet our')}} <span class="fw-200"></span>
                  </h2>
                </div>
              </div>
              <div class="row">
                @foreach ($our_teams as $team)
                    
                <div class="col-lg-4">
                  <div class="item md-mb50 about_team_">
                    <div class="img">
                      <img src="{{asset('storage/'.$team->image)}}" alt="" />
                      <div class="info">
                        <span class="fz-12">
                          @if (session()->get('lang') == 'ar')
                          {{$team->job_name_ar}}
                          @else  
                          {{$team->job_name_en}}
                          @endif
                        </span>
                        <h6 class="fz-18">
                          @if (session()->get('lang') == 'ar')
                          {{$team->name_ar}}
                          @else  
                          {{$team->name_en}}
                          @endif
                        </h6>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
              <div
                class="my-4 d-flex align-items-center justify-content-center"
              >
                <a href="{{route('contactus')}}" class="go-more">
                  <span class="text">{{__('front.Join to us')}}</span>
                  <span class="icon ti-arrow-top-right"></span>
                </a>
              </div>
            </div>
          </section>

          <!-- ==================== End Team ==================== -->
        </main>
        @include('site.footer')
