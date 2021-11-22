@extends('companies.layout')

@section('content')
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="page-title">Upload Attachment Opportunity</h3>
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
                            <form class="default-form" action="{{ url('employer/update_attachment_slots', $task->id) }}"
                                method="post">
                                @csrf
                                @method('PATCH')
                                <div class="row">
                                    <!-- Input -->
                                    <div class="form-group col-lg-6 col-md-12">
                                        <h5>Title/ Name of slot needed</h5>
                                        <div class="controls">
                                            <input type="text" name="attachment_title" placeholder="Invisionn"
                                                class="form-control @error('attachment_title') is-invalid @enderror"
                                                value="{{ $task->job_title }}">
                                            @error('attachment_title')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                    </div>

                                    <!-- Input -->
                                    <div class="form-group col-lg-6 col-md-12">
                                        <h5>Slots Needed</h5>
                                        <div class="controls">
                                            <input type="number" name="attachment_slots" placeholder="1"
                                                value="{{ $task->slots_needed }}"
                                                class="form-control @error('attachment_slots') is-invalid @enderror">
                                            @error('attachment_slots')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                    </div>

                                    <!-- Input -->
                                    <div class="form-group col-lg-6 col-md-12">
                                        <h5>Token</h5>
                                        <div class="controls">
                                            <input type="number" name="appreciation_token" placeholder=""
                                                value="{{ $task->appreciation_token }}"
                                                class="form-control @error('appreciation_token') is-invalid @enderror">
                                            @error('appreciation_token')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                    </div>
                                    <!-- Input -->
                                    <div class="form-group col-lg-6 col-md-12">
                                        <h5>Gender</h5>
                                        <div class="controls">
                                            <select name="gender"
                                                class="form-control @error('gender') is-invalid @enderror">
                                                <option value="">{{ $task->gender }}</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                <option value="Any">Any</option>
                                            </select>
                                            @error('gender')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                    </div>

                                    <div class="form-group col-lg-6 col-md-12">
                                        <h5>Starting from</h5>
                                        <div class="controls">
                                            <input type="month" name="attachment_start" placeholder=""
                                                value="{{ $task->attachment_start }}"
                                                class="form-control @error('attachment_start') is-invalid @enderror">
                                            @error('attachment_start')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="form-group col-lg-6 col-md-12">
                                        <h5>End at</h5>
                                        <div class="controls">
                                            <input type="month" name="attachment_end" placeholder=""
                                                value="{{ $task->attachment_end }}"
                                                class="form-control @error('attachment_end') is-invalid @enderror">
                                            @error('attachment_end')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="form-group col-lg-6 col-md-12">
                                        <h5>Course(s)</h5>
                                        <div class="controls">
                                            <select data-placeholder="courses" name="course[]"
                                                class="form-control multiple @error('course') is-invalid @enderror" multiple
                                                tabindex="4">
                                                <option value="">selected - {{ $task->course }}</option>
                                                @foreach ($courses as $course)
                                                    <option value="{{ $course->courses }}">{{ $course->courses }}
                                                    </option>
                                                @endforeach

                                            </select>
                                            @error('course')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="form-group col-lg-6 col-md-12">
                                        <h5>Category(s)</h5>
                                        <div class="controls">
                                            <select data-placeholder="Categories" name="category[]"
                                                class="form-control multiple @error('category') is-invalid @enderror"
                                                multiple tabindex="4">
                                                <option value="">
                                                    <h6 class="text-danger">selected - {{ $task->job_category }}</h6>
                                                </option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->name }}">{{ $category->name }}
                                                    </option>
                                                @endforeach

                                            </select>
                                            @error('category')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                    </div>
                                    <!-- About Company -->
                                    <div class="form-group col-lg-12 col-md-12">
                                        <h5>Task Description</h5>
                                        <div class="controls">
                                            <textarea name="task_description" rows="5" class="form-control"
                                                placeholder="describe task description here">{{ $task->job_description }}</textarea>
                                            @error('task_description')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-12">
                                        <h5>Task Requirements/Qualifications Needed</h5>
                                        <div class="controls">
                                            <textarea name="requirements_needed" rows="5" class="form-control"
                                                placeholder="describe task description here">{{ $task->qualification }}</textarea>
                                            @error('requirements_needed')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-12">
                                        <h5>Additional Information (optional)</h5>
                                        <div class="controls">
                                            <textarea name="additional_information" rows="5" class="form-control"
                                                placeholder="describe task description here">{{ $task->additional_information }}</textarea>
                                            @error('additional_information')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>


                                    <!-- Input -->
                                    <div class="form-group col-lg-6 col-md-12">
                                        <button type="submit" class="btn btn-primary">Update Attachment
                                            Slots</button>
                                    </div>
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
