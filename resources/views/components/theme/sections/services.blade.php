<!-- service area start -->
<section class="tp-service-3-area p-relative pt-120 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tp-blog-3-title-wrapper text-center mb-65">
                    <x-theme.headline key="service" />
                </div>
            </div>
            @foreach ($services as $service)
            <div class="col-xl-3 col-sm-6">
                <x-theme.card.service
                    :title="$service->title"
                    :description="$service->description"
                    :image="$service->thumbnail"
                    :link="route('services.request', $service)"
                />
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- service area end -->
