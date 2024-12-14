@include('site.header')

<div id="smooth-content">
    <main class="main-bg">
        {{$slot}}
    </main>
    @include('site.footer')
