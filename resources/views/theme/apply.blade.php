@extends('theme.candidate.layouts.main')

@section('main')

    <!-- Dashboard -->
<section class="user-dashboard">
    <div class="dashboard-outer">
        <div class="upper-title-box">
            <h3>Apply Now</h3>
           
        </div>

        <div class="row">
            <div class="col-lg-12">
                <!-- Ls widget -->
                <div class="ls-widget">
                    <div class="tabs-box">
                        <div class="widget-title">
                            <h4>My Application</h4>
                        </div>

                        <div class="widget-content">

                             <form class="default-form" action="{{ route('store-application') }}" method="POST"
                             enctype="multipart/form-data">
                             @csrf
                                <div class="row">


                                    <div class="form-group col-lg-12 col-md-12">
                                        <label>Upload your CV</label>
                                        <input type="file" name="resume" class="form-control @error('resume') is-invalid @enderror">
                                        @error('resume')
                                            <div class="alert alert-danger">{{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-lg-12 col-md-12">
                                        <label>Upload student Attachment Letter</label>
                                        <input type="file" name="attachment_letter"
                                            class="form-control @error('attachment_letter') is-invalid @enderror">
                                        @error('attachment_letter')
                                            <div class="alert alert-danger">{{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <!-- Input -->
                                    <div class="form-group col-lg-12 col-md-12">
                                        <button class="theme-btn btn-style-one">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
<!-- End Dashboard -->

@endsection
