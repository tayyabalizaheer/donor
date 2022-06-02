<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        {{-- <a href="{{ route('dashboard') }}" class="app-brand-link">
            <img class="app-brand-logo demo" src="{{ assets('images/logo.png') }}" alt="">
        </a> --}}

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item">
            <a href="{{ route('dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <li class="menu-item" style="">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="User Settings">Project</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('project.index','new') }}" class="menu-link">
                        <div data-i18n="Login Pages">New</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('project.index','on-going') }}" class="menu-link">
                        <div data-i18n="Login Pages">On Going</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('project.index','completed') }}" class="menu-link">
                        <div data-i18n="Login Pages">Completed</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Settings</span>
        </li>
        <li class="menu-item" style="">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="User Settings">User Settings</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('users') }}" class="menu-link">
                        <div data-i18n="All User">All User</div>
                    </a>
                </li>
            </ul>
        </li>



    </ul>
</aside>
