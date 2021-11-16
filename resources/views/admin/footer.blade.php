<!-- /.content-wrapper -->
<footer class="main-footer">
    <div class="pull-right d-none d-sm-inline-block">
        <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
            <li class="nav-item">
           
            </li>
            <li class="nav-item">
             
            </li>
        </ul>
    </div>
    &copy; 2021 <a href="/">Attachment Allocation website</a>. All Rights Reserved.
</footer>

 

<!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->
 
 

<!-- Page Content overlay -->


<!-- Vendor JS -->
<script src="{{ asset('main/main/js/vendors.min.js') }}"></script>
<script src="{{ asset('main/main/js/pages/chat-popup.js')}}"></script>
<script src="{{ asset('main/assets/icons/feather-icons/feather.min.js')}}"></script>

<script src="{{ asset('main/assets/vendor_components/apexcharts-bundle/dist/apexcharts.js')}}"></script>
<script src="{{ asset('main/assets/vendor_components/moment/min/moment.min.js')}}"></script>
<script src="{{ asset('main/assets/vendor_components/fullcalendar/fullcalendar.js')}}"></script>

<!-- Joblly App -->
<script src="{{ asset('main/main/js/template.js')}}"></script>
<script src="{{ asset('main/main/js/pages/dashboard.js')}}"></script>
<script src="{{ asset('main/main/js/pages/calendar-dash.js')}}"></script>
<script src="{{ asset('main/main/js/toastr.min.js') }}"></script> 
@if(Session::has('category_created'))
    <script>
        toastr.success("{!! Session::get('category_created') !!}");
    </script>
@endif

</body>
 
</html>
