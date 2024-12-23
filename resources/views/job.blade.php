@include('site.header')
<div id="smooth-content">
    <main class="main-bg">
        <!-- ==================== Start Header ==================== -->

        <header class="page-header-cerv bg-img section-padding" data-background="{{asset('assets/imgs/header/job-posting-hiring.jpg')}}"
            data-overlay-dark="4">
            <div class="container pt-100 ontop">
                <div class="text-center">
                    <h1 class="fz-100" data-i18n="Services">{{__('front.jobs')}}</h1>
                    <div class="mt-15">
                        <a href="{{route('home')}}" data-i18n="home">{{__('front.home')}}</a>
                        <span class="padding-rl-20">|</span>
                        <a href="{{route('job')}}" data-i18n="jobs">{{__('front.jobs')}}</a>
                        <span class="padding-rl-20">|</span>
                        <span style="color: var(--primary-color)" data-i18n="job-title">{{$job->title}}</span>
                    </div>
                </div>
            </div>
        </header>


        <section class="services-details section-padding">
            <div class="container">
                <div class="sec-head mb-80">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <livewire:store-job-request :jobPost="$job" />
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main>

    @include('site.footer')
