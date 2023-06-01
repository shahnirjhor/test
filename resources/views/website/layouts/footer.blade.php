<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4 footer-item">
                <img src="{{ asset('logo.png') }}" alt="Leap Frog" width="120px">
                <p>Since 2003, Leapfrog Engineering Services has strived to push the boundaries of what design,
                    engineering, and construction can accomplish. </p>
                <ul class="social-icons">
                    <li><a rel="nofollow" href="https://facebook.com" target="_blank"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
            <div class="col-md-4 footer-item">
                <h4>Useful Links</h4>
                <ul class="menu-list">
                    <li><a href="{{ route('website.about') }}">About Us</a></li>
                    <li><a href="{{ route('website.library') }}">Library</a></li>
                    <li><a href="{{ route('website.domains') }}">Our Domains</a></li>
                    <li><a href="{{ route('website.career') }}">Career</a></li>
                    <li><a href="{{ route('website.contactus') }}">Contact Us</a></li>
                    <li><a href="{{ route('website.policy') }}">Policy</a></li>
                    <li><a href="{{ route('login') }}" target="_blank">Login</a></li>
                </ul>
            </div>
            <div class="col-md-4 footer-item">
                <h4>Contact Us</h4>
                <ul class="menu-list">
                    <li>Address: <a href="#">Chaitanya Dhriti Rudresh No 496, 6th Main, 8th Cross St,
                            Vijaya Bank Layout,
                            Bengaluru, Karnataka 560076</a></li>
                    <li>Email: <a href="mailto:Info@lesgroup.in">info@lesgroup.in</a></li>
                    <li>Phone: <a href="tel:08040933570">08040933570</a></li>
                    <li>WhatsApp: <a href="https://wa.me/918040954188">08040954188</a></li>
                </ul>
            </div>

        </div>
    </div>
</footer>

<div class="sub-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>Copyright &copy; 2023 Leap Frog Engineering Services

                    - Powered By: <a rel="nofollow noopener" href="https://pvalue.co.in" target="_blank">PValue
                        Solutions</a></p>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript -->
<script src="{{ asset('website/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('website/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Additional Scripts -->
<script src="{{ asset('website/assets/js/custom.js') }}"></script>
<script src="{{ asset('website/assets/js/owl.js') }}"></script>
<script src="{{ asset('website/assets/js/slick.js') }}"></script>
<script src="{{ asset('website/assets/js/accordions.js') }}"></script>

<script language="text/Javascript">
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t) { //declaring the array outside of the
        if (!cleared[t.id]) { // function makes it static and global
            cleared[t.id] = 1; // you could use true and false, but that's more typing
            t.value = ''; // with more chance of typos
            t.style.color = '#fff';
        }
    }
</script>

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
