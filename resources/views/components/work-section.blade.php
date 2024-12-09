@php
    $images = $item->getMedia('works');
@endphp
<section class="tp-portfolio-details-area pt-120 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tp-portfolio-details-wrapper">
                    {{-- <h3 class="tp-portfolio-details-title">You can dream, create, build <br> the most wonderful place in
                        the world.</h3> --}}
                    <div class="tp-portfolio-details-wrap">
                        <ul class="d-flex justify-content-center">
                            <li class="mb-20">
                                <span>{{ trans('table.columns.client name') }}:</span>{{ $item->client_name }}</li>
                            <li class="mb-20">
                                <span>{{ trans('table.columns.start date') }}:</span>{{ $item->transaction_start_date }}
                            </li>
                            <li class="mb-20">
                                <span>{{ trans('table.columns.end date') }}:</span>{{ $item->transaction_end_date }}
                            </li>
                            <li class="mb-20">
                                <span>{{ trans('table.columns.duration of work') }}:</span>{{ $item->duration_of_work }}
                            </li>
                        </ul>
                    </div>
                    <h6 class="fw-bold">{{ trans('table.columns.description') }}</h6>
                    <p class="text-1">{{ $item->description }}</p>
                    <div class="tp-portfolio-details-thumb">
                        {{-- <div class="tp-portfolio-slider tp-cursor-point-area">
                            <div class="tp-portfolio-active swiper slider-drag">
                                <div class="swiper-wrapper">
                                    @foreach ($item->getMedia('works') as $img)
                                        <div class="swiper-slide">
                                            <img height="100%" width="100%" src="{{$img->getUrl()}}" alt="">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div> --}}

                        <div class="product__details-thumb-tab mr-70">
                            {{-- <div class="product__details-thumb-content w-img">
                                <div class="tab-content" id="nav-tabContent">
                                    @foreach ($images as $img)
                                        <div @class(['tab-pane fade', 'show active' => $loop->last]) id="nav-{{ $loop->iteration }}"
                                            role="tabpanel" aria-labelledby="nav-{{ $loop->iteration }}-tab">
                                            <img class="lazy" src="{{asset('theme/img/loading.webp')}}" data-src="{{ $img->getUrl() }}" alt="{{ $img->name }}"
                                                style="height: auto !important" loading="lazy">
                                        </div>
                                    @endforeach
                                </div>
                            </div> --}}
                            <div class="product__details-thumb-nav tp-tab">
                                <nav>
                                    <div class=" nav nav-tabs justify-content-sm-start" id="works--gallery" role="tablist">
                                        @foreach ($images as $img)
                                            {{-- <button @class(['nav-link m-1', 'active' => $loop->first]) id="nav-{{ $loop->iteration }}-tab"
                                                data-bs-toggle="tab" data-bs-target="#nav-{{ $loop->iteration }}"
                                                type="button" role="tab"
                                                aria-controls="nav-{{ $loop->iteration }}" aria-selected="true">
                                                <img class="lazy" src="{{asset('theme/img/loading.webp')}}" data-src="{{ $img->getUrl() }}"
                                                    alt="{{ $img->name }}" loading="lazy">
                                            </button> --}}
                                                @php
                                                    $dimensions = $item->getImageDimensions($img);
                                                @endphp
                                                <a href="{{ $img->getUrl() }}" data-pswp-width="{{$dimensions['width']}}"
                                                    data-pswp-height="{{$dimensions['height']}}" target="_blank" class="nav-link m-1">
                                                    <img class="lazy" src="{{asset('theme/img/loading.webp')}}" data-src="{{ $img->getUrl('thumb') }}" />
                                                </a>
                                        @endforeach

                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <h6 class="fw-bold">{{ trans('table.columns.content') }}</h6>
                    <p class="text-2">{!! $item->content !!}</p>
                </div>
            </div>
        </div>
    </div>
</section>
