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
  <?php 
    $title = '';
    $when = '';
    $about = '';
    $where = '';
    $aboutsection = DB::select("SELECT * FROM abouts WHERE id IN(SELECT MAX(id) FROM abouts)");
    foreach($aboutsection AS $aboutsections){
        $title = $aboutsections->title;
        $about = $aboutsections->about;
        $where = $aboutsections->where;
        $when = $aboutsections->when;
    }
    if($title == ''){$title = 'About The Conference';}
    if($about == ''){
      
    }
    if($when == ''){$when = 'Monday to Friday';}

    $fullname = '';
    $occupation = '';
    $fb = '';
    $twitter = '';
    $insta = '';
    $ini = '';
    $fullnameM = '';
    $occupationM = '';
    $profileM = '';
    $facebookM = '';
    $instagramM = '';
    $twitterM = '';
    $instaM = '';
    $iniM = '';
    $idM = '';
    $speakers = DB::select("SELECT * FROM speakers WHERE titleLabel = 'others'");
    $speakersMain = DB::select("SELECT * FROM speakers WHERE titleLabel = 'main'");
    if(isset($speakersMain)){
      foreach($speakersMain AS $speakerM){
        $fullnameM = $speakerM->fullname;
        $occupationM = $speakerM->occupation;
        $profileM = $speakerM->profile;
        $facebookM = $speakerM->facebook;
        $twitterM = $speakerM->tweeter;
        $iniM = $speakerM->ini;
        $instagramM = $speakerM->instagram;;
        $idM = $speakerM->id;
      }
    }
    if($fullnameM == ''){$fullnameM = 'Full Name';}
    if($occupationM == ''){$occupationM = 'Occupation';}
    if($profileM == ''){$profileM = 'default.png';}
    if($facebookM == ''){
      $facebookM = '#';
    }else{
      $facebookM = "https://www.facebook.com/".$facebookM;
    }
    if($twitterM == ''){
      $twitterM = '#';
    }else{
      $twitterM = "https://www.twitter.com/".$twitterM;
    }
    if($iniM == ''){
      $iniM = '#';
    }else{
      $iniM = "https://www.linkedin.com/".$iniM;
    }
    if($instagramM == ''){
      $instagramM = '#';
    }else{
      $instagramM = "https://www.instagram.com/".$instagramM;
    }
  ?>

  <!-- ======= About Section ======= -->
  <section id="about">
    <div class="container" data-aos="fade-up">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-header">
            <h2>{{$aboutTitle}}</h2>
          </div>
          <p style="text-align: center;">{{$aboutConference}}</p>
        </div>
        </div>
      </div>
  </section><!-- End About Section -->
    
  <!-- ======= Guest Of Honour Section ======= -->
  @include('site.pricing')
  @include('site.guests')
 
    <!-- End Speakers Section -->

    <?php 
      $day = '';
      $action = '';
      $timefrom = '';
      $timeto = '';
      $venue = '';

      $day2 = '';
      $action2 = '';
      $timefrom2 = '';
      $timeto2 = '';
      $venue2 = '';

      $day3 = '';
      $action3 = '';
      $timefrom3 = '';
      $timeto3 = '';
      $venue3 = '';

      $schedule = DB::select("SELECT * FROM schedules WHERE day = 'Wednesday'");
      $schedule2 = DB::select("SELECT * FROM schedules WHERE day = 'Thursday'");
      $schedule3 = DB::select("SELECT * FROM schedules WHERE day = 'Friday'");
    ?>
    <!-- ======= Schedule Section ======= -->
    @include('site.schedule')
    
    <!-- ======= Sponsors Section ======= -->
    {{-- @include('site.sponsors') --}}
    <?php 
      $partnersname = '';
      $picture = '';
      
      $partners = DB::select("SELECT * FROM partners");
      if(isset($partners)){
        foreach($partners AS $partner){
          $partnersname = $partner->partnersname;
          $picture = $partner->picture;
        }
      }
    ?>
    <!-- ======= Partners Section ======= -->
    @include('site.partners')
    <!-- End Pertiners Section -->
    
    <?php 
      $exhibitorsname = '';
      $picture = '';
      
      $exhibitors = DB::select("SELECT * FROM exhibitors");
      if(isset($exhibitors)){
        foreach($exhibitors AS $exhibitor){
          $exhibitorsname = $exhibitor->exhibitorsname;
          $picture = $exhibitor->picture;
        }
      }
    ?>
    <!-- ======= Exhibitors Section ======= -->
    @include('site.exhibitors')
    <!-- End Sponsors Section -->

    <?php 
      $address = '';
      $phone = '';
      $email = '';
      
      $contacts = DB::select("SELECT * FROM contacts");
      if(isset($contacts)){
        foreach($contacts AS $contact){
          $address = $contact->address;
          $phone = $contact->phone;
          $email = $contact->email;
        }
      }
      if($address == ''){
        $address = '14 Jamhuri Street, Dar Es Salaam, Tanzania';
      }
      if($phone == ''){
        $phone = '+255 738 171 742';
      }
      if($email == ''){
        $email = 'info@ictc.go.tz';
      }
    ?>
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="section-bg">

      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Contact Us</h2>
          <!-- <p>Nihil officia ut sint molestiae tenetur.</p> -->
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="bi bi-geo-alt"></i>
              <h3>Address</h3>
              <address>{{$address}}</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="bi bi-phone"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+255738171742">+255738171742</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="bi bi-envelope"></i>
              <h3>Email</h3>
              <p><a href="info@ictc.go.tz">info@ictc.go.tz</a></p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

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