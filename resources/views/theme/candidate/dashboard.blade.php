@extends('theme.candidate.layouts.main')

@section('main')

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

@endsection
