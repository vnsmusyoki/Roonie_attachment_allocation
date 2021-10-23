<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from creativelayers.net/themes/superio/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Oct 2021 06:32:18 GMT -->
<head>
<meta charset="utf-8">
<title>Attachment Website</title>

<!-- Stylesheets -->
<link href="{{asset('backend/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{asset('backend/css/style.css')}}" rel="stylesheet">
<link href="{{asset('backend/css/responsive.css')}}" rel="stylesheet">

<link rel="shortcut icon" href="{{asset('backend/images/favicon.png')}}" type="image/x-icon">
<link rel="icon" href="{{asset('backend/images/favicon.png')}}" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body data-anm=".anm">


<div class="page-wrapper">

    <!-- Preloader -->
    {{-- <div class="preloader"></div> --}}

    <!-- Main Header-->
    <header class="main-header">

        <!-- Main box -->
        <div class="main-box">
            <!--Nav Outer -->
            <div class="nav-outer">
                <div class="logo-box">
                    <div class="logo"><a href="index.html"><img src="{{asset('backend/images/logo-main.jpg')}}" alt="" title=""></a></div>
                </div>

                <nav class="nav main-menu">
                    <ul class="navigation" id="navbar">
                        <li class="current dropdown">
                            <span>Home</span>
                            <ul>
                                <li class="current"><a href="{{ route('admin') }}">Admin Account</a></li>
                            </ul>
                        </li>

                      

                        <li class="dropdown">
                            <span>Companies</span>
                            <ul>
                                 
                                        <li><a href="">Add New Company</a></li>
                                        <li><a href="">Unverified Companies</a></li>
                                        <li><a href="">Manage Verified Companies</a></li> 
                                 
 
                                <li><a href="">Filter Company</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <span>Employers</span>
                            <ul>
                                <li class="dropdown">
                                    <span>Employers List</span>
                                    <ul>
                                        <li><a href="employers-list-v1.html">Employers LIst v1</a></li>
                                        <li><a href="employers-list-v2.html">Employers LIst v2</a></li>
                                        <li><a href="employers-list-v3.html">Employers LIst v3</a></li>
                                        <li><a href="employers-list-v4.html">Employers LIst v4</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <span>Employers Single</span>
                                    <ul>
                                        <li><a href="employers-single-v1.html">Employers Single v1</a></li>
                                        <li><a href="employers-single-v2.html">Employers Single v2</a></li>
                                        <li><a href="employers-single-v3.html">Employers Single v3</a></li>
                                    </ul>
                                </li>
                                <li><a href="dashboard.html">Employers Dashboard</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <span>Candidates</span>
                            <ul>
                                <li class="dropdown">
                                    <span>Candidates List</span>
                                    <ul>
                                        <li><a href="candidates-list-v1.html">Candidates LIst v1</a></li>
                                        <li><a href="candidates-list-v2.html">Candidates LIst v2</a></li>
                                        <li><a href="candidates-list-v3.html">Candidates LIst v3</a></li>
                                        <li><a href="candidates-list-v4.html">Candidates LIst v4</a></li>
                                        <li><a href="candidates-list-v5.html">Candidates LIst v5</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <span>Candidates Single</span>
                                    <ul>
                                        <li><a href="candidates-single-v1.html">Candidates Single v1</a></li>
                                        <li><a href="candidates-single-v2.html">Candidates Single v2</a></li>
                                        <li><a href="candidates-single-v3.html">Candidates Single v3</a></li>
                                    </ul>
                                </li>
                                <li><a href="candidate-dashboard.html">Candidates Dashboard</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <span>Blog</span>
                            <ul>
                                <li><a href="blog-list-v1.html">Blog LIst v1</a></li>
                                <li><a href="blog-list-v2.html">Blog LIst v2</a></li>
                                <li><a href="blog-list-v3.html">Blog LIst v3</a></li>
                                <li><a href="blog-single.html">Blog Single</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
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
                        </li>

                        <!-- Only for Mobile View -->
                        <li class="mm-add-listing">
                            <a href="add-listing.html" class="theme-btn btn-style-one">Job Post</a>
                            <span>
                                <span class="contact-info">
                                    <span class="phone-num"><span>Call us</span><a href="tel:1234567890">123 456 7890</a></span>
                                    <span class="address">329 Queensberry Street, North Melbourne VIC <br>3051, Australia.</span>
                                    <a href="mailto:support@superio.com" class="email">support@superio.com</a>
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
                 
                <!-- Login/Register -->
                <div class="btn-box">
                   
                    <a href="" class="theme-btn btn-style-one">Log Out</a>
                </div>
            </div>
        </div>

        <!-- Mobile Header -->
        <div class="mobile-header">
            <div class="logo"><a href="index.html"><img src="{{asset('backend/images/logo.svg')}}" alt="" title=""></a></div>

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
 
    
        <!-- Banner Section-->
        <section class="banner-section">
            <div class="auto-container">
                <div class="row">
                    <div class="content-column col-lg-7 col-md-12 col-sm-12">
                        <div class="inner-column wow fadeInUp" data-wow-delay="1000ms">
                            <div class="title-box">
                                <h3>There Are <span class="colored">93,178</span> Postings Here<br> For you!</h3>
                                <div class="text">Find Jobs, Employment & Career Opportunities</div>
                            </div>
    
                            <!-- Job Search Form -->
                            <div class="job-search-form">
                                <form method="post" action="https://creativelayers.net/themes/superio/job-list-v10.html">
                                    <div class="row">
                                        <div class="form-group col-lg-5 col-md-12 col-sm-12">
                                            <span class="icon flaticon-search-1"></span>
                                            <input type="text" name="field_name" placeholder="Job title, keywords, or company">
                                        </div>
                                        <!-- Form Group -->
                                        <div class="form-group col-lg-4 col-md-12 col-sm-12 location">
                                            <span class="icon flaticon-map-locator"></span>
                                            <input type="text" name="field_name" placeholder="City or postcode">
                                        </div>
                                        <!-- Form Group -->
                                        <div class="form-group col-lg-3 col-md-12 col-sm-12 btn-box">
                                            <button type="submit" class="theme-btn btn-style-one"><span class="btn-title">Find Jobs</span></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- Job Search Form -->
    
                            <!-- Popular Search -->
                            <div class="popular-searches">
                                <span class="title">Popular Searches : </span>
                                <a href="#">Designer</a>,
                                <a href="#">Developer</a>,
                                <a href="#">Web</a>,
                                <a href="#">IOS</a>,
                                <a href="#">PHP</a>,
                                <a href="#">Senior</a>,
                                <a href="#">Engineer</a>,
                            </div>
                            <!-- End Popular Search -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Banner Section-->
    
    
        <!-- Job Section -->
        <section class="job-section">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <h2>Featured Attachment Positions</h2> 
                </div>
    
                <div class="row wow fadeInUp">
                    <!-- Job Block -->
                    <div class="job-block col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-box">
                            <div class="content">
                                <span class="company-logo"><img src="{{asset('backend/images/resource/company-logo/1-1.png')}}" alt=""></span>
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
                                <span class="company-logo"><img src="{{asset('backend/images/resource/company-logo/1-2.png')}}" alt=""></span>
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
                                <span class="company-logo"><img src="{{asset('backend/images/resource/company-logo/1-3.png')}}" alt=""></span>
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
                                <span class="company-logo"><img src="{{asset('backend/images/resource/company-logo/1-4.png')}}" alt=""></span>
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
                                <span class="company-logo"><img src="{{asset('backend/images/resource/company-logo/1-5.png')}}" alt=""></span>
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
                                <span class="company-logo"><img src="{{asset('backend/images/resource/company-logo/1-6.png')}}" alt=""></span>
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
    
                <div class="btn-box">
                    <a href="#" class="theme-btn btn-style-one bg-blue"><span class="btn-title">Load More Listing</span></a>
                </div>
            </div>
        </section>
        <!-- End Job Section -->
     
 
     <!-- Main Footer -->
     <footer class="main-footer">
      


        <!--Bottom-->
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="outer-box">
                    <div class="copyright-text">© 2021 <a href="#">Admin Dashboard</a>. All Right Reserved.</div>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll To Top -->
        <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
    </footer>
    <!-- End Main Footer -->


</div><!-- End Page Wrapper -->


<script src="{{asset('backend/js/jquery.js')}}"></script>
<script src="{{asset('backend/js/popper.min.js')}}"></script>
<script src="{{asset('backend/js/chosen.min.js')}}"></script>
<script src="{{asset('backend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('backend/js/jquery.fancybox.js')}}"></script>
<script src="{{asset('backend/js/jquery.modal.min.js')}}"></script>
<script src="{{asset('backend/js/mmenu.polyfills.js')}}"></script>
<script src="{{asset('backend/js/mmenu.js')}}"></script>
<script src="{{asset('backend/js/appear.js')}}"></script>
<script src="{{asset('backend/js/anm.min.js')}}"></script>
<script src="{{asset('backend/js/owl.js')}}"></script>
<script src="{{asset('backend/js/wow.js')}}"></script>
<script src="{{asset('backend/js/script.js')}}"></script>

</body>

<!-- Mirrored from creativelayers.net/themes/superio/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Oct 2021 06:33:13 GMT -->
</html>


