<x-front-layout>
    <x-theme.sections.hero-section :sliders="$sliders" />
    <div class="pb-100"></div>
    <x-theme.sections.our-blog :visions="$visions" />
    {{-- <x-theme.margin /> --}}
    <x-theme.sections.about />
    <x-theme.sections.services :services="$ourServices" />
    <x-theme.margin />
    <x-theme.sections.why-us />
    <x-theme.sections.faq />
    <x-theme.sections.video />
    {{-- <x-theme.margin /> --}}
    <x-theme.sections.works />
    <x-theme.sections.testimonials />
    <x-theme.sections.statistics />
    <x-theme.margin />
    <x-theme.sections.our-clients />
    <x-theme.sections.our-team  />
    {{-- <x-theme.margin /> --}}
    <x-theme.sections.contact />
</x-front-layout>
