<!DOCTYPE html>
<html lang="en-US">
<head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- Title -->
      <title>DIU | Data Science Lab</title>
      <!-- Favicon -->
      <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('frontend/assets/img/favicon/favicon-32x32.png')}}">
      <!--Bootstrap css-->
      <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.css') }}">
      <!--Font Awesome css-->
      <link rel="stylesheet" href="{{ asset('frontend/assets/css/font-awesome.min.css') }}">
      <!-- Flaticon CSS -->
      <link rel="stylesheet" href="{{ asset('frontend/assets/flaticon/flaticon.css') }}">
      <!--Magnific css-->
      <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css') }}">
      <!--Owl-Carousel css-->
      <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}">
      <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.theme.default.min.css') }}">
      <!--Animate css-->
      <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.min.css') }}">
      <!-- slicknav cdd -->
      <link rel="stylesheet" href="{{ asset('frontend/assets/css/slicknav.min.css') }}">
      <!--Site Main Style css-->
      <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
      <!--Responsive css-->
      <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}">
   </head>
   <body>
       
       
      <!-- Start Preloader -->
      <div id="preloader">
         <div class="preload-content">
            <div id="dream-load"></div>
         </div>
      </div>
      <header class="header-area animated">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 d-flex align-items-center justify-content-between">
                  <div class="logo-area">
                     <a href="{{ url('/') }}"><img src="{{ asset("storage/$brand->Logo") }}" alt="logo" width="100" height="200"></a>
                  </div>
                  <div class="menu-area d-flex justify-content-end align-items-center">
                     <div class="mobile-menu"></div>
                     <div class="main-menu">
                        <nav class="menu-box">
                           <ul class="nav-menu"  id="mobile-menu">
                              <li><a href="{{ url('/') }}">Home</a></li>
                              <li><a href="{{ url('/about') }}">About Us</a></li>                          
                              <li class="dropdown">
                                 <a href="javascript:;">Research</a>
                                 <ul>
                                    <li><a href="{{ url('/research-topic') }}">Research Topic</a></li>
                                    <li><a href="{{ url('/research-publication') }}">Research Publication</a></li>
                                 </ul>
                              </li>
                              <li><a href="{{ url('/team') }}">Our Team</a></li>
                              <li><a href="{{ url('/events') }}">Events</a></li>  
                              <li><a href="{{ url('/resources') }}">Resources</a></li>   
                              <li><a href="{{ url('/contact') }}">Contact</a></li>
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>

      @yield('main_content_frontend')
       
      
          
       
       
      <footer class="footer-section">
         <div class="footer-top">
            <div class="container">
               <div class="row">
                  <div class="col-lg-4 col-md-6">
                     <div class="single-footer wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                        <div class="footer-logo">
                           <a href="index.html"><img src="{{ asset('frontend/assets/img/logo.png') }}" alt="logo" /></a>
                        </div>
                        <p>We are a team of out-of-the-box thinkers, with deep expertise in analytics. Our research aims to make sense of large amounts of data. </p>
                        <ul class="footer-social">
                           <li><a href="#" class="fb"><i class="fa fa-facebook"></i></a></li>
                           <li><a href="#" class="gp"><i class="fa fa-github"></i></a></li>
                           <li><a href="#" class="ln"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-5 col-md-6">
                     <div class="row">
                        <div class="col-lg-6 col-md-6">
                           <div class="single-footer wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.4s">
                              <h3>Services</h3>
                              <ul>
                                 <li><a href="#">Data Science </a></li>
                                 <li><a href="#">Machine Learning </a></li>
                                 <li><a href="#">Deep Learning </a></li>
                                 <li><a href="#">Big Data </a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                           <div class="single-footer wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                              <h3>Community</h3>
                              <ul>
                                 <li><a href="#">Our Services</a></li>
                                 <li><a href="#">Documentation</a></li>
                                 <li><a href="#">What We Do?</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                     <div class="single-footer wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.6s">
                        <h3>Contact Us</h3>
                        <ul class="footer-contact-info">
                           <li>102/1, Sukrabad Mirpur Rd, Dhaka 1207</li>
                           <li><span>Email:</span> <a href="mailto:hello@example.com">hello@example.com</a></li>
                           <li><span>Phone:</span> <a href="tel:+44587154756">+44 587 154756</a></li>
                           <li><span>Fax:</span> <a href="tel:+557854578964">+55 785 4578964</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <div class="footer-bottom">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="copyright wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                        <p>&copy; 2021 All Rights Reserved By <span> <a href="https://daffodilvarsity.edu.bd/" target="_blank">Daffodil International University</a> </span> | Developed By <span><a href="https://www.freelancer.com/u/rexbdsoft" target="_blank">Ashikur</a></span></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>

      </footer>

      <div class="search-overlay">
         <div class="d-table">
            <div class="d-table-cell">
               <div class="search-overlay-layer"></div>
               <div class="search-overlay-layer"></div>
               <div class="search-overlay-layer"></div>
               <div class="search-overlay-close">
                  <span class="search-overlay-close-line"></span>
                  <span class="search-overlay-close-line"></span>
               </div>
               <div class="search-overlay-form">
                  <form>
                     <input type="text" class="input-search" placeholder="Search here...">
                     <button type="submit"><i class="fa fa-search"></i></button>
                  </form>
               </div>
            </div>
         </div>
      </div>

      <!-- End Search Overlay -->
       
       
      <!--Jquery js-->
      <script src="{{ asset('frontend/assets/js/jquery.min.js') }}"></script>
      <!-- Popper JS -->
      <script src="{{ asset('frontend/assets/js/popper.min.js') }}"></script>
      <!--Bootstrap js-->
      <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
      <!--Owl-Carousel js-->
      <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
      <!-- Slicknav Js -->
      <script src="{{ asset('frontend/assets/js/jquery.slicknav.min.js') }}"></script>
      <!--Magnific js-->
      <script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>
      <!-- Counter JS -->
      <script src="{{ asset('frontend/assets/js/jquery.counterup.min.js') }}"></script>
      <!-- Way Points JS -->
      <script src="{{ asset('frontend/assets/js/waypoints-min.js') }}"></script>
      <!--Wow js-->
      <script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
      <!--Main js-->
      <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
   </body>

<!-- Mirrored from themescare.com/demos/robofume-view/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 May 2021 19:05:47 GMT -->
</html>

