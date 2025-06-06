@php
    $notifications = collect(auth()->user()?->unreadNotifications)->pluck('data');
    $servicesRequestsCount = $notifications->where('type', 'App\Models\ServiceRequest')->count();
    $jobsRequestsCount = $notifications->where('type', 'App\Models\JobRequest')->count();
    $contactsCount = $notifications->where('type', 'App\Models\ContactUs')->count();
    $influencersRequestsCount = $notifications->where('type', 'App\Models\InfluencerJoinRequest')->count();
    $commentsCount = $notifications->where('type', 'App\Models\Comment')->count();
    $questionnaireCount = $notifications->where('type', 'App\Models\Questionnaire')->count();
@endphp

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme" data-bg-class="bg-menu-theme">
    <div class="app-brand demo d-flex align-items-center justify-content-center">
        <img src="{{ asset('assets/imgs/logo.png') }}" alt="Logo" width="120" height="auto">

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1 ps ps--active-y">

        @hasPermission('dashboard-show')
        <x-dashboard.sidebar.link :title="trans('sidebar.dashboard')" icon="home-circle" :link="route('dashboard')" />
        @endhasPermission

        @hasPermission('user-show|setting-show')
        <x-dashboard.sidebar.link-head>
            <span>{{ trans('sidebar.all settings') }}</span>
        </x-dashboard.sidebar.link-head>
        @endhasPermission

        @hasPermission('user-show|role-show|setting-show')
        <x-dashboard.sidebar.link :title="trans('sidebar.settings')" icon="cog" link="#" :hasSubMenu="true">
            @hasPermission('user-show')
            <x-dashboard.sidebar.link :title="trans('sidebar.users')" :link="route('users.index')" />
            @endhasPermission

            @hasPermission('role-show')
            <x-dashboard.sidebar.link :title="trans('sidebar.roles')" :link="route('roles.index')" />
            @endhasPermission

            @hasPermission('setting-show')
            <x-dashboard.sidebar.link :title="trans('sidebar.general settings')" :link="route('settings.index')" />
            @endhasPermission

            @hasPermission('slider-show')
            <x-dashboard.sidebar.link :title="trans('sidebar.sliders')" :link="route('sliders.edit',1)" />
            @endhasPermission
            <x-dashboard.sidebar.link :title="trans('sidebar.our clients')" :link="route('our-clients.index')" />
            <x-dashboard.sidebar.link :title="trans('sidebar.statistics')" :link="route('statistics.index')" />
            {{-- <x-dashboard.sidebar.link :title="trans('sidebar.headlines')" :link="route('headlines.index')" /> --}}
        </x-dashboard.sidebar.link>
        @endhasPermission

        @hasPermission('job-show|job_request-show')
        <x-dashboard.sidebar.link :title="trans('sidebar.jobs')" icon="server" link="#" :hasSubMenu="true"
        :notification="$jobsRequestsCount">
            @hasPermission('job_request-show')
            <x-dashboard.sidebar.link :title="trans('sidebar.job requests')" :link="route('job-requests.index')" :notification="$jobsRequestsCount" />
            @endhasPermission
            @hasPermission('job-show')
            <x-dashboard.sidebar.link :title="trans('sidebar.jobs')" :link="route('jobs.index')" />
            @endhasPermission
            <x-dashboard.sidebar.link :title="trans('sidebar.cities')" :link="route('job-cities.index')" />
        </x-dashboard.sidebar.link>
        @endhasPermission

        {{-- <x-dashboard.sidebar.link :title="trans('sidebar.subscribers')" icon="user" :link="route('subscribers.index')" /> --}}
        {{-- <x-dashboard.sidebar.link :title="trans('sidebar.services')" icon="server" :link="route('services.index')" /> --}}
        <x-dashboard.sidebar.link :title="trans('sidebar.services')" icon="category" :link="route('our-services.index')" />
        <x-dashboard.sidebar.link :title="trans('sidebar.service requests')" icon="git-pull-request" :link="route('services.requests')" :notification="$servicesRequestsCount" />
        <x-dashboard.sidebar.link :title="trans('sidebar.our works')" icon="briefcase" :link="route('our-works.index')" />
        <x-dashboard.sidebar.link :title="trans('sidebar.our team')" icon="briefcase" :link="route('our-team.index')" />
        <x-dashboard.sidebar.link :title="trans('sidebar.sections')" icon="briefcase" :link="route('tags.index')" />
        {{-- <x-dashboard.sidebar.link :title="trans('sidebar.support')" icon="paper-plane" :link="route('support.index')" /> --}}
        <x-dashboard.sidebar.link :title="trans('sidebar.contact us')" icon="user-pin" :link="route('contact-us.index')" :notification="$contactsCount" />
        <x-dashboard.sidebar.link :title="trans('sidebar.visions')" icon="user-pin" :link="route('visions.index')" />
        <x-dashboard.sidebar.link :title="trans('sidebar.faq')" icon="user-pin" :link="route('faq.index')" />
        @hasPermission('influencer-show')
        <x-dashboard.sidebar.link :title="trans('sidebar.team')" icon="server" link="#" :hasSubMenu="true"
            :notification="$influencersRequestsCount">
            <x-dashboard.sidebar.link :title="trans('sidebar.team')" :link="route('team.index')" />
            <x-dashboard.sidebar.link :title="trans('sidebar.join requests')" icon="user-pin" :link="route('team.requests')" />
        </x-dashboard.sidebar.link>
        @endhasPermission
        <x-dashboard.sidebar.link :title="trans('sidebar.about us')" icon="user-pin" :link="route('about-us.index')" />
        <x-dashboard.sidebar.link :title="trans('sidebar.reviews')" icon="star" :link="route('reviews.index')" />
        <x-dashboard.sidebar.link :title="trans('sidebar.why us')" icon="star" :link="route('why-us.index')" />
        @hasPermission('blog-show')
        <x-dashboard.sidebar.link :title="trans('sidebar.blogs')" icon="server" link="#" :hasSubMenu="true" :notification="$commentsCount">
            <x-dashboard.sidebar.link :title="trans('sidebar.blogs')" :link="route('blogs.index')" />
            <x-dashboard.sidebar.link :title="trans('sidebar.comments')" :link="route('comments.index')" :notification="$commentsCount" />
        </x-dashboard.sidebar.link>
        @endhasPermission

        @hasPermission('questionnaire-show')
        <x-dashboard.sidebar.link :title="trans('sidebar.questionnaire')" icon="server" link="#" :hasSubMenu="true"
            :notification="$questionnaireCount">
            <x-dashboard.sidebar.link :title="trans('sidebar.questionnaire')" :link="route('questionnaire.index')" :notification="$questionnaireCount" />
            <x-dashboard.sidebar.link :title="trans('sidebar.logo types')" :link="route('logo-types.index')" />
            <x-dashboard.sidebar.link :title="trans('sidebar.corporate identities')" :link="route('corporate-identities.index')" />
        </x-dashboard.sidebar.link>
        @endhasPermission

        <!-- Misc -->
        {{-- <li class="menu-item">
            <a href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/" target="_blank"
                class="menu-link">
                <i class="menu-icon tf-icons bx bx-file"></i>
                <div data-i18n="Documentation">Documentation</div>
            </a>
        </li> --}}
        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps__rail-y" style="top: 0px; height: 686px; right: 4px;">
            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 528px;"></div>
        </div>
    </ul>
</aside>
