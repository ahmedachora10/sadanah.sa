@include('site.header')
      <!-- ==================== End Navbar ==================== -->
      <?php
      $x = \App\Models\Setting::where('name','x')->first();
      $instagram = \App\Models\Setting::where('name','instagram')->first();
      $linkedin = \App\Models\Setting::where('name','linkedin')->first();
      $telegram = \App\Models\Setting::where('name','telegram')->first();
      $tiktok = \App\Models\Setting::where('name','tiktok')->first();
      $snapchat = \App\Models\Setting::where('name','snapchat')->first();
      $youtube = \App\Models\Setting::where('name','youtube')->first();
      $footer_ar = \App\Models\Setting::where('name','footer_ar')->first();
      $footer_en = \App\Models\Setting::where('name','footer_en')->first();
      $phone = \App\Models\Setting::where('name','phone')->first();
      $email = \App\Models\Setting::where('name','email')->first();
      $fileUrl = \App\Models\Setting::where('name','profile_file_ar')->first();
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
                <h1 class="fz-100 text-u" data-i18n="Contact">{{__('front.Contact Us')}}</h1>
                <div class="mt-15">
                  <a href="sadnah.html" data-i18n="home"> {{__('front.home')}}</a>
                  <span class="padding-rl-20">|</span>
                  <span style="color: var(--primary-color)" data-i18n="contact"
                    >{{__('front.Contact Us')}}</span
                  >
                </div>
              </div>
            </div>
          </header>

          <!-- ==================== End Header ==================== -->

          <!-- ==================== Start Contact ==================== -->

          <section class="contact section-padding sub-bg">
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
                            {{$phone->val}}
                          </span>  
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="morinfo mt-30">
                          <h6 class="mb-15">{{__('front.Email')}}</h6>
                          <p>{{$email->val}}</p>
                        </div>
                      </div>
                    </div>
                    <div class="phone fz-30 fw-600 mt-30 underline main-color">
                      
                    </div>
                    
                    <ul class="rest social-text" style="display: flex; gap: 10px; list-style: none; padding: 0; margin: 0;">
                      <li class="cursor-pointer ml-50">
                        <a href="{{$x->val}}" target="_blank" class="hover-anim social-icon">
                          <i class="fa-brands fa-x-twitter"></i>
                        </a>
                      </li>
                      <li class="cursor-pointer ml-50">
                        <a href="{{$linkedin->val}}" target="_blank" class="hover-anim social-icon">
                          <i class="fab fa-linkedin mr-10"></i>
                        </a>
                      </li>
                      <li class="cursor-pointer ml-50">
                        <a href="{{$tiktok->val}}" target="_blank" class="hover-anim social-icon">
                          <i class="fab fa-tiktok mr-10"></i>
                        </a>
                      </li>
                      <li class="cursor-pointer ml-50">
                        <a href="{{$youtube->val}}" target="_blank" class="hover-anim social-icon">
                          <i class="fab fa-youtube mr-10"></i>
                        </a>
                      </li>
                      <li class="cursor-pointer ml-50">
                        <a href="{{$snapchat->val}}" target="_blank" class="hover-anim social-icon">
                          <i class="fab fa-snapchat mr-10"></i>
                        </a>
                      </li>
                      <li class="cursor-pointer ml-50">
                        <a href="{{$telegram->val}}" target="_blank" class="hover-anim social-icon">
                          <i class="fab fa-telegram mr-10"></i>
                        </a>
                      </li>
                      <li class="cursor-pointer ml-50">
                        <a href="{{$instagram->val}}" target="_blank" class="hover-anim social-icon">
                          <i class="fab fa-instagram mr-10"></i>
                        </a>
                      </li>
                    </ul>
                    

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
                            <label
                              for="name"
                              class="mb-1"
                              data-i18n="name"
                            ></label>
                            <input
                              id="form_name"
                              type="text"
                              name="name"
                              required="required"
                            />
                          </div>
                        </div>

                        <div class="col-lg-6">
                          <div class="form-group mb-30">
                            <label
                              for="email"
                              class="mb-1"
                              data-i18n="email"
                            ></label>

                            <input
                              id="form_email"
                              type="email"
                              name="email"
                              required="required"
                            />
                          </div>
                        </div>

                        <div class="col-12">
                          <div class="form-group mb-30">
                            <label
                              for="subject"
                              class="mb-1"
                              data-i18n="subject"
                            ></label>

                            <input
                              id="form_subject"
                              type="text"
                              name="subject"
                            />
                          </div>
                        </div>

                        <div class="col-12">
                          <div class="form-group">
                            <label
                              for="message"
                              class="mb-1"
                              data-i18n="message"
                            ></label>

                            <textarea
                              id="form_message"
                              name="message"
                              rows="4"
                              required="required"
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
