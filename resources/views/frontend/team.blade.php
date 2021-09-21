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
                        <h2>Team <span> Members</span></h2>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Breadcrumb End -->
       
       
      <!-- Team Section Start -->
      <section class="team-section section_t_100 section_b_70">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="section-title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                     <h2>Our Expert <span>Team</span> <br>Members </h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <!-- Team Block Start -->
               <div class="col-lg-4 col-md-6">

                  @foreach ($teams as $t)
                  <div class="team-item wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                     <div class="image">
                        <img src="{{ asset("storage/$t->Image") }}" alt="image">
                        <ul class="social">
                           <li>
                              <a href="{{ $t->Facebook }}" target="_blank">
                              <i class="fa fa-facebook"></i>
                              </a>
                           </li>
                           <li>
                              <a href="{{ $t->Twitter }}" target="_blank">
                              <i class="fa fa-twitter"></i>
                              </a>
                           </li>
                           <li>
                              <a href="{{ $t->Linkedin }}" target="_blank">
                              <i class="fa fa-linkedin"></i>
                              </a>
                           </li>
                           
                        </ul>
                        <div class="content">
                           <h3>{{ $t->Name }}</h3>
                           <span>{{ $t->Designation }}</span>
                        </div>
                     </div>
                  </div>
                  @endforeach

               </div>
               <!-- Team Block End -->
               
            </div>
         </div>
      </section>
      <!-- Team Section End -->

@endsection