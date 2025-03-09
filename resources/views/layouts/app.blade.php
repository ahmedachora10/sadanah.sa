<!DOCTYPE html>
{{-- light-style --}}
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    class="{{ session('theme', 'light') }}-style  layout-menu-fixed"
    dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}" data-theme="theme-default" data-admin-assets-path="../admin-assets/"
    data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8">

    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="" />
    <title>{{ setting('app_name_'.app()->getLocale()) }} {{ @$title }}</title>


    <!-- Favicon -->
    <link rel="icon" type="image/x-icon"
        href="{{ asset(setting('icon')) ?? asset('admin-assets/img/favicon/favicon.ico') }}" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ asset('admin-assets/vendor/fonts/boxicons.css') }}" />
    <link href="{{ asset('admin-assets/fontawesome/fontawesome.css') }}" rel="stylesheet">
    <link href="{{ asset('admin-assets/fontawesome/brands.css') }}" rel="stylesheet">
    <link href="{{ asset('admin-assets/fontawesome/solid.css') }}" rel="stylesheet">

    <!-- Core CSS -->

    @if (app()->getLocale() == 'ar')
        {{-- <link rel="stylesheet" href="{{ asset('admin-assets/css/rtl.css') }}"> --}}
        <style>
            .light-style .dropzone {
                border: 2px dashed #d9dee3;
            }
        </style>
        @if (session('theme') == 'dark')
            <link rel="stylesheet" href="{{ asset('admin-assets/vendor/css/dark-core.css') }}"
                class="template-customizer-core-css" />

            <link rel="stylesheet" href="{{ asset('admin-assets/vendor/css/theme-default-dark.css') }}"
                class="template-customizer-theme-css">
        @else
            <link rel="stylesheet" href="{{ asset('admin-assets/vendor/css/rtl/core.css') }}"
                class="template-customizer-core-css" />
            <link rel="stylesheet" href="{{ asset('admin-assets/vendor/css/rtl/theme-default.css') }}"
                class="template-customizer-theme-css">
        @endif


        <style>
            .phone-number {
                direction: ltr !important;
                text-align: right;
            }
        </style>
    @else
        @if (session('theme') == 'dark')
            <link rel="stylesheet" href="{{ asset('admin-assets/vendor/css/dark-core.css') }}"
                class="template-customizer-core-css" />

            <link rel="stylesheet" href="{{ asset('admin-assets/vendor/css/theme-default-dark.css') }}"
                class="template-customizer-theme-css">
        @else
            <link rel="stylesheet" href="{{ asset('admin-assets/vendor/css/core.css') }}"
                class="template-customizer-core-css" />
            <link rel="stylesheet" href="{{ asset('admin-assets/vendor/css/theme-default.css') }}"
                class="template-customizer-theme-css" />
        @endif
    @endif


    <link rel="stylesheet" href="{{ asset('admin-assets/css/demo.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin-assets/css/bs-stepper.css') }}" />
    {{-- <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" /> --}}
    {{-- <link rel="stylesheet" href="{{ asset('admin-assets/vendor/libs/dropzone/basic.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin-assets/vendor/libs/dropzone/dropzone.css') }}" /> --}}
    {{-- <link rel="stylesheet" href="{{ asset('admin-assets/vendor/libs/dropzone/custom-dropzone.css') }}" /> --}}

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('admin-assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

    <link rel="stylesheet" href="{{ asset('admin-assets/vendor/libs/apex-charts/apex-charts.css') }}" />

    <link rel="stylesheet" href="{{ asset('admin-assets/vendor/libs/quill/typography.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin-assets/vendor/libs/quill/katex.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin-assets/vendor/libs/quill/editor.css') }}" />

    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
    <link rel="stylesheet" href="{{ asset('admin-assets/vendor/libs/dropzone/custom-dropzone.css') }}" />

    @stack('component-styles')

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ asset('admin-assets/vendor/js/helpers.js') }}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('admin-assets/js/config.js') }}"></script>

    <!-- Scripts -->
    {{-- @vite('resources/css/app.css') --}}


    @stack('styles')

    @livewireStyles
</head>

