@extends('theme.layouts.main')

@section('main')

    <!-- Banner Section-->
    <section class="banner-section">
        <div class="auto-container">
            <div class="row">
                <div class="content-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInUp" data-wow-delay="1000ms">
                        <div class="title-box">
                            <h3>There Are <span class="colored">01</span> Postings Here<br> For you!</h3>
                            <div class="text">Find Attachment opportunities here</div>
                        </div>

                        <!-- Job Search Form -->
                        <div class="job-search-form">
                            <form method="post" action="https://creativelayers.net/themes/superio/job-list-v10.html">
                                <div class="row">
                                    <div class="form-group col-lg-5 col-md-12 col-sm-12">
                                        <span class="icon flaticon-search-1"></span>
                                        <input type="text" name="field_name" placeholder="Course Name">
                                    </div>
                                    <!-- Form Group -->
                                    <div class="form-group col-lg-4 col-md-12 col-sm-12 location">
                                        <span class="icon flaticon-map-locator"></span>
                                        <input type="text" name="field_name" placeholder="City or postcode">
                                    </div>
                                    <!-- Form Group -->
                                    <div class="form-group col-lg-3 col-md-12 col-sm-12 btn-box">
                                        <button type="submit" class="theme-btn btn-style-one"><span class="btn-title">Find Attachment</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Job Search Form -->

                        <!-- Popular Search -->
                        <div class="popular-searches">
                            <span class="title">Popular Searches : </span>
                            <a href="#">Business</a>,
                            <a href="#">Banking</a>,
                            <a href="#">Computing</a>,
                            <a href="#">Networking</a>,
                            <a href="#">Health</a>,
                            <a href="#">Engineer</a>,
                        </div>
                        <!-- End Popular Search -->
                    </div>
                </div>

                <div class="image-column col-lg-5 col-md-12">
                    <div class="image-box">
                        <figure class="main-image wow fadeIn" data-wow-delay="500ms"><img src="{{asset('frontend/images/resource/banner-img-1.png')}}" alt=""></figure>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Section-->

    <!-- Job Categories -->
    <section class="job-categories">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Popular Attachment Opportunities</h2>
                <div class="text"></div>
            </div>

            <div class="row wow fadeInUp">
                <!-- Category Block -->
                @foreach ($categories as $cat)
                    <div class="category-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="content">
                                <span class="icon flaticon-money-1"></span>
                                <h4><a href="#">{{$cat->name}}</a></h4>

                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- End Job Categories -->

    <!-- Job Section -->
    <section class="job-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Featured Attachment Opportunities</h2>
                <div class="text">Know your worth and find the attachment opportunity that will help you grow your career</div>
            </div>

            <div class="row wow fadeInUp">
                <!-- Job Block -->
                @foreach ($jobs as $job)
                    <div class="job-block col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-box">
                            <div class="content">
                                <span class="company-logo"><img src="{{asset('storage/'.$job->image)}}" alt="" width="54" height="53"></span>
                                <h4><a href="{{route('job-single-page',$job->id)}}">{{$job->job_title}}</a></h4>
                                <ul class="job-info">
                                    <li><span class="icon flaticon-briefcase"></span> Category:{{$job->job_category}}</li>
                                    {{-- <li><span class="icon flaticon-map-locator"></span>Job Category: {{$job->job_title}}</li> --}}
                                    <li><span class="icon flaticon-clock-3"></span>Location:  {{$job->address}}</li>
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
            </div>

            <div class="btn-box">
                <a href="{{route('job-list')}}" class="theme-btn btn-style-one bg-blue"><span class="btn-title">Load More Listing</span></a>
            </div>
        </div>
    </section>
    <!-- End Job Section -->



    <!-- Call To Action -->
    <section class="call-to-action">
        <div class="auto-container">
            <div class="outer-box wow fadeInUp">
                <div class="content-column">
                    <div class="sec-title">
                        <h2>Recruiting Attachees?</h2>
                        <div class="text">Advertise your attachment slots to thousands of  students.</div>
                        <a href="{{ url('login') }}" class="theme-btn btn-style-one bg-blue"><span class="btn-title">Submit Company Profile</span></a>
                    </div>
                </div>

                <div class="image-column" style="background-image: url({{asset('frontend/images/resource/image-1.png')}});">
                    <figure class="image"><img src="{{asset('frontend/images/resource/image-1.png')}}" alt=""></figure>
                </div>
            </div>
        </div>
    </section>
    <!-- End Call To Action -->
@endsection
