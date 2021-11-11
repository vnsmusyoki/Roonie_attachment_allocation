 <!-- Main Footer -->
    <footer class="main-footer">
        <div class="auto-container">
            <!--Widgets Section-->
            <div class="widgets-section wow fadeInUp">
                <div class="row">
                    <div class="big-column col-xl-4 col-lg-3 col-md-12">
                        <div class="footer-column about-widget">
                            <div class="logo"><a href="#"><img src="{{asset('frontend/images/logo.svg')}}" alt=""></a></div>
                            <p class="phone-num"><span>Call us </span><a href="thebeehost%40support.html">+254-797-176-466</a></p>
                            <p class="address">329 Moi Avenue,Nairobi KENYA<br> 3051, NAIROBI. <br><a href="mailto:support@superio.com" class="email">support@attachments.com</a></p>
                        </div>
                    </div>

                    <div class="big-column col-xl-8 col-lg-9 col-md-12">
                        <div class="row">
                            <div class="footer-column col-lg-3 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
                                    <h4 class="widget-title">For Company HR</h4>
                                    <div class="widget-content">
                                        <ul class="list">
                                            <li><a href="{{ route('job-list') }}">Attachment Lists</a></li>
                                            <li><a href="{{ route('login') }}">Company Account</a></li>
                                            <li><a href="{{ route('login') }}">Onboard Attachees</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>


                            <div class="footer-column col-lg-3 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
                                    <h4 class="widget-title">For Students</h4>
                                    <div class="widget-content">
                                        <ul class="list">
                                            <li><a href="{{ route('job-list') }}">Browse Opportunities</a></li>
                                            <li><a href="{{ route('job-list')}}">Apply Today</a></li>
                                            <li><a href="{{ route('login') }}">Login</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>



                            <div class="footer-column col-lg-3 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
                                    <h4 class="widget-title">Quick Links</h4>
                                    <div class="widget-content">
                                        <ul class="list">
                                            <li><a href="{{ route('login') }}">Home</a></a></li>
                                            <li><a href="{{ route('login') }}">Students</a></li>
                                            <li><a href="{{ route('login') }}">Companies</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--Bottom-->
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="outer-box">
                    <div class="copyright-text">© 2021 <a href="#">Job Attachments</a>. All Right Reserved.</div>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll To Top -->
        <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
    </footer>
    <!-- End Main Footer -->


</div><!-- End Page Wrapper -->


<script src="{{asset('frontend/js/jquery.js')}}"></script>
<script src="{{asset('frontend/js/popper.min.js')}}"></script>
<script src="{{asset('frontend/js/chosen.min.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.fancybox.js')}}"></script>
<script src="{{asset('frontend/js/jquery.modal.min.js')}}"></script>
<script src="{{asset('frontend/js/mmenu.polyfills.js')}}"></script>
<script src="{{asset('frontend/js/mmenu.js')}}"></script>
<script src="{{asset('frontend/js/appear.js')}}"></script>
<script src="{{asset('frontend/js/anm.min.js')}}"></script>
<script src="{{asset('frontend/js/owl.js')}}"></script>
<script src="{{asset('frontend/js/wow.js')}}"></script>
<script src="{{asset('frontend/js/script.js')}}"></script>

</body>
 
</html>


