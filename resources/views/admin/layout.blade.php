@extends('admin.main')

@section('main')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="container-full">
                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xl-9 col-12">
                            <div class="row">
                                <div class="col-lg-4 col-12">
                                    <div class="box">
                                        <div class="box-body py-0">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <h5 class="text-fade">Opportunities</h5>
                                                    <h2 class="font-weight-500 mb-0">132.0K</h2>
                                                </div>
                                                <div>
                                                    <div id="revenue1"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-12">
                                    <div class="box">
                                        <div class="box-body py-0">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <h5 class="text-fade">Shortlisted</h5>
                                                    <h2 class="font-weight-500 mb-0">10.9k</h2>
                                                </div>
                                                <div>
                                                    <div id="revenue2"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-12">
                                    <div class="box">
                                        <div class="box-body py-0">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <h5 class="text-fade">On Hold</h5>
                                                    <h2 class="font-weight-500 mb-0">03.1k</h2>
                                                </div>
                                                <div>
                                                    <div id="revenue3"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                

                            </div>
                        </div>


                    </div>
                </section>
                <!-- /.content -->
            </div>
        </div>
@endsection
