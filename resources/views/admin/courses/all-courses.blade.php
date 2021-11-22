@extends('admin.layout')

@section('content')
    <div class="container-full">

        <section class="content">
            <div class="box">
                <div class="box-body">
                    <div class="row">
                        <div class="col">
                            <form action="{{ url('admin/store-new-course') }}" method="post" novalidate>
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <h5>Add New Course<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="courses" name="text"
                                                    class="form-control @error('courses') is-invalid @enderror">
                                            </div>
                                            @error('courses')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                </div>

                                <div class="text-xs-right">
                                    <button type="submit" class="btn btn-rounded btn-info">Submit</button>
                                </div>
                            </form>

                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.box-body -->
            </div>
            <div class="row">

                <div class="col-12">

                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">All Courses Uploaded</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example"
                                    class="table table-sm table-bordered table-hover display nowrap margin-top-10 w-p100">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Date Created</th>
                                            <th>last Update</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($courses->count() >= 1)
                                            @foreach ($courses as $key=>$course)
                                                <tr>
                                                    <td>{{ $course->courses }}</td>
                                                    <td>{{ $course->created_at->addHours(3)->format('d-m-y h:i:s a') }}
                                                    </td>
                                                    <td>{{ $course->updated_at->addHours(3)->format('d-m-y h:i:s a') }}
                                                    </td>

                                                    <td>
                                                        <a href="{{ url('admin/all-courses/edit', $course->id) }}"
                                                            class="btn btn-success">Edit</a>
                                                    </td>
                                                    <td>

                                                        <form action="{{ url('admin/all-courses/delete', $course->id) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-danger" type="submit">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Date Created</th>
                                            <th>last Update</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
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
    </div>
@endsection
