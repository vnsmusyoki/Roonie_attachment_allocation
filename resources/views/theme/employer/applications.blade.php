@extends('theme.employer.layouts.main')

@section('main')
<!-- Dashboard -->
<section class="user-dashboard">
    <div class="dashboard-outer">
        <div class="upper-title-box">
            <h3>View Applications</h3>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!-- Ls widget -->
                <div class="ls-widget">
                    <div class="tabs-box">
                       
                        <div class="widget-content">
                            <div class="table-outer">
                                <table class="default-table manage-job-table">
                                    <thead>
                                        <tr>
                                            <th>Applications</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            
                                            <td class="applied">
                                                <a href="{{asset('storage/'.$viewresume->resume)}}" >View CV</a>
                                            </td>
                                            
                                            <td class="status">Active</td>
                                            <td>
                                                <div class="option-box">
                                                    <ul class="option-list">
                                                        <li><a href="#" class="btn btn-success">Approve</a></li>
                                                        <li><a href="#" class="btn btn-success">Reject</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        
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