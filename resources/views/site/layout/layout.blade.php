<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>TAIC-{{$eventYear}}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('siteimg/ict.jpg') }}" rel="icon">
  <!-- <link href="{{ asset('siteimg/apple-touch-icon.png') }}" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('sitevendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('sitevendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('sitevendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('sitevendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('sitevendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('sitecss/style.css') }}" rel="stylesheet">
   
  <style>
    /* For more text in about section */
    #more {display: none;}
    #moree {display: none;}

    @keyframes blink{
      0%{opacity: 0;}
      50%{opacity: .5;}
      100%{opacity: 1;}
    }
  </style>
</head>
<body>
  <!-- ======= Header ======= -->
  @include('site.header')
  <!-- ======= Hero Section ======= -->
 @include('site.HeroSection')
  <!-- End Hero Section -->

  <main id="main">

    @yield('content')
  
</main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('site.footer')
  <!-- End  Footer -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<script>
  
  function myFunctionn() {
    var dots = document.getElementById("dotss");
    var moreText = document.getElementById("moree");
    var btnText = document.getElementById("myBtnn");
  
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Read more"; 
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Read less"; 
      moreText.style.display = "inline";
    }
  }
  </script>
  <!-- Vendor JS Files -->
  <script src="{{ asset('sitevendor/aos/aos.js') }}"></script>
  <script src="{{ asset('sitevendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('sitevendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('sitevendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('sitevendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('sitejs/main.js') }}"></script>

  <script>
  // Set the date we're counting down to
var countDownDate = new Date("Oct 18, 2023 00:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "WELCOME TAIC 2023";
  }
}, 1000);
  </script>
  
</body>

</html>