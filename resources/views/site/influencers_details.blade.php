<x-front-layout>
@php
    $lang = app()->getLocale();
    $name = $inf->{'name_' . $lang};
    $jobName = $inf->{'job_name_' . $lang};
    $description = $inf->{'description_' . $lang};
@endphp
        <!-- ==================== Start Team ==================== -->

        <section class="team-single">
            <div class="container-fluid">
                <div class="row xlg-marg">
                    <div class="col-lg-6">
                        <div class="img">
                            <img src="{{ asset('storage/' . $inf->image) }}" alt="" data-speed="0.2"
                                data-lag="0" />
                        </div>
                    </div>
                    <div class="col-lg-6 valign mt-5">
                        <div class="cont">
                            <h1>
                                {{ $name }}
                            </h1>
                            <h6 class="text-u ls1 opacity-8">
                                {{ $jobName }}
                            </h6>
                            <div class="mt-4">
                                {{ $description }}
                            </div>
                            <div class="text main-bg">

                                <div class="social">
                                    <div class="links">
                                        @if ($inf->snapchat)
                                            <a href="{{ $inf->snapchat }}" target="_blank" class="mx-1">
                                                <i class="fab fa-snapchat"></i>
                                            </a>
                                        @endif
                                        @if ($inf->x)
                                            <a href="{{ $inf->x }}" target="_blank" class="mx-1">
                                                <i class="fa-brands fa-x-twitter"></i>
                                            </a>
                                        @endif
                                        <a href="{{ $inf->instagram }}" target="_blank" class="mx-1">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                        @if ($inf->tiktok)
                                            <a href="{{ $inf->tiktok }}" target="_blank" class="mx-1">
                                                <i class="fab fa-tiktok"></i>
                                            </a>
                                        @endif

                                        @if ($inf->whatsapp)
                                            <a href="{{ $inf->whatsapp }}" target="_blank" class="mx-1">
                                                <i class="fab fa-whatsapp"></i>
                                            </a>
                                        @endif

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End Team ==================== -->

        <!-- ==================== Start Skills ==================== -->

        <section class="skills section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="skil-progs md-mb80">
                            @if (app()->getLocale() == 'ar')
                                <h3>{{ __('front.followers') }} <span class="fw-300">{{ __('front.Social') }}</span>
                                </h3>
                            @else
                                <h3>{{ __('front.Social') }} <span class="fw-300">{{ __('front.followers') }}</span>
                                </h3>
                            @endif
                            <p class="fz-13 mt-15">
                                {{ $inf->social_followers_text }}
                            </p>

                            @php
                                $socialMediaPlatforms = [
                                    'x_followers' => __('front.X'),
                                    'snapchat_followers' => __('front.snapchat'),
                                    'tiktok_followers' => __('front.tiktok'),
                                    'instagram_followers' => __('front.instagram'),
                                ];
                            @endphp

                            @foreach ($socialMediaPlatforms as $follower => $platformName)
                                @continue(empty($inf->$follower) || $inf->$follower == 0)
                                <div class="skill-item mt-50">
                                    <h6 class="fz-16 mb-10">{{ $platformName }}: {{ shorten_number($inf->$follower) }}
                                    </h6>
                                    <div class="skill-progress">
                                        <div class="progres" data-value="{{ $inf->$follower }}"></div>
                                    </div>
                                </div>
                            @endforeach
                            {{-- <div class="skill-item mt-30">
                      <h6 class="fz-16 mb-10">{{__('front.snapchat')}}: {{shorten_number($inf->snapchat_followers)}}</h6>
                      <div class="skill-progress">
                        <div class="progres" data-value="{{$inf->snapchat_followers}}"></div>
                      </div>
                    </div>
                    <div class="skill-item mt-30">
                      <h6 class="fz-16 mb-10">{{__('front.tiktok')}}: {{shorten_number($inf->tiktok_followers)}}</h6>
                      <div class="skill-progress">
                        <div class="progres" data-value="{{$inf->tiktok_followers}}"></div>
                      </div>
                    </div>
                    <div class="skill-item mt-30">
                      <h6 class="fz-16 mb-10">{{__('front.instagram')}}: {{shorten_number($inf->instagram_followers)}}</h6>
                      <div class="skill-progress">
                        <div class="progres" data-value="{{$inf->instagram_followers}}"></div>
                      </div>
                    </div> --}}

                        </div>
                    </div>

                </div>
            </div>
        </section>

    @push('styles')
        <style>
            main {
                margin-top: 60px;
            }

            .navbar {
                background: #1a1a1a;
            }
        </style>
    @endpush
</x-front-layout>
