<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="{{asset('front_assets/front_assets/fonts/Gotham-Book.ttf')}}">
    <link rel="preconnect" href="{{asset('assets/front_assets/fonts/Gotham-Bold.ttf')}}">
    <link rel="preconnect" href="{{asset('assets/front_assets/fonts/FrutigerLTArabic45Light.ttf')}}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <style>
      @media (max-width: 768px) {
        .borderedDivs {
          border-right: 4px solid #ffffff;
          border-left: 4px solid #ffffff;
          border-top: 4px solid #ffffff;
        }

        .specialDiv {
          border-bottom: 4px solid #ffffff;
        }
      }

      @media (min-width: 769px) {
        .borderedDivs {
          border-right: 4px solid #ffffff;
          border-left: 4px solid #ffffff;
          border-top: 4px solid #ffffff;
          border-bottom: 4px solid #ffffff;
        }
      }
      
      
      footer {
        clear: both; /* Ensures that the footer appears below the centered content */
      }

      @media (max-width: 768px) {
          .size {
              margin: 0 auto;
          }
      }

      @media (min-width: 769px) {
          .size {
            width: 800px;
            margin: 0 auto;
        }
      }

      

      
    </style>

    <title>Five</title>
    <link rel="icon" type="image/png" href="{{asset('assets/front_assets/images/five-logo.png')}}">
    <!-- Bootstrap core CSS -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('assets/front_assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front_assets/css/templatemo-space-dynamic.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front_assets/css/animated.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front_assets/css/owl.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/front_assets/icons/css/all.min.css')}}"/>



<!--
    
TemplateMo 562 Space Dynamic

https://templatemo.com/tm-562-space-dynamic

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="{{url('/')}}" class="logo">
              <img style="width: 200px; height:100px"  src="{{asset('assets/front_assets/images/five-logo.png')}}" alt="logo">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="#about">About Us</a></li>
              <li class="scroll-to-section"><a href="#Works">Works</a></li>
              <li class="scroll-to-section"><a href="#Experiences">Experiences</a></li>
              <li class="scroll-to-section"><a href="#contact">Contact us</a></li> 

              {{-- <li class="scroll-to-section"> @if (Route::has('login'))
                @auth
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a></li> 


                    <li class="scroll-to-section">@else
                      <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li> 

                      <li class="scroll-to-section"> @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
          
                @endif</li>  --}}

                    
              <li class="scroll-to-section"><a href="#"></a></li> 
            </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->
  
 
</div>
  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container ">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            @if(session('success'))
            <div class="alert alert-success">
              {{ session('success') }}
            </div>
          @endif
              <div class="wrapper">
                <div class="col">
                  <div class="static-txt">At Five we defined our selves as</div>
                </div>
                <div class="col">
                  <ul class="dynamic-txt">
                    <li><span>VISIONARY</span></li>
                    <li><span>EXPERIENCESHAPERS</span></li>
                    <li><span>SOLUTIONSORIENTED</span></li>
                  </ul>
                </div>
              </div>
              
          </div>
        </div>
      </div>
    </div>
  </div>
  <div>
    <div class="desert_image">
      <div class="left-image wow fadeIn  bg-secondary" data-wow-duration="1s" data-wow-delay="0.2s">
        <img src="{{asset('assets/front_assets/images/desert3.jpg')}}" class="img-fluid w-100" style="height: 600px;" alt="person graphic">
      </div>
    </div>
</div>


<div class="centered pt-5" style="background-color: #e7edfd;">
  <div class="size">
<div id="about" class="our-services section pt-5">
  <div class="container">
    <div class="row ">
      <div class="col wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
        <div class="section-heading ">
          <h2 class="txt_color pb-2 fs-3"> ABOUT US</h2>
          <p class="fw-normal fs-6">At Five ,'visionary' is not just a word—it's our essence.<br>
            We commit to an experience-shaping ethos that forges<br>
            not just paths but destinies,crafting solutions with the<br>
            power to transform.</p>
        </div>
      </div>
    </div>
  </div>
