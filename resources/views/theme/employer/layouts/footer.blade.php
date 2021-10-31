<!-- Copyright -->
<div class="copyright-text">
    <p>© 2021 Attachment Allocation. All Right Reserved.</p>
</div>

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

<!-- Chart.js // documentation: http://www.chartjs.org/docs/latest/ -->
<script src="{{asset('frontend/js/chart.min.js')}}"></script>
<script>
    Chart.defaults.global.defaultFontFamily = "Sofia Pro";
    Chart.defaults.global.defaultFontColor = '#888';
    Chart.defaults.global.defaultFontSize = '14';

    var ctx = document.getElementById('chart').getContext('2d');

    var chart = new Chart(ctx, {

        type: 'line',
        // The data for our dataset
        data: {
            labels: ["January", "February", "March", "April", "May", "June"],
            // Information about the dataset
            datasets: [{
                label: "Views",
                backgroundColor: 'transparent',
                borderColor: '#1967D2',
                borderWidth: "1",
                data: [196,132,215,362,210,252],
                pointRadius: 3,
                pointHoverRadius:3,
                pointHitRadius: 10,
                pointBackgroundColor: "#1967D2",
                pointHoverBackgroundColor: "#1967D2",
                pointBorderWidth: "2",
            }]
        },

        // Configuration options
        options: {

            layout: {
              padding: 10,
            },

            legend: { display: false },
            title:  { display: false },

            scales: {
                yAxes: [{
                    scaleLabel: {
                        display: false
                    },
                    gridLines: {
                         borderDash: [6, 10],
                         color: "#d8d8d8",
                         lineWidth: 1,
                    },
                }],
                xAxes: [{
                    scaleLabel: { display: false },
                    gridLines:  { display: false },
                }],
            },

            tooltips: {
              backgroundColor: '#333',
              titleFontSize: 13,
              titleFontColor: '#fff',
              bodyFontColor: '#fff',
              bodyFontSize: 13,
              displayColors: false,
              xPadding: 10,
              yPadding: 10,
              intersect: false
            }
        },
    });

</script>

<script>
    @if(Session::has('message'))
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
            toastr.success("{{ session('message') }}");
    @endif

    @if(Session::has('error'))
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
            toastr.error("{{ session('error') }}");
    @endif

    @if(Session::has('info'))
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
            toastr.info("{{ session('info') }}");
    @endif

    @if(Session::has('warning'))
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
            toastr.warning("{{ session('warning') }}");
    @endif
  </script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script type="text/javascript"
        src="https://maps.google.com/maps/api/js?key=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=places&callback=initAutocomplete"></script>
    <script>
        $(document).ready(function () {
            $("#latitudeArea").addClass("d-none");
            $("#longtitudeArea").addClass("d-none");
        });
    </script>
    <script>
        google.maps.event.addDomListener(window, 'load', initialize);

        function initialize() {
            var input = document.getElementById('autocomplete');
            var autocomplete = new google.maps.places.Autocomplete(input);

            autocomplete.addListener('place_changed', function () {
                var place = autocomplete.getPlace();
                $('#latitude').val(place.geometry['location'].lat());
                $('#longitude').val(place.geometry['location'].lng());

                $("#latitudeArea").removeClass("d-none");
                $("#longtitudeArea").removeClass("d-none");
            });
        }
    </script>

</body>

<!-- Mirrored from creativelayers.net/themes/superio/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Oct 2021 06:36:10 GMT -->

</html>
