<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin Dashboard</title>

    <!-- Vendors Style-->
    <link rel="stylesheet" href="{{ asset('main/main/css/vendors_css.css') }}">

    <!-- Style-->
    <link rel="stylesheet" href="{{ asset('main/main/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('main/main/css/skin_color.css') }}">

    <script src="{{ asset('main/main/js/jquery-3.6.0.min.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('main/main/css/toastr.min.css') }}">

</head>

<body class="hold-transition light-skin sidebar-mini theme-primary">

    <div class="wrapper">
        {{-- <div id="loader"></div> --}}

        <header class="main-header">
            <div class="d-flex align-items-center logo-box justify-content-start">
                <a href="#"
                    class="waves-effect waves-light nav-link d-none d-md-inline-block mx-10 push-btn bg-transparent"
                    data-toggle="push-menu" role="button">
                    <i data-feather="menu"></i>
                </a>
                <!-- Logo -->
                <a href="{{ route('admin') }}" class="logo">
                    <!-- logo-->
                    <strong>Admin Dashboard</strong>
                </a>
            </div>
            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <div class="app-menu">
                    <ul class="header-megamenu nav">
                        <li class="btn-group nav-item d-md-none">
                            <a href="#" class="waves-effect waves-light nav-link push-btn" data-toggle="push-menu"
                                role="button">
                                <i data-feather="menu"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="navbar-custom-menu r-side">
                    <ul class="nav navbar-nav">
                        <li class="btn-group nav-item d-lg-flex d-none align-items-center">
                            <p class="mb-0 text-fade pr-10 pt-5">
                                {{ Carbon\Carbon::now()->addHours(3)->format('l, d-m-y
                                                                h:i:s a') }}
                            </p>
                        </li>
                        <li class="btn-group nav-item d-lg-inline-flex d-none">
                            <a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link full-screen"
                                title="Full Screen">
                                <i data-feather="maximize"></i>
                            </a>
                        </li>
                        <!-- Control Sidebar Toggle Button -->
                        <li class="btn-group nav-item d-inline-flex">
                            <a href="#" class="waves-effect waves-light nav-link full-screen" title="Setting">
                                <i data-feather="settings"></i>
                            </a>
                        </li>
                        <!-- Notifications -->
                        <li class="dropdown notifications-menu">
                            <a href="#" class="waves-effect waves-light dropdown-toggle" title="Notifications">
                                <i data-feather="bell"></i>
                            </a>

                        </li>
                        <!-- User Account-->
                        <li class="dropdown user user-menu">
                            <a href="#" class="waves-effect waves-light dropdown-toggle" data-toggle="dropdown"
                                title="User">
                                <i class="icon-User"><span class="path1"></span><span
                                        class="path2"></span></i>
                            </a>
                            <ul class="dropdown-menu animated flipInX">
                                <li class="user-body">
                                    <a class="dropdown-item" href="#"><i class="ti-user text-muted mr-2"></i>
                                        Profile</a>
                                    <a class="dropdown-item" href="#"><i class="ti-wallet text-muted mr-2"></i>
                                        Posted Opportunities</a>
                                    <a class="dropdown-item" href="#"><i class="ti-settings text-muted mr-2"></i>
                                        Shortlisted</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                        <i class="ti-lock text-muted mr-2"></i> {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
