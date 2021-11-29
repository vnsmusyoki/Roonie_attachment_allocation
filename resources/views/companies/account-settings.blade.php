@extends('companies.layout')

@section('content')
    <div class="container-full">

        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="page-title">Update Account Profile</h3>
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
                            <form class="default-form" action="{{ url('employer/upload_company_profile') }}"
                                method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <!-- Input -->
                                    <div class="form-group col-lg-6 col-md-12">
                                        <h5>Full Names </h5>
                                        <div class="controls">
                                            <input type="text" name="name" placeholder="Invisionn"
                                                class="form-control @error('name') is-invalid @enderror"
                                                value="{{ Auth::user()->name }}">
                                            @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                    </div>

                                    <!-- Input -->
                                    <div class="form-group col-lg-6 col-md-12">
                                        <h5>Email address</h5>
                                        <div class="controls">
                                            <input type="text" name="email" placeholder="creativelayers"
                                                value="{{ Auth::user()->email }}"
                                                class="form-control @error('email') is-invalid @enderror">
                                            @error('email')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                    </div>

                                    <!-- Input -->
                                    <div class="form-group col-lg-6 col-md-12">
                                        <h5>Password</h5>
                                        <div class="controls">
                                            <input type="password" name="password" placeholder="+254 723 456 789"
                                                class="form-control @error('password') is-invalid @enderror">
                                            @error('password')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                    </div>
                                    <!-- Input -->
                                    <div class="form-group col-lg-6 col-md-12">
                                        <h5>Confirm Password</h5>
                                        <div class="controls">
                                            <input type="password" name="password_confirmation"
                                                placeholder="www.invision.com"
                                                class="form-control @error('password_confirmation') is-invalid @enderror">
                                            @error('password_confirmation')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-6 col-md-12">
                                        <button type="submit" class="btn btn-rounded btn-info">Submit</button>
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
