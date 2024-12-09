@include('site.header')


        <div id="smooth-content">

            <main class="main-bg">



                <!-- ==================== Start Header ==================== -->

                <header class="page-header bg-img section-padding" data-background="assets/imgs/header/bg1.jpg"
                    data-overlay-dark="9">
                    <div class="container pt-100">
                        <div class="text-center">
                            <h1 class="fz-100 text-u" data-i18n="Team">{{__('front.Influencers')}}</h1>
                            <div class="mt-15">
                                <a href="{{route('home')}}" data-i18n="home">{{__('front.home')}}</a>
                                <span class="padding-rl-20">|</span>
                                <span style="color: var(--primary-color);" data-i18n="team"></span>
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
                                        <a href="{{route('influencers.details',['id'=>$inf->id])}}">
                                        <div class="info">
                                            <span class="fz-12">
                                                @if (session()->get('lang') == 'ar')
                                                {{$inf->job_name_ar}}
                                                @else  
                                                {{$inf->job_name_en}}
                                                @endif
                                            </span>
                                            <h6 class="fz-18">
                                                @if (session()->get('lang') == 'ar')
                                                {{$inf->name_ar}}
                                                @else  
                                                {{$inf->name_en}}
                                                @endif
                                            </h6>
                                        </div>
                                    </a>

                                    </div>
                                    <div class="social">
                                        <div class="links">
                                            <a href="{{$inf->snapchat}}" target="_blank">
                                                <i class="fab fa-snapchat"></i>
                                            </a>
                                            <a href="{{$inf->x}}" target="_blank">
                                                <i class="fa-brands fa-x-twitter"></i>
                                            </a>
                                            <a href="{{$inf->instagram}}" target="_blank">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                            <a href="{{$inf->tiktok}}" target="_blank">
                                                <i class="fab fa-tiktok"></i>
                                            </a>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>  
                            @endforeach
                         
                  
                            </div>
                        </div>
                    </div>
                </section>

                <!-- ==================== End Team ==================== -->



            </main>



            @include('site.footer')