<body class="font-sans antialiased">

    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

            <!-- sidebar -->
            @include('layouts.admin.sidebar')
            <!-- / sidebar -->

            <!-- Layout container -->
            <div class="layout-page">

                <!-- Navbar -->
                @include('layouts.admin.navbar')
                <!-- / Navbar -->

                <div class="content-wrapper">

                    <!-- Content -->
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <x-dashboard.alert />
                        <livewire:dashboard.alert />

                        {{ $slot }}
                    </div>
                    <!-- / Content -->


                    <!-- Footer -->
                    @include('layouts.admin.footer')
                    <!-- / Footer -->

                    <div class="layout-overlay layout-menu-toggle"></div>

                </div>

            </div>
            <!-- / Layout container -->

        </div>
    </div>

    <!-- Core JS -->
    <!-- build:js admin-assets/vendor/js/core.js -->
    <script src="{{ asset('admin-assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('admin-assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('admin-assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('admin-assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('admin-assets/vendor/js/menu.js') }}"></script>
    {{-- <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script> --}}
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('admin-assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <!-- Main JS -->
    <script src="{{ asset('admin-assets/js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('admin-assets/js/dashboards-analytics.js') }}"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <!-- <script async defer src="https://buttons.github.io/buttons.js"></script> -->

    <script src="{{ asset('admin-assets/vendor/libs/quill/katex.js') }}"></script>
    <script src="{{ asset('admin-assets/vendor/libs/quill/quill.js') }}"></script>

    @stack('component-scripts')

    {{-- @vite('resources/js/app.js') --}}
    <script src="{{ asset('build/admin-assets/app2.js') }}"></script>

    @stack('scripts')

    @livewireScripts
    <script src="{{ asset('admin-assets/js/uploader.js') }}"></script>
    <script defer>

        document.addEventListener('DOMContentLoaded', () => {
                document.querySelectorAll('.bx.bx-clipboard').forEach(element => {
                    element.addEventListener('click', () => {
                        const contentToCopy = element.getAttribute('data-copy');
                        if (contentToCopy) {
                            navigator.clipboard.writeText(contentToCopy).then(() => {
                                element.classList.add('text-success');
                                element.classList.add('bx-check-square');
                                element.classList.remove('bx-clipboard');
                                element.classList.add('fs-4');

                                setTimeout(() => {
                                    element.classList.remove('text-success');
                                    element.classList.remove('fs-4');
                                    element.classList.remove('bx-check-square');
                                    element.classList.add('bx-clipboard');
                                }, 800);
                            }).catch(err => {
                                console.error('Could not copy text: ', err);
                            });
                        }
                    });
                });
            });

        Livewire.on('close-modal', ({
            target
        }) => $(target ? target : '.modal').modal('hide'));

        Livewire.on('open-modal', ({
            target
        }) => {
            $(target ? target : '.modal').modal('show');
        });

        Livewire.directive('confirm', ({
            el,
            directive,
            component,
            cleanup
        }) => {
            let content = directive.expression

            // The "directive" object gives you access to the parsed directive.
            // For example, here are its values for: wire:click.prevent="deletePost(1)"
            //
            // directive.raw = wire:click.prevent
            // directive.value = "click"
            // directive.modifiers = ['prevent']
            // directive.expression = "deletePost(1)"

            let onClick = e => {
                if (!confirm(content)) {
                    e.preventDefault()
                    e.stopImmediatePropagation()
                }
            }

            el.addEventListener('click', onClick, {
                capture: true
            })

            // Register any cleanup code inside `cleanup()` in the case
            // where a Livewire component is removed from the DOM while
            // the page is still active.
            cleanup(() => {
                el.removeEventListener('click', onClick)
            })
        });

        // console.log('test');
        // if ($('.editor').length) {
        //     quillRegister();
        // }

        // function quillRegister() {
        //     const quill = new Quill('.editor', {
        //         theme: 'snow'
        //     });

        //     quill.on('text-change', function() {

        //         if (quill.getText() === '\n') return false;

        //         // $('.editor-content').html($('.editor').html());
        //         $('.editor-content').val($('.ql-editor').html());

        //     });

        // }

        // $(window).on('mouseout', (function() {
        //     window.onbeforeunload = closingPage;
        // }));

        // $(window).on('mouseover', (function() {
        //     window.onbeforeunload = null;
        // }));

        // function closingPage(event) {
        //     $.ajax({
        //         type: "POST",
        //         url: "{{ route('logout') }}",
        //         headers: {
        //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        //         }
        //     });
        // }
    </script>

</body>

</html>
