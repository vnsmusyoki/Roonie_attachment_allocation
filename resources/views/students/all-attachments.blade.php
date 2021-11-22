@extends('students.layout')
@section('content')
    <div class="container-full">
        <section class="content">

            <div class="row">

                <div class="col-12">

                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">All Categories Uploaded</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example"
                                    class="table table-sm text-sm table-bordered table-hover display nowrap margin-top-10 w-p100">
                                    <thead>
                                        <tr>

                                            <th>Title</th>
                                            <th>Category</th>
                                            <th>Course</th>
                                            <th>Gender</th>
                                            <th>Slots Available</th>
                                            <th>Token</th>
                                            <th>Uploaded</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($categories->count() >= 1)
                                            @foreach ($categories as $key => $category)
                                                <tr>

                                                    <td>{{ $category->job_title }}</td>
                                                    <td>{{ $category->job_category }}</td>
                                                    <td>{{ $category->course }}</td>
                                                    <td>{{ $category->gender }}</td>
                                                    <td>{{ $category->slots_needed }}</td>
                                                    <td>Kshs. {{ $category->appreciation_token }}</td>
                                                    <td>{{ $category->created_at->addHours(3)->format('d-m-y h:i:s a') }}
                                                    </td>
                                                     
                                                    <td>
                                                        <a href="{{ url('student/all-attachments/apply', $category->id) }}"
                                                            class="btn btn-success">Apply/View</a>
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
