@extends('theme.layouts.main')

@section('main')

<!-- Job Detail Section -->
    <section class="job-detail-section" style="margin-top: 30px;">
        <!-- Upper Box -->
        <div class="upper-box">
            <div class="auto-container">
                <!-- Job Block -->
                <div class="job-block-seven">
                    <div class="inner-box">
                        <div class="content">
                            <span class="company-logo"><img src="{{asset('storage/'.$job->image)}}" alt=""></span>
                            <h4><a href="#">{{$job->job_title}}</a></h4>
                            <ul class="job-info">
                                <li><span class="icon flaticon-briefcase"></span> Job Category:{{$job->job_category}}</li>
                                <li><span class="icon flaticon-map-locator"></span> Location:  {{$job->address}}</li>
                                <li><span class="icon flaticon-money"></span> Salary: {{$job->salary}}</li>
                            </ul>
                            <ul class="job-other-info">
                                <li class="time">3-4 Months</li>
                                <li class="privacy">Urgent</li>
                                <li class="required">{{$job->status}}</li>
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
                            <h4>Job Description</h4>
                            <p>{{$job->job_description}}</p>
                            <h4>Skill & Experience</h4>
                            <p>{{$job->qualification}}</p>
                        </div>

                        <!-- Other Options -->
                        <div class="other-options">
                            <div class="social-share">
                                <h5>Share this job</h5>
                                <a href="#" class="facebook"><i class="fab fa-facebook-f"></i> Facebook</a>
                                <a href="#" class="twitter"><i class="fab fa-twitter"></i> Twitter</a>
                                <a href="#" class="google"><i class="fab fa-google"></i> Google+</a>
                            </div>
                        </div>

                        <!-- Related Jobs -->
                        <div class="related-jobs">
                            <div class="title-box">
                                <h3>Related Jobs</h3>
                                <div class="text">2020 jobs live - 293 added today.</div>
                            </div>

                            <!-- Job Block -->
                            <div class="job-block">
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
                            <div class="job-block">
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
                            <div class="job-block">
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

                        </div>
                    </div>

                    <div class="sidebar-column col-lg-4 col-md-12 col-sm-12">
                        <aside class="sidebar">
                            <div class="sidebar-widget">
                                <!-- Job Overview -->
                                <h4 class="widget-title">Job Overview</h4>
                                <div class="widget-content">
                                    <ul class="job-overview">
                                        <li>
                                            <i class="icon icon-calendar"></i>
                                            <h5>Date Posted: </h5>
                                            <span>{{$job->created_at}}</span>
                                        </li>
                                        <li>
                                            <i class="icon icon-expiry"></i>
                                            <h5>Expiration date:</h5>
                                            <span>{{$job->date}}</span>
                                        </li>
                                        <li>
                                            <i class="icon icon-location"></i>
                                            <h5>Location:</h5>
                                            <span>{{$job->address}}</span>
                                        </li>
                                        <li>
                                            <i class="icon icon-user-2"></i>
                                            <h5>Job Title:</h5>
                                            <span>{{$job->job_title}}</span>
                                        </li>
                                        {{-- <li>
                                            <i class="icon icon-clock"></i>
                                            <h5>Hours:</h5>
                                            <span>50h / week</span>
                                        </li> --}}
                                        {{-- <li>
                                            <i class="icon icon-rate"></i>
                                            <h5>Rate:</h5>
                                            <span>$15 - $25 / hour</span>
                                        </li> --}}
                                        <li>
                                            <i class="icon icon-salary"></i>
                                            <h5>Salary:</h5>
                                            <span>{{$job->salary}}</span>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Map Widget -->
                                {{-- <h4 class="widget-title">Job Location</h4>
                                <div class="widget-content">
                                    <div class="map-outer">
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
                                </div> --}}

                                <!-- Job Skills -->
                                {{-- <h4 class="widget-title">Job Skills</h4>
                                <div class="widget-content">
                                    <ul class="job-skills">
                                        <li><a href="#">app</a></li>
                                        <li><a href="#">administrative</a></li>
                                        <li><a href="#">android</a></li>
                                        <li><a href="#">wordpress</a></li>
                                        <li><a href="#">design</a></li>
                                        <li><a href="#">react</a></li>
                                    </ul>
                                </div> --}}
                            </div>

                            {{-- <div class="sidebar-widget company-widget">
                                <div class="widget-content">
                                    <div class="company-title">
                                        <div class="company-logo"><img src="{{asset('frontend/images/resource/company-7.png')}}" alt=""></div>
                                        <h5 class="company-name">InVision</h5>
                                        <a href="#" class="profile-link">View company profile</a>
                                    </div>

                                    <ul class="company-info">

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
                            </div> --}}
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Job Detail Section -->

@endsection
