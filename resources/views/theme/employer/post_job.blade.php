@extends('theme.employer.layouts.main')

@section('main')
    <!-- Dashboard -->
    <section class="user-dashboard">
        <div class="dashboard-outer">
            <div class="upper-title-box">
                <h3>Post a New Job!</h3>
                <div class="text">Ready to jump back in?</div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Ls widget -->
                    <div class="ls-widget">
                        <div class="tabs-box">
                            <div class="widget-title">
                                <h4>Post Job</h4>
                            </div>

                            <div class="widget-content">

                                <div class="post-job-steps">
                                    <div class="step">
                                        <span class="icon flaticon-briefcase"></span>
                                        <h5>Job Detail</h5>
                                    </div>

                                    <div class="step">
                                        <span class="icon flaticon-money"></span>
                                        <h5>Package & Payments</h5>
                                    </div>

                                    <div class="step">
                                        <span class="icon flaticon-checked"></span>
                                        <h5>Confirmation</h5>
                                    </div>
                                </div>

                                @include('sweetalert::alert')

                                <form class="default-form" action="{{route('manage.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <!-- Input -->
                                        <div class="form-group col-lg-12 col-md-12">
                                            <label>Job Title</label>
                                            <input type="text" name="job_title" placeholder="Title" class="@error('job_title') is-invalid @enderror">
                                            @error('job_title')
                                            <div class="alert alert-danger">{{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-lg-12 col-md-12">
                                            <label>company logo</label>
                                           <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" >
                                            @error('image')
                                            <div class="alert alert-danger">{{ $message }}
                                            </div>
                                            @enderror
                                        </div>

                                        <!-- About Company -->
                                        <div class="form-group col-lg-12 col-md-12">
                                            <label>Job Description</label>
                                            <textarea name="job_description"
                                                placeholder="Job Description"></textarea>
                                        </div>


                                        <div class="form-group col-lg-6 col-md-12">
                                            <label>Job Category</label>
                                            <select class="chosen-select @error('job_category') is-invalid @enderror" name="job_category">
                                                <option value="">Select Category</option>
                                                @foreach ($categories as $procat)
                                                <option value="{{$procat->name}}" name="job_category">{{$procat->name}}</option>
                                                @endforeach
                                               
                                                {{-- @foreach($categories as $country)
                                                    <option value="{{ $country->name }}" >{{ $country->name }}</option>
                                                @endforeach --}}
                                            </select>
                                            @error('job_category')
                                            <div class="alert alert-danger">{{ $message }}
                                            </div>
                                            @enderror
                                        </div>

                                        <!-- Input -->
                                        <div class="form-group col-lg-6 col-md-12">
                                            <label>Offered Salary</label>
                                            <select class="chosen-select @error('salary') is-invalid @enderror" name="salary">
                                                <option value="">Select</option>
                                                <option value="15000">KSH 15000</option>
                                                <option value="20000">KSH 20000</option>
                                                <option value="25000">KSH 25000</option>
                                                <option value="35000">KSH 35000</option>
                                                <option value="45000">KSH 45000</option>
                                                <option value="50000">KSH 50000</option>
                                            </select>
                                            @error('salary')
                                            <div class="alert alert-danger">{{ $message }}
                                            </div>
                                            @enderror
                                        </div>


                                        <div class="form-group col-lg-6 col-md-12">
                                            <label>Gender</label>
                                            <select class="chosen-select @error('gender') is-invalid @enderror" name='gender'>
                                                <option value="">Select</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                <option value="Any">Other</option>
                                            </select>
                                            @error('gender')
                                            <div class="alert alert-danger">{{ $message }}
                                            </div>
                                            @enderror
                                        </div>

                                        <div class="form-group col-lg-6 col-md-12">
                                            <label>Industry</label>
                                            <select class="chosen-select @error('industry') is-invalid @enderror" name="industry">
                                                <option value="">Select</option>
                                                <option value="Manufacturing">Manufacturing</option>
                                                <option value="Agriculture">Agriculture</option>
                                                <option value="Tourism">Tourism</option>
                                                <option value="Financial services">Financial services</option>
                                                <option value="Energy">Energy</option>
                                                <option value="Software">Software</option>
                                            </select>
                                            @error('industry')
                                            <div class="alert alert-danger">{{ $message }}
                                            </div>
                                            @enderror
                                        </div>

                                        <div class="form-group col-lg-12 col-md-12">
                                            <label>Qualification</label>
                                            <textarea type="text" name="qualification" class="@error('qualification') is-invalid @enderror" placeholder="provide the job qualification here"></textarea>
                                            @error('qualification')
                                            <div class="alert alert-danger">{{ $message }}
                                            </div>
                                            @enderror
                                        </div>

                                        <!-- Input -->
                                        <div class="form-group col-lg-12 col-md-12">
                                            <label>Application Deadline Date</label>
                                            <input type="date" name="date" placeholder="06.04.2020" class="form-control @error('date') is-invalid @enderror">
                                            @error('date')
                                            <div class="alert alert-danger">{{ $message }}
                                            </div>
                                            @enderror
                                        </div>


                                        <!-- Input -->
                                        <div class="form-group col-lg-12 col-md-12">
                                            <label>City</label>
                                            <select class="chosen-select" name="city"
                                                class="@error('city') is-invalid @enderror">
                                                <option value="">Select</option>
                                                <option value="Nairobi">Nairobi</option>
                                                <option value="Meru">Meru</option>
                                                <option value="Kitui">Kitui</option>
                                                <option value="Eldoret">Eldoret</option>
                                                <option value="Nakuru">Nakuru</option>
                                                <option value="Machakos">Machakos</option>
                                                <option value="Mombasa">Mombasa</option>
                                            </select>
                                            @error('city')
                                                <div class="alert alert-danger">{{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <!-- Input -->
                                        <div class="form-group col-lg-12 col-md-12">
                                            <label>Complete Address</label>
                                            <input type="text" name="address" class="@error('address') is-invalid @enderror" placeholder="Enter job place address">
                                                @error('address')
                                                <div class="alert alert-danger">{{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <!-- Input -->
                                        <div class="form-group col-lg-12 col-md-12 text-right">
                                            <button class="theme-btn btn-style-one">Next</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- End Dashboard -->
@endsection
