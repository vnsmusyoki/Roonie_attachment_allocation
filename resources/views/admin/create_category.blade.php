@extends('admin.layout')

@section('content')

    <div class="container-full">
        <section class="content">

            <!-- Basic Forms -->
            <div class="box">
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col">
                            <form action="{{ route('category.store') }}" method="post" novalidate>
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <h5>Category Name<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="name" name="text"
                                                    class="form-control @error('name') is-invalid @enderror">
                                            </div>
                                            @error('name')
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