</div>


  <div id="Works" class="our-services section">
    <div class="container">
        <div class=" wow fadeInRight " data-wow-duration="1s" data-wow-delay="0.2s">
          <div class="section-heading ">
            <h2 class="txt_color mb-5">WORKS </h2>


            @foreach ($slider as $item)
            <div class="single-item" >
              <div class="card mb-3" >
                <div class="card" style="background: rgba(182, 182, 182, 0.316)">
                  <video style="width: 100%" controls>
                    <source src="{{ asset('uploads/video/slidervideo/' . $item->video) }}" type="video/mp4">
                      Your browser does not support the video tag.
                  </video>
                  <div class="card-body " style="direction: rtl;">
                    <div class="card-title d-flex justify-content-center text-center"><img src="{{asset('uploads/logo/sliderlogo/' . $item->logo) }}" width="400" alt="Image 1"></div>
                    <h2  class="card-text fs-md-4">{{$item->title}}</h2>
                    <p style="font-size: large !important; line-height:inherit;" class="card-text">{{$item->description}}</p>
                    <p style="font-size: large !important; line-height:inherit;margin-top:2%;font-weight:bold" class="card-text">
                      {{$item->subtitle}}
                    </p>
                  </div> 
              </div>
            </div>
            @endforeach


          </div>
        </div>
    </div>
  </div>

  
  <div id="Experiences" class="our-services section mt-5 pt-5">
    <div class="container">
      <div class="row ">
        <div class="col wow fadeInRight " data-wow-duration="1s" data-wow-delay="0.2s">
          <div class="section-heading" style="margin-bottom: 7%">
            <h2 class="txt_color"> EXPERIENCES</h2>
            <p class="fs-6">The clients that we successfully made them happy</p>
          </div>

<div>

  <div class="container">
    <div class="row text-center" style="background: rgba(182, 182, 182, 0.316)">
      
      <div class="col-md-4 borderedDivs" ><img style="max-width: 100%; height: auto;"class="partner-img" src="{{asset('assets/imgs/partnerLogos/1.png')}}" alt="Image 1"></div>
      <div class="col-md-4 borderedDivs" ><img style="max-width: 100%; height: auto;"class="partner-img img-fluid" src="{{asset('assets/imgs/partnerLogos/2.png')}}" alt="Image 2"></div>
      <div class="col-md-4 borderedDivs" ><img style="max-width: 100%; height: auto;"class="partner-img" src="{{asset('assets/imgs/partnerLogos/3.png')}}" alt="Image 3"></div>
      
      <div class="col-md-4 borderedDivs " ><img style="max-width: 100%; height: auto;" class="partner-img" src="{{asset('assets/imgs/partnerLogos/4.png')}}" alt="Image 4"></div>
      <div class="col-md-4 borderedDivs " ><img style="max-width: 100%; height: auto;" class="partner-img" src="{{asset('assets/imgs/partnerLogos/5.png')}}" alt="Image 5"></div>
      <div class="col-md-4 borderedDivs " ><img style="max-width: 100%; height: auto;" class="partner-img" src="{{asset('assets/imgs/partnerLogos/6.png')}}" alt="Image 6"></div>

      <div class="col-md-4 borderedDivs " ><img style="max-width: 100%; height: auto;" class="partner-img" src="{{asset('assets/imgs/partnerLogos/7.png')}}" alt="Image 7"></div>
      <div class="col-md-4 borderedDivs " ><img style="max-width: 100%; height: auto;" class="partner-img" src="{{asset('assets/imgs/partnerLogos/8.png')}}" alt="Image 8"></div>
      <div class="col-md-4 borderedDivs " ><img style="max-width: 100%; height: auto;" class="partner-img" src="{{asset('assets/imgs/partnerLogos/9.png')}}" alt="Image 9"></div>

      <div class="col-md-4 borderedDivs "><img style="max-width: 100%; height: auto;" class="partner-img" src="{{asset('assets/imgs/partnerLogos/10.png')}}" alt="Image 10"></div>
      <div class="col-md-4 borderedDivs "><img style="max-width: 100%; height: auto;" class="partner-img" src="{{asset('assets/imgs/partnerLogos/11.png')}}" alt="Image 11"></div>
      <div class="col-md-4 borderedDivs "><img style="max-width: 100%; height: auto;" class="partner-img" src="{{asset('assets/imgs/partnerLogos/12..png')}}" alt="Image 12"></div>

      <div class="col-md-4 borderedDivs " ><img style="max-width: 100%; height: auto;" class="partner-img" src="{{asset('assets/imgs/partnerLogos/13.png')}}" alt="Image 13"></div>
      <div class="col-md-4 borderedDivs " ><img style="max-width: 100%; height: auto;" class="partner-img" src="{{asset('assets/imgs/partnerLogos/14.png')}}" alt="Image 14"></div>
      <div class="col-md-4 borderedDivs " ><img style="max-width: 100%; height: auto;" class="partner-img" src="{{asset('assets/imgs/partnerLogos/15.png')}}" alt="Image 15"></div>

      <div class="col-md-4 borderedDivs " ><img style="max-width: 100%; height: auto;" class="partner-img" src="{{asset('assets/imgs/partnerLogos/16.png')}}" alt="Image 16"></div>
      <div class="col-md-4 borderedDivs " ><img style="max-width: 100%; height: auto;" class="partner-img" src="{{asset('assets/imgs/partnerLogos/17.png')}}" alt="Image 17"></div>
      <div class="col-md-4 borderedDivs " ><img style="max-width: 100%; height: auto;" class="partner-img" src="{{asset('assets/imgs/partnerLogos/18.png')}}" alt="Image 18"></div>

      <div class="col-md-4 borderedDivs " ><img style="max-width: 100%; height: auto;" class="partner-img" src="{{asset('assets/imgs/partnerLogos/19.png')}}" alt="Image 19"></div>
      <div class="col-md-4 borderedDivs " ><img style="max-width: 100%; height: auto;" class="partner-img" src="{{asset('assets/imgs/partnerLogos/20.png')}}" alt="Image 20"></div>
      <div class="col-md-4 borderedDivs specialDiv" ><img style="max-width: 100%; height: auto;" class="partner-img" src="{{asset('assets/imgs/partnerLogos/21.png')}}" alt="Image 21"></div>
    </div>
  </div>
