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
                        <li class="py-3 bg-white shadow-sm px-4 mb-1">
                            <a href="javascript::void(0);" data-target="#content-{{$job->id}}">{{ $job->title }}</a>
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
                        <a wire:click="$dispatch('add-job-request', {jobPost: {{$job}}})"
                            class="confirm_button"
                            {{-- data-bs-toggle="modal"
                            data-bs-target="#confirmForm" --}}
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
                {{-- <form class="form_modal">
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
                </form> --}}
                    <livewire:store-job-request />
              </div>
            </div>
            </div>
        </div>

        @include('site.footer')
