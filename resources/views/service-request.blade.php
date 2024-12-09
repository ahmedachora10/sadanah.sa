<x-front-layout>
    <x-theme.sections.breadcrumb image="theme/img/breadcrumb/bradcrumb-14.jpg" title="new review" />

    <section class="tp-contact-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tp-contact-wrapper mb-120">
                        <h3 class="tp-contact-title">{{ ucwords(trans('add new request'))}} "{{ $service->title }}"</h3>

                        <div class="tp-contact-input-form">
                            <livewire:store-service-request :service="$service" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-front-layout>