</div>


        </div>
      </div>
    </div>
  </div>




  
  <div id="contact" class="our-services section" style="margin-top: 100px">
    <div class="container">
      <div class="row ">
        <div class="col wow fadeInRight " data-wow-duration="1s" data-wow-delay="0.2s">
          <div class="section-heading " style="margin-bottom: 7%">
            <h2 class="txt_color"> CONTACT US</h2>
            <p class="fs-6">Contact us and let's craft solutions that will define tomorrow</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="contact" class="contact-us section ">
    <div class="container">
        <div class="col-lg-12 wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.25s">

          @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if(session('success'))
<div class="alert alert-success">
  {{ session('success') }}
</div>
@endif
          <form id="contact" action="{{ route('store-form') }}" method="post">
            @csrf
            <div class="row justify-content-center">
              <div class="col-md-10">
                <div class="py-2" style="align-items: center;">
                  <img src="{{asset('assets/imgs/icons/contact.png')}}" class="pb-2" style="width:23px" alt="">
                  <label class="fs-5 mb-2 px-1" for="name" style="color:#328d7b;">Name</label>
                  <input class="rounded-3 border w-100" type="name" name="name" id="name" autocomplete="on" required>                     
                </div>
                <div class="py-2" style="align-items: center;">
                  <img src="{{asset('assets/imgs/icons/email.png')}}" class="pb-2" style="width:23px" alt="">
                  <label class="fs-5 mb-2 px-1" for="name" style="color:#328d7b;">Email</label>   
                  <input class="rounded-3 border w-100" type="email" name="email" id="email" pattern="[^ @]*@[^ @]*"  required="">                  
                </div>  
                <div class="py-2" style="align-items: center;">
                  <img src="{{asset('assets/imgs/icons/phone.png')}}" class="pb-2" style="width:23px" alt="">
                  <label class="fs-5 mb-2 px-1" for="name" style="color:#328d7b;">Phone</label>
                  <input class="rounded-3 border w-100" type="text" name="phone" id="phone" autocomplete="on" required>
                </div>
                <div class="py-2">
                  <img src="{{asset('assets/imgs/icons/msg.png')}}" class="pb-2" style="width:23px" alt="">
                  <label class="fs-5 px-1" for="name" style=" color:#328d7b;">Message</label> 
                  <textarea name="message" type="text" class="form-control rounded-3" id="message" required=""></textarea> 
                </div>
                <button style="width: 100%" type="submit" class="btn btn-primary">Send</button>

              </div>
              
            </div>
          </form>
        </div>
              <div class="form_footer mb-5">
                <div class="row text-center p-3">
                  <div class="col-lg-4 col-12">
                    <h6 class=" text-light">info@thefive.sa</h6>
                    <h6 class=" text-light">info@thefive.sa</h6>
                  </div>
                  <div class="col-lg-4 col-12">
                    <h6 class=" text-light">+966555111999</h6>
                  </div>
                  <div class="col-lg-4 col-12 fs-3 mt-2">
                    <a href="#"><i class="fa-brands fa-instagram text-light"></i></a>
                    <a href="#"><i class="fa-brands fa-x-twitter text-light"></i></a>
                    <a href="#"><i class="fab fa-facebook text-light"></i></a>
                  </div>
                </div>
              </div>
    </div>
  </div>
  </div>
