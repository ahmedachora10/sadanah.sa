<div class="row">
    @foreach ($feeds as $feed)
    <div class="col-4">
        <a href="{{$feed['permalink']}}" target="_blank">
            <div class="image-insta">
                <img src="{{$feed['image']}}"
                    alt="" />
                <div class="icon-insta">
                    <i class="fab fa-instagram"></i>
                </div>
            </div>
        </a>
    </div>
    @endforeach
</div>
