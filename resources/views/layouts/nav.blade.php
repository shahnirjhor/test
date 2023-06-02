<body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">
    <script>
        NProgress.configure({
            showSpinner: false
        });
        NProgress.start();
    </script>

    <div></div>

    <!-- ====================================
    ——— WRAPPER
    ===================================== -->
    <div class="wrapper">




        <!-- ====================================
          ——— LEFT SIDEBAR WITH OUT FOOTER
        ===================================== -->
        <aside class="left-sidebar bg-sidebar">
            <div id="sidebar" class="sidebar sidebar-with-footer">
                <!-- Application Brand -->
                <div class="app-brand-login">
                    <a href="" title="Leap Frog Dashboard">
                        <img src="{{ asset('logo-1.png') }}" alt="Leap Frog">
                    </a>
                </div>

                <!-- begin sidebar scrollbar -->
                <div class="" data-simplebar style="height: 100%;">
                    <!-- sidebar menu -->
                    <ul class="nav sidebar-inner" id="sidebar-menu">
                        <li class="has-sub active expand">
                            <a class="sidenav-item-link" href="{{ route('home') }}" aria-expanded="false"
                                aria-controls="dashboard">
                                <i class="mdi mdi-view-dashboard-outline"></i>
                                <span class="nav-text">Dashboard</span> </b>
                            </a>
                        </li>

                        <li class="has-sub ">
                            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                data-target="#app" aria-expanded="false" aria-controls="app">
                                <i class="mdi mdi-account-group"></i>
                                <span class="nav-text">Users</span> <b class="caret"></b>
                            </a>

                            <ul class="collapse " id="app" data-parent="#sidebar-menu">
                                <div class="sub-menu">
                                    @canany(['users.index', 'users.create', 'users.edit', 'users.destroy',
                                        'users.update', 'users.store'])
                                        <li class="">
                                            <a class="sidenav-item-link" href="{{ route('all_users') }}">
                                                <span class="nav-text">Users</span>
                                            </a>
                                        </li>
                                    @endcanany
                                    @canany(['roles.index', 'roles.create', 'roles.edit', 'roles.destroy',
                                        'roles.update', 'roles.store'])
                                        <li class="">
                                            <a class="sidenav-item-link" href="{{ route('roles.index') }}">
                                                <span class="nav-text">Roles</span>
                                            </a>
                                        </li>
                                    @endcanany
                                </div>
                            </ul>
                        </li>


                        @canany(['roles.index', 'roles.create', 'roles.edit', 'roles.destroy', 'roles.update',
                            'roles.store'])
                            <li class="has-sub ">
                                <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                    data-target="#components" aria-expanded="false" aria-controls="components">
                                    <i class="mdi mdi-folder-multiple-outline"></i>
                                    <span class="nav-text">Portfolio</span> <b class="caret"></b>
                                </a>

                                <ul class="collapse " id="components" data-parent="#sidebar-menu">
                                    <div class="sub-menu">
                                        @canany(['categories.index', 'categories.create', 'categories.edit',
                                            'categories.destroy', 'categories.update', 'categories.store'])
                                            <li class="">
                                                <a class="sidenav-item-link" href="{{ route('categories.index') }}">
                                                    <span class="nav-text">Categories</span>
                                                </a>
                                            </li>
                                        @endcanany
                                        @canany(['portfolios.index', 'portfolios.create', 'portfolios.edit',
                                            'portfolios.destroy', 'portfolios.update', 'portfolios.store'])
                                            <li class="">
                                                <a class="sidenav-item-link" href="{{ route('portfolios.index') }}">
                                                    <span class="nav-text">Portfolio</span>
                                                </a>
                                            </li>
                                        @endcanany
                                        @canany(['client.index', 'client.create', 'client.edit', 'client.destroy', 'client.update', 'client.store'])
                                            <li class="">
                                                <a class="sidenav-item-link" href="{{ route('client.index') }}">
                                                    <span class="nav-text">Client</span> </b>
                                                </a>
                                            </li>
                                        @endcanany
                                    </div>
                                </ul>
                            </li>
                        @endcanany
                        @canany(['testimonials.index', 'testimonials.create', 'testimonials.edit',
                            'testimonials.destroy', 'testimonials.update', 'testimonials.store'])
                            <li class="has-sub ">
                                <a class="sidenav-item-link" href="{{ route('testimonials.index') }}">
                                    <i class="mdi mdi-comment-account"></i>
                                    <span class="nav-text">Testimonials</span> </b>
                                </a>
                            </li>
                        @endcanany

                        @canany(['libraries.index', 'libraries.create', 'libraries.edit', 'libraries.destroy',
                            'libraries.update', 'libraries.store'])
                            <li class="has-sub ">
                                <a class="sidenav-item-link" href="{{ route('libraries.index') }}">
                                    <i class="mdi mdi-library-books"></i>
                                    <span class="nav-text">Library</span> </b>
                                </a>
                            </li>
                        @endcanany

                        @canany(['career.index'])
                            <li class="has-sub ">
                                <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                    data-target="#career" aria-expanded="false" aria-controls="career">
                                    <i class="mdi mdi-briefcase-check"></i>
                                    <span class="nav-text">Career</span><b class="caret"> </b>
                                </a>
                                <ul class="collapse " id="career" data-parent="#sidebar-menu">
                                    <div class="sub-menu">
                                        @canany(['career.index', 'career.create', 'career.edit', 'career.destroy',
                                            'career.destroy', 'career.store'])
                                            <li class="">
                                                <a class="sidenav-item-link" href="{{ route('career.index') }}">
                                                    <span class="nav-text">Career List</span>
                                                </a>
                                            </li>
                                        @endcanany
                                        @canany(['jobs-applied.index', 'jobs-applied.create', 'jobs-applied.edit',
                                            'jobs-applied.destroy', 'jobs-applied.update', 'jobs-applied.store'])
                                            <li class="">
                                                <a class="sidenav-item-link" href="{{ route('jobs-applied.index') }}">
                                                    <span class="nav-text">Job Applied</span>
                                                </a>
                                            </li>
                                        @endcanany
                                    </div>
                                </ul>
                            </li>
                        @endcanany

                        @canany(['team.index', 'team.create', 'team.edit', 'team.destroy', 'team.update', 'team.store'])
                            <li class="has-sub ">
                                <a class="sidenav-item-link" href="{{ route('team.index') }}">
                                    <i class="mdi mdi-account-supervisor"></i>
                                    <span class="nav-text">Team Members</span> </b>
                                </a>
                            </li>
                        @endcanany

                        {{-- @canany(['blog.index', 'blog.create', 'blog.edit', 'blog.destroy', 'blog.update', 'blog.store'])
                            <li class="has-sub ">
                                <a class="sidenav-item-link" href="{{ route('blog.index') }}">
                                    <i class="mdi mdi-account-supervisor"></i>
                                    <span class="nav-text">Blog</span> </b>
                                </a>
                            </li>
                        @endcanany --}}

                        {{-- @canany(['case-studies.index', 'case-studies.create', 'case-studies.edit', 'case-studies.destroy', 'case-studies.update', 'case-studies.store'])
                            <li class="has-sub ">
                                <a class="sidenav-item-link" href="{{ route('case-studies.index') }}">
                                    <i class="mdi mdi-account-supervisor"></i>
                                    <span class="nav-text">Case Studies</span> </b>
                                </a>
                            </li>
                        @endcanany --}}

                        @canany(['contact.index', 'contact.destroy'])
                            <li class="has-sub ">
                                <a class="sidenav-item-link" href="{{ route('contact.index') }}">
                                    <i class="mdi mdi-contact-mail"></i>
                                    <span class="nav-text">Contact Us</span> </b>
                                </a>
                            </li>
                        @endcanany

                    </ul>
                </div>


            </div>
        </aside>


        <!-- ====================================
        ——— PAGE WRAPPER
        ===================================== -->
        <div class="page-wrapper">

            <!-- Header -->
            <header class="main-header " id="header">
                <nav class="navbar navbar-static-top navbar-expand-lg">
                    <!-- Sidebar toggle button -->
                    <button id="sidebar-toggler" class="sidebar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                    </button>
                    <!-- search form -->
                    <div class="search-form d-none d-lg-inline-block">

                    </div>
                    <a href="{{ route('website.home') }}" class="btn btn-outline-primary bt-sm" target="_blank">Goto
                        Website</a>
                    <div class="navbar-right ">
                        <ul class="nav navbar-nav">

                            <!-- User Account -->
                            <li class="dropdown user-menu">
                                <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <span class="d-none d-lg-inline-block">{{ Auth::user()->name }}</span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <!-- User image -->
                                    <li class="dropdown-header">
                                        <div class="d-inline-block">
                                            {{ Auth::user()->name }} <small
                                                class="pt-1">{{ Auth::user()->email }}</small>
                                        </div>
                                    </li>

                                    <li>
                                        <a href="{{ route('profile.show', Auth::user()->id) }}">
                                            <i class="mdi mdi-account"></i> My Profile
                                        </a>
                                    </li>
                                    <li class="dropdown-footer">
                                        <a href="{{ route('logout') }}"> <i class="mdi mdi-logout"></i> Log Out </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
