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
                                    <div class="column col-lg-3 col-md-3 col-sm-12">
                                        <h3>Jobs Single</h3>
                                        <ul>
                                            <li><a href="{{route('job-single-page')}}">Job Single</a></li>
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
                                        {{-- <li><a href="employers-single-v2.html">Employers Single v2</a></li>
                                        <li><a href="employers-single-v3.html">Employers Single v3</a></li> --}}
                                    </ul>
                                </li>
                                <li><a href="{{route('employer-dashboard')}}">Employers Dashboard</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <span>Candidates</span>
                            <ul>
                                <li class="dropdown">
                                    <span>Candidates List</span>
                                    <ul>
                                        <li><a href="{{route('candidate-list')}}">Candidates LIst</a></li>
                                        {{-- <li><a href="candidates-list-v2.html">Candidates LIst v2</a></li>
                                        <li><a href="candidates-list-v3.html">Candidates LIst v3</a></li>
                                        <li><a href="candidates-list-v4.html">Candidates LIst v4</a></li>
                                        <li><a href="candidates-list-v5.html">Candidates LIst v5</a></li> --}}
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <span>Candidates Single</span>
                                    <ul>
                                        <li><a href="{{route('candidate-single-pange')}}">Candidates Single</a></li>
                                        {{-- <li><a href="candidates-single-v2.html">Candidates Single v2</a></li>
                                        <li><a href="candidates-single-v3.html">Candidates Single v3</a></li> --}}
                                    </ul>
                                </li>
                                <li><a href="{{route('candidate-dashboard')}}">Candidates Dashboard</a></li>
                            </ul>
                        </li>

                        {{-- <li class="dropdown">
                            <span>Blog</span>
                            <ul>
                                <li><a href="blog-list-v1.html">Blog LIst v1</a></li>
                                <li><a href="blog-list-v2.html">Blog LIst v2</a></li>
                                <li><a href="blog-list-v3.html">Blog LIst v3</a></li>
                                <li><a href="blog-single.html">Blog Single</a></li>
                            </ul>
                        </li> --}}

                        {{-- <li class="dropdown">
                            <span>Pages</span>
                            <ul>
                                <li class="dropdown">
                                    <span>Shop</span>
                                    <ul>
                                        <li><a href="shop.html">Shop List</a></li>
                                        <li><a href="shop-single.html">Shop Single</a></li>
                                        <li><a href="shopping-cart.html">Shopping Cart</a></li>
                                        <li><a href="shop-checkout.html">Checkout</a></li>
                                        <li><a href="order-completed.html">Order Completed</a></li>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="register.html">Register</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li><a href="faqs.html">FAQ's</a></li>
                                <li><a href="terms.html">Terms</a></li>
                                <li><a href="invoice.html">Invoice</a></li>
                                <li><a href="elements.html">Ui Elements</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </li> --}}

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
                <!-- Add Listing -->
                <a href="candidate-dashboard-cv-manager.html" class="upload-cv"> Upload your CV</a>
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

     <!-- Sidebar Backdrop -->
    <div class="sidebar-backdrop"></div>

    <!-- User Sidebar -->
    <div class="user-sidebar">

        <div class="sidebar-inner">
            <ul class="navigation">
                <li class="active"><a href="candidate-dashboard.html"> <i class="la la-home"></i> Dashboard</a></li>
                <li><a href="candidate-dashboard-profile.html"><i class="la la-user-tie"></i>My Profile</a></li>
                <li><a href="candidate-dashboard-resume.html"><i class="la la-file-invoice"></i>My Resume</a></li>
                <li><a href="candidate-dashboard-applied-job.html"><i class="la la-briefcase"></i> Applied Jobs </a></li>
                <li><a href="candidate-dashboard-job-alerts.html"><i class="la la-bell"></i>Job Alerts</a></li>
                <li><a href="candidate-dashboard-shortlisted-resume.html"><i class="la la-bookmark-o"></i>Shortlisted Jobs</a></li>
                <li><a href="candidate-dashboard-cv-manager.html"><i class="la la-file-invoice"></i> CV manager</a></li>
                <li><a href="dashboard-packages.html"><i class="la la-box"></i>Packages</a></li>
                <li><a href="dashboard-messages.html"><i class="la la-comment-o"></i>Messages</a></li>
                <li><a href="dashboard-change-password.html"><i class="la la-lock"></i>Change Password</a></li>
                <li><a href="dashboard-profile.html"><i class="la la-user-alt"></i>View Profile</a></li>
                <li><a href="index.html"><i class="la la-sign-out"></i>Logout</a></li>
                <li><a href="dashboard-delete.html"><i class="la la-trash"></i>Delete Profile</a></li>
            </ul>

            <div class="skills-percentage">
                <h4>Skills Percentage</h4>
                <p>Put value for "Cover Image" field to increase your skill up to "85%"</p>

                <!-- Pie Graph -->
                <div class="pie-graph">
                    <div class="graph-outer">
                        <input type="text" class="dial" data-fgColor="#7367F0" data-bgColor="transparent" data-width="234" data-height="234" data-linecap="normal"  value="30">
                        <div class="inner-text count-box"><span class="count-text txt" data-stop="30" data-speed="2000"></span>%</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End User Sidebar -->

    <!-- Dashboard -->
    <section class="user-dashboard">
        <div class="dashboard-outer">
            <div class="upper-title-box">
                <h3>Sammy, Munywoki!!</h3>
                <div class="text">Ready to jump back in?</div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="ui-item">
                        <div class="left">
                            <i class="icon flaticon-briefcase"></i>
                        </div>
                        <div class="right">
                            <h4>22</h4>
                            <p>Applied Jobs</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="ui-item ui-red">
                        <div class="left">
                            <i class="icon la la-file-invoice"></i>
                        </div>
                        <div class="right">
                            <h4>9382</h4>
                            <p>Job Alerts</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="ui-item ui-yellow">
                        <div class="left">
                            <i class="icon la la-comment-o"></i>
                        </div>
                        <div class="right">
                            <h4>74</h4>
                            <p>Messages</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="ui-item ui-green">
                        <div class="left">
                            <i class="icon la la-bookmark-o"></i>
                        </div>
                        <div class="right">
                            <h4>32</h4>
                            <p>Shortlist</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">


                <div class="col-lg-7">
                    <!-- Graph widget -->
                    <div class="graph-widget ls-widget">
                        <div class="tabs-box">
                            <div class="widget-title">
                                <h4>Your Profile Views</h4>
                                <div class="chosen-outer">
                                     <!--Tabs Box-->
                                     <select class="chosen-select">
                                        <option>Last 6 Months</option>
                                        <option>Last 12 Months</option>
                                        <option>Last 16 Months</option>
                                        <option>Last 24 Months</option>
                                        <option>Last 5 year</option>
                                    </select>
                                </div>
                            </div>

                            <div class="widget-content">
                                <canvas id="chart" width="100" height="45"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <!-- Notification Widget -->
                    <div class="notification-widget ls-widget">
                        <div class="widget-title"><h4>Notifications</h4></div>
                        <div class="widget-content">
                            <ul class="notification-list">
                                <li><span class="icon flaticon-briefcase"></span> <strong>Wade Warren</strong> applied for a job <span class="colored">Web Developer</span></li>
                                <li><span class="icon flaticon-briefcase"></span> <strong>Henry Wilson</strong> applied for a job <span class="colored">Senior Product Designer</span></li>
                                <li class="success"><span class="icon flaticon-briefcase"></span> <strong>Raul Costa</strong> applied for a job <span class="colored">Product Manager, Risk</span></li>
                                <li><span class="icon flaticon-briefcase"></span> <strong>Jack Milk</strong> applied for a job <span class="colored">Technical Architect</span></li>
                                <li class="success"><span class="icon flaticon-briefcase"></span> <strong>Michel Arian</strong> applied for a job <span class="colored">Software Engineer</span></li>
                                <li><span class="icon flaticon-briefcase"></span> <strong>Ali Tufan</strong> applied for a job <span class="colored">UI Designer</span></li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="col-lg-12">
                    <!-- applicants Widget -->
                    <div class="applicants-widget ls-widget">
                        <div class="widget-title"><h4>Jobs Applied Recently</h4></div>
                        <div class="widget-content">
                             <div class="row">
                                <!-- Job Block -->
                                <div class="job-block col-lg-6 col-md-12 col-sm-12">
                                    <div class="inner-box">
                                        <div class="content">
                                            <span class="company-logo"><img src="{{asset('frontend/images/resource/company-logo/1-1.png')}}" alt=""></span>
                                            <h4><a href="#">Software Engineer (Android), Libraries</a></h4>
                                            <ul class="job-info">
                                                <li><span class="icon flaticon-briefcase"></span> Segment</li>
                                                <li><span class="icon flaticon-map-locator"></span> London, UK</li>
                                                <li><span class="icon flaticon-clock-3"></span> 11 hours ago</li>
                                                <li><span class="icon flaticon-money"></span> $35k - $45k</li>
                                            </ul>
                                            <ul class="job-other-info">
                                                <li class="time">Full Time</li>
                                                <li class="privacy">Private</li>
                                                <li class="required">Urgent</li>
                                            </ul>
                                            <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Job Block -->
                                <div class="job-block col-lg-6 col-md-12 col-sm-12">
                                    <div class="inner-box">
                                        <div class="content">
                                            <span class="company-logo"><img src="{{asset('frontend/images/resource/company-logo/1-2.png')}}" alt=""></span>
                                            <h4><a href="#">Recruiting Coordinator</a></h4>
                                            <ul class="job-info">
                                                <li><span class="icon flaticon-briefcase"></span> Segment</li>
                                                <li><span class="icon flaticon-map-locator"></span> London, UK</li>
                                                <li><span class="icon flaticon-clock-3"></span> 11 hours ago</li>
                                                <li><span class="icon flaticon-money"></span> $35k - $45k</li>
                                            </ul>
                                            <ul class="job-other-info">
                                                <li class="time">Full Time</li>
                                                <li class="privacy">Private</li>
                                                <li class="required">Urgent</li>
                                            </ul>
                                            <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Job Block -->
                                <div class="job-block col-lg-6 col-md-12 col-sm-12">
                                    <div class="inner-box">
                                        <div class="content">
                                            <span class="company-logo"><img src="{{asset('frontend/images/resource/company-logo/1-3.png')}}" alt=""></span>
                                            <h4><a href="#">Product Manager, Studio</a></h4>
                                            <ul class="job-info">
                                                <li><span class="icon flaticon-briefcase"></span> Segment</li>
                                                <li><span class="icon flaticon-map-locator"></span> London, UK</li>
                                                <li><span class="icon flaticon-clock-3"></span> 11 hours ago</li>
                                                <li><span class="icon flaticon-money"></span> $35k - $45k</li>
                                            </ul>
                                            <ul class="job-other-info">
                                                <li class="time">Full Time</li>
                                                <li class="privacy">Private</li>
                                                <li class="required">Urgent</li>
                                            </ul>
                                            <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Job Block -->
                                <div class="job-block col-lg-6 col-md-12 col-sm-12">
                                    <div class="inner-box">
                                        <div class="content">
                                            <span class="company-logo"><img src="{{asset('frontend/images/resource/company-logo/1-4.png')}}" alt=""></span>
                                            <h4><a href="#">Senior Product Designer</a></h4>
                                            <ul class="job-info">
                                                <li><span class="icon flaticon-briefcase"></span> Segment</li>
                                                <li><span class="icon flaticon-map-locator"></span> London, UK</li>
                                                <li><span class="icon flaticon-clock-3"></span> 11 hours ago</li>
                                                <li><span class="icon flaticon-money"></span> $35k - $45k</li>
                                            </ul>
                                            <ul class="job-other-info">
                                                <li class="time">Full Time</li>
                                                <li class="privacy">Private</li>
                                                <li class="required">Urgent</li>
                                            </ul>
                                            <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Job Block -->
                                <div class="job-block col-lg-6 col-md-12 col-sm-12">
                                    <div class="inner-box">
                                        <div class="content">
                                            <span class="company-logo"><img src="{{asset('frontend/images/resource/company-logo/1-5.png')}}" alt=""></span>
                                            <h4><a href="#">Senior Full Stack Engineer, Creator Success</a></h4>
                                            <ul class="job-info">
                                                <li><span class="icon flaticon-briefcase"></span> Segment</li>
                                                <li><span class="icon flaticon-map-locator"></span> London, UK</li>
                                                <li><span class="icon flaticon-clock-3"></span> 11 hours ago</li>
                                                <li><span class="icon flaticon-money"></span> $35k - $45k</li>
                                            </ul>
                                            <ul class="job-other-info">
                                                <li class="time">Full Time</li>
                                                <li class="privacy">Private</li>
                                                <li class="required">Urgent</li>
                                            </ul>
                                            <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Job Block -->
                                <div class="job-block col-lg-6 col-md-12 col-sm-12">
                                    <div class="inner-box">
                                        <div class="content">
                                            <span class="company-logo"><img src="{{asset('frontend/images/resource/company-logo/1-6.png')}}" alt=""></span>
                                            <h4><a href="#">Software Engineer (Android), Libraries</a></h4>
                                            <ul class="job-info">
                                                <li><span class="icon flaticon-briefcase"></span> Segment</li>
                                                <li><span class="icon flaticon-map-locator"></span> London, UK</li>
                                                <li><span class="icon flaticon-clock-3"></span> 11 hours ago</li>
                                                <li><span class="icon flaticon-money"></span> $35k - $45k</li>
                                            </ul>
                                            <ul class="job-other-info">
                                                <li class="time">Full Time</li>
                                                <li class="privacy">Private</li>
                                                <li class="required">Urgent</li>
                                            </ul>
                                            <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Dashboard -->

    <!-- Copyright -->
    <div class="copyright-text">
        <p>© 2021 Superio. All Right Reserved.</p>
    </div>

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

