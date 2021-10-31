{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from creativelayers.net/themes/superio/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Oct 2021 06:36:53 GMT -->
<head>
<meta charset="utf-8">
<title>Employer Register</title>

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

<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Main Header-->
    <header class="main-header">
        <div class="container-fluid">
            <!-- Main box -->
            <div class="main-box">
                <!--Nav Outer -->
                <div class="nav-outer">
                    <div class="logo-box">
                        <div class="logo"><a href="index.html"><img src="{{asset('frontend/images/attach_logo.png')}}" alt="" title=""></a></div>
                    </div>
                </div>

                <div class="outer-box">
                    <!-- Login/Register -->
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
                        <a href="dashboard-post-job.html" class="theme-btn btn-style-one"><span class="btn-title">Job Post</span></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile Header -->
        <div class="mobile-header">
            <div class="logo"><a href="index.html"><img src="{{asset('frontend/images/attach_logo.png')}}" alt="" title=""></a></div>

            <!--Nav Box-->
            <div class="nav-outer clearfix">

                <div class="outer-box">
                    <!-- Login/Register -->
                    <div class="login-box">
                        <a href="login-popup.html" class="call-modal"><span class="icon-user"></span></a>
                    </div>

                    <a href="#nav-mobile" class="mobile-nav-toggler navbar-trigger"><span class="flaticon-menu-1"></span></a>
                </div>
            </div>
        </div>

        <!-- Mobile Nav -->
        <div id="nav-mobile"></div>
    </header>
    <!--End Main Header -->

    <!-- Info Section -->
    <div class="login-section">
        <div class="image-layer" style="background-image: url({{asset('frontend/images/background/12.jpg')}});"></div>
        <div class="outer-box">
            <!-- Login Form -->
            <div class="login-form default-form">
                <div class="form-inner">
                    <h3>Create Account</h3>

                    <!--Login Form-->
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group">
                            <div class="btn-box row">
                                <div class="col-lg-6 col-md-12">
                                    <a href="#" class="theme-btn btn-style-seven"><i class="la la-user"></i> Candidate </a>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <a href="#" class="theme-btn btn-style-four"><i class="la la-briefcase"></i> Employer </a>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Name</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert" style="color: red;">
                                    <strong style="color: red">{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label>Email Address</label>
                            <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert" style="color: red;">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label>Password</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert" style="color: red">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group">
                            <button class="theme-btn btn-style-one " type="submit" name="Register">Register</button>
                        </div>
                    </form>

                    <div class="bottom-box">
                        <div class="divider"><span>or</span></div>
                        <div class="btn-box row">
                            <div class="col-lg-6 col-md-12">
                                <a href="#" class="theme-btn social-btn-two facebook-btn"><i class="fab fa-facebook-f"></i> Log In via Facebook</a>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <a href="#" class="theme-btn social-btn-two google-btn"><i class="fab fa-google"></i> Log In via Gmail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Login Form -->
        </div>
    </div>
    <!-- End Info Section -->


</div><!-- End Page Wrapper -->


<script src="{{asset('frontend/js/jquery.js')}}"></script>
<script src="{{asset('frontend/js/popper.min.js')}}"></script>
<script src="{{asset('frontend/js/chosen.min.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.fancybox.js')}}"></script>
<script src="{{asset('frontend/js/jquery.modal.min.js')}}"></script>
<script src="{{asset('frontend/js/mmenu.polyfills.js')}}"></script>
<script src="{{asset('frontend/js/mmenu.js')}}"></script>
<script src="{{asset('frontend/js/appear.js')}}"></script>
<script src="{{asset('frontend/js/anm.min.js')}}"></script>
<script src="{{asset('frontend/js/owl.js')}}"></script>
<script src="{{asset('frontend/js/wow.js')}}"></script>
<script src="{{asset('frontend/js/script.js')}}"></script>

</body>

<!-- Mirrored from creativelayers.net/themes/superio/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Oct 2021 06:36:53 GMT -->
</html>



