<!-- Sidebar -->
<div class="sidebar" data-color="orange" data-background-color="white">
    <!-- Brand Logo -->
    <div class="logo">
        <a href="#" class="simple-text logo-normal">
            {{ trans('panel.site_title') }}
        </a>
    </div>

    <!-- Sidebar Menu -->
    <div class="sidebar-wrapper">
        <ul class="nav" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{ route("admin.home") }}" class="nav-link">
                    <p>
                        <i class="fas fa-fw fa-tachometer-alt">

                        </i>
                        <span>{{ trans('global.dashboard') }}</span>
                    </p>
                </a>
            </li>
            @can('mainMenu_access')
                <li class="nav-item">
                    <a href="{{ route("admin.main-menu.index") }}" class="nav-link">
                        <p>
                            <i class="fas fa-fw fa-bars">

                            </i>
                            <span>{{ trans('cruds.menu.navigation') }}</span>
                        </p>
                    </a>
                </li>
            @endcan
            @can('slider_access')
                <li class="nav-item">
                    <a href="{{ route("admin.sliders.index") }}" class="nav-link">
                        <p>
                            <i class="fas fa-fw fa-spinner fa-spin">

                            </i>
                            <span>{{ trans('cruds.slider.navigation') }}</span>
                        </p>
                    </a>
                </li>
            @endcan
            @can('user_management_access')
                <li class="nav-item has-treeview {{ request()->is('admin/permissions*') ? 'menu-open' : '' }} {{ request()->is('admin/roles*') ? 'menu-open' : '' }} {{ request()->is('admin/users*') ? 'menu-open' : '' }}">
                    <a class="nav-link" data-toggle="collapse" href="#user_management">
                        <i class="fa-fw fas fa-users">

                        </i>
                        <p>
                            <span>{{ trans('cruds.userManagement.title') }}</span>
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse hide" id="user_management">
                        <ul class="nav">
                            @can('permission_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                                        <i class="fa-fw fas fa-unlock-alt">

                                        </i>
                                        <span>{{ trans('cruds.permission.title') }}</span>
                                    </a>
                                </li>
                            @endcan
                            @can('role_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                                        <i class="fa-fw fas fa-briefcase">

                                        </i>
                                        <span>{{ trans('cruds.role.title') }}</span>
                                    </a>
                                </li>
                            @endcan
                            @can('user_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                        <i class="fa-fw fas fa-user">

                                        </i>
                                        <span>{{ trans('cruds.user.title') }}</span>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </div>
                </li>
            @endcan

            @can('content_management_access')
                <li class="nav-item has-treeview {{ request()->is('admin/permissions*') ? 'menu-open' : '' }} {{ request()->is('admin/roles*') ? 'menu-open' : '' }} {{ request()->is('admin/users*') ? 'menu-open' : '' }}">
                    <a class="nav-link" data-toggle="collapse" href="#content_management">
                        <i class="fa-fw fas fa-cog">

                        </i>
                        <p>
                            <span>{{ trans('cruds.contentManagement.title') }}</span>
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse hide" id="content_management">
                        <ul class="nav">
                            @can('content_management_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.index-cms.index") }}" class="nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                                        <i class="fa-fw fas fa-book">

                                        </i>
                                        <span>Home/Index Page</span>
{{--                                        <span>{{ trans('cruds.permission.title') }}</span>--}}
                                    </a>
                                </li>
                            @endcan
                                @can('content_management_access')
                                    <li class="nav-item">
                                        <a href="{{ route("admin.aboutus.index") }}" class="nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                                            <i class="fa-fw fas fa-users-cog">

                                            </i>
                                            <span> About Us Page </span>
                                            {{--                                        <span>{{ trans('cruds.permission.title') }}</span>--}}
                                        </a>
                                    </li>
                                @endcan
                            @can('content_management_access')
                                    <li class="nav-item has-treeview {{ request()->is('admin/permissions*') ? 'menu-open' : '' }} {{ request()->is('admin/roles*') ? 'menu-open' : '' }} {{ request()->is('admin/users*') ? 'menu-open' : '' }}">
                                        <a class="nav-link" data-toggle="collapse" href="#about_us">
                                            <i class="fa-fw fas fa-address-card">

                                            </i>
                                            <p>About Us
                                                <b class="caret"></b>
                                            </p>
                                        </a>
                                        <div class="collapse hid" id="about_us">
                                            <ul class="nav">
                                                <li class="nav-item">
                                                    <a href="{{ route("admin.about-us-principals-welcome.index") }}" class="nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                                                        <i class="fa-fw fas fa-road">

                                                        </i>
                                                        <span>Principal's Welcome</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="{{ route("admin.about-us-history.index") }}" class="nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                                                        <i class="fa-fw fas fa-history">

                                                        </i>
                                                        <span>Our History</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="{{ route("admin.about-us-mission-vision.index") }}" class="nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                                                        <i class="fa-fw fas fa-signal">

                                                        </i>
                                                        <span>Our Mission & Vision</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="{{ route("admin.about-us-leadership.index") }}" class="nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                                                        <i class="fa-fw fas fa-heartbeat">

                                                        </i>
                                                        <span> Leadership</span>
                                                    </a>
                                                </li>
                                            </ul>

                                        </div>

                                </li>
                            @endcan
                            @can('content_management_access')
                                    <li class="nav-item">
                                        <a href="{{ route("admin.admission.index") }}" class="nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                                            <i class="fa-fw fas fa-chalkboard-teacher">

                                            </i>
                                            <span>Admission</span>
                                            {{--                                        <span>{{ trans('cruds.permission.title') }}</span>--}}
                                        </a>
                                    </li>
                                @endcan
                            @can('content_management_access')
                                <li class="nav-item">
                                        <a href="{{ route("admin.emis.index") }}" class="nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                                            <i class="fa-fw fas fa-user-shield">

                                            </i>
                                            <span>BLOOMBREED EMIS</span>
                                            {{--                                        <span>{{ trans('cruds.permission.title') }}</span>--}}
                                        </a>
                                    </li>
                            @endcan
                        </ul>
                    </div>
                </li>
            @endcan
            <li class="nav-item">
                <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <p>
                        <i class="fas fa-fw fa-sign-out-alt">

                        </i>
                        <span>{{ trans('global.logout') }}</span>
                    </p>
                </a>
            </li>
        </ul>
    </div>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
