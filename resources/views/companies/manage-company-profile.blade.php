@extends('companies.layout')

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
                            <form class="default-form" action="{{ url('employer/upload_company_profile') }}"
                                method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <h5>Company Logo</h5>
                                    <div class="controls">
                                        <input class="form-control @error('logo') is-invalid @enderror" type="file"
                                            name="logo" value="{{ old('logo') }}" />
                                        @error('logo')
                                            <div class="alert alert-danger">{{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- Input -->
                                    <div class="form-group col-lg-6 col-md-12">
                                        <h5>Company name </h5>
                                        <div class="controls">
                                            <input type="text" name="company_name" placeholder="Invisionn"
                                                class="form-control @error('company_name') is-invalid @enderror"
                                                value="{{ $company->company_name }}">
                                            @error('company_name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                    </div>

                                    <!-- Input -->
                                    <div class="form-group col-lg-6 col-md-12">
                                        <h5>Email address</h5>
                                        <div class="controls">
                                            <input type="text" name="company_email" placeholder="creativelayers"
                                                value="{{ $company->company_email }}"
                                                class="form-control @error('company_email') is-invalid @enderror">
                                            @error('company_email')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                    </div>

                                    <!-- Input -->
                                    <div class="form-group col-lg-6 col-md-12">
                                        <h5>Phone Number</h5>
                                        <div class="controls">
                                            <input type="text" name="phone" placeholder="+254 723 456 789"
                                                value="0{{ $company->phone }}"
                                                class="form-control @error('phone') is-invalid @enderror">
                                            @error('phone')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                    </div>
                                    <!-- Input -->
                                    <div class="form-group col-lg-6 col-md-12">
                                        <h5>Website</h5>
                                        <div class="controls">
                                            <input type="text" name="website_name" placeholder="www.invision.com"
                                                value="{{ $company->website_name }} "
                                                class="form-control @error('website_name') is-invalid @enderror">
                                            @error('website_name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- Search Select -->
                                    <div class="form-group col-lg-6 col-md-12">
                                        <h5>Areas we Specialise in</h5>
                                        <div class="controls">
                                            <select data-placeholder="Categories" name="category[]"
                                                class="form-control multiple @error('category') is-invalid @enderror"
                                                multiple tabindex="4">
                                                <option value="">selected - {{ $company->category }}</option>
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
                                    <!-- Input -->
                                    <div class="form-group col-lg-6 col-md-12">
                                        <h5>Team Size</h5>
                                        <div class="controls">
                                            <select name="team_size"
                                                class="form-control @error('team_size') is-invalid @enderror">
                                                <option value="">Selected - {{ $company->team_size }}</option>
                                                <option value="50 - 100">50 - 100</option>
                                                <option value="100 - 150">100 - 150</option>
                                                <option value="200 - 250">200 - 250</option>
                                                <option value="300 - 350">300 - 350</option>
                                                <option value="500 - 1000">500 - 1000</option>
                                            </select>
                                            @error('team_size')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                    </div>
                                    <!-- About Company -->
                                    <div class="form-group col-lg-12 col-md-12">
                                        <h5>About Company</h5>
                                        <div class="controls">
                                            <textarea type="text" name="about_company" rows="5" class="form-control"
                                                placeholder="describe about the company here">{{ $company->about_company }}</textarea>
                                            @error('about_company')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-xl-6">
                                            <!-- Ls widget -->
                                            <div class="ls-widget">
                                                <div class="tabs-box">
                                                    <div class="widget-title">
                                                        <h4>Social Network</h4>
                                                    </div>

                                                    <div class="widget-content">
                                                        <div class="row">
                                                            <!-- Input -->
                                                            <div class="form-group col-lg-12 col-md-12">
                                                                <h5>Facebook</h5>
                                                                <div class="controls">
                                                                    <input type="text" name="facebook_link"
                                                                        value="{{ $company->facebook_link }}"
                                                                        class="form-control"
                                                                        placeholder="www.facebook.com/Invision">
                                                                    @error('facebook_link')
                                                                        <div class="alert alert-danger">{{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>

                                                            </div>

                                                            <!-- Input -->
                                                            <div class="form-group col-lg-12 col-md-12">
                                                                <h5>Twitter</h5>
                                                                <div class="controls">
                                                                    <input type="text" class="form-control"
                                                                        value="{{ $company->twitter_link }}"
                                                                        name="twitter_link" placeholder="">
                                                                    @error('twitter_link')
                                                                        <div class="alert alert-danger">{{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-xl-6">
                                            <!-- Ls widget -->
                                            <div class="ls-widget">
                                                <div class="tabs-box">
                                                    <div class="widget-title">
                                                        <h4>Contact Information</h4>
                                                    </div>

                                                    <div class="widget-content">
                                                        <div class="row">
                                                            <!-- Input -->
                                                            <div class="form-group col-lg-12 col-md-12">
                                                                <h5>County</h5>
                                                                <div class="controls">
                                                                    <select name="county"
                                                                        class="form-control @error('county') is-invalid @enderror">
                                                                        <option value="">selected -{{ $company->country }}</option>
                                                                        <option value="Mombasa">Mombasa</option>
                                                                        <option value="Lamu">Lamu</option>
                                                                        <option value="Malindi">Malindi</option>
                                                                        <option value="Nairobi">Nairobi</option>
                                                                        <option value="Meru">Meru</option>
                                                                    </select>
                                                                    @error('county')
                                                                        <div class="alert alert-danger">{{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>

                                                            </div>

                                                            <!-- Input -->
                                                            <div class="form-group col-lg-12 col-md-12">
                                                                <h5>City</h5>
                                                                <div class="controls">
                                                                    <select name="city"
                                                                        class="form-control @error('city') is-invalid @enderror">
                                                                        <option value="">selected- {{ $company->city }}</option>
                                                                        <option value="Nairobi">Nairobi</option>
                                                                        <option value="Mombasa">Mombasa</option>
                                                                        <option value="Kisumu">Kisumu</option>
                                                                        <option value="Meru">Meru</option>
                                                                        <option value="Naivasha">Naivasha</option>
                                                                    </select>
                                                                    @error('city')
                                                                        <div class="alert alert-danger">{{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>

                                                            </div>

                                                            <!-- Input -->
                                                            <div class="form-group col-lg-12 col-md-12">
                                                                <h5>Complete Address</h5>
                                                                <div class="controls">
                                                                    <input type="text" name="address" class="form-control"
                                                                        value="{{ $company->address }}"
                                                                        placeholder="329 Nairobi Street, Luthuli Avenue.">
                                                                    @error('address')
                                                                        <div class="alert alert-danger">{{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>

                                                            </div>



                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>






                                    <!-- Input -->
                                    <div class="form-group col-lg-6 col-md-12">
                                        <button type="submit" class="btn btn-rounded btn-info">Update Company Profile</button>
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
