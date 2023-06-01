      <!-- :: Footer -->
      <footer class="footer">
         <div class="container">
            <div class="row">
               <div class="col-sm-12 col-md-6 col-lg-5">
                  <div class="row">
                     <div class="col-lg-6">
                        <div class="logo">
                           <img class="img-fluid" src="{{ asset('website/gatedata/assets/images/logo/first-round-black.png') }}" alt="Footer Logo">
                           <p>Since 2003, Leapfrog Engineering Services has strived to push the boundaries of what design, engineering, and construction can accomplish.
                           </p>
                           <ul>
                              <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                              <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-sm-6 col-md-6 col-lg-2">
                  <div class="footer-title">
                     <h4>Useful Links</h4>
                  </div>
                  <ul class="links">
                     <li><a href="{{ route('website.about') }}">About Us</a></li>
                     <li><a href="{{ route('website.library') }}">Library</a></li>
                    <li><a href="{{ route('website.domains') }}">Our Domains</a></li>
                    <li><a href="{{ route('website.career') }}">Career</a></li>
                    <li><a href="{{ route('website.contactus') }}">Contact Us</a></li>
                    <li><a href="{{ route('website.policy') }}">Policy</a></li>
                    <li><a href="{{ route('login') }}" target="_blank">Login</a></li>

                     {{--  <li><a href="01_team.html">About Us</a></li>
                     <li><a href="01_team.html">Leadership Team</a></li>
                     <li><a href="01_work.html">Features Gallery</a></li>
                     <li><a href="02_blog.html">News &amp; Media</a></li>
                     <li><a href="01_testimonial.html">Testimonial</a></li>
                     <li><a href="01_contact.html">Contacts</a></li> --}}
                  </ul>
               </div>
               <div class="col-sm-6 col-md-6 col-lg-3">
                  <div class="footer-title">
                     <h4>Address</h4>
                  </div>
                  <p>Chaitanya Dhriti Rudresh No 496, 6th Main, 8th Cross St, Vijaya Bank Layout,Bengaluru, Karnataka 560076</p>
               </div>
               <div class="col-sm-6 col-md-6 col-lg-2">
                  <div class="footer-title">
                     <h4>Contacts</h4>
                  </div>
                  <ul class="links">
                     <li><p><span>Email:</span> info@lesgroup.in</p></li>
                     <li><p><span>Phone:</span> 08040933570</p></li>
                     <li><p><span>WhatsApp:</span> 08040933570</p></li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="copyright">
            <div class="container">
               <p>Copyright © {{date('Y')}} Leap Frog Engineering Services - Powered By: <a href="https://www.pvalue.co.in/">PValue Solutions</a></p>
               {{-- <ul>
                  <li><a href="#">Terms &amp; Conditions </a></li>
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="#">Sitemap</a></li>
               </ul> --}}
            </div>
         </div>
      </footer>
      <!-- :: Scroll Up -->
      <div class="scroll-up">
         <a class="move-section" href="#page">
            <i class="fas fa-long-arrow-alt-up"></i>
         </a>
      </div>

      <!-- :: JavaScript Files -->
      <!-- :: jQuery JS -->
      <script src="{{ asset('website/gatedata/assets/js/jquery-3.6.0.min.js') }}"></script>

      <!-- :: Bootstrap JS Bundle With Popper JS -->
      <script src="{{ asset('website/gatedata/assets/js/bootstrap.bundle.min.js') }}"></script>

      <!-- :: Owl Carousel JS -->
      <script src="{{ asset('website/gatedata/assets/js/owl.carousel.min.js') }}"></script>

      <!-- :: Lity -->
      <script src="{{ asset('website/gatedata/assets/js/lity.min.js') }}"></script>

      <!-- :: Nice Select -->
      <script src="{{ asset('website/gatedata/assets/js/jquery.nice-select.min.js') }}"></script>

      <!-- :: Waypoints -->
      <script src="{{ asset('website/gatedata/assets/js/jquery.waypoints.min.js') }}"></script>

      <!-- :: CounterUp -->
      <script src="{{ asset('website/gatedata/assets/js/jquery.counterup.min.js') }}"></script>

      <!-- :: Magnific Popup -->
      <script src="{{ asset('website/gatedata/assets/js/jquery.magnific-popup.min.js') }}"></script>

      <!-- :: Main JS -->
      <script src="{{ asset('website/gatedata/assets/js/main.js') }}"></script>
   </body>
</html>