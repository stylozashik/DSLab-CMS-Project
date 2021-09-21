<!-- Hero Section Start -->
<section class="hero-section">
         <!-- Hero Shape Start -->
         <div class="hero-shape1">
            <img src="{{ asset('frontend/assets/img/hero-pattarn-1.png') }}" alt="shape">
         </div>
         <div class="hero-shape2">
            <img src="{{ asset('frontend/assets/img/hero-pattarn-2.png') }}" alt="shape">
         </div>
         <div class="hero-shape3">
            <img src="{{ asset('frontend/assets/img/hero-pattarn-3.png') }}" alt="shape">
         </div>
         <div class="hero-shape4">
            <img src="{{ asset('frontend/assets/img/hero-pattarn-4.png') }}" alt="shape">
         </div>
         <div class="hero-shape5">
            <img src="{{ asset('frontend/assets/img/her-pattarn-5.png') }}" alt="shape">
         </div>
         <!-- Hero Shape End -->
          
         <!-- Hero Bg Start -->
         <div class="hero-bg">
            <img src="{{ asset('frontend/assets/img/hero_shape.png') }}" alt="hero shape" />
         </div>
         <!-- Hero Bg End -->
          
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-6 col-md-6">
                  <div class="hero-left">
                     <h2><span class="underline">{{ $banner->home_banner_content_title_up }} </span> <span>{{ $banner->home_banner_content_title_middle }}</span>{{ $banner->home_banner_content_title_down }}</h2>
                     <p>{{ $banner->home_banner_content_subtitle }}</p>
                  </div>
               </div>
               <div class="col-lg-6 col-md-6">
                  <div class="hero-right">
                     <img src="{{ asset("storage/$banner_image->home_banner_image_url") }}" alt="hero" />
                     <div class="hero-dot-shape">
                        <img src="{{ asset('frontend/assets/img/hero-dot-shape.png') }}" alt="shape" />
                     </div>
                  </div>
               </div>
            </div>
         </div>
</section>
<!-- Hero Section End -->