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
                                            <th>Date Applied</th>
                                            <th>Cv uploaded</th>
                                            <th>Attachment Letter</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- @if ($categories->count() >= 1)
                                            @foreach ($categories as $category)
                                                <tr>
                                                    <td>{{ $category->id }}</td>
                                                    <td>{{ $category->name }}</td>
                                                    <td>{{ $category->created_at->addHours(3)->format('d-m-y h:i:s a') }}
                                                    </td>
                                                    <td>{{ $category->updated_at->addHours(3)->format('d-m-y h:i:s a') }}
                                                    </td>

                                                    <td>
                                                        <a href="{{ route('category.edit', $category->id) }}"
                                                            class="btn btn-success">Edit</a>
                                                    </td>
                                                    <td>

                                                        <form action="{{ route('category.destroy', $category->id) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-danger" type="submit">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif --}}
                                    </tbody>
                                     
                                </table>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
            </div>
            <!-- /.box -->
            <div class="card">
                <div class="card-header bg-primary">
                    <h3>Student Profile</h3>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-xs-12 col-sm-12"></div>
                        <div class="col-lg-8 col-md-8 col-xs-12 col-sm-12">
                            <table class="table table-bordered table-sm">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Item</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Full Names</td>
                                        <td>{{ Auth::user()->name }}</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Email Address</td>
                                        <td>{{ Auth::user()->email }}</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Course</td>
                                        <td>{{ $completeddata->course }}</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>School</td>
                                        <td>{{ $completeddata->school }}</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Year of Study</td>
                                        <td>{{ $completeddata->year_of_study }}</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Date created account</td>
                                        <td>{{ $completeddata->created_at->addHours(3)->format('l. d-m-y, h:i:s a') }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-lg-2 col-md-2 col-xs-12 col-sm-12"></div>
                    </div>


                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
