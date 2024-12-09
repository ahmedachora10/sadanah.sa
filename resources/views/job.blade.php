<x-front-layout>
    <x-theme.sections.breadcrumb image="theme/img/breadcrumb/bradcrumb-14.jpg" title="front.job request" />

    <section class="tp-contact-area ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tp-contact-wrapper mb-120">
                        <h3 class="tp-contact-title">{{ ucwords(trans('new job request'))}}</h3>
                        <div class="tp-contact-input-form">
                            <div class="row">
                                <livewire:store-job-request />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @push('component-styles')
        <link rel="stylesheet" href="{{asset('theme/css/nice-select.css')}}">
    @endpush
</x-front-layout>
