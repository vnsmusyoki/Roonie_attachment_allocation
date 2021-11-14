<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from creativelayers.net/themes/superio/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Oct 2021 06:32:18 GMT -->
<head>
<meta charset="utf-8">
<title>Attachment Website</title>

<!-- Stylesheets -->
<link href="{{asset('frontend/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">
<link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet">

<link rel="shortcut icon" href="{{asset('frontend/images/favcon_logo.png')}}" type="image/x-icon">
<link rel="icon" href="{{asset('frontend/images/favcon_logo.png')}}" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<link rel="stylesheet" href="{{  asset('css/toastr.min.css') }}">

{{-- message toaster --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body data-anm=".anm">


<div class="page-wrapper">

    <header class="main-header">

        <!-- Main box -->
        <div class="main-box">
            <!--Nav Outer -->
            <div class="nav-outer">
                <div class="logo-box">
                    <div class="logo"><a href="/"><img src="{{asset('frontend/images/attachment_logo.png')}}" alt="" title=""></a></div>
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
                                <li class="dropdown">
                                    <span>Candidates List</span>
                                    <ul>
                                        <li><a href="{{route('candidate-list')}}">Candidates LIst</a></li>

                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <span>Candidates Single</span>
                                    <ul>
                                        <li><a href="{{route('candidate-single-pange')}}">Candidates Single</a></li>

                                    </ul>
                                </li>candidate-dashboard
                                <li><a href="{{route('candidate-dashboard')}}">Candidates Dashboard</a></li>
                            </ul>
                        </li>

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
                <!-- Add Listing -->
               
                <div class="btn-box">
                    @guest
                        @if (Route::has('login'))

                                <a class="theme-btn btn-style-three" href="{{ route('login') }}">{{ __('My Account') }}</a>

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
            <div class="logo"><a href="/"><img src="{{asset('frontend/images/logo.svg')}}" alt="" title=""></a></div>

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
