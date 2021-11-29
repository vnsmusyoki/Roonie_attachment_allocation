@extends('students.layout')
@section('content')
    <div class="container-full">
        <section class="content">

            <div class="row">

                <div class="col-12">

                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">All Applications Notifications</h3>
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
                                    <span class="badge badge-primary">Date updated - {{ $application->updated_at->format('l, d-m-y') }}</span>
                                    <span class="badge badge-danger">Application Status - {{ $application->application_status }}</span>

                                </p>
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
