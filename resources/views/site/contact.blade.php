@include('site.header')
      <!-- ==================== End Navbar ==================== -->
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
      <div id="smooth-content">
        <main class="main-bg">
          <!-- ==================== Start Header ==================== -->

          <header
            class="page-header bg-img section-padding"
            data-background="{{asset('assets/imgs/header/b5.jpg')}}"
            data-overlay-dark="9"
          >
            <div class="container pt-100">
              <div class="text-center">
                <h1 class="fz-100 text-u" >{{__('front.Contact Us')}}</h1>
                <div class="mt-15">
                  <a href="{{route('home')}}"> {{__('front.home')}}</a>
                  <span class="padding-rl-20">|</span>
                  <span style="color: var(--primary-color)"
                    >{{__('front.Contact Us')}}</span
                  >
                </div>
              </div>
            </div>
          </header>

          <!-- ==================== End Header ==================== -->

          <!-- ==================== Start Contact ==================== -->

          <section class="contact section-padding sub-bg overflow-hidden">
            <div class="container">
              <div class="row">
                <div class="col-lg-5 valign">
                  <div class="sec-head md-mb80">
                    <h2 class="text-u ls1 d-rotate wow">
                      <span class="rotate-text"
                        >{{__('front.Let\'s make')}} <br />
                        {{__('front.your brand')}} <span class="fw-200">{{__('front.brilliant')}} !</span></span
                      >
                    </h2>
                    {{-- <p class="mt-20 mb-20">
                      If you would like to work with us or just want to get in
                      touch, we’d love to hear from you!
                    </p> --}}
                    <div class="row">
                      <div class="col-md-6">
                        <div class="morinfo mt-30">
                          <h6 class="mb-15">{{__('front.phone')}}</h6>
                          <span class="text" style="direction: ltr; unicode-bidi: embed;">
                            {{$phone}}
                          </span>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="morinfo mt-30">
                          <h6 class="mb-15">{{__('front.Email')}}</h6>
                          <p>{{$email}}</p>
                        </div>
                      </div>
                    </div>
                    <div class="phone fz-30 fw-600 mt-30 underline main-color">

                    </div>

             <div class="row">
              <div class="col-12">
              <ul class="justify-content-lg-start" style="display: flex; gap: 2rem; list-style: none; padding: 0; margin: 0; flex-wrap: wrap; align-items: center; justify-content: center;">
                      <li class="cursor-pointer ">
                        <a href="{{$x}}" target="_blank" class="hover-anim social-icon">
                          <i class="fa-brands fa-x-twitter"></i>
                        </a>
                      </li>
                      <li class="cursor-pointer ">
                        <a href="{{$linkedin}}" target="_blank" class="hover-anim social-icon">
                          <i class="fab fa-linkedin mr-10"></i>
                        </a>
                      </li>
                      <li class="cursor-pointer ">
                        <a href="{{$tiktok}}" target="_blank" class="hover-anim social-icon">
                          <i class="fab fa-tiktok mr-10"></i>
                        </a>
                      </li>
                      <li class="cursor-pointer ">
                        <a href="{{$youtube}}" target="_blank" class="hover-anim social-icon">
                          <i class="fab fa-youtube mr-10"></i>
                        </a>
                      </li>
                      <li class="cursor-pointer ">
                        <a href="{{$snapchat}}" target="_blank" class="hover-anim social-icon">
                          <i class="fab fa-snapchat mr-10"></i>
                        </a>
                      </li>
                      <li class="cursor-pointer ">
                        <a href="{{$telegram}}" target="_blank" class="hover-anim social-icon">
                          <i class="fab fa-telegram mr-10"></i>
                        </a>
                      </li>
                      <li class="cursor-pointer ">
                        <a href="{{$instagram}}" target="_blank" class="hover-anim social-icon">
                          <i class="fab fa-instagram mr-10"></i>
                        </a>
                      </li>
                    </ul>
              </div>
             </div>

                  </div>
                </div>
                <div class="col-lg-6 offset-lg-1 valign">
                  <div class="full-width">
                    <div class="sec-head mb-50">
                      <h3 class="text-u ls1" data-i18n="sendMessage">{{__('front.send a')}}</h3>
                      <h3 class="fw-200" data-i18n="message">{{__('front.message')}}</h3>
                    </div>
                    <form id="contact-form" method="post" action="{{route('contact')}}">
                      <div class="messages"></div>

                      <div class="controls row">
                        <div class="col-lg-6">
                          <div class="form-group mb-30">

                            <input
                              id="form_name"
                              type="text"
                              name="name"
                              required="required"
                              placeholder="{{__('front.first name')}}"
                            />
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group mb-30">

                            <input
                              id="form_name"
                              type="text"
                              name="name"
                              required="required"
                              placeholder="{{__('front.second name')}}"
                            />
                          </div>
                        </div>

                        <div class="col-lg-6">
                          <div class="form-group mb-30">

                            <input
                              id="form_email"
                              class="text-end"
                              type="email"
                              name="email"
                              required="required"
                              placeholder="{{__('front.email')}}"
                            />
                          </div>
                        </div>

                        <div class="col-lg-6">
                          <div class="form-group mb-30">


                            <input
                              id="form_phone"
                              type="text"
                              name="phone"
                              placeholder="{{__('front.phone number')}}"
                            />
                          </div>
                        </div>

                        <div class="col-12">
                          <div class="form-group">


                            <textarea
                              id="form_message"
                              name="message"
                              rows="4"
                              required="required"
                              placeholder="{{__('front.message')}}"
                            ></textarea>
                          </div>
                          <div class="mt-30">
                            <button
                              type="submit"
                              class="butn butn-full butn-bord radius-30"
                            >
                              <span class="text" data-i18n="talk"
                                >{{__('front.Let\'s Talk')}}</span
                              >
                            </button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- ==================== End Contact ==================== -->
        </main>

        @include('site.footer')
