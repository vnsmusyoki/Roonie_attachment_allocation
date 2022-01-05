@extends('students.layout')
@section('content')
    <div class="container-full">
        <section class="content">

            <div class="row">

                <div class="col-12">

                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">All Applications Uploaded</h3>
                        </div>
                    </div>
                    <!-- /.box -->
                    @if ($applications->count() >= 1)
                        @foreach ($applications as $application)
                            <div class="box">
                                <div class="box-header with-border">
                                    <h3 class="box-title"><strong>{{ $application->applicationjob->job_title }}</strong>
                                    </h3>
                                </div>
                                <div class="box-body">
                                    <p>{{ str_limit(strip_tags($application->student_description), 450) }}

                                    @if (strlen(strip_tags($application->student_description)) > 450)
                                      ... <a href="{{ url('student/my-applications/'.$application->id) }}" class="btn btn-info btn-sm">Open Application</a>
                                    @endif
                                </p>
                                <p>
                                    <span class="badge badge-primary">Date applied - {{ $application->created_at->format('l, d-m-y') }}</span>
                                    <span class="badge badge-danger">Application Status - {{ $application->application_status }}</span>
                                    <span class="badge badge-warning">Company - {{ $application->applicationcompany->company_name }}</span>
                                    <span class="badge badge-info">Company Location - {{ $application->applicationcompany->address }}</span>
                                </p>
                                <p>
                                    @if ($application->application_status == "Shortlisted")
                                    <a href="{{ url('student/accept-offer/'.$application->id)}}" class="badge badge-success">Accept Offer</a>
                                    <a href="{{ url('student/reject-offer/'.$application->id)}}" class="badge badge-danger">Reject </a>
                                    @endif


                                </div>
                            </div>
                        @endforeach

                    @endif

                </div>
            </div>

        </section>
        <!-- /.content -->
    </div>
@endsection
