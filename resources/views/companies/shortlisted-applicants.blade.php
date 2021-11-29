@extends('companies.layout')

@section('content')
    <div class="container-full">


        <!-- Main content -->
        <section class="content">

            <div class="row">

                <div class="col-12">

                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">All Shortlisted Slots</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example"
                                    class="table table-sm table-bordered table-hover display nowrap margin-top-10 w-p100">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Full Names</th>
                                            <th>Email Address</th>
                                            <th>Opportunity</th>
                                            <th>Date Shortlisted</th>
                                            <th>Timeline</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($applications->count() >= 1)
                                            @foreach ($applications as $key => $application)
                                                <tr>
                                                    <td>{{ ++$key }}</td>

                                                    <td>{{ $application->applicationstudent->name }}</td>
                                                    <td>{{ $application->applicationstudent->email }}</td>
                                                    <td>{{ $application->applicationjob->job_title }}</td>
                                                    <td>{{ $application->updated_at->format('d-m-y') }}</td>
                                                    <td> {{ $application->applicationjob->attachment_start }}
                                                        -{{ $application->applicationjob->attachment_end }} </td>
                                                    <td>
                                                        <a href="{{ url('employer/view-shortlisted-application', $application->id) }}"
                                                            class="btn btn-success">View application</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>

                                </table>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
            </div>

        </section>
        <!-- /.content -->
    </div>
@endsection
