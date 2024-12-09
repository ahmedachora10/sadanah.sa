<!-- counter area start -->
@if ($statistics->count()  > 0)
    <section class="tp-counter-7-area tp-counter-7-bg-color p-relative">
        <div class="container">
            <div class="tp-counter-7-bg wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s"
                data-background="{{asset('theme/img/statistics.jpg')}}">
                <div class="row">
                    @foreach ($statistics as $item)
                    <div class="col-lg-4 col-md-6">
                        <div class="tp-counter-7-item text-center tp-counter-7-border">
                            <h4 class="tp-counter-7-title"><span class="purecounter"
                                    data-purecounter-duration="{{$loop->iteration}}"
                                    data-purecounter-end="{{$item->count}}"></span>+</h4>
                            <p>{{$item->title}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@else
    <div></div>
@endif
<!-- counter area end -->
