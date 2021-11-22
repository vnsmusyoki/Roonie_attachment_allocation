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
                                    class="table table-sm table-bordered table-hover display nowrap margin-top-10 w-p100">
                                    <thead>
                                        <tr> 
                                            <th>Company</th>
                                            <th>Title</th>
                                            <th>Category</th>
                                            <th>Qualifications</th>
                                            <th>Uploaded</th>
                                            <th>Location</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($categories->count() >= 1)
                                            @foreach ($categories as $key => $category)
                                                <tr>
                                                    <td>{{ $category->company_id }}</td>
                                                    <td>{{ $category->job_title }}</td>
                                                    <td>{{ $category->job_category }}</td>
                                                    <td>{{ $category->qualification }}</td>
                                                    <td>{{ $category->created_at->addHours(3)->format('d-m-y h:i:s a') }}
                                                    </td>
                                                    <td>{{ $category->city }} - {{ $category->address }}</td>

                                                    <td>
                                                        <a href="{{ url('student/all-attachments/apply', $category->id) }}"
                                                            class="btn btn-success">Apply/View</a>
                                                    </td>

                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Company</th>
                                            <th>Title</th>
                                            <th>Category</th>
                                            <th>Qualifications</th>
                                            <th>Uploaded</th>
                                            <th>Location</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
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
