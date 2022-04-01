@extends('layouts.app')
@section('title', 'Home')
@section('content')
   <!-- section-2 start -->
   <!-- slider start -->
   <div class="section-2 ">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
         <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
         </div>
         <div class="carousel-inner">
            <div class="carousel-item active">
               <img src="img/sliderbnr/01.jpg" class="d-block w-100" alt="...">
               <div class="carousel-caption d-none d-md-block">
                  <!-- <h5>Comfortable Chauffeur Services in SAUDI</h5>
                     <p>Book a Luxury Chauffeur driven suvs and Cars today <br> anywhere in Kingdom of Saudi Arabia, travel in Style</p> -->
               </div>
            </div>
            <div class="carousel-item">
               <img src="img/sliderbnr/02.jpg" class="d-block w-100" alt="...">
               <div class="carousel-caption d-none d-md-block">
                  <!-- <h5>Comfortable Chauffeur Services in SAUDI</h5>
                     <p>Book a Luxury Chauffeur driven suvs and Cars today <br> anywhere in Kingdom of Saudi Arabia, travel in Style</p> -->
               </div>
            </div>
            <div class="carousel-item">
               <img src="img/sliderbnr/03.jpg" class="d-block w-100" alt="...">
               <div class="carousel-caption d-none d-md-block">
                  <!-- <h5>Comfortable Chauffeur Services in SAUDI</h5>
                     <p>Book a Luxury Chauffeur driven suvs and Cars today <br> anywhere in Kingdom of Saudi Arabia, travel in Style</p> -->
               </div>
            </div>
         </div>
         <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Previous</span>
         </button>
         <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Next</span>
         </button>
      </div>
   </div>
   <!-- slider end -->
   <!-- section-2 end -->
   <!-- business talk -->
   <div class="buisinesstalk">
      <div class="container">
         <div class="row">
            <h1>Welcome to 
               simantaintl.com
            </h1>
            <h2>100% Export Oriented Garments Buying House</h2>
            <div class="col-lg-6">
               <div class="btbox">
                  <p>
                  <p>Simanta International, is a well-established reputed Garments buying house in Dhaka, Bangladesh . We have an experienced and hardworking sales, procurement & quality control team, which can provide you with a complete garments services at competitive prices. Simanta International Management Have integrity and accountability with professional well experience in this trade locally and globally with good reputation. we care for new customer same that the Sum of Our an official for you to start with .Each customer's account is served and handle by an individual executive that is why our service is prompt for all the orders and enquiries .we care for the new customer same that we do for major customers, this is also one of main ethics of our marketing and merchandising department. All of our executives are experienced and knowledgeable and can serve you on each of your retirements.
                     The company is a Buying and Sourcing agency form Bangladesh offers its International buyers, the ultimate’s solution for sourcing excellent quality Garments ,Apparel Accessories form Bangladesh and internationally , and experience in sourcing and technical fields have helped us gain an in-depth understanding of Garments , Apparels and Fashion Accessories. The company specializes in areas of competitive price, product .development, production & timely deliveries, online & post production inspections, coordination & communication. You are warmly invited to visit our office in Bangladesh or please precede the schedule a time for DGS management team to meet with you in corporate office.
                     Our unique vision, mission and values capture the essence of who we are and how we interact with one another. In addition, it speaks to how we go to market and our commitment to delivering excellence to our customer.
                  </p>
                  </p>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="btbox">
                  <img src="img/sliderbnr/04.jpg" alt="">
                  <img src="img/sliderbnr/05.jpg" alt="">
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- business takl -->
   <!-- sec-3 start -->
   <div class="product text-center">
      <div class="container">
         <div class="row">
            <h2>Our Production</h2>
            <div class="col-lg-6">
               <div class="productbox ">
                  <a href="{{ route('products', 1) }}"><img src="{{ asset('img/banner/p1.png') }}" alt=""> 
                  </a>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="productbox ">
                  <a href="{{ route('products', 4) }}">  <img src="{{ asset('img/banner/p2.png') }}" alt=""> 
                  </a>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="productbox ">
                  <a href="{{ route('products', 2) }}"> <img src="{{ asset('img/banner/p3.png') }}" alt=""> 
                  </a>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="productbox ">
                  <a href="{{ route('products', 3) }}"> <img src="{{ asset('img/banner/p4.png') }}" alt="">
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
   </div>
   <!-- sec-3 end -->
   <div class="sec-6">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="slider-design">
               </div>
               <h3>Our Latest Compliance</h3>
               <div class="sec-6-dgn">
                  <div class="dgn-1">
                     <img src="img/COMPLIANCE LOGO/Edit/1.jpg" alt="" width="100%"  >
                  </div>
                  <div class="dgn-1">
                     <img src="img/COMPLIANCE LOGO/Edit/2.png" alt="" width="100%"  >
                  </div>
                  <div class="dgn-1">
                     <img src="img/COMPLIANCE LOGO/Edit/3.png" alt="" width="100%"  >
                  </div>
                  <div class="dgn-1">
                     <img src="img/COMPLIANCE LOGO/Edit/4.png" alt="" width="100%"  >
                  </div>
                  <div class="dgn-1">
                     <img src="img/COMPLIANCE LOGO/Edit/5.png" alt="" width="100%"  >
                  </div>
                  <div class="dgn-1">
                     <img src="img/COMPLIANCE LOGO/Edit/6.png" alt="" width="100%"  >
                  </div>
                  <div class="dgn-1">
                     <img src="img/COMPLIANCE LOGO/Edit/7.jpg" alt="" width="100%"  >
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- sec-6 end -->
@endsection











