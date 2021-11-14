@extends('theme.employer.layouts.main')

@section('main')
<!-- Dashboard -->
<section class="user-dashboard">
    <div class="dashboard-outer">
        <div class="upper-title-box">
            <h3>Manage Jobs</h3>
            <div class="text">Ready to jump back in?</div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <!-- Ls widget -->
                <div class="ls-widget">
                    <div class="tabs-box">
                        <div class="widget-title">
                            <h4>My Job Listings</h4>


                        </div>

                        <div class="widget-content">
                            <div class="table-outer">
                                <table class="default-table manage-job-table">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Applications</th>
                                            <th>Created & Expired</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($job  as $jobs)
                                            <tr>
                                                <td>
                                                    <h6>{{$jobs->job_title}}</h6>
                                                    <span class="info"><i class="icon flaticon-map-locator"></i> {{$jobs->address}}</span>
                                                </td>
                                                <td class="applied"><a href="{{route('applicants')}}">{{$total}}  Applied</a></td>
                                                <td>{{$jobs->created_at->format('d/m/y')}} <br>{{$jobs->date}}</td>
                                                <td class="status">{{$jobs->status}}</td>
                                                <td>
                                                    <div class="option-box">
                                                        <ul class="option-list">
                                                            <li><a href="{{route('closed',$jobs->id)}}"><span
                                                                class="btn btn-danger">Closed Job</span></a></li>
                                                            <li><a href="{{route('activate',$jobs->id)}}"><span
                                                                class="btn btn-success" style="margin-left: 40px;">Activate Job</span></a></li>
                                                        </ul>

                                                    </div>
                                                </td>
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
