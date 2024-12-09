<div class="row mb-4" style="flex-direction:row !important">
    @foreach ($services as $item)
        {{-- <div class="col-6 col-md-6 col-lg-4 mb-4 mb-lg-5 block__62849">
            <a href="#" {{ $attributes->merge(['class' => 'block__16443 text-center d-block h-100']) }}>
                <span class="custom-icon mx-auto">
                    <img src="{{ asset($item->thumbnail) }}" alt="{{ $item->name }}" width="60">
                </span>
                <h3>{{ $item->title }}</h3>
                <p>{{ $item->description }}</p>
            </a>
        </div> --}}
        <div class="col-10 col-md-5 col-xl-4 mt-4">
            <div class="shadow-sm py-2 px-4 h-100"
                style="background-color: {{ $loop->iteration % 2 == 0 ? '#001f4233' : '#30a89026' }}">
                <div class="row gy-4">
                    <div class="col-12 col-lg-2">
                        <img src="{{ asset($item->thumbnail) }}" alt="{{ $item->name }}" width="60">
                    </div>
                    <div class="col-12 col-lg-10 text-decoration-none">
                        <h4 class="mb-3">{{ $item->title }}</h4>
                        <p class="mb-2 text-secondary">{{ $item->description }}</p>
                    </div>
                    <div class="col-12 mb-3">
                        <a href="{{ route('services.request', $item) }}"
                            class="border text-primary py-2 px-3 rounded-1 fw-bold"
                            style="border-color: var(--primary-color) !important; font-size:14px">اطلب الان</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
