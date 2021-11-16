<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Employer| Dashboard</title>

    <!-- Stylesheets -->
    <link href="{{asset('frontend/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet">

    <link rel="shortcut icon" href="{{asset('frontend/images/favcon_logo.png')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('frontend/images/favcon_logo.png')}}" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-
     alpha/css/bootstrap.css" rel="stylesheet">

    {{-- message toaster --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
        integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <div class="page-wrapper dashboard ">

        <span class="header-span"></span>

        <!-- Main Header-->
        <header class="main-header">

            <!-- Main box -->
            <div class="main-box">
                <!--Nav Outer -->
                <div class="nav-outer">
                    <div class="logo-box">
                        <div class="logo"><a href="/"><img src="{{asset('frontend/images/attachment_logo.png')}}" alt=""
                                    title=""></a></div>
                    </div>

                    <nav class="nav main-menu">
                        <ul class="navigation" id="navbar"> 
                            <a class="current" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a> 
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                            <!-- Only for Mobile View -->
                            <li class="mm-add-listing"> 
                                <a class="theme-btn btn-style-one" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a> 
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </nav>
                    <!-- Main Menu End-->
                </div>

                <div class="outer-box">
                    <div class="btn-box">
                        <a href="{{ route('employer') }}" class="theme-btn btn-style-one">Profile</a>
                    </div>
                </div>
            </div>
            <!-- Mobile Header -->
            <div class="mobile-header">
                <div class="logo"><a href="{{ url('/') }}"><img src="{{asset('frontend/images/logo.svg')}}" alt=""
                            title=""></a></div>
                <!--Nav Box-->
                <div class="nav-outer clearfix">

                    <div class="outer-box">
                        <!-- Login/Register -->
                        <div class="login-box">
                            <a href="{{ route('login') }}" class="call-modal"><span class="icon-user">Company Profile</span></a>
                        </div>

                        <a href="#nav-mobile" class="mobile-nav-toggler"><span class="flaticon-menu-1"></span></a>
                    </div>
                </div>
            </div>
            <!-- Mobile Nav -->
            <div id="nav-mobile"></div>
        </header>
        <!--End Main Header -->