<!-- Chart.js // documentation: http://www.chartjs.org/docs/latest/ -->
<script src="{{asset('frontend/js/chart.min.js')}}"></script>
<script>
    Chart.defaults.global.defaultFontFamily = "Sofia Pro";
    Chart.defaults.global.defaultFontColor = '#888';
    Chart.defaults.global.defaultFontSize = '14';

    var ctx = document.getElementById('chart').getContext('2d');

    var chart = new Chart(ctx, {

        type: 'line',
        // The data for our dataset
        data: {
            labels: ["January", "February", "March", "April", "May", "June"],
            // Information about the dataset
            datasets: [{
                label: "Views",
                backgroundColor: 'transparent',
                borderColor: '#1967D2',
                borderWidth: "1",
                data: [196,132,215,362,210,252],
                pointRadius: 3,
                pointHoverRadius:3,
                pointHitRadius: 10,
                pointBackgroundColor: "#1967D2",
                pointHoverBackgroundColor: "#1967D2",
                pointBorderWidth: "2",
            }]
        },

        // Configuration options
        options: {

            layout: {
              padding: 10,
            },

            legend: { display: false },
            title:  { display: false },

            scales: {
                yAxes: [{
                    scaleLabel: {
                        display: false
                    },
                    gridLines: {
                         borderDash: [6, 10],
                         color: "#d8d8d8",
                         lineWidth: 1,
                    },
                }],
                xAxes: [{
                    scaleLabel: { display: false },
                    gridLines:  { display: false },
                }],
            },

            tooltips: {
              backgroundColor: '#333',
              titleFontSize: 13,
              titleFontColor: '#fff',
              bodyFontColor: '#fff',
              bodyFontSize: 13,
              displayColors: false,
              xPadding: 10,
              yPadding: 10,
              intersect: false
            }
        },
    });

</script>

</body>

<!-- Mirrored from creativelayers.net/themes/superio/candidate-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Oct 2021 06:36:21 GMT -->
</html>


