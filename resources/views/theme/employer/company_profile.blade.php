@extends('theme.employer.layouts.main')

@section('main')
    <!-- Dashboard -->
    <section class="user-dashboard">
        <div class="dashboard-outer">
            <div class="upper-title-box">
                <h3>Company Profile!</h3>
                <div class="text">Ready to jump back in?</div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Ls widget -->
                    <div class="ls-widget">
                        <div class="tabs-box">
                            <div class="widget-title">
                                <h4>My Profile</h4>
                            </div>

                            <div class="widget-content">
                                <form class="default-form" action="{{ route('store-company-profile') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf


                                    <div class="uploading-outer">
                                        <div class="uploadButton">
                                            <input class="form-control" type="file" name="logo" />
                                            {{-- <label class="uploadButton-button ripple-effect" for="upload">Browse
                                                Cover</label>
                                            <span class="uploadButton-file-name"></span> --}}

                                        </div>
                                        <div class="text">Max file size is 1MB, Minimum dimension: 330x300 And
                                            Suitable files are .jpg & .png</div>
                                    </div>


                                    <div class="row">
                                        <!-- Input -->
                                        <div class="form-group col-lg-6 col-md-12">
                                            <label>Company name (optional)</label>
                                            <input type="text" name="company_name" placeholder="Invisionn"
                                                class="@error('company_name') is-invalid @enderror">
                                            @error('company_name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Input -->
                                        <div class="form-group col-lg-6 col-md-12">
                                            <label>Email address</label>
                                            <input type="text" name="company_email" placeholder="creativelayers"
                                                class="@error('company_email') is-invalid @enderror">
                                            @error('company_email')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Input -->
                                        <div class="form-group col-lg-6 col-md-12">
                                            <label>Phone</label>
                                            <input type="text" name="phone" placeholder="+254 723 456 789"
                                                class=" @error('phone') is-invalid @enderror">
                                            @error('phone')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Input -->
                                        <div class="form-group col-lg-6 col-md-12">
                                            <label>Website</label>
                                            <input type="text" name="website_name" placeholder="www.invision.com"
                                                class="@error('website_name') is-invalid @enderror">
                                            @error('website_name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror

                                        </div>


                                        <!-- Search Select -->
                                        <div class="form-group col-lg-6 col-md-12">
                                            <label>Multiple Select boxes </label>
                                            <select data-placeholder="Categories" name="category[]"
                                                class="chosen-select multiple @error('category') is-invalid @enderror"
                                                multiple tabindex="4">
                                                <option value="Banking">Banking</option>
                                                <option value="Digital&Creative">Digital & Creative</option>
                                                <option value="Retail">Retail</option>
                                                <option value="Human Resources">Human Resources</option>
                                                <option value="Management">Management</option>
                                            </select>
                                            @error('category')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror

                                        </div>

                                        <!-- Input -->
                                        <div class="form-group col-lg-6 col-md-12">
                                            <label>Team Size</label>
                                            <select class="chosen-select" name="team_size"
                                                class="@error('category') is-invalid @enderror">
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



                                        <!-- About Company -->
                                        <div class="form-group col-lg-12 col-md-12">
                                            <label>About Company</label>
                                            <textarea type="text" name="about_company"
                                                placeholder="Spent several years working on sheep on Wall Street. Had moderate success investing in Yugo's on Wall Street. Managed a small team buying and selling Pogo sticks for farmers. Spent several years licensing licorice in West Palm Beach, FL. Developed several new methods for working it banjos in the aftermarket. Spent a weekend importing banjos in West Palm Beach, FL.In this position, the Software Engineer collaborates with Evention's Development team to continuously enhance our current software solutions as well as create new solutions to eliminate the back-office operations and management challenges present"></textarea>
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
                                                                    <label>Facebook</label>
                                                                    <input type="text" name="facebook_link"
                                                                        placeholder="www.facebook.com/Invision">
                                                                </div>

                                                                <!-- Input -->
                                                                <div class="form-group col-lg-12 col-md-12">
                                                                    <label>Twitter</label>
                                                                    <input type="text" name="twitter_link" placeholder="">
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
                                                                    <label>Country</label>
                                                                    <select class="chosen-select" name="country"
                                                                        class="@error('country') is-invalid @enderror">
                                                                        <option value="Australia">Australia</option>
                                                                        <option value="Pakistan">Pakistan</option>
                                                                        <option value="Chaina">Chaina</option>
                                                                        <option value="Japan">Japan</option>
                                                                        <option value="India">India</option>
                                                                    </select>
                                                                    @error('country')
                                                                        <div class="alert alert-danger">{{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>

                                                                <!-- Input -->
                                                                <div class="form-group col-lg-12 col-md-12">
                                                                    <label>City</label>
                                                                    <select class="chosen-select" name="city"
                                                                        class="@error('city') is-invalid @enderror">
                                                                        <option value="Melbourne">Melbourne</option>
                                                                        <option value="Pakistan">Pakistan</option>
                                                                        <option value="Chaina">Chaina</option>
                                                                        <option value="Japan">Japan</option>
                                                                        <option value="India">India</option>
                                                                    </select>
                                                                    @error('city')
                                                                        <div class="alert alert-danger">{{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>

                                                                <!-- Input -->
                                                                <div class="form-group col-lg-12 col-md-12">
                                                                    <label>Complete Address</label>
                                                                    <input type="text" name="address"
                                                                        placeholder="329 Queensberry Street, North Melbourne VIC 3051, Australia.">
                                                                </div>

                                                                <!-- Input -->
                                                                {{-- <div class="form-group col-lg-6 col-md-12">
                                                            <label>Find On Map</label> --}}
                                                                {{-- <input type="text" name="name"
                                                                placeholder="329 Queensberry Street, North Melbourne VIC 3051, Australia."> --}}
                                                                {{-- </div> --}}

                                                                <!-- Input -->
                                                                {{-- <div class="form-group col-lg-3 col-md-12" id="latitudeArea">
                                                            <label>Latitude</label>
                                                            <input type="text" name="latitude" id="latitude"
                                                                class="@error('latitude') is-invalid @enderror"
                                                                placeholder="Melbourne">
                                                            @error('latitude')
                                                                <div class="alert alert-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div> --}}

                                                                <!-- Input -->
                                                                {{-- <div class="form-group col-lg-3 col-md-12" id="longtitudeArea">
                                                            <label>Longitude</label>
                                                            <input type="text" name="logitude" id="logitude" class="@error('logitude') is-invalid @enderror" placeholder="Melbourne">
                                                            @error('logitude')
                                                                <div class="alert alert-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div> --}}

                                                                <!-- Input -->
                                                                {{-- <div class="form-group col-lg-12 col-md-12">
                                                            <button class="theme-btn btn-style-three">Search
                                                                Location</button>
                                                        </div> --}}


                                                                {{-- <div class="form-group col-lg-12 col-md-12">
                                                            <div class="map-outer">
                                                                <div class="map-canvas map-height" data-zoom="12"
                                                                    data-lat="-37.817085" data-lng="144.955631"
                                                                    data-type="roadmap" data-hue="#ffc400"
                                                                    data-title="Envato"
                                                                    data-icon-path="images/resource/map-marker.png"
                                                                    data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
                                                                </div>
                                                            </div>
                                                        </div> --}}

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>






                                        <!-- Input -->
                                        <div class="form-group col-lg-6 col-md-12">
                                            <button class="theme-btn btn-style-one">Save</button>
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
