<!-- project area start -->
<section class="tp-project-area tp-project-bottom-color p-relative pt-170" id="works">
    <div class="tp-project-text">
        <h4 class="tp-home-2-section-text">{{ strtoupper(trans('projects'))}}</h4>
    </div>
    <div class="tp-project-2-shape">
        <img src="{{asset('theme/img/project/home-2/project-2-shape.png')}}" alt="">
    </div>
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-6">
                <div class="tp-project-title-wrapper mb-70">
                    <x-theme.headline key="work" />
                </div>
            </div>
            <div class="col-lg-6">
                <div class="tp-project-tab-button masonary-menu d-flex justify-content-xl-end flex-wrap mb-70">
                    <button class="active" data-filter="*"><span>{{ucwords(trans('all'))}}</span></button>
                    @foreach ($tags as $tag)
                        @continue($tag->works_exists < 1)
                        <button data-filter=".cat{{$tag->id}}"><span>{{$tag->name}}</span></button>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row grid">
            @foreach ($works as $item)
            <div class="col-lg-4 col-md-6 grid-item cat{{$item->tag_id}}">
                <div class="tp-project-item p-relative fix mb-30">
                    <div class="tp-project-thumb p-relative fix">
                        <a href="{{route('works.show', $item)}}">
                            <img width="370" height="438" class="lazy" src="{{asset('theme/img/loading.webp')}}" data-src="{{$item->thumbnail}}" alt="">
                        </a>
                    </div>
                    <div class="tp-project-item-content p-relative">
                        <span>{{$item?->tag?->name}}</span>
                        <h4 class="tp-project-item-title"><a href="{{route('works.show', $item)}}" title="{{$item->description}}">{{str($item->description)->limit(90)}}</a></h4>
                        <div class="tp-project-item-btn">
                            <a href="{{route('works.show', $item)}}">
                                <span>
                                    <i class="fa-regular fa-plus"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- project area end -->
