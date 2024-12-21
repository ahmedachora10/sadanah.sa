@include('site.header')

      <!-- ==================== End Navbar ==================== -->

      <div id="smooth-content">
        <main class="main-bg">
          <!-- ==================== Start Slider ==================== -->

          <header
            class="page-header bg-img section-padding"
            data-background="assets/imgs/header/bg1.jpg"
            data-overlay-dark="9"
          >
            <div class="container pt-100">
              <div class="text-center">
                <h1 data-i18n="jobs"></h1>
                <div class="mt-15">
                  <a href="{{route('home')}}">{{__('front.home')}}</a>
                  <span class="padding-rl-20">|</span>
                  <span
                    style="color: var(--primary-color)"
                    data-i18n="jobs"
                  >{{ trans('front.jobs') }}</span>
                </div>
              </div>
            </div>
          </header>

          <!-- ==================== End Slider ==================== -->

          <!-- ==================== Start Blog ==================== -->

          <section class="blog section-padding">
            <div class="container">
              <div class="row xlg-marg">
                <div class="col-lg-4 p-0">
                  <!-- Sidebar -->
                  <div class="sidebar">
                    <ul class="list-unstyled">
                        @foreach ($jobs as $job)
                        <li class="py-2">
                            <a href="#" data-target="#content-{{$job->id}}">{{ $job->title }}</a>
                        </li>
                        @endforeach

                    </ul>
                  </div>
                </div>
                <div class="col-lg-8 position-relative mt-3">
                  <!-- Dynamic Content Section -->
                  @foreach ($jobs as $job)

                  <div id="content-{{$job->id}}" class="content-box show">
                    <div
                      class="header_content d-flex align-items-center justify-content-between"
                    >
                      <h2 class="content_title">
                      {{$job->title}}
                     </h2>
                      <a
                        class="confirm_button"
                        data-bs-toggle="modal"
                        data-bs-target="#confirmForm"
                        >قدم الان</a
                      >
                    </div>

                    <div class="content_info">
                      <h6 class="">{{__('front.Basic information')}}</h6>
                      <ul
                        class="prime_info d-flex align-items-center justify-content-between"
                      >
                        <li><span> {{__('front.Work location')}} : </span> <span>{{ $job->city?->name ?? '-' }}</span></li>
                        <li>
                          <span> {{__('front.Job Type')}} : </span> <span>
                            {{$job->type?->name() ?? '-'}}
                           </span>
                        </li>
                        <li><span> {{__('front.Job Number')}} : </span> <span>
                          {{$job->number}}
                        </span></li>
                      </ul>
                    </div>
                    <div class="res_content">
                      <h3 class="res-title">{{__('front.responsibility')}}</h3>
                      <div>
                        {{$job->responsibilities}}
                      </div>
                    </div>
                    <div class="res_content">
                      <h3 class="res-title"> {{__('front.requirements')}}:</h3>
                      <div>
                          {{$job->responsibilities}}

                      </div>
                    </div>
                    <div class="res_content">
                      <h3 class="res-title">  {{__('front.experience')}}:</h3>
                      <div>
                        {{$job->experience}}
                        </div>
                    </div>
                    <div class="res_content">
                      <h3 class="res-title">{{__('front.education_level')}} :</h3>
                      <div>
                        {{$job->education}}
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
            </div>
          </section>
        </main>

        <!-- Modal -->
        <div
          class="modal fade"
          id="confirmForm"
          data-bs-backdrop="static"
          data-bs-keyboard="false"
          tabindex="-1"
          aria-labelledby="confirmFormLabel"
          aria-hidden="true"
        >
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="confirmFormLabel">قدم الان</h5>
                <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="modal"
                  aria-label="Close"
                ></button>
              </div>
              <div class="modal-body">
                <form class="form_modal">
                  <div class="mb-3 row">
                    <label
                      for="name"
                      class="col-sm-2 col-form-label"
                      data-i18n="name"
                    ></label>
                    <div class="col-sm-10">
                      <input
                        type="text"
                        class="form-control"
                        id="name"
                        required
                      />
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label
                      for="staticEmail"
                      class="col-sm-2 col-form-label"
                      data-i18n="email"
                    ></label>
                    <div class="col-sm-10">
                      <input
                        type="text"
                        class="form-control"
                        id="staticEmail"
                        required
                      />
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="phone" class="col-sm-2 col-form-label"
                      >الهاتف</label
                    >
                    <div class="col-sm-10">
                      <input
                        type="text"
                        class="form-control"
                        id="phone"
                        required
                      />
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="file" class="col-sm-2 col-form-label"
                      >تحميل السيره الذاتية</label
                    >
                    <div class="col-sm-10">
                      <input
                        class="form-control"
                        type="file"
                        id="file"
                        required
                      />
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="text-area" class="col-sm-2 col-form-label"
                      >نبذة عنك</label
                    >
                    <div class="col-sm-10">
                      <textarea
                        class="form-control"
                        id="text-area"
                        rows="3"
                        required
                      ></textarea>
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="exp" class="col-sm-2 col-form-label"
                      >اجمالى الخبره</label
                    >
                    <div class="col-sm-10">
                      <input
                        type="text"
                        class="form-control"
                        id="exp"
                        required
                      />
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="exp" class="col-sm-2 col-form-label"
                      >على رأس عمل</label
                    >
                    <div class="col-sm-10">
                      <div class="form-check form-check-inline">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="flexRadioDefault"
                          id="inlineCheckbox1"
                        />
                        <label class="form-check-label" for="inlineCheckbox1"
                          >نعم</label
                        >
                      </div>
                      <div class="form-check form-check-inline">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="flexRadioDefault"
                          id="inlineCheckbox2"
                        />
                        <label class="form-check-label" for="inlineCheckbox2"
                          >لا</label
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <button class="send_button">Submit form</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        {{-- <section class="contact mb-3 sub-bg">
          <div class="container">
            <div class="row">
              <div class="col-lg-5 valign">
                <div class="sec-head md-mb80">
                  <h2 class="text-u ls1 d-rotate wow">
                    <span class="rotate-text"
                      >Let's make your <br />
                      brand <span class="fw-200"> brilliant!</span></span
                    >
                  </h2>
                  <p class="mt-20 mb-20">
                    If you would like to work with us or just want to get in
                    touch, we’d love to hear from you!
                  </p>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="morinfo mt-30">
                        <h6 class="mb-15">Address</h6>
                        <p>Besòs 1, 08174 Sant Cugat del Vallès, Barcelona</p>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="morinfo mt-30">
                        <h6 class="mb-15">Email</h6>
                        <p>Support@uithemez.com</p>
                      </div>
                    </div>
                  </div>
                  <div class="phone fz-30 fw-600 mt-30 underline main-color">
                    <a href="#0">+1 840 841 25 69</a>
                  </div>
                  <ul class="rest social-text d-flex mt-60">
                    <li class="mr-30">
                      <a href="#0" class="hover-this"
                        ><span class="hover-anim">Facebook</span></a
                      >
                    </li>
                    <li class="mr-30">
                      <a href="#0" class="hover-this"
                        ><span class="hover-anim">Twitter</span></a
                      >
                    </li>
                    <li class="mr-30">
                      <a href="#0" class="hover-this"
                        ><span class="hover-anim">LinkedIn</span></a
                      >
                    </li>
                    <li>
                      <a href="#0" class="hover-this"
                        ><span class="hover-anim">Instagram</span></a
                      >
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-6 offset-lg-1 valign">
                <div class="full-width">
                  <div class="sec-head mb-50"></div>
                  <form id="contact-form" method="post" action="contact.php">
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

                          <input id="form_subject" type="text" name="subject" />
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
                              >Let's Talk</span
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
        </section> --}}
        @include('site.footer')
