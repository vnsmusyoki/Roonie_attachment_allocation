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
                            <a href="{{route('application-form')}}" class="theme-btn btn-style-one">Apply For Job</a>
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
                                      
                                        <li>
                                            <i class="icon icon-salary"></i>
                                            <h5>Token:</h5>
                                            <span>{{$job->salary}}</span>
                                        </li>
                                    </ul>
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
