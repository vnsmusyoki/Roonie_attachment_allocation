@extends('students.layout')

@section('content')
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="page-title">Student Profile</h3>
                </div>

            </div>
        </div>

        <!-- Main content -->
        <section class="content">


            <!-- /.box -->
            <div class="card">
                <div class="card-header bg-primary">
                    <h3>My Profile</h3>
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
