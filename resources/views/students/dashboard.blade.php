@extends('students.layout')

@section('content')
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="page-title">Student Dashboard Analysis</h3>
                </div>

            </div>
        </div>

        <!-- Main content -->
        <section class="content">

            <div class="row">

                <div class="col-12">

                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Applications Progress</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example"
                                    class="table table-sm table-bordered table-hover display nowrap margin-top-10 w-p100">
                                    <thead>
                                        <tr>
                                            <th>Company</th>
                                            <th>Category</th>
                                            <th>Qualification</th>
                                            <th>Status</th>
                                            <th>Location</th>
                                            <th>Opportunity</th>
                                            <th>Cv uploaded</th>
                                            <th>Attachment Letter</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($applications->count() >= 1)
                                            @foreach ($applications as $key=>$application)
                                                <tr>
                                                    <td>{{ ++$key}}</td>
                                                    <td>{{ $application->applicationcompany->company_name }}</td>
                                                    <td>{{ $application->created_at->addHours(3)->format('d-m-y h:i:s a') }}
                                                    </td>
                                                    <td>{{ $application->application_status }}  </td>
                                                    <td>{{ $application->applicationcompany->address }}  </td>
                                                    <td>{{ $application->applicationjob->job_title }}  </td>
                                                    <td><a href="{{ asset('storage/studentcvs/'.$application->uploaded_cv) }}" class="btn btn-sm btn-info" download="">{{ $application->uploaded_cv }}</a> </td>
                                                    <td><a href="{{ asset('storage/attachment_letter/'.$application->attachmentletters) }}" class="btn btn-sm btn-primary" download="">{{ $application->attachment_letter }}</a> </td>

                                                    <td>
                                                        <a href="{{ url('student/edit-application/'.$application->id) }}"
                                                            class="btn btn-success btn-sm">Edit</a>
                                                    </td>
                                                    <td>

                                                        <a href=""
                                                        class="btn btn-danger btn-sm">Cancel</a>
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
