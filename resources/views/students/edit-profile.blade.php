@extends('students.layout')

@section('content')
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="page-title">Update Profile</h3>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <section class="content">

            <!-- Basic Forms -->
            <div class="box">
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col">
                            <form action="{{ url('student/edit_profile') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <h5>Current School<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select name="school_name"
                                                    class="form-control @error('school_name') is-invalid @enderror">
                                                    <option value="">select</option>
                                                    <option value="Meru University of Science and technology">Meru
                                                        University of Science and Technlogy</option>
                                                    <option value="Kenyatta University">Kenyatta University</option>
                                                </select>
                                            </div>
                                            @error('school_name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <h5>Course Studying<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select name="course_studying"
                                                    class="form-control @error('course_studying') is-invalid @enderror">
                                                    <option value="">select</option>
                                                    <option value="Information Technlogy">Information Technology</option>
                                                    <option value="Computer Science">Computer Science</option>
                                                    <option value="Acturial Science">Acturial Science</option>
                                                </select>
                                            </div>
                                            @error('course_studying')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <h5>Current year of Study<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select name="year_of_study" id=""
                                                    class="form-control @error('year_of_study') is-invalid @enderror">
                                                    <option value="">select</option>
                                                    <option value="Year 1">Year 1</option>
                                                    <option value="Year 2">Year 2</option>
                                                    <option value="Year 3">Year 3</option>
                                                    <option value="Year 4">Year 4</option>
                                                    <option value="Year 5">Year 5</option>
                                                    <option value="Year 6">Year 6</option>
                                                </select>
                                            </div>
                                            @error('year_of_study')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <h5>Profile Picture<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="file" name="picture"
                                                    class="form-control @error('picture') is-invalid @enderror">
                                            </div>
                                            @error('picture')
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
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>
@endsection
