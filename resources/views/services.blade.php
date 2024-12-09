<x-front-layout>
    <div class="py-4"></div>
    <section class="site-section block__62272" id="portfolio-section">
        <div class="container">
            <x-services-section class="bg-light" />
        </div>
    </section>


    @push('scripts')
        <script defer>
            var heroSwiper = new Swiper('.swiper', {
                // Optional parameters
                // direction: 'vertical',
                loop: true,

            });
        </script>
    @endpush
</x-front-layout>
