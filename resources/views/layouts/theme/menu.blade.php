@php($route = !request()->routeIs('home') ? route('home') : '')
<li><a href="{{route('home')}}">{{trans('front.home')}}</a></li>
<li><a href="{{ $route  }}#about">{{trans('front.about')}}</a></li>
<li><a href="{{ $route  }}#works">{{trans('front.our works')}}</a></li>
<li><a href="{{ $route  }}#services">{{trans('front.services')}}</a></li>
<li><a href="{{ $route  }}#clients">{{trans('front.our clients')}}</a></li>
<li><a href="{{route('contact')}}" class="ms-3">{{trans('front.contact us')}}</a></li>

