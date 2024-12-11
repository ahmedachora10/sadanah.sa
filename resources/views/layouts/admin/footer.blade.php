<!-- Footer -->
<footer class="content-footer footer bg-footer-theme">
    <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
        <div class="mb-2 mb-md-0">

            {{-- {{ setting('footer') }}
            ©{{ date('Y') }} --}}

            {{-- مصمم بـ ♥ بواسطة <a href="https://www.sadnah.sa" class="text-primary fw-bold" target="_blank">شركة
                سدنة</a>، جميع
            الحقوق محفوظة لشركة
            سدن التجارية {{ date('Y') }} --}}

            @if (app()->getLocale() == 'ar')
            <p class="fz-14">
                جميع الحقوق محفوظة لشركة
                <span class="underline" style="color: var(--primary-color)">
                    <img src="{{asset('assets/imgs/logo-light.png')}}" alt="سدنه" style="height: 20px; vertical-align: middle;">
                </span>
                {{date('Y')}}
            </p>
            @else
            <p class="fz-14">

                All rights reserved to the company
                <span class="underline" style="color: var(--primary-color)">
                    Sadnah
                </span>
                {{date('Y')}}
            </p>
            @endif
        </div>
    </div>
</footer>
