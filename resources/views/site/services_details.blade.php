@include('site.header')

@php
    $title = $service->{'title_' . app()->getLocale()};
    $description = $service->{'description_' . app()->getLocale()};
@endphp

<div id="smooth-content">
    <main class="main-bg">
        <!-- ==================== Start Header ==================== -->

        <header class="page-header bg-img section-padding" data-background="assets/imgs/header/b5.jpg"
            data-overlay-dark="9">
            <div class="container pt-100">
                <div class="text-center">
                    <h1>
                        {{ $title }}
                    </h1>
                    <div class="mt-15">
                        <a href="{{ route('home') }}" data-i18n="home">{{ __('front.home') }}</a>
                        <span class="padding-rl-20">|</span>
                        <a href="{{ route('service') }}" data-i18n="services">{{ __('front.services') }}</a>
                        <span class="padding-rl-20">|</span>
                        <span style="color: var(--primary-color)">
                            {{ $title }}
                        </span>
                    </div>
                </div>
            </div>
        </header>

        <!-- ==================== End Header ==================== -->

        <!-- ==================== Start Services ==================== -->

        <section class="services-details section-padding">
            <div class="container">
                <div class="sec-head mb-80">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="row justify-content-end align-items-center">
                                <div class="col-md-2">
                                    <img class="serv_details_img" style="width: 90px !important"
                                        src="{{ asset('storage/' . $service->image) }}" alt="service image"
                                        data-speed="auto" data-lag="0" />
                                </div>
                                <div class="col-md-10 col-9">
                                    <h4>
                                        {{ $title }}
                                    </h4>
                                </div>
                                <div class="col-12" style="margin: 1.5rem 0"></div>
                                <div class="col-12">
                                    <div class="text md-mb50 ">
                                        <p class="fs-5">
                                            {{ $description }}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12" style="margin: 1.5rem 0"></div>
                                <div class="col-12" style="margin-top: -0.5rem !important">
                                    <h3 class="text-muted fs-5 fw-bold mb-0" style="color: var(--primary-color) !important">{{ trans('front.request the service now') }}</h3>
                                    <livewire:store-service-request :service="$service" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @include('site.footer')
