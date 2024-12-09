<!-- faq area start -->
<section class="tp-faq-area p-relative gray-bg pb-120">
    <div class="tp-faq-text">
        <h2 class="tp-faq-text-title">{{headline('faq')->title}}</h2>
    </div>
    <div class="tp-faq-shape">
        <img src="{{asset('theme/img/faq/faq-1-shape.png')}}" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="tp-faq-box pt-100 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">
                    <div class="tp-faq-title-wrapper mb-35">
                        <span class="tp-section-title-pre">{{headline('faq')->title}}</span>
                        <h3 class="tp-section-title">{{headline('faq')->subTitle}}</h3>
                    </div>
                    <div class="tp-faq-wrapper">
                        <div class="accordion" id="accordionExample">
                            @foreach ($faqs as $item)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading{{$loop->iteration}}">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-{{$loop->iteration}}" aria-expanded="true" aria-controls="collapse{{$loop->iteration}}">
                                        {{$item->question}}
                                    </button>
                                </h2>
                                <div id="collapse-{{$loop->iteration}}" @class(['accordion-collapse collapse'])
                                    aria-labelledby="heading{{$loop->iteration}}" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>{{$item->answer}}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="tp-faq-thumb-wrapper wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                    <img width="400px" height="497px" src="{{asset('theme/img/why-us-'. app()->getLocale() .'.jpg')}}" alt="">
                    <span></span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- faq area end -->
