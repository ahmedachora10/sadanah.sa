@include('site.header')

<!-- ==================== End Navbar ==================== -->

<div id="smooth-content">
    <main class="main-bg">
        <!-- ==================== Start Slider ==================== -->

        <header class="page-header bg-img section-padding" data-background="assets/imgs/header/bg1.jpg"
            data-overlay-dark="9">
            <div class="container pt-100">
                <div class="text-center">
                    <h1 data-i18n="jobs"></h1>
                    <div class="mt-15">
                        <a href="{{route('home')}}">{{__('front.home')}}</a>
                        <span class="padding-rl-20">|</span>
                        <span style="color: var(--primary-color)" data-i18n="jobs">{{ trans('front.influencers') }}</span>
                    </div>
                </div>
            </div>
        </header>

        <!-- ==================== End Slider ==================== -->

        <!-- ==================== Start Blog ==================== -->

        <section class="blog section-padding">
            <div class="container">
                <div class="row xlg-marg">

                </div>
            </div>
        </section>
    </main>
    @include('site.footer')
