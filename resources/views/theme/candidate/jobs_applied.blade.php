@extends('theme.candidate.layouts.main')

@section('main')
    <!-- Dashboard -->
    <section class="user-dashboard">
        <div class="dashboard-outer">
            <div class="upper-title-box">
                <h3>Applied Jobs</h3>
                <div class="text">Ready to jump back in?</div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Ls widget -->
                    <div class="ls-widget">
                        <div class="tabs-box">
                            <div class="widget-title">
                                <h4>My Applied Jobs</h4>
                            </div>

                            <div class="widget-content">
                                <div class="table-outer">
                                    <table class="default-table manage-job-table">
                                        <thead>
                                            <tr>
                                                <th>Job Title</th>
                                                <th>Date Applied</th>
                                                <th>Status</th>

                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($applied as $apply)
                                                <tr>
                                                    <td>
                                                        <!-- Job Block -->
                                                        <div class="job-block">
                                                            <div class="inner-box">
                                                                <div class="content">
                                                                    <span class="company-logo"><img
                                                                            src="images/resource/company-logo/1-1.png"
                                                                            alt=""></span>
                                                                    <h4><a href="#">{{$apply->jobs->job_title}}</a></h4>
                                                                    <ul class="job-info">
                                                                        <li><span class="icon flaticon-briefcase"></span>
                                                                            {{$apply->jobs->salary}}</li>
                                                                        <li><span class="icon flaticon-map-locator"></span>
                                                                            {{$apply->jobs->city}}</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>{{$apply->created_at->format('d/m/Y')}}</td>
                                                    <td class="status">{{$apply->jobs->status}}</td>

                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
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
