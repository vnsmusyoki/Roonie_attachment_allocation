@extends('theme.layouts.main')

@section('main')
  <!--Page Title-->
    <section class="page-title">
        <div class="auto-container">
            <div class="title-outer">
                <h1>Find Jobs</h1>
                <ul class="page-breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li>Jobs</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Listing Section -->
    <section class="ls-section">
        <div class="auto-container">
            <div class="filters-backdrop"></div>

            <div class="row">


<div class="col-md-1 col-xs-12 col-lg-1 col-sm-12"></div>
                <!-- Content Column -->
                <div class="content-column col-lg-10 col-md-10 col-sm-12">
                    <div class="ls-outer">





                        <!-- Job Block -->
                        @foreach ($jobs as $job)
                            <div class="job-block">
                                <div class="inner-box">
                                    <div class="content">
                                        <span class="company-logo"><img src="{{asset('storage/'.$job->image)}}" alt="" width="54" height="53"></span>
                                        <h4><a href="{{route('job-single-page',$job->id)}}">{{$job->job_title}}</a></h4>
                                        <ul class="job-info">
                                            <li><span class="icon flaticon-briefcase"></span> Job Category:{{$job->job_category}}</li>
                                            <li><span class="icon flaticon-map-locator"></span> Location:  {{$job->address}}</li>
                                            {{-- <li><span class="icon flaticon-clock-3"></span> 11 hours ago</li> --}}
                                            <li><span class="icon flaticon-money"></span> Salary: {{$job->salary}}</li>
                                        </ul>
                                        <ul class="job-other-info">
                                            <li class="time">3-4 Months</li>
                                            <li class="privacy">Urgent</li>
                                            <li class="required">{{$job->status}}</li>
                                        </ul>
                                        <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                       <!-- Listing Show More -->
                        <div class="ls-show-more">
                            <p>Showing 36 of 497 Jobs</p>
                            <div class="bar"><span class="bar-inner" style="width: 40%"></span></div>
                            <button class="show-more">Show More</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Listing Page Section -->
@endsection
