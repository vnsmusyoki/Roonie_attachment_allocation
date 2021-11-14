<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from creativelayers.net/themes/superio/candidate-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Oct 2021 06:36:17 GMT -->
<head>
<meta charset="utf-8">
<title>Candidate Dashboard</title>

<!-- Stylesheets -->
<link href="{{asset('frontend/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">
<link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet">

<link rel="shortcut icon" href="{{asset('frontend/images/favcon_logo.png')}}" type="image/x-icon">
<link rel="icon" href="{{asset('frontend/images/favcon_logo.png')}}" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper dashboard">

    <!-- Preloader -->
    {{-- <div class="preloader"></div> --}}

    <!-- Header Span -->
   <span class="header-span"></span>

    <!-- Main Header-->
     <header class="main-header">

        <!-- Main box -->
        <div class="main-box">
            <!--Nav Outer -->
            <div class="nav-outer">
                <div class="logo-box">
                    <div class="logo"><a href="/"><img src="{{asset('frontend/images/attach_logo.png')}}" alt="" title=""></a></div>
                </div>

                <nav class="nav main-menu">
                    <ul class="navigation" id="navbar">
                        <li class="current"><a href="/">Home</a></li>
                        <li class="dropdown has-mega-menu" id="has-mega-menu">
                            <span>Find Jobs</span>
                            <div class="mega-menu" id="mega-menu">
                                <div class="mega-menu-bar row">
                                    <div class="column col-lg-3 col-md-3 col-sm-12">
                                        <h3>Jobs Listing</h3>
                                        <ul>
                                            <li><a href="{{route('job-list')}}">Jobs List</a></li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </li>

                        <li class="dropdown">
                            <span>Employers</span>
                            <ul>
                                <li class="dropdown">
                                    <span>Employers List</span>
                                    <ul>
                                        <li><a href="{{route('employer-list')}}">Employers LIst</a></li>
                                        {{-- <li><a href="employers-list-v2.html">Employers LIst v2</a></li>
                                        <li><a href="employers-list-v3.html">Employers LIst v3</a></li>
                                        <li><a href="employers-list-v4.html">Employers LIst v4</a></li> --}}
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <span>Employers Single</span>
                                    <ul>
                                        <li><a href="{{('employer-single-pange')}}">Employers Single</a></li>

                                    </ul>
                                </li>
                                <li><a href="{{route('employer')}}">Employers Dashboard</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <span>Candidates</span>
                            <ul>
                                <li><a href="{{route('candidate-dashboard')}}">Candidates Dashboard</a></li>
                            </ul>
                        </li>


                        <!-- Only for Mobile View -->
                        <li class="mm-add-listing">
                            <a href="add-listing.html" class="theme-btn btn-style-one">Job Post</a>
                            <span>
                                <span class="contact-info">
                                    <span class="phone-num"><span>Call us</span><a href="tel:1234567890">+25473 456 7890</a></span>
                                    <span class="address">329 Tom Boya Street, NAirobi <br>3051, Kenya.</span>
                                    <a href="mailto:support@superio.com" class="email">support@studentattachee.com</a>
                                </span>
                                <span class="social-links">
                                    <a href="#"><span class="fab fa-facebook-f"></span></a>
                                    <a href="#"><span class="fab fa-twitter"></span></a>
                                    <a href="#"><span class="fab fa-instagram"></span></a>
                                    <a href="#"><span class="fab fa-linkedin-in"></span></a>
                                </span>
                            </span>
                        </li>
                    </ul>
                </nav>
                <!-- Main Menu End-->
            </div>

            <div class="outer-box">

                <div class="btn-box">
                    @guest
                        @if (Route::has('login'))

                                <a class="theme-btn btn-style-three" href="{{ route('login') }}">{{ __('Login') }}</a>

                        @endif

                        @if (Route::has('register'))

                                <a class="theme-btn btn-style-three" href="{{ route('register') }}">{{ __('Register') }}</a>

                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="theme-btn btn-style-three dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="theme-btn btn-style-three dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                    <a href="dashboard-post-job.html" class="theme-btn btn-style-one">Job Post</a>
                </div>
            </div>
        </div>

        <!-- Mobile Header -->
        <div class="mobile-header">
            <div class="logo"><a href="index.html"><img src="{{asset('frontend/images/logo.svg')}}" alt="" title=""></a></div>

            <!--Nav Box-->
            <div class="nav-outer clearfix">

                <div class="outer-box">
                    <!-- Login/Register -->
                    <div class="login-box">
                        <a href="login-popup.html" class="call-modal"><span class="icon-user"></span></a>
                    </div>

                    <a href="#nav-mobile" class="mobile-nav-toggler"><span class="flaticon-menu-1"></span></a>
                </div>
            </div>
        </div>

        <!-- Mobile Nav -->
        <div id="nav-mobile"></div>
    </header>
    <!--End Main Header -->
