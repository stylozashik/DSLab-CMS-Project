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
                        <h2><span>Resources</span></h2>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Breadcrumb End -->
       

       
      <!-- Blog Area Start -->
      <section class="blog-page-area section_100">
         <div class="container">
            <div class="row">
              <center>
               <div class="col-lg-8">
                  <div class="blog-page-left">
                    
                     <div class="map-area section_t_100">
                       <div class="section-title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                          <h2>Source Of <span>Datasets</span></h2>
                       </div>
                     </div>
                     
                     <div class="blog-item-box">
                        <div class="blog_info">
                           <figure class="blog-img">
                              <a href="#">
                              <img src="{{ asset('frontend/assets/img/blog-2.jpg') }}" alt="blog imag">
                              </a>
                           </figure>
                           <div class="blog-detail">
                              <h3><a href="#">Get Free datasets Available There</a></h3>
                              <p class="text-length">"Dataset! the most important things for work with data science. There have many sites for the free dataset available. We are providing some of them there."</p>
                              <a href="resources%20details.html" class="theme-btn">Read More <span class="fa fa-chevron-right"></span></a>
                           </div>
                        </div>
                     </div>
                     <!-- /end blog item-->
                    <div class="map-area section_t_100">
                       <div class="section-title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                          <h2>Source Of <span>Datasets</span></h2>
                       </div>
                     </div>
                     <div class="blog-item-box">
                        <div class="blog_info">
                           <figure class="blog-img">
                              <a href="#">
                              <img src="{{ asset('frontend/assets/img/blog-1.jpg') }}" alt="blog imag">
                              </a>
                           </figure>
                           <div class="blog-detail">
                            
                              <h3><a href="#">Get Free datasets Available There</a></h3>
                              <p class="text-length">"Dataset! the most important things for work with data science. There have many sites for the free dataset available. We are providing some of them there."</p>
                              <a href="resources%20details.html" class="theme-btn">Read More <span class="fa fa-chevron-right"></span></a>
                           </div>
                        </div>
                     </div>
                     <!-- /end blog item-->
                    <div class="map-area section_t_100">
                       <div class="section-title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                          <h2>Source Of <span>Datasets</span></h2>
                       </div>
                     </div>
                     <div class="blog-item-box">
                        <div class="blog_info">
                           <figure class="blog-img">
                              <a href="#">
                              <img src="{{ asset('frontend/assets/img/blog-3.jpg') }}" alt="blog imag">
                              </a>
                           </figure>
                           <div class="blog-detail">
                              <h3><a href="#">Get Free datasets Available There</a></h3>
                              <p class="text-length">"Dataset! the most important things for work with data science. There have many sites for the free dataset available. We are providing some of them there."</p>
                              <a href="resources%20details.html" class="theme-btn">Read More <span class="fa fa-chevron-right"></span></a>
                           </div>
                        </div>
                     </div>
                     <!-- /end blog item-->
                     <div class="pagination-box-row">
                        <p>Page 1 of 6</p>
                        <ul class="pagination">
                           <li><a href="#">1</a></li>
                           <li class="active"><a href="#">2</a></li>
                           <li><a href="#">3</a></li>
                           <li>...</li>
                           <li><a href="#">6</a></li>
                           <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                        </ul>
                     </div>
                     <!-- /end pagination-->
                  </div>
               </div>
               </center>
            </div>
         </div>
      </section>
      <!-- Blog Area End -->

@endsection