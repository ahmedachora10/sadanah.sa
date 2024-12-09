<div class="tp-footer-widget tp-footer-7-col-3 mb-50">
    <h3 class="tp-footer-widget-title">Instagram</h3>
    <div class="tp-footer-widget-content">
        <div class="tp-footer-widget-gallery-all">
            @foreach ($feeds as $feed)
            <div class="tp-footer-widget-gallery-single-item">
                <a href="{{$feed['permalink']}}" class="tp-footer-widget-gallery-item" target="_blank">
                    <div class="tp-footer-widget-gallery-thumb">
                        <img width="74" height="74" src="{{$feed['image']}}" alt="">
                        <div class="tp-footer-widget-gallery-social">
                            <i class="fa-brands fa-instagram"></i>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>
