@extends('companies.layout')
@section('title', 'APply for this opportunity')
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
                <div class="col-lg-6">

                    <center>
                        <p><strong>Student Data</strong></p>
                    </center>
                    <hr>
                    <p><span>Student Name</span>: <span><strong>{{ $attachment->applicationstudent->name }}</strong></span></p>
                    <p><span>Student Email</span>: <span><strong>{{ $attachment->applicationstudent->email }}</strong></span></p>
                    <p><span>Student School</span>: <span><strong>{{ $student->school }}</strong></span></p>
                    <p><span>Course </span>: <span><strong>{{ $student->course }}</strong></span></p>
                    <p><span>Year of Study </span>: <span><strong>{{ $student->year_of_study }}</strong></span></p>
                    <p><span>Student Description</span></p>
                    <hr>
                    <p>{{ $attachment->student_description }}</p>
                    <br>
                    <p><span class="text-danger">uploaded cv</span></p>
                    <a href="{{ asset('storage/studentcvs/' . $attachment->uploaded_cv) }}"
                        class="btn btn-sm btn-block btn-info" download="">{{ $attachment->uploaded_cv }}</a>
                    <hr>
                    <p><span class="text-danger">Attachment Letter</span></p>
                    <a href="{{ asset('storage/attachment_letter/' . $attachment->attachmentletters) }}"
                        class="btn btn-sm btn-block btn-primary" download="">{{ $attachment->attachment_letter }}</a>
                    <hr>
                    <a href="{{ url('employer/accept-student-application/'.$attachment->id)}}"  class="btn btn-rounded btn-danger">Accept Attachment
                        Application</a>
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