</div>
</div>
<!-- Footer -->
<footer style="margin-top: 35%;   background: #213f99;
" class="text-center text-lg-start bg-body-tertiary text-muted">

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
          <img style="width: 200px; height:100px"  src="{{asset('assets/front_assets/images/five-logo.png')}}" alt="logo">
          </h6>

          <div style="border-left: 3px solid white;margin: 22px;">
                <div><a class="footerLinks" href="#about">About Us</a></div>
                <div><a class="footerLinks" href="#Works">Works</a></div>
                <div><a class="footerLinks" href="#Experiences">Experiences</a></div>
                <div><a class="footerLinks" href="#contact">Contact Us</a></div>
          </div>

        <div>
          <h5 class="mt-5 text-light ms-3">+966555111999</h5>
        </div>

        </div>
        <!-- Grid column -->





        <!-- Grid column -->
        <div style="margin-top: 11%; color:#fff" class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          
          <!-- Links -->
          <h5>
            Follow Us
          </h5>
          <div class="mb-3 fs-4">
            <a href="#"><i class="fa-brands fa-instagram text-light"></i></a>
            <a href="#"><i class="fa-brands fa-x-twitter text-light"></i></a>
            <a href="#"><i class="fab fa-facebook text-light"></i></a>
          </div>
          <div>
          <h6>Subscribe Now!</h6>
          </div>
          <div class="mb-1">
          <h6>Get our latest news.</h6>
          </div>
          <div style="display: flex; align-items: center; gap: 10px;">
            <form action="{{ route('subscribe') }}" method="post">
                @csrf
                <div style="display: flex;">
                    <input type="email" placeholder="Your Email" name="email" id="email" pattern="[^ @]*@[^ @]*" required="">
                    <button type="submit" style="background-color: #00ad8e; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">Subscribe</button>
                </div>
            </form> 
        </div>
        
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4 text-light" style="background-color: rgba(0, 0, 0, 0.05);">
    Connect with Five |©2024 Five communication.Shapingstories.
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
  <!-- Scripts -->
  <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/front_assets/js/owl-carousel.js')}}"></script>
  <script src="{{asset('assets/front_assets/js/animation.js')}}"></script>
  <script src="{{asset('assets/front_assets/js/imagesloaded.js')}}"></script>
  <script src="{{asset('assets/front_assets/js/templatemo-custom.js')}}"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('.single-item').slick({
        autoplay: true, // تفعيل السلايدر التلقائي
        autoplaySpeed: 2000 // مدة الانتقال بين الشرائح بالمللي ثانية (هنا 2000 تعني 2 ثانية)
      });
    });
  </script>
</body>
</html>