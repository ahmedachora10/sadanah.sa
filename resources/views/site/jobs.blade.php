<x-front-layout>
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
                        <a href="{{route('jobs.request', $job)}}"
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

        </x-front-layout>
