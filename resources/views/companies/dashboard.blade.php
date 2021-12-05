@extends('companies.layout')

@section('content')
    <div class="container-full">


        <!-- Main content -->
        <section class="content">

            <div class="row">

                <div class="col-12">

                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">All Attachments Slots</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example"
                                    class="table table-sm table-bordered table-hover display nowrap margin-top-10 w-p100">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Token</th>
                                            <th>Courses</th>
                                            <th>Timeline</th>
                                            <th>Action</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($attachments->count() >= 1)
                                            @foreach ($attachments as $attachment)
                                                <tr>
                                                    <td>{{ $attachment->job_title }}</td>
                                                    <td>Kshs. {{ $attachment->appreciation_token }}</td>
                                                    <td> {{ $attachment->course }}</td>
                                                    <td>{{ $attachment->attachment_start }} - {{ $attachment->attachment_end }}</td>

                                                    <td>{{ $attachment->updated_at->addHours(3)->format('d-m-y h:i:s a') }}
                                                    </td>

                                                    <td>
                                                        <a href="{{ url('employer/view-attachment-applications', $attachment->id) }}"
                                                            class="btn btn-success">View applications</a>
                                                    </td>
                                                    <td>
                                                        <a href="{{ url('employer/edit-attachment-slot', $attachment->id) }}"
                                                            class="btn btn-success">Edit</a>
                                                    </td>
                                                    <td>

                                                        <a href="{{ url('employer/close-attachment-applications', $attachment->id) }}"
                                                            class="btn btn-warning">Close</a>
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
