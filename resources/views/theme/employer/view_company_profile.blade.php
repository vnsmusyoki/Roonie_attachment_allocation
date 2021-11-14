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

                            <div class="uploading-outer">
                                <div class="uploadButton">
                                    <input class="uploadButton-input" type="file"  name="attachments[]" accept="image/*, application/pdf" id="upload" multiple/>
                                    <label class="uploadButton-button ripple-effect" for="upload">Browse Logo</label>
                                    <span class="uploadButton-file-name"></span>
                                </div>
                                <div class="text">Max file size is 1MB, Minimum dimension: 330x300 And Suitable files are .jpg & .png</div>
                            </div>

                            <div class="uploading-outer">
                                <div class="uploadButton">
                                    <input class="uploadButton-input" type="file"  name="attachments[]" accept="image/*, application/pdf" id="upload_cover" multiple/>
                                    <label class="uploadButton-button ripple-effect" for="upload">Browse Cover</label>
                                    <span class="uploadButton-file-name"></span>
                                </div>
                                <div class="text">Max file size is 1MB, Minimum dimension: 330x300 And Suitable files are .jpg & .png</div>
                            </div>

                             <form class="default-form">
                                <div class="row">
                                    <!-- Input -->
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Company name (optional)</label>
                                        <input type="text" name="name" placeholder="Invisionn">
                                    </div>

                                    <!-- Input -->
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Email address</label>
                                        <input type="text" name="name" placeholder="creativelayers">
                                    </div>

                                    <!-- Input -->
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Phone</label>
                                        <input type="text" name="name" placeholder="0 123 456 7890">
                                    </div>

                                    <!-- Input -->
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Website</label>
                                        <input type="text" name="name" placeholder="www.invision.com">
                                    </div>

                                    <!-- Input -->
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Est. Since</label>
                                        <input type="text" name="name" placeholder="06.04.2020">
                                    </div>

                                    <!-- Input -->
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Team Size</label>
                                        <select class="chosen-select">
                                            <option>50 - 100</option>
                                            <option>100 - 150</option>
                                            <option>200 - 250</option>
                                            <option>300 - 350</option>
                                            <option>500 - 1000</option>
                                        </select>
                                    </div>

                                    <!-- Search Select -->
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Multiple Select boxes </label>
                                        <select data-placeholder="Categories" class="chosen-select multiple" multiple tabindex="4">
                                          <option value="Banking">Banking</option>
                                          <option value="Digital&Creative">Digital & Creative</option>
                                          <option value="Retail">Retail</option>
                                          <option value="Human Resources">Human Resources</option>
                                          <option value="Management">Management</option>
                                        </select>
                                    </div>

                                    <!-- Input -->
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Allow In Search & Listing</label>
                                        <select class="chosen-select">
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>

                                    <!-- About Company -->
                                    <div class="form-group col-lg-12 col-md-12">
                                        <label>About Company</label>
                                        <textarea placeholder="Spent several years working on sheep on Wall Street. Had moderate success investing in Yugo's on Wall Street. Managed a small team buying and selling Pogo sticks for farmers. Spent several years licensing licorice in West Palm Beach, FL. Developed several new methods for working it banjos in the aftermarket. Spent a weekend importing banjos in West Palm Beach, FL.In this position, the Software Engineer collaborates with Evention's Development team to continuously enhance our current software solutions as well as create new solutions to eliminate the back-office operations and management challenges present"></textarea>
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

                <!-- Ls widget -->
                <div class="ls-widget">
                    <div class="tabs-box">
                        <div class="widget-title">
                            <h4>Social Network</h4>
                        </div>

                        <div class="widget-content">
                             <form class="default-form">
                                <div class="row">
                                    <!-- Input -->
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Facebook</label>
                                        <input type="text" name="name" placeholder="www.facebook.com/Invision">
                                    </div>

                                    <!-- Input -->
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Twitter</label>
                                        <input type="text" name="name" placeholder="">
                                    </div>

                                    <!-- Input -->
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Linkedin</label>
                                        <input type="text" name="name" placeholder="">
                                    </div>

                                    <!-- Input -->
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Google Plus</label>
                                        <input type="text" name="name" placeholder="">
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

                <!-- Ls widget -->
                <div class="ls-widget">
                    <div class="tabs-box">
                        <div class="widget-title">
                            <h4>Contact Information</h4>
                        </div>

                        <div class="widget-content">
                             <form class="default-form">
                                <div class="row">
                                    <!-- Input -->
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Country</label>
                                        <select class="chosen-select">
                                            <option>Australia</option>
                                            <option>Pakistan</option>
                                            <option>Chaina</option>
                                            <option>Japan</option>
                                            <option>India</option>
                                        </select>
                                    </div>

                                    <!-- Input -->
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>City</label>
                                        <select class="chosen-select">
                                            <option>Melbourne</option>
                                            <option>Pakistan</option>
                                            <option>Chaina</option>
                                            <option>Japan</option>
                                            <option>India</option>
                                        </select>
                                    </div>

                                    <!-- Input -->
                                    <div class="form-group col-lg-12 col-md-12">
                                        <label>Complete Address</label>
                                        <input type="text" name="name" placeholder="329 Queensberry Street, North Melbourne VIC 3051, Australia.">
                                    </div>

                                    <!-- Input -->
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Find On Map</label>
                                        <input type="text" name="name" placeholder="329 Queensberry Street, North Melbourne VIC 3051, Australia.">
                                    </div>

                                    <!-- Input -->
                                    <div class="form-group col-lg-3 col-md-12">
                                        <label>Latitude</label>
                                        <input type="text" name="name" placeholder="Melbourne">
                                    </div>

                                    <!-- Input -->
                                    <div class="form-group col-lg-3 col-md-12">
                                        <label>Longitude</label>
                                        <input type="text" name="name" placeholder="Melbourne">
                                    </div>

                                    <!-- Input -->
                                    <div class="form-group col-lg-12 col-md-12">
                                        <button class="theme-btn btn-style-three">Search Location</button>
                                    </div>


                                    <div class="form-group col-lg-12 col-md-12">
                                        <div class="map-outer">
                                            <div class="map-canvas map-height"
                                                data-zoom="12"
                                                data-lat="-37.817085"
                                                data-lng="144.955631"
                                                data-type="roadmap"
                                                data-hue="#ffc400"
                                                data-title="Envato"
                                                data-icon-path="images/resource/map-marker.png"
                                                data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Input -->
                                    <div class="form-group col-lg-12 col-md-12">
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
