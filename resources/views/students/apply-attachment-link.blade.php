@extends('students.layout')

@section('content')
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="page-title">Attachment Opportunity Analysis</h3>
                </div>

            </div>
        </div>

        <!-- Main content -->
        <section class="content">

            <div class="row">
                <div class="col-lg-6">
                    <img src="{{ asset('storage/companylogos/' . $company->logo) }}" class="img-fluid" alt="">
                    <center>
                        <p><strong>{{ $company->company_name }}</strong></p>
                    </center>
                    <h6>Address & Contacts</h6>
                    <hr>
                    <p><span>Email Address</span>: <span><strong>{{ $company->company_email }}</strong></span></p>
                    <p><span>Phone Number</span>: <span><strong>{{ $company->phone }}</strong></span></p>
                    <p><span>Website Link</span>: <span><strong>{{ $company->website_name }}</strong></span></p>
                    <p><span>Company Size</span>: <span><strong>{{ $company->team_size }}</strong></span></p>
                    <p><span>Category </span>: <span><strong>{{ $company->category }}</strong></span></p>
                    <p><span>County Located</span>: <span><strong>{{ $company->country }}</strong></span></p>
                    <p><span>City/Town</span>: <span><strong>{{ $company->city }}</strong></span></p>
                    <p><span>Facebook Link</span>: <span><strong>{{ $company->facebook_link }}</strong></span></p>
                    <p><span>Twitter Link</span>: <span><strong>{{ $company->twitter_link }}</strong></span></p>
                    <p><span>Brief Company Description</span>:</p>
                    <hr>
                    <p> <span>{{ $company->about_company }}</span></p>
                </div>
                <div class="col-lg-6">
                    <h6>Task requiremnets</h6>
                    <hr>
                    <p><span>Vacant Available</span>: <span><strong>{{ $job->job_title }}</strong></span></p>
                    <p><span>Slots Available</span>: <span><strong>{{ $job->slots_needed }}</strong></span></p>
                    <p><span>Appreciation Token</span>: <span><strong>Kshs.
                                {{ $job->appreciation_token }}</strong></span></p>
                    <p><span>Courses Required</span>: <span><strong>{{ $job->course }}</strong></span></p>
                    <p><span>Attachment Timeline</span>: <span><strong>{{ $job->attachment_start }} -
                                {{ $job->attachment_end }}</strong></span></p>
                    <p><span>Gender</span>: <span><strong>{{ $job->gender }}</strong></span></p>
                    <p><span>Minimum Qualifications</span>: <span>
                            <br><strong>{{ $job->qualification }}</strong></span></p>
                    <hr>
                    <p><span>Attachment Status</span>: <span><strong>{{ $job->attachment_status }}</strong></span></p>
                    <p><span>Task Description</span>: <span>
                            <br><strong>{{ $job->job_description }}</strong></span></p>
                    <hr>
                    <p><span>Additional Information</span>: <span>
                            <br><strong>{{ $job->additional_information }}</strong></span>
                        <hr>
                    </p>
                </div>
            </div>
            <br>
            <hr>
            <!-- Basic Forms -->
            <div class="box jumbotron">
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col">
                            <form action="{{ url('student/apply_attachment') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">


                                    <div class="col-12">
                                        <div class="form-group">
                                            <h5>Attachment Letter<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="file" name="attachment_letter"
                                                    class="form-control @error('attachment_letter') is-invalid @enderror">
                                            </div>
                                            @error('attachment_letter')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <h5>Upload Your CV<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="file" name="picture"
                                                    class="form-control @error('picture') is-invalid @enderror">
                                            </div>
                                            @error('picture')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <h5>Description</h5><span class="text-danger">*</span></h5>
                                            <div class="controls">

                                                    <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="" cols="30" rows="10" placeholder="Justify to us why you really need this attachment opportunity"></textarea>
                                            </div>
                                            @error('description')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <input type="hidden" name="attachmenttask" value="{{ $job->id }}">
                                </div>

                                <div class="text-xs-right">
                                    <button type="submit" class="btn btn-rounded btn-info">Submit Attachment Application</button>
                                </div>
                            </form>

                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </section>
        <!-- /.content -->
    </div>
@endsection
