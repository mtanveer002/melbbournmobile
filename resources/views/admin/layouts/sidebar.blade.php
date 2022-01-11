<!-- BEGIN: Main Menu-->

<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item">
                <a href="/dashboard">
                    <i class="la la-home"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">
                        Dashboard
                    </span>
                </a>
            </li>
            <li class=" nav-item">
                <a href="{{ route('admin.brands.index')}}">
                    <i class="la la-android"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">
                        Brands
                    </span>
                </a>
            </li>
            <li class=" nav-item">
                <a href="{{route('admin.modals.index')}}">
                    <i class="la la-android"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">
                        Modals
                    </span>
                </a>
            </li>
            <li class=" nav-item">
                <a href="{{route('admin.issues.index')}}">
                    <i class="la la-mobile"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">
                        All Issues
                    </span>
                </a>
            </li>
            <li class=" nav-item">
                <a href="{{route('admin.inquery.index')}}">
                    <i class="la la-bullhorn"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">
                        All inqueries
                    </span>
                </a>
            </li>
            <li class=" nav-item">
                <a href="{{route('admin.leads.index')}}">
                    <i class="la la-bullhorn"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">
                        Leads
                    </span>
                </a>
            </li>
        </ul>
    </div>
</div>


<!-- END: Main Menu-->