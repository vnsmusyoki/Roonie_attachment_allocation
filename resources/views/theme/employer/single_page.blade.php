@extends('theme.layouts.main')

@section('main')
<!-- Job Detail Section -->
    <section class="job-detail-section">
        <!-- Upper Box -->
        <div class="upper-box">
            <div class="auto-container">
                <!-- Job Block -->
                <div class="job-block-seven">
                    <div class="inner-box">
                        <div class="content">
                            <span class="company-logo"><img src="{{asset('frontend/images/resource/company-logo/5-1.png')}}" alt=""></span>
                            <h4><a href="#">Invision</a></h4>
                            <ul class="job-info">
                                <li><span class="icon flaticon-map-locator"></span> London, UK</li>
                                <li><span class="icon flaticon-briefcase"></span> Accounting / Finance</li>
                                <li><span class="icon flaticon-telephone-1"></span> 123 456 7890</li>
                                <li><span class="icon flaticon-mail"></span> info@invision.com</li>
                            </ul>
                            <ul class="job-other-info">
                                <li class="time">Open Jobs</li>
                            </ul>
                        </div>

                        <div class="btn-box">
                            <a href="#" class="theme-btn btn-style-one">Apply For Job</a>
                            <button class="bookmark-btn"><i class="flaticon-bookmark"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="job-detail-outer">
            <div class="auto-container">
                <div class="row">
                    <div class="content-column col-lg-8 col-md-12 col-sm-12">
                        <div class="job-detail">
                            <h4>About Company</h4>
                            <p>Moody’s Corporation, often referred to as Moody’s, is an American business and financial services company. It is the holding company for Moody’s Investors Service (MIS), an American credit rating agency, and Moody’s Analytics (MA), an American provider of financial analysis software and services.</p>
                            <p>Moody’s was founded by John Moody in 1909 to produce manuals of statistics related to stocks and bonds and bond ratings. Moody’s was acquired by Dun & Bradstreet in 1962. In 2000, Dun & Bradstreet spun off Moody’s Corporation as a separate company that was listed on the NYSE under MCO. In 2007, Moody’s Corporation was split into two operating divisions, Moody’s Investors Service, the rating agency, and Moody’s Analytics, with all of its other products.</p>
                            <div class="row images-outer">
                                <div class="col-lg-3 col-md-3 col-sm-6">
                                    <figure class="image"><a href="{{asset('frontend/images/resource/employers-single-1.png')}}" class="lightbox-image" data-fancybox="gallery"><img src="images/resource/employers-single-1.png" alt=""></a></figure>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6">
                                    <figure class="image"><a href="{{asset('frontend/images/resource/employers-single-2.png')}}" class="lightbox-image" data-fancybox="gallery"><img src="images/resource/employers-single-2.png" alt=""></a></figure>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6">
                                    <figure class="image"><a href="{{asset('frontend/images/resource/employers-single-3.png')}}" class="lightbox-image" data-fancybox="gallery"><img src="images/resource/employers-single-3.png" alt=""></a></figure>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6">
                                    <figure class="image"><a href="{{asset('frontend/images/resource/employers-single-4.png')}}" class="lightbox-image" data-fancybox="gallery"><img src="images/resource/employers-single-4.png" alt=""></a></figure>
                                </div>
                            </div>
                            <p>Moody’s Corporation, often referred to as Moody’s, is an American business and financial services company. It is the holding company for Moody’s Investors Service (MIS), an American credit rating agency, and Moody’s Analytics (MA), an American provider of financial analysis software and services.</p>
                            <p>Moody’s was founded by John Moody in 1909 to produce manuals of statistics related to stocks and bonds and bond ratings. Moody’s was acquired by Dun & Bradstreet in 1962. In 2000, Dun & Bradstreet spun off Moody’s Corporation as a separate company that was listed on the NYSE under MCO. In 2007, Moody’s Corporation was split into two operating divisions, Moody’s Investors Service, the rating agency, and Moody’s Analytics, with all of its other products.</p>
                        </div>

                        <!-- Related Jobs -->
                        <div class="related-jobs">
                            <div class="title-box">
                                <h3>3 jobs at Invision</h3>
                                <div class="text">2020 jobs live - 293 added today.</div>
                            </div>

                            <!-- Job Block -->
                            <div class="job-block">
                                <div class="inner-box">
                                    <div class="content">
                                        <span class="company-logo"><img src="{{asset('frontend/images/resource/company-logo/1-3.png')}}" alt=""></span>
                                        <h4><a href="#">Senior Full Stack Engineer, Creator Success</a></h4>
                                        <ul class="job-info">
                                            <li><span class="icon flaticon-briefcase"></span> Segment</li>
                                            <li><span class="icon flaticon-map-locator"></span> London, UK</li>
                                            <li><span class="icon flaticon-clock-3"></span> 11 hours ago</li>
                                            <li><span class="icon flaticon-money"></span> $35k - $45k</li>
                                        </ul>
                                        <ul class="job-other-info">
                                            <li class="time">Full Time</li>
                                            <li class="required">Urgent</li>
                                        </ul>
                                        <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
                                    </div>
                                </div>
                            </div>

                            <!-- Job Block -->
                            <div class="job-block">
                                <div class="inner-box">
                                    <div class="content">
                                        <span class="company-logo"><img src="{{asset('frontend/images/resource/company-logo/1-3.png')}}" alt=""></span>
                                        <h4><a href="#">Web Developer</a></h4>
                                        <ul class="job-info">
                                            <li><span class="icon flaticon-briefcase"></span> Segment</li>
                                            <li><span class="icon flaticon-map-locator"></span> London, UK</li>
                                            <li><span class="icon flaticon-clock-3"></span> 11 hours ago</li>
                                            <li><span class="icon flaticon-money"></span> $35k - $45k</li>
                                        </ul>
                                        <ul class="job-other-info">
                                            <li class="time">Part Time</li>
                                            <li class="required">Urgent</li>
                                        </ul>
                                        <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
                                    </div>
                                </div>
                            </div>

                            <!-- Job Block -->
                            <div class="job-block">
                                <div class="inner-box">
                                    <div class="content">
                                        <span class="company-logo"><img src="{{asset('frontend/images/resource/company-logo/1-3.png')}}" alt=""></span>
                                        <h4><a href="#">Sr. Full Stack Engineer</a></h4>
                                        <ul class="job-info">
                                            <li><span class="icon flaticon-briefcase"></span> Segment</li>
                                            <li><span class="icon flaticon-map-locator"></span> London, UK</li>
                                            <li><span class="icon flaticon-clock-3"></span> 11 hours ago</li>
                                            <li><span class="icon flaticon-money"></span> $35k - $45k</li>
                                        </ul>
                                        <ul class="job-other-info">
                                            <li class="time">Part Time</li>
                                        </ul>
                                        <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="sidebar-column col-lg-4 col-md-12 col-sm-12">
                        <aside class="sidebar">
                            <div class="sidebar-widget company-widget">
                                <div class="widget-content">

                                    <ul class="company-info mt-0">
                                        <li>Primary industry: <span>Software</span></li>
                                        <li>Company size: <span>501-1,000</span></li>
                                        <li>Founded in: <span>2011</span></li>
                                        <li>Phone: <span>123 456 7890</span></li>
                                        <li>Email: <span>info@joio.com</span></li>
                                        <li>Location: <span>London, UK</span></li>
                                        <li>Social media:
                                            <div class="social-links">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div>
                                        </li>
                                    </ul>

                                    <div class="btn-box"><a href="#" class="theme-btn btn-style-three">www.invisionapp.com</a></div>
                                </div>
                            </div>

                            <div class="sidebar-widget">
                                <!-- Map Widget -->
                                <h4 class="widget-title">Job Location</h4>
                                <div class="widget-content">
                                    <div class="map-outer mb-0">
                                        <div class="map-canvas"
                                            data-zoom="12"
                                            data-lat="-37.817085"
                                            data-lng="144.955631"
                                            data-type="roadmap"
                                            data-hue="#ffc400"
                                            data-title="Envato"
                                            data-icon-path="{{asset('frontend/images/resource/map-marker.png')}}"
                                            data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Job Detail Section -->
@endsection
