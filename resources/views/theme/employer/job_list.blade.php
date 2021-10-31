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

                            <div class="chosen-outer">
                                 <!--Tabs Box-->
                                 <select class="chosen-select">
                                    <option>Last 6 Months</option>
                                    <option>Last 12 Months</option>
                                    <option>Last 16 Months</option>
                                    <option>Last 24 Months</option>
                                    <option>Last 5 year</option>
                                </select>
                            </div>
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
                                        <tr>
                                            <td>
                                                <h6>Senior Full Stack Engineer, Creator Success</h6>
                                                <span class="info"><i class="icon flaticon-map-locator"></i> London, UK</span>
                                            </td>
                                            <td class="applied"><a href="#">3+ Applied</a></td>
                                            <td>October 27, 2017 <br>April 25, 2011</td>
                                            <td class="status">Active</td>
                                            <td>
                                                <div class="option-box">
                                                    <ul class="option-list">
                                                        <li><button data-text="View Aplication"><span class="la la-eye"></span></button></li>
                                                        <li><button data-text="Reject Aplication"><span class="la la-pencil"></span></button></li>
                                                        <li><button data-text="Delete Aplication"><span class="la la-trash"></span></button></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6>Senior Product Designer</h6>
                                                <span class="info"><i class="icon flaticon-map-locator"></i> London, UK</span>
                                            </td>
                                            <td class="applied"><a href="#">3+ Applied</a></td>
                                            <td>October 27, 2017 <br>April 25, 2011</td>
                                            <td class="status">Active</td>
                                            <td>
                                                <div class="option-box">
                                                    <ul class="option-list">
                                                        <li><button data-text="View Aplication"><span class="la la-eye"></span></button></li>
                                                        <li><button data-text="Reject Aplication"><span class="la la-pencil"></span></button></li>
                                                        <li><button data-text="Delete Aplication"><span class="la la-trash"></span></button></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6>Sr. Full Stack Engineer</h6>
                                                <span class="info"><i class="icon flaticon-map-locator"></i> London, UK</span>
                                            </td>
                                            <td class="applied"><a href="#">3+ Applied</a></td>
                                            <td>October 27, 2017 <br>April 25, 2011</td>
                                            <td class="status">Active</td>
                                            <td>
                                                <div class="option-box">
                                                    <ul class="option-list">
                                                        <li><button data-text="View Aplication"><span class="la la-eye"></span></button></li>
                                                        <li><button data-text="Reject Aplication"><span class="la la-pencil"></span></button></li>
                                                        <li><button data-text="Delete Aplication"><span class="la la-trash"></span></button></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6>Product Manager, Studio</h6>
                                                <span class="info"><i class="icon flaticon-map-locator"></i> London, UK</span>
                                            </td>
                                            <td class="applied"><a href="#">3+ Applied</a></td>
                                            <td>October 27, 2017 <br>April 25, 2011</td>
                                            <td class="status">Active</td>
                                            <td>
                                                <div class="option-box">
                                                    <ul class="option-list">
                                                        <li><button data-text="View Aplication"><span class="la la-eye"></span></button></li>
                                                        <li><button data-text="Reject Aplication"><span class="la la-pencil"></span></button></li>
                                                        <li><button data-text="Delete Aplication"><span class="la la-trash"></span></button></li>
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
