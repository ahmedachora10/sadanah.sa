<div class="tp-team-7-item p-relative text-center mb-30">
    <div class="tp-team-7-thumb">
        <img width="160" height="160" class="lazy" src="{{asset('theme/img/loading.webp')}}" data-src="{{asset($member->thumbnail)}}" alt="">
    </div>
    <div class="tp-team-7-content">
        <h4 class="tp-team-7-title"><a href="#!">{{$member->name}}</a></h4>
        <span>{{$member->job_name}}</span>
    </div>
    <div class="tp-team-7-social">
        @if(!empty($member->twitter))
            <a href="{{$member->twitter}}" target="_blank">
                <x-x-twitter width="15px" fill="#000" style="position: relative; top:-2px" />
            </a>
        @endif
        @if(!empty($member->linkedin))
            <a href="{{$member->linkedin}}" target="_blank"><i class="fa-brands fa-linkedin mx-2"></i></a>
        @endif
    </div>
</div>
