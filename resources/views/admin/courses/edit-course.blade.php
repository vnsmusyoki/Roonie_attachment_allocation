@extends('admin.layout')

@section('content')
    <div class="container-full">

        <section class="content">
            <div class="box">
                <div class="box-body">
                    <div class="row">
                        <div class="col">
                            <form action="{{ url('admin/update-new-course/'.$course->id) }}" method="post" novalidate>
                                @csrf
                                @method('PATCH')
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <h5>Edit Course<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="courses" name="text"
                                                    class="form-control @error('courses') is-invalid @enderror" value="{{ $course->courses }}">
                                            </div>
                                            @error('courses')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                </div>

                                <div class="text-xs-right">
                                    <button type="submit" class="btn btn-rounded btn-info">Update Course Name</button>
                                </div>
                            </form>

                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.box-body -->
            </div>


        </section>
    </div>
@endsection
