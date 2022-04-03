<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title> @yield('title') | Simanta International</title>
      <!-- css -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
      {{-- Notify css --}}
      <link rel="stylesheet" href="https://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css" />
      <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
      <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
      <link rel="stylesheet" href="{{ asset('css/font.css') }}">
      <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
      <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}">
      <link rel="stylesheet" href="{{ asset('css/style.css') }}">
   </head>
   <body >
      <!-- sec-top -->
      <div class="Section-top">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="section-one-design">
                     <nav class="navbar navbar-expand-lg navbar-light ">
                        <div class="container-fluid">
                           <a class="navbar-brand" href="{{ route('index') }}"><img src="{{ asset('img/logo/logo.jpeg') }}" alt=""></a>
                           <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                           <span class="navbar-toggler-icon"></span>
                           </button>
                           <div class="collapse navbar-collapse" id="navbarNav">
                              <ul class="navbar-nav ms-auto">
                                 <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="https://www.facebook.com/">
                                       <i class="fa-brands fa-facebook text-info fs-3"></i>
                                    </a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="https://www.linkedin.com/login">
                                       <i class="fa-brands fa-linkedin text-secondary fs-3"></i>
                                    </a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="https://twitter.com/">
                                       <i class="fa-brands fa-twitter-square text-primary fs-3"></i>
                                    </a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="https://www.youtube.com/">
                                       <i class="fa-brands fa-youtube text-danger fs-3"></i>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- sec-top -->
      <!-- sec-1 -->
      <div class="Section-one">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="section-one-design">
                     <nav class="navbar navbar-expand-lg navbar-light ">
                        <div class="container-fluid">
                           <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                           <span class="navbar-toggler-icon"></span>
                           </button>
                           <div class="collapse navbar-collapse" id="navbarNav">
                              <ul class="navbar-nav mx-auto">
                                 <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Home</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="{{ route('aboutus') }}">ABOUT US</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="{{ route('our.comanpy') }}">Our Companies</a>
                                 </li>
                                 <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="Products.html" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    OUR PRODUCT
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <li><a class="dropdown-item" href="{{ route('products', 1) }}">Kids</a></li>
                                        <li><a class="dropdown-item" href="{{ route('products', 3) }}">Oven</a></li>
                                        <li><a class="dropdown-item" href="{{ route('products', 2) }}">Knit</a></li>
                                       <li><a class="dropdown-item" href="{{ route('products', 4) }}">Sweater</a></li>
                                    </ul>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="{{ route('compliance') }}">COMPLIANCE</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="{{ route('services') }}">OUR SERVICES</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="{{ route('contactus') }}">CONTACT US</a>
                                 </li>
                                 @if (Auth::guest())
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">Admin <i class="fa-solid fa-user-check"></i></a>
                                    </li>
                                @else
                                    <li>
                                        @if (Auth::user()->role == 1)
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('admin.index') }}">Admin <i class="fa-solid fa-user-check"></i></a>
                                            </li>
                                        @elseif(Auth::user()->role == 2)
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('admin.index') }}">Admin <i class="fa-solid fa-user-check"></i></a>
                                            </li>
                                        @endif
                                    </li>
                                @endif
                              </ul>
                           </div>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- section-1 end -->

    @yield('content')

    <!-- sec-5 start -->
    <div class="sec-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="sec-5-dgn">
                <img src="{{ asset('img/logo/logo.jpeg') }}" alt="">
                <h3><span>ADDRESS:</span> APT: #2A HOUSE #109 MOSQUE ROAD BANANI OLD DOHS DHAKA 1206 BANGLADESH</h3>
                <h3><span>PHONE:</span> 01711568025</h3>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="sec-5-dgn">
                <h2>USEFUL LINKS</h2>
                <h3><a href="{{ route('aboutus') }}">ABOUT</a></h3>
                <h3><a href="{{ route('products', 1) }}">OUR-PRODUCT</a></h3>
                <h3><a href="{{ route('contactus') }}">CONTACT</a></h3>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- sec-5 end -->
    <!-- js -->
    <script src="{{ asset('js/jquery-3.6.0.slim.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    {!! Notify::message() !!}
</body>
</html>


