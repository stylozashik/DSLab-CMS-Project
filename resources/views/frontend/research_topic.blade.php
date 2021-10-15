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
                        <h2><span>Research Topics</span></h2>
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
               @foreach($topics as $t)
               <div class="col-lg-8">
                  <div class="blog-page-left">
                    
                     <div class="map-area section_t_100">
                       <div class="section-title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                          <h2>{{ $t->title }}</h2>
                       </div>
                     </div>
                     
                     <div class="blog-item-box">
                        <div class="blog_info">
                           <figure class="blog-img">
                              <a href="#">
                              <img src="{{ asset("storage/$t->image") }}" alt="Image" />
                              </a>
                           </figure>
                           <div class="blog-detail">
                              <p class="text-length">"{{ $t->short_description }}"</p>
                              <a href="{{ $t->link }}" target="_blank" class="theme-btn">Link <span class="fa fa-chevron-right"></span></a>
                           </div>
                        </div>
                     </div>
                     <!-- /end blog item-->
                     
                  </div>
               </div>
               @endforeach
               </center>
            </div>
         </div>
      </section>
      <!-- Blog Area End -->

@endsection