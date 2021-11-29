<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Company Dashboard</title>

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
                <a href="{{ route('student') }}" class="logo">
                    <!-- logo-->
                    <strong>Company Dashboard</strong>
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
        <aside class="main-sidebar">
            <!-- sidebar-->
            <section class="sidebar">
                <div class="user-profile px-20 pt-15 pb-10">
                    <div class="d-flex align-items-center">
                        <div class="image">
                            <img src="{{ asset('main/images/avatar/avatar-13.png') }}"
                                class="avatar avatar-lg bg-primary-light rounded100" alt="User Image">
                        </div>
                        <div class="info">
                            <a class="dropdown-toggle px-20" data-toggle="dropdown"
                                href="#">{{ Auth::user()->name }}</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ url('employer/edit-profile') }}"><i
                                        class="ti-user"></i> Profile</a>

                            </div>
                        </div>
                    </div>

                </div>
                <!-- sidebar menu-->
                <ul class="sidebar-menu" data-widget="tree">

                    <li>
                        <a href="{{ route('employer') }}">
                            <i class="icon-Layout-4-blocks"><span class="path1"></span><span
                                    class="path2"></span></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('employer/upload-attachment-details') }}">
                            <i class="icon-Briefcase"><span class="path1"></span><span
                                    class="path2"></span></i>
                            <span>Add Attachment</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('employer/manage-attachment-slots') }}">
                            <i class="icon-Briefcase"><span class="path1"></span><span
                                    class="path2"></span></i>
                            <span>Manage Attachment Slots</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('employer/manage-closed-attachment-slots') }}">
                            <i class="icon-Briefcase"><span class="path1"></span><span
                                    class="path2"></span></i>
                            <span>Closed Attachment Slots</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-Briefcase"><span class="path1"></span><span
                                    class="path2"></span></i>
                            <span>Short Listed Applicants</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-Briefcase"><span class="path1"></span><span
                                    class="path2"></span></i>
                            <span>Manage Account</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-File"><span class="path1"></span><span
                                    class="path2"></span><span class="path3"></span></i>
                            <span>Update Password</span>
                        </a>
                    </li>

                    <li>


                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                            <i class="icon-User"><span class="path1"></span><span
                                    class="path2"></span></i>
                            <span>Log Out</span>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>

                    </li>

                </ul>
            </section>
        </aside>
        <div class="content-wrapper">
            @yield('content')
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="pull-right d-none d-sm-inline-block">
                <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
                    <li class="nav-item">

                    </li>
                    <li class="nav-item">

                    </li>
                </ul>
            </div>
            &copy; 2021 <a href="/">Attachment Allocation website</a>. All Rights Reserved.
        </footer>



        <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>

    </div>
    <!-- ./wrapper -->



    <!-- Page Content overlay -->


    <!-- Vendor JS -->
    <script src="{{ asset('main/main/js/vendors.min.js') }}"></script>
    <script src="{{ asset('main/main/js/pages/chat-popup.js') }}"></script>
    <script src="{{ asset('main/assets/icons/feather-icons/feather.min.js') }}"></script>

    <script src="{{ asset('main/assets/vendor_components/apexcharts-bundle/dist/apexcharts.js') }}"></script>
    <script src="{{ asset('main/assets/vendor_components/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('main/assets/vendor_components/fullcalendar/fullcalendar.js') }}"></script>

    <!-- Joblly App -->
    <script src="{{ asset('main/main/js/template.js') }}"></script>
    <script src="{{ asset('main/main/js/pages/dashboard.js') }}"></script>
    <script src="{{ asset('main/main/js/pages/calendar-dash.js') }}"></script>
    <script src="{{ asset('main/main/js/toastr.min.js') }}"></script>
    <script src="{{ asset('main/main/datatable/datatables.min.js') }}"></script>
    <script src="{{ asset('main/main/pages/data-table.js') }}"></script>
    {!! Toastr::message() !!}
    @if (Session::has('category_created'))
        <script>
            toastr.success("{!! Session::get('category_created') !!}");
        </script>
    @endif

</body>

</html>
