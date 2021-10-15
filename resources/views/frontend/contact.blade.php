@extends('frontend.lib.layout')

@section('main_content_frontend')


<section class="breadcrumb-area">
         <div class="breadcrumb-shape"></div>
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="breadcrumb-inn">
                     <div class="section-title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                        <h2><span>Contact Us</span></h2>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="contact-form section_100">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="section-title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                     <h2>Get in <span>Touch</span></h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-8">
                  <div class="contact-form-wrapper wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.4s">

                  @if(Session::has('notify'))
                     <div class="alert alert-success" role="alert">
                        <p class="text-center">
                              {{ Session::get('notify') }} </strong>
                        </p>
                     </div>
                                       
                     {{ Session::forget('notify') }}
                  @endif

                     <form role="form" action="{{ url('/contact/store') }}" method="post" enctype="multipart/form-data">
                     @csrf
                        <div class="row">
                           <div class="col-lg-6">

                              <div class="form-group">
                                 <label for="name">Name </label>
                                 <input type="text" class="input-field" id="name" name="Name" placeholder="Enter Your Name">
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="form-group">
                                 <label for="email">Email </label>
                                 <input type="text" class="input-field" id="email" name="Email" placeholder="Enter Your Email">
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="form-group">
                                 <label for="subjict">Subjict </label>
                                 <input type="text" class="input-field" id="subjict" name="Subject" placeholder="Write Your Subjict">
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="form-group">
                                 <label for="phone">Phone </label>
                                 <input type="text" class="input-field" id="phone" name="Phone" placeholder="Enter Your Phone No">
                              </div>
                           </div>
                           <div class="col-lg-12">
                              <div class="form-group button-area">
                                 <label for="message">Message </label>
                                 <textarea id="message" class="input-field textarea" name="Message" placeholder="Write Your Message"></textarea>
                              </div>
                           </div>
                           <div class="col-lg-12">
                              <div class="form-group button-area">
                                 <button type="submit" class="theme-btn">Send Message<span class="fa fa-chevron-right"></span></button>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
               <div class="col-lg-4 d-flex">
                  <div class="address-area wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
                     <h4 class="title">
                        Contact Information
                     </h4>
                     <ul class="address-list">
                        <li>
                           <p>
                              <p>102/1, Sukrabad Mirpur Rd, Dhaka 1207, Bangladesh</p>
                           </p>
                        </li>
                        <li>
                           <p>
                              <i class="fa fa-phone"></i> +44 587 154756
                           </p>
                        </li>
                        <li>
                           <p>
                              <i class="fa fa-envelope"></i>
                              info@example.com
                           </p>
                        </li>
                        <li>
                           <p>
                              <i class="fa fa-globe"></i>
                              www.example.com
                           </p>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <div class="map-area section_t_100">
         <div class="section-title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
            <h2>Easily <span>Find us</span> on <br> google Map</h2>
         </div>
         <iframe src="https://maps.google.com/maps?q=Daffodil%20International%20University&t=&z=11&ie=UTF8&iwloc=&output=embed" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>

@endsection