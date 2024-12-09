<x-front-layout>
    <x-theme.sections.breadcrumb image="theme/img/breadcrumb/bradcrumb-14.jpg" title="new review" />

    <section class="tp-contact-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tp-contact-wrapper mb-120">
                        <h3 class="tp-contact-title">{{ ucwords(trans('add new reviews'))}}</h3>

                        <div class="tp-contact-input-form">
                            <div class="row">
                                @if (session('success'))
                                <div class="col-12">
                                    <span class="d-block mb-3 alert bg-primary text-white">{{ session('success') }}</span>
                                </div>
                                @endif
                                <form action="{{ route('reviews.store') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="rate" id="rating">

                                    <div class="mb-3 mt-3 col-12">
                                        <div id="rateYo"></div>
                                        <x-dashboard.error field="rate" />
                                    </div>

                                    <div class="col-12 mt-3">
                                        <x-theme.form.input-group type="text" :placeholder="trans('table.columns.name')" name="name" />
                                    </div>

                                    <div class="col-12">
                                        <x-theme.form.text-area :placeholder="trans('table.columns.comment')" name="comment"
                                            cols="10" rows="6">
                                            <x-dashboard.error field="comment" />
                                        </x-theme.form.text-area>
                                    </div>

                                    <div class="col-12">
                                        <div class="tp-contact-btn">
                                            <button class="tp-btn" type="submit" wire:click="save">{{ trans('send') }}</button>
                                            <p class="ajax-response"></p>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @push('component-styles')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
    @endpush

    @push('component-scripts')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
    @endpush
    @push('scripts')
        <script defer>
            $("#rateYo").rateYo({
                        normalFill: "#A0A0A0",
                        rtl: true,
                        maxValue: 5
                    });

                    $("#rateYo").click(function() {
                        const rating = $("#rateYo").rateYo("option", "rating");

                        $('#rating').val(rating);

                    });
        </script>
    @endpush
</x-front-layout>
