@extends('companies.layout')

@section('content')
    <div class="container-full">


        <!-- Main content -->
        <section class="content">

            <div class="row">

                <div class="col-12">

                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">All Applications For -<strong>{{ $opportunity->job_title }}</strong>
                                Slots</h3>
                        </div>
                    </div>
                    <!-- /.box -->
                    @if ($applications->count() >= 1)
                        @foreach ($applications as $application)
                            <div class="box">
                                <div class="box-header with-border">
                                    <img src="{{ asset('storage/studentprofiles/'.$application->applicationstudent->picture) }}" alt="" style="width:80px;height:80px;border-radius:50%;">
                                    <h3 class="box-title">{{ $application->applicationstudent->name }}</h3>
                                    <h6 class="box-title">{{ $application->applicationstudent->email }}</h6>
                                </div>
                                <div class="box-body">
                                    <p>{{ str_limit(strip_tags($application->student_description), 450) }}

                                        @if (strlen(strip_tags($application->student_description)) > 450)
                                          ... <a href="{{ url('employer/task-view-application/'.$application->id) }}" class="btn btn-info btn-sm">Open Application</a>
                                        @endif
                                    </p>
                                    <p>
                                        <span class="badge badge-primary">Date applied - {{ $application->created_at->format('l, d-m-y') }}</span>
                                        <span class="badge badge-danger">Application Status - {{ $application->application_status }}</span>
                                        <a href="{{ asset('storage/studentcvs/'.$application->uploaded_cv) }}" class="badge badge-warning" download="{{$application->applicationstudent->name }} ">Attachment Letter - {{ $application->applicationcompany->company_name }}</a>
                                        <a href="{{ url('employer/task-view-application/'.$application->id) }}" class="badge badge-info">Open Application Details</a>
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
