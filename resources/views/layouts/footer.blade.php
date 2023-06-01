<footer class="footer mt-auto">
    <div class="copyright bg-white">
        <p>
            Copyright &copy; <span id="copy-year"></span> Leap Frog | Developed by <a class="text-primary"
                href="https://pvalue.co.in" target="_blank">PValue Solutions</a>.
        </p>
    </div>
    <script>
        var d = new Date();
        var year = d.getFullYear();
        document.getElementById("copy-year").innerHTML = year;
    </script>
</footer>

</div> <!-- End Page Wrapper -->
</div> <!-- End Wrapper -->




<!-- Javascript -->
<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<script src='{{ asset('assets/plugins/charts/Chart.min.js') }}'></script>
<script src='{{ asset('assets/js/chart.js') }}'></script>




<script src='{{ asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js') }}'></script>
<script src='{{ asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill.js') }}'></script>

<script src='{{ asset('assets/plugins/daterangepicker/moment.min.js') }}'></script>
<script src='{{ asset('assets/plugins/daterangepicker/daterangepicker.js') }}'></script>
<script src='{{ asset('assets/js/date-range.js') }}'></script>


<script src='{{ asset('assets/plugins/toastr/toastr.min.js') }}'></script>

<script src="{{ asset('assets/js/theme.js') }}"></script>

<script src='{{ asset('assets/plugins/data-tables/jquery.datatables.min.js') }}'></script>
<script src='{{ asset('assets/plugins/data-tables/datatables.bootstrap4.min.js') }}'></script>

<script>
    @if (Session::has('success'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.success("{{ session('success') }}");
    @endif

    @if (Session::has('error'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.error("{{ session('error') }}");
    @endif

    @if (Session::has('info'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.info("{{ session('info') }}");
    @endif

    @if (Session::has('warning'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.warning("{{ session('warning') }}");
    @endif
</script>

</body>

</html>
