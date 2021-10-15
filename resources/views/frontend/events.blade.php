@extends('frontend.lib.layout')

@section('main_content_frontend')

    <!-- Breadcrumb Start -->
    <section class="breadcrumb-area">
         <div class="breadcrumb-shape"></div>
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="breadcrumb-inn">
                     <div class="section-title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                        <h2><span>Events</span></h2>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Breadcrumb End -->

      <!-- About Page Section Start -->
      <section class="about-page-section section_100">
         <div class="container">
           <div class="row align-items-center">
               <div class="col-lg-5 col-md-12">
                  <div class="section-title wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.1s">
                     <h2>Events In Our Data Science <span>Lab</span></h2>
                  </div>
               </div>
               <div class="col-lg-7 col-md-12">
                  <div class="section-para wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.3s">
                     <p>Attend our event of our experties and collaborators to gain the upto date knowledge....!</p>
                  </div>
               </div>
            </div>
           
         </div>
      </section>
      <!-- About Page Section End -->   
       
      <!-- Timeline Area Start -->
      <section class="timeline-area section_100">
         <div class="about-top-shape">
            <img src="{{ 'frontend/assets/img/about-shape.png' }}" alt="about shape">
         </div>
         <div class="about-bottom-shape">
            <img src="{{ 'frontend/assets/img/about-shape.png' }}" alt="about shape">
         </div>
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="ui-timline-container">
                     <div class="ui-timeline">
                        <div class="tl-item">
                           <div class="tl-body">
                              <div class="tl-entry">
                                 <div class="tl-caption">
                                    <p>Upcoming <br> Event</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tl-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                           <div class="tl-body">
                              <div class="tl-entry">
                                 <div class="tl-time">
                                    2021
                                 </div>
                                 <div class="tl-icon"></div>
                                 <div class="tl-content">
                                    <h3 class="tl-tile">Eid Ul Fitor</h3>
                                    <h4 class="tl-date">May 14</h4>
                                    <p>
                                       one of the biggest fastible of Bangladesh. There will be a program on behalf of our lab.
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tl-item alt wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                           <div class="tl-body">
                              <div class="tl-entry">
                                 <div class="tl-time">
                                    2021
                                 </div>
                                 <div class="tl-icon"></div>
                                 <div class="tl-content">
                                   <a href="event-details.html"><h3 class="tl-tile">Audit & assurance</h3></a>
                                    
                                    <h4 class="tl-date">June 11</h4>
                                    <p>
                                       Interdum iusto pulvinar elit.accusantium debitis voluptatem dolore excepturi
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tl-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                           <div class="tl-body">
                              <div class="tl-entry">
                                 <div class="tl-time">
                                    2021
                                 </div>
                                 <div class="tl-icon"></div>
                                 <div class="tl-content">
                                    <a href="event-details.html"><h3 class="tl-tile">Expert Team Mates</h3></a>
                                    <h4 class="tl-date">June 15</h4>
                                    <p>
                                       Interdum iusto pulvinar elit.accusantium debitis voluptatem dolore excepturi
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Timeline Area End -->
      
      
      <!--past event-->
        <section class="service-section section_100">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="section-title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                     <center><h2>Recent <span>Events</span></h2></center>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-4 col-md-6">
                  <div class="service-box wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                     <div class="service-icon">
                        <i class="flaticon-chip"></i>
                     </div>
                     <div class="service-title">
                        <h3>Robotics & Drones</h3>
                     </div>
                     <div class="service-desc">
                        <p>Capitalize on low hanging fruit to identify a ball park value added activity to beta test. Override the digital divide with additional</p>
                        <a class="btn-simple mt-3" href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                     </div>
                     <div class="service-icon-bottom">
                        <i class="flaticon-chip"></i>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6">
                  <div class="service-box wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                     <div class="service-icon">
                        <i class="flaticon-picture"></i>
                     </div>
                     <div class="service-title">
                        <h3>Image Processing</h3>
                     </div>
                     <div class="service-desc">
                        <p>Capitalize on low hanging fruit to identify a ball park value added activity to beta test. Override the digital divide with additional</p>
                        <a class="btn-simple mt-3" href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                     </div>
                     <div class="service-icon-bottom">
                        <i class="flaticon-picture"></i>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6">
                  <div class="service-box wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                     <div class="service-icon">
                        <i class="flaticon-box"></i>
                     </div>
                     <div class="service-title">
                        <h3>Data Visualization</h3>
                     </div>
                     <div class="service-desc">
                        <p>Capitalize on low hanging fruit to identify a ball park value added activity to beta test. Override the digital divide with additional</p>
                        <a class="btn-simple mt-3" href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                     </div>
                     <div class="service-icon-bottom">
                        <i class="flaticon-box"></i>
                     </div>
                  </div>
               </div>
               
               
               
            </div>
         </div>
      </section>
      <!--past event-->

@endsection