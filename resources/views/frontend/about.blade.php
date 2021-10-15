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
                        <h2><span>About Us</span></h2>
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
            <div class="row">
               <div class="col-lg-12">
                  <div class="section-title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                     <h2>Daffodil International University <span>Data Science</span> Lab<br>From Software Engineering Department</h2>
                  </div>
               </div>
            </div>
            <div class="row align-items-center">
               <div class="col-lg-4 offset-lg-1">
                  <div class="about-page-left wow fadeInLeft mr-5" data-wow-duration="1s" data-wow-delay="0.5s">
                     <div class="footer-logo">
                        <a href="index.html"><img src="{{ asset('frontend/assets/img/logo2.png') }}" alt="logo" /></a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="about-page-text wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.6s">
                     <p>The department of Software Engineering offers the program of B.Sc. in Software Engineering. The program is designed to produce skilled manpower for global IT market in order to satisfy the growing demands of software professionals throughout the world. It provides the students an opportunity to gain a vast knowledge about the overall Software Engineering process as well as Computer Programming, Computer Systems Engineering, Telecommunication Engineering and Electronics Engineering. The central goal is to create knowledgeable, efficient and skilled software engineering graduates so that they are able to make themselves competent to work on not only with the Software Industries in home country but also with any giant technological organization of the world.</p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- About Page Section End -->
       
       
      <!-- About Section Start -->
      <section class="about-section">
         <!-- Top Shape Start -->
         <div class="about-top-shape">
            <img src="{{ asset('frontend/assets/img/about-shape.png') }}" alt="about shape" />
         </div>
         <!-- Top Shape End -->
         <!-- Bottom Shape Start -->
         <div class="about-bottom-shape">
            <img src="{{ asset('frontend/assets/img/about-shape.png') }}" alt="about shape" />
         </div>
         <!-- Bottom Shape End -->
         <!-- About Top Start -->
         <div class="about-top section_100">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-lg-6">
                     <div class="about-right wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
                        <img src="{{ asset('frontend/assets/img/about.png') }}" alt="about" />
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="about-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                        <h3>We Analyze & Visualize<br> The Real Life Data <br> For Incrasing The Companies Business</h3>
                        <p>Explore the latest data insights and strategied from top industry leaders. Gain a better understanding of your business and customers through data. Latest Search Trends. Year in Search Report. Google Search Insights.</p>
                        <p>Business intelligence (BI) can add value to almost any business process, creating a comprehensive view and empowering teams to analyze their own data to find efficiencies and make better day-to-day decisions.

                           Digital transformation is now seen as a key strategic initiative and business intelligence tools have evolved to help companies make the most of their data investments. The response is the rise of modern business intelligence platforms that support data access, interactivity, analysis, discovery, sharing, and governance. While there are some great books about business intelligence that detail practical applications, this article will show off how some specific, big-name companies leverage modern business intelligence platforms.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- About Top End -->
              <!-- About Bottom Start -->
              <div class="about-bottom section_b_100">
               <div class="container">
                  <div class="row align-items-center">
                     <div class="col-lg-6">
                        <div class="about-right wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                           <img src="{{ asset('frontend/assets/img/about.jpg') }}" alt="about" />
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="about-left wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
                           <h3>Using Machine Learning Algorithm<br>To Data Driven Approch <br>Data Visualization & Optimisation </h3>
                           <p>A data-driven approach is when decisions are based on analysis and interpretation of hard data rather than on observation. A data-driven approach ensures that solutions and plans are supported by sets of factual information, and not just hunches, feelings and anecdotal evidence.</p>
                           <p>There are different ways an algorithm can model a problem based on its interaction with the experience or environment or whatever we want to call the input data.

                              It is popular in machine learning and artificial intelligence textbooks to first consider the learning styles that an algorithm can adopt.
                              
                              There are only a few main learning styles or learning models that an algorithm can have and we’ll go through them here with a few examples of algorithms and problem types that they suit.
                              
                              This taxonomy or way of organizing machine learning algorithms is useful because it forces you to think about the roles of the input data and the model preparation process and select one that is the most appropriate for your problem in order to get the best result.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- About Bottom End -->
         </section>
         <!-- About Section End -->

@endsection