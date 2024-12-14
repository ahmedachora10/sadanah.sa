@include('site.header')


        <div id="smooth-content">

            <main class="main-bg">



                <!-- ==================== Start Header ==================== -->

                <header class="page-header bg-img section-padding" data-background="assets/imgs/header/bg1.jpg"
                    data-overlay-dark="9">
                    <div class="container pt-100">
                        <div class="text-center">
                            <h1 class="fz-100 text-u" >{{__('front.Influencers')}}</h1>
                            <div class="mt-15">
                                <a href="{{route('home')}}">{{__('front.home')}}</a>
                                <span class="padding-rl-20">|</span>
                                <span style="color: var(--primary-color);">{{__('front.Influencers')}}</span>
                            </div>
                        </div>
                    </div>
                </header>

                <!-- ==================== End Header ==================== -->



                <!-- ==================== Start Team ==================== -->

                <section class="team section-padding pb-60">
                    <div class="container">
                        <div class="row">
                            @foreach ($infs as $inf)
                            <div class="col-lg-4">
                                <div class="item mb-80">

                                    <div class="img">
                                        <img class="img_team_page" src="{{asset('storage/'.$inf->image)}}" alt="">
                                        <a href="{{route('influencers.details',$inf)}}">
                                        <div class="info">
                                            <span class="fz-12">
                                                {{$inf->job_name}}
                                            </span>
                                            <h6 class="fz-18">
                                                {{$inf->name}}
                                            </h6>
                                        </div>
                                    </a>

                                    </div>
                                    <div class="social">
                                        <div class="links">
                                            @if($inf->snapchat)
                                            <a href="{{$inf->snapchat}}" target="_blank">
                                                <i class="fab fa-snapchat"></i>
                                            </a>
                                            @endif
                                            @if($inf->x)
                                            <a href="{{$inf->x}}" target="_blank">
                                                <i class="fa-brands fa-x-twitter"></i>
                                            </a>
                                            @endif
                                            <a href="{{$inf->instagram}}" target="_blank">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                            @if($inf->tiktok)
                                            <a href="{{$inf->tiktok}}" target="_blank">
                                                <i class="fab fa-tiktok"></i>
                                            </a>
                                            @endif

                                            @if($inf->whatsapp)<a href="{{$inf->whatsapp}}" target="_blank"><i class="fab fa-whatsapp"></i></a>@endif

                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach


                            </div>
                        </div>
                        <div class="my-4 d-flex align-items-center justify-content-center">
                            <a href="{{route('influencers.join-request')}}" class="go-more">
                                <span class="text">{{ trans('front.follow them') }}</span>
                                <span class="icon ti-arrow-top-right"></span>
                            </a>
                        </div>
                    </div>
                </section>

                <!-- ==================== End Team ==================== -->



            </main>



            @include('site.footer')
