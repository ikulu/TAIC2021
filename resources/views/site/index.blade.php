<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Taic2022 - Index</title>
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

  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center ">
    <div class="container-fluid container-xxl d-flex align-items-center">

      <div id="logo" class="me-auto">
        <!-- Uncomment below if you prefer to use a text logo -->
        <?php 
          $apname = '';
          $apnames = DB::select("SELECT * FROM headers WHERE id IN(SELECT MAX(id) FROM headers)");
          foreach($apnames AS $name){
              $apname = $name->appname;
          }
          if($apname == ''){
            $apname = "2022";
          }
        ?>
        <h1><a href="/">TAIC<span>{{$apname}}</span></a></h1>
        <!-- <a href="index.html" class="scrollto"><img src="{{ asset('siteimg/logo.png') }}" alt="" title=""></a> -->
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#speakers">Speakers</a></li>
          <li><a class="nav-link scrollto" href="#schedule">Schedule</a></li>
          <li><a class="nav-link scrollto" href="#venue">Venue</a></li>
          <!-- <li><a class="nav-link scrollto" href="#hotels">Hotels</a></li> -->
          <!-- <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li> -->
          <li><a class="nav-link scrollto" href="#supporters">Sponsors</a></li>
          <li class="dropdown"><a href="#"><span>TAIC Events</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li class="dropdown"><a href="sitedocuments/TAIC 2021_FINAL_REPORT.pdf" target="blank"><span>TAIC 2021</span> <i class="bi bi-chevron-right"></i></a>
              <ul>
                <li><a href="sitedocuments/TAIC 2021_FINAL_REPORT.pdf" target="blank">Final Report</a></li>
              </ul>
            </li>
            <li class="dropdown"><a href="#"><span>TAIC 2020</span> <i class="bi bi-chevron-right"></i></a>
              <ul>
                <li><a href="#">Final Report</a></li>
              </ul>
            </li>
          </ul>
        </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <a class="buy-tickets scrollto" href="https://taicregform.ictc.go.tz/" target="blank">Register</a>

    </div>
  </header><!-- End Header -->

  <?php 
    $title = '';
    $fromdate = '';
    $todate = '';
    $timmer = '';
    $location = '';
    $frontpage = DB::select("SELECT * FROM frontpages WHERE id IN(SELECT MAX(id) FROM frontpages)");
    foreach($frontpage AS $frontpages){
        $title = $frontpages->title;
        $fromdate = $frontpages->fromdate;
        $todate = $frontpages->todate;
        $timmer = $frontpages->timmer;
        $location = $frontpages->location;
    }
    if($title == ''){$title = 'Tanzania Annual ICT Conference';}
    if($location == ''){$location = 'Golden Tulip, Zanzibar, Tanzania';}
    if($fromdate == ''){$fromdate = '2022-10-26';}
    if($todate == ''){$todate = '2022-10-28';}
    $fromdate = date_create($fromdate);
    $todate = date_create($todate);
    $presentedFromdate = date_format($fromdate,"d");
    $presentedTodate = date_format($todate,"d");
    $presentedMonthDate = date_format($fromdate,"M"); 
  ?>
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
      <h1 class="mb-4 pb-0">{{$title}}</h1>
      <!-- Tanzania Annual<br><span>ICT</span> Conference -->
      <p class="mb-4 pb-0">{{$presentedFromdate}} - {{$presentedTodate}} {{$presentedMonthDate}}, {{$location}}</p>
      <p style="text-align: center;font-size: 60px;margin-top: 0px;" id="demo"></p>
      <a href="" class="glightbox play-btn mb-4"></a>
      <a href="sitedocuments/TAIC 2022 Information Booklet Updated.pdf" class="about-btn scrollto" target="blank">INFORMATION BOOKLET</a>
    </div>
  </section><!-- End Hero Section -->

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
    if($about == ''){$about = 'The Tanzania Annual ICT Conference (TAIC) is one of the largest international gathering of
      ICT industry players in Tanzania that offers a unique platform for capacity building, policy
      dialogues, business investors networking, professional discussion, experience and knowledge
      sharing on the global ICT issues, business opportunities, knowledge and skills needs to cope
      with the dynamic digital ecosystem. The Conference also serves as a platform for participants to
      discuss enabling environment for ICT growth towards socio-econo<span id="dots">...</span><span id="more">mic development in Tanzania.
      The 5 th TAIC 2019 succeeds two TAICs and two Annual ICT Professionals Conferences
      (AIPC) that the Information and Communication Technologies (ICT) Commission has been
      organizing since 2017 bringing together more than 800 ICT stakeholders from both Government
      and Private Sector, Small Medium Enterprises, Academia, researchers, startups, ICT
      Entrepreneurs and the business industry. organized by the Tanzania ICT Commission.<br><br>
      The conference discussions focus on a wide range of topics emphasizing on the role of ICT in
      social-economic development and the role of ICT as an important tool for attainment of
      Tanzania Development Vision and Sustainable Development Goals. The conference will be
      featured with exhibitions from various ICT stakeholders showcasing their products, services
      and innovations.';}
      if($when == ''){$when = 'Wednesday to Friday';}
  ?>
  <!-- ======= About Section ======= -->
  <section id="about">
    <div class="container" data-aos="fade-up">
      <div class="row">
        <div class="col-lg-6">
          <h2>{{$title}}</h2>
          <p>{{$about}} For more information read <a href="sitedocuments/TAIC 2022 INFORMATION BOOKLET.pdf" target="blank">TAIC 2022 INFORMATION BOOKLET</a></span></p>
          </div>
          <div class="col-lg-3">
            <h3>Where</h3>
            <p>{{$location}}</p>
            <h3>When</h3>
            <p>{{$when}}<br>{{$presentedFromdate}} - {{$presentedTodate}} {{$presentedMonthDate}}</p>
            <a href="sitedocuments/TAIC 2022 Information Booklet Updated.pdf" target="blank">TAIC 2022 INFORMATION BOOKLET</a>
          </div>
          <div class="col-lg-3">
            <img src="{{ asset('siteimg/taic1.jpeg') }}" alt="Speaker 3" class="img-fluid">
          </div>
        </div>
      </div>
    </section><!-- End About Section -->
    
    <?php 
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
      $speakers = DB::select("SELECT * FROM speakers WHERE title = 'others'");
      $speakersMain = DB::select("SELECT * FROM speakers WHERE title = 'main'");
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
    <!-- ======= Guest Of Honour Section ======= -->
    <section id="speakers">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Guest Of Honour</h2>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6"></div>
          <div class="col-lg-3 col-md-6">
            <div style="text-align:center" class="speaker" data-aos="fade-up" data-aos-delay="300">
              <img src="{{ asset('profiles/'.$profileM) }}" alt="Image of the guest of honor" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">{{$fullnameM}}</a></h3>
                <p>{{$occupationM}}</p>
                <?php if($fullnameM == ''){ echo "<p>To be Comfirmed</p>";} ?>
                <div class="social">
                  <a href="{{$twitterM}}" target = "blank"><i class="bi bi-twitter"></i></a>
                  <a href="{{$facebookM}}" target = "blank"><i class="bi bi-facebook"></i></a>
                  <a href="{{$instagramM}}" target = "blank"><i class="bi bi-instagram"></i></a>
                  <a href="{{$iniM}}" target = "blank"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6"></div>
        </div>
      </div>

    </section><!-- End Speakers Section -->

    <!-- ======= Speakers Section ======= -->
    <section id="speakers">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Conference Speakers</h2>
          <p>Here are some of our speakers</p>
        </div>

        <div class="row">
        <?php
          foreach($speakers AS $speaker){
              $fullname = $speaker->fullname;
              $occupation = $speaker->occupation;
              $profile = $speaker->profile;
              $facebook = $speaker->facebook;
              $instagram = $speaker->instagram;
              $twitter = $speaker->tweeter;
              $ini = $speaker->ini;
              $id = $speaker->id;

              if($fullname == ''){$fullname = 'Full Name';}
              if($occupation == ''){$occupation = 'Occupation';}
              if($profile == ''){$profile = 'default.png';}
              if($facebook == ''){
                $facebook = '#';
              }else{
                $facebook = "https://www.facebook.com/".$facebook;
              }
              if($twitter == ''){
                $twitter = '#';
              }else{
                $twitter = "https://www.twitter.com/".$twitter;
              }
              if($ini == ''){
                $ini = '#';
              }else{
                $ini = "https://www.linkedin.com/".$ini;
              }
              if($instagram == ''){
                $instagram = '#';
              }else{
                $instagram = "https://www.instagram.com/".$instagram;
              }
        ?>
              <div class="col-lg-4 col-md-6">
              <div class="speaker" data-aos="fade-up" data-aos-delay="100">
              <img src="{{asset('profiles/'.$profile)}}" alt='' class='img-fluid'>
              <div class='details'>
                <h6><a href='speaker-details.html'>{{$fullname}}</a></h6>
                <p>{{$occupation}}</p>
                <div class='social'>
                  <a href='{{$twitter}}'><i class='bi bi-twitter'></i></a>
                  <a href='{{$facebook}}'><i class='bi bi-facebook'></i></a>
                  <a href='{{$instagram}}'><i class='bi bi-instagram'></i></a>
                  <a href='{{$ini}}'><i class='bi bi-linkedin'></i></a>
                </div>
              </div>
            </div>
          </div>
          <?php
          }
          if($fullname == ''){?>
            <div class="col-lg-4 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="100">
              <img src="{{ asset('siteimg/speakers/person.png') }}" alt="" class="img-fluid">
              <div class="details">
                <p>To be Comfirmed</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="200">
              <img src="{{ asset('siteimg/speakers/person.png') }}" alt="" class="img-fluid">
              <div class="details">
                <p>To be Comfirmed</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="300">
              <img src="{{ asset('siteimg/speakers/person.png') }}" alt="" class="img-fluid">
              <div class="details">
                <p>To be Comfirmed</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <?php }
          ?>
        </div>
      </div>

    </section><!-- End Speakers Section -->

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
    <section id="schedule" class="section-with-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Event Schedule</h2>
          <p>Here is our event schedule</p>
        </div>

        <ul class="nav nav-tabs" role="tablist" data-aos="fade-up" data-aos-delay="100">
          <li class="nav-item">
            <a class="nav-link active" href="#day-1" role="tab" data-bs-toggle="tab">Wednesday</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#day-2" role="tab" data-bs-toggle="tab">Thursday</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#day-3" role="tab" data-bs-toggle="tab">Friday</a>
          </li>
        </ul>

        <!-- <h3 class="sub-heading">Voluptatem nulla veniam soluta et corrupti consequatur neque eveniet officia. Eius
          necessitatibus voluptatem quis labore perspiciatis quia.</h3> -->

        <div class="tab-content row justify-content-center" data-aos="fade-up" data-aos-delay="200">

          <!-- Schdule Day 1 -->
          <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">

            <?php
              foreach($schedule AS $schedules){
                $day = $schedules->day;
                $action = $schedules->action;
                $timefrom = $schedules->timefrom;
                $timeto = $schedules->timeto;
                $venue = $schedules->venue;
                $id1 = $schedules->id; 
              ?>
              <div class="row schedule-item">
                <div class="col-md-2"><time>{{$timefrom}}-{{$timeto}}</time></div>
                <div class="col-md-10">
                  <h4>{{$action}} <span></span></h4>
                  <p>{{$venue}}</p>
                </div>
              </div>
              <?php } ?>
              <?php 
              if($action == ''){
            ?>
            <div class="row schedule-item">
              <div class="col-md-2"><time></time></div>
              <div class="col-md-10">
                <h4>To be Comfirmed</h4>
              </div>
            </div>
            <?php } ?>

          </div>
          <!-- End Schdule Day 1 -->

          <!-- Schdule Day 2 -->
          <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-2">
              <?php
              foreach($schedule2 AS $schedules2){
                $day2 = $schedules2->day;
                $action2 = $schedules2->action;
                $timefrom2 = $schedules2->timefrom;
                $timeto2 = $schedules2->timeto;
                $venue2 = $schedules2->venue;
                $id12 = $schedules2->id; 
              ?>
              <div class="row schedule-item">
                <div class="col-md-2"><time>{{$timefrom2}}-{{$timeto2}}</time></div>
                <div class="col-md-10">
                  <h4>{{$action2}} <span></span></h4>
                  <p>{{$venue2}}</p>
                </div>
              </div>
              <?php } ?>
              <?php 
              if($action2 == ''){
            ?>
            <div class="row schedule-item">
              <div class="col-md-2"><time></time></div>
              <div class="col-md-10">
                <h4>To be Comfirmed</h4>
              </div>
            </div>
            <?php } ?>
          </div>
          <!-- End Schdule Day 2 -->

          <!-- Schdule Day 3 -->
          <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-3">
          <?php
              foreach($schedule3 AS $schedules3){
                $day3 = $schedules3->day;
                $action3 = $schedules3->action;
                $timefrom3 = $schedules3->timefrom;
                $timeto3 = $schedules3->timeto;
                $venue3 = $schedules3->venue;
                $id3 = $schedules3->id; 
              ?>
              <div class="row schedule-item">
                <div class="col-md-2"><time>{{$timefrom3}}-{{$timeto3}}</time></div>
                <div class="col-md-10">
                  <h4>{{$action3}} <span></span></h4>
                  <p>{{$venue3}}</p>
                </div>
              </div>
              <?php } ?>
              <?php 
              if($action3 == ''){
            ?>
            <div class="row schedule-item">
              <div class="col-md-2"><time></time></div>
              <div class="col-md-10">
                <h4>To be Comfirmed</h4>
              </div>
            </div>
            <?php } ?>
          </div>

      </div>

    </section><!-- End Schedule Section -->

    <?php 
      $location = '';
      $about = '';
      
      $eventvenue = DB::select("SELECT * FROM venues");
      if(isset($eventvenue)){
        foreach($eventvenue AS $eventvenues){
          $location = $eventvenues->location;
          $about = $eventvenues->about;
        }
        if($about == ''){
          $about = 'Zanzibar is a fantastic beach holiday destination. It is also an excellent value-for-money destination with lots of character and rich history. The culture is colourful and interesting. The old architecture is unique and the beaches are beautiful.';
        }
        if($location == ''){
          $location = 'Golden Tulip, Zanzibar, Tanzania';
        }
      }
    ?>
    <!-- ======= Venue Section ======= -->
    <section id="venue">

      <div class="container-fluid" data-aos="fade-up">

        <div class="section-header">
          <h2>Event Venue</h2>
          <p>Event venue location info and gallery</p>
        </div>

        <div class="row g-0">
          <div class="col-lg-6 venue-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d507805.24791743327!2d39.1001373338375!3d-6.099898206507772!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x185d29602a2909e5%3A0xa035af4aad9b7d5f!2sUnguja!5e0!3m2!1sen!2stz!4v1652091771928!5m2!1sen!2stz" frameborder="0" style="border:0" allowfullscreen></iframe>
            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0" allowfullscreen></iframe> -->
          </div>

          <div class="col-lg-6 venue-info">
            <div class="row justify-content-center">
              <div class="col-11 col-lg-8 position-relative">
                <h3>{{$location}}</h3>
                <p>{{$about}}</p>
              </div>
            </div>
          </div>
        </div>

      </div>

      <?php 
        $picture = '';
        
        $gallery = DB::select("SELECT * FROM venue_galleries");
        if(isset($gallery)){
          foreach($gallery AS $gallerys){
            $picture = $gallerys->picture;
          }
        }
      ?>

      <div class="container-fluid venue-gallery-container" data-aos="fade-up" data-aos-delay="100">
        <div class="row g-0">

        <?php
        foreach($gallery AS $gallerys){
            $picture = $gallerys->picture;
        ?>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="{{asset('venuegallery/'.$picture)}}" class="glightbox" data-gall="venue-gallery">
                <img src="{{asset('venuegallery/'.$picture)}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        <?php } ?>
        </div>
      </div>

    </section><!-- End Venue Section -->

    <!-- ======= Hotels Section ======= -->
    <!-- <section id="hotels" class="section-with-bg">

      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Hotels</h2>
          <p>Her are some nearby hotels</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-4 col-md-6">
            <div class="hotel">
              <div class="hotel-img">
                <img src="{{ asset('siteimg/hotels/1.jpg') }}" alt="Hotel 1" class="img-fluid">
              </div>
              <h3><a href="#">Hotel 1</a></h3>
              <div class="stars">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
              </div>
              <p>0.4 Mile from the Venue</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="hotel">
              <div class="hotel-img">
                <img src="{{ asset('siteimg/hotels/2.jpg') }}" alt="Hotel 2" class="img-fluid">
              </div>
              <h3><a href="#">Hotel 2</a></h3>
              <div class="stars">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill-half-full"></i>
              </div>
              <p>0.5 Mile from the Venue</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="hotel">
              <div class="hotel-img">
                <img src="{{ asset('siteimg/hotels/3.jpg') }}" alt="Hotel 3" class="img-fluid">
              </div>
              <h3><a href="#">Hotel 3</a></h3>
              <div class="stars">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
              </div>
              <p>0.6 Mile from the Venue</p>
            </div>
          </div>

        </div>
      </div> -->

    <!--</section> End Hotels Section -->

    <?php 
      $picture = '';
      
      $gallery = DB::select("SELECT * FROM galleries");
      foreach($gallery AS $gallerys){
        $picture = $gallerys->picture;
      }
    ?>
    <!-- ======= Gallery Section ======= -->
    <section id="gallery">
      <?php if($picture != ''){?>
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Gallery</h2>
          <!-- <p>Check our gallery from the recent events</p> -->
        </div>
      </div>
      <div class="gallery-slider swiper">
      <div class="swiper-wrapper align-items-center">
      <?php
      }
        foreach($gallery AS $gallerys){
          $picture = $gallerys->picture;           
          ?>
          <div class="swiper-slide"><a href="{{asset('gallery/'.$picture)}}" class="gallery-lightbox"><img src="{{asset('gallery/'.$picture)}}" class="img-fluid" alt=""></a></div>
        <?php }?>
        </div>
        <div class="swiper-pagination"></div>
        </div>
    </section> <!-- End Gallery Section -->

    <?php 
      $analyticsname = '';
      $picture = '';
      
      $analytics = DB::select("SELECT * FROM analytics");
      if(isset($analytics)){
        foreach($analytics AS $analytic){
          $analyticsname = $analytic->analyticsname;
          $picture = $analytic->picture;
        }
      }
    ?>
    <!-- ======= Analytics Section ======= -->
    <section id="supporters" class="section-with-bg">

      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Analytics</h2>
        </div>
        <?php if($analyticsname == ''){?>
        <div class="row no-gutters supporters-wrap clearfix" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-lg-3 col-md-4 col-xs-6">
            <!-- <p style="text-align:center">GOVERNMENT MINISTRIES</p> -->
            <div class="supporter-logo">
              <img src="{{ asset('siteimg/analytics/1.jpg') }}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <!-- <p style="text-align:center">HEALTH</p> -->
            <div class="supporter-logo">
              <img src="{{ asset('siteimg/analytics/2.jpg') }}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <!-- <p style="text-align:center">INTERNATIONAL ORGANISATIONS</p> -->
            <div class="supporter-logo">
              <img src="{{ asset('siteimg/analytics/3.jpg') }}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
          <!-- <p style="text-align:center">ADVOCACY,ASSOCIATIONS & NGO's</p>   -->
          <div class="supporter-logo">
              <img src="{{ asset('siteimg/analytics/4.jpg') }}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="{{ asset('siteimg/analytics/5.jpg') }}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="{{ asset('siteimg/analytics/6.jpg') }}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="{{ asset('siteimg/analytics/7.jpg') }}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="{{ asset('siteimg/analytics/8.jpg') }}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="{{ asset('siteimg/analytics/9.jpg') }}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="{{ asset('siteimg/analytics/10.jpg') }}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="{{ asset('siteimg/analytics/11.jpg') }}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="{{ asset('siteimg/analytics/12.jpg') }}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="{{ asset('siteimg/analytics/13.jpg') }}" class="img-fluid" alt="">
            </div>
          </div>

        </div>
        <?php }else{
          echo '<div class="row no-gutters supporters-wrap clearfix" data-aos="zoom-in" data-aos-delay="100">';
          foreach($analytics AS $analytic){
            $picture = $analytic->picture;
            $analyticsname = $analytic->analyticsname;
            ?>
          <div class="col-lg-3 col-md-4 col-xs-6">
            <p style="text-align:center">{{$analyticsname}}</p>
            <div class="supporter-logo">
              <img src="{{ asset('analytics/'.$picture) }}" class="img-fluid" alt="">
            </div>
          </div>
        <?php
          }
          echo '</div>';
        } ?>
      </div>

    </section><!-- End Analytics Section -->

    <?php 
      $sponsorsname = '';
      $picture = '';
      
      $sponsors = DB::select("SELECT * FROM sponsors");
      if(isset($sponsors)){
        foreach($sponsors AS $sponsor){
          $sponsorsname = $sponsor->sponsorsname;
          $picture = $sponsor->picture;
        }
      }
    ?>
    <!-- ======= Sponsors Section ======= -->
    <section id="supporters" class="section-with-bg">

      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Sponsors</h2>
        </div>
        <?php if($sponsorsname == ''){?>
        <div class="row no-gutters supporters-wrap clearfix" data-aos="zoom-in" data-aos-delay="100">
          <p style="text-align:center">To be confirmed</p>
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="{{ asset('siteimg/supporters/11.png') }}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="{{ asset('siteimg/supporters/22.png') }}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="{{ asset('siteimg/supporters/33.png') }}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="{{ asset('siteimg/supporters/44.png') }}" class="img-fluid" alt="">
            </div>
          </div>

        </div>
        <?php }else{
          echo '<div class="row no-gutters supporters-wrap clearfix" data-aos="zoom-in" data-aos-delay="100">';
          foreach($sponsors AS $sponsor){
            $picture = $sponsor->picture;
            $sponsorsname = $sponsor->sponsorsname;
            ?>
          <div class="col-lg-3 col-md-4 col-xs-6">
            <p style="text-align:center">{{$sponsorsname}}</p>
            <div class="supporter-logo">
              <img src="{{ asset('sponsors/'.$picture) }}" class="img-fluid" alt="">
            </div>
          </div>
        
        <?php
          }
          echo '</div>';
        } ?>
      </div>

    </section><!-- End Sponsors Section -->

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
    <section id="supporters" class="section-with-bg">

      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Partners</h2>
        </div>
        <?php if($partnersname == ''){?>
        <div class="row no-gutters supporters-wrap clearfix" data-aos="zoom-in" data-aos-delay="100">
          <p style="text-align:center">To be confirmed</p>
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="{{ asset('siteimg/supporters/11.png') }}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="{{ asset('siteimg/supporters/22.png') }}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="{{ asset('siteimg/supporters/33.png') }}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="{{ asset('siteimg/supporters/44.png') }}" class="img-fluid" alt="">
            </div>
          </div>

        </div>
        <?php }else{
          echo '<div class="row no-gutters supporters-wrap clearfix" data-aos="zoom-in" data-aos-delay="100">';
          foreach($partners AS $partner){
            $picture = $partner->picture;
            $partnersname = $partner->partnersname;
            ?>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <p style="text-align:center">{{$partnersname}}</p>
            <div class="supporter-logo">
              <img src="{{ asset('partners/'.$picture) }}" class="img-fluid" alt="">
            </div>
          </div>

          <?php
          }
          echo '</div>';
          } ?>
      </div>

    </section><!-- End Pertiners Section -->
    
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
    <section id="supporters" class="section-with-bg">

      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Exhibitors</h2>
        </div>
        <?php if($exhibitorsname == ''){?>
        <div class="row no-gutters supporters-wrap clearfix" data-aos="zoom-in" data-aos-delay="100">
          <p style="text-align:center">To be confirmed</p>
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="{{ asset('siteimg/supporters/11.png') }}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="{{ asset('siteimg/supporters/22.png') }}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="{{ asset('siteimg/supporters/33.png') }}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="{{ asset('siteimg/supporters/44.png') }}" class="img-fluid" alt="">
            </div>
          </div>

        </div>
        <?php }else{
          echo '<div class="row no-gutters supporters-wrap clearfix" data-aos="zoom-in" data-aos-delay="100">';
          foreach($exhibitors AS $exhibitor){
            $picture = $exhibitor->picture;
            $exhibitorsname = $exhibitor->exhibitorsname;
            ?>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <p style="text-align:center">{{$exhibitorsname}}</p>
            <div class="supporter-logo">
              <img src="{{ asset('exhibitors/'.$picture) }}" class="img-fluid" alt="">
            </div>
          </div>

          <?php
          }
          echo '</div>';
          } ?>
      </div>

    </section><!-- End Sponsors Section -->

    <!-- =======  F.A.Q Section ======= -->
    <!-- <section id="faq">

      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>F.A.Q </h2>
        </div>

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-9">

            <ul class="faq-list">

              <li>
                <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Non consectetur a erat nam at lectus urna duis? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                  </p>
                </div>
              </li>

            </ul>

          </div>
        </div>

      </div> -->

    <!--</section> End  F.A.Q Section -->

    <!-- ======= Subscribe Section ======= -->
    <section id="subscribe">
      <div class="container" data-aos="zoom-in">
        <div class="section-header">
          <h2>Newsletter</h2>
          <!-- <p>Rerum numquam illum recusandae quia mollitia consequatur.</p> -->
        </div>

        <form method="POST" action="addmail">
        @csrf
          <div class="row justify-content-center">
            <div class="col-lg-6 col-md-10 d-flex">
              <input name="email" type="email" class="form-control" placeholder="Enter your Email">
              <button type="submit" class="ms-2">Subscribe</button>
            </div>
          </div>
        </form>

      </div>
    </section><!-- End Subscribe Section -->

    <!-- ======= Buy Ticket Section ======= -->
    <!-- <section id="buy-tickets" class="section-with-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Buy Tickets</h2>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card mb-5 mb-lg-0">
              <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center">Standard Access</h5>
                <h6 class="card-price text-center">$150</h6>
                <hr>
                <ul class="fa-ul">
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Regular Seating</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Coffee Break</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Custom Badge</li>
                  <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Community Access</li>
                  <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Workshop Access</li>
                  <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>After Party</li>
                </ul>
                <hr>
                <div class="text-center">
                  <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#buy-ticket-modal" data-ticket-type="standard-access">Buy Now</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="card mb-5 mb-lg-0">
              <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center">Pro Access</h5>
                <h6 class="card-price text-center">$250</h6>
                <hr>
                <ul class="fa-ul">
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Regular Seating</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Coffee Break</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Custom Badge</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Community Access</li>
                  <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Workshop Access</li>
                  <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>After Party</li>
                </ul>
                <hr>
                <div class="text-center">
                  <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#buy-ticket-modal" data-ticket-type="pro-access">Buy Now</button>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center">Premium Access</h5>
                <h6 class="card-price text-center">$350</h6>
                <hr>
                <ul class="fa-ul">
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Regular Seating</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Coffee Break</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Custom Badge</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Community Access</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Workshop Access</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>After Party</li>
                </ul>
                <hr>
                <div class="text-center">
                  <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#buy-ticket-modal" data-ticket-type="premium-access">Buy Now</button>
                </div>

              </div>
            </div>
          </div>
        </div>

      </div>

      
      <div id="buy-ticket-modal" class="modal fade">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Buy Tickets</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method="POST" action="#">
                <div class="form-group">
                  <input type="text" class="form-control" name="your-name" placeholder="Your Name">
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="your-email" placeholder="Your Email">
                </div>
                <div class="form-group mt-3">
                  <select id="ticket-type" name="ticket-type" class="form-select">
                    <option value="">-- Select Your Ticket Type --</option>
                    <option value="standard-access">Standard Access</option>
                    <option value="pro-access">Pro Access</option>
                    <option value="premium-access">Premium Access</option>
                  </select>
                </div>
                <div class="text-center mt-3">
                  <button type="submit" class="btn">Buy Now</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

    </section> -->

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
              <p><a href="tel:+155895548855">{{$phone}}</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="bi bi-envelope"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">{{$email}}</a></p>
            </div>
          </div>

        </div>

        <div class="form">
          <form action="addmessage" method="POST" role="form" class="php-email-for">
            @csrf
            <div class="row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="form-group col-md-6 mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <!-- <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message">Your message has been sent. Thank you!</div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div> -->
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <!-- <div class="col-lg-3 col-md-6 footer-info">
            <img src="{{ asset('siteimg/logo.png') }}" alt="TheEvenet">
            <p>In alias aperiam. Placeat tempore facere. Officiis voluptate ipsam vel eveniet est dolor et totam porro. Perspiciatis ad omnis fugit molestiae recusandae possimus. Aut consectetur id quis. In inventore consequatur ad voluptate cupiditate debitis accusamus repellat cumque.</p>
          </div> -->

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="https://www.mawasiliano.go.tz/" target="blank">Policy</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="https://www.tcra.go.tz/" target="blank">Regulatory</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="https://www.tic.go.tz/" target="blank">Investment</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="https://www.costech.or.tz/" target="blank">Research</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="https://www.ega.co.tz/" target="blank">e-Government</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              14 Jamhuri Street,
              P.O.Box 70479,<br>
              11470 Dar ES Salaam,<br>
              Tanzania.<br>
              <strong>Phone:</strong> +255 738 171 742<br>
              <strong>Email:</strong> info@ictc.go.tz<br>taic@ictc.go.tz
            </p>

            <div class="social-links">
              <a href="https://twitter.com/ict_commission?lang=en" target="blank" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="https://web.facebook.com/ICT-Commision-106494500752999/" target="blank" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="https://www.instagram.com/ict_commission_tanzania/" target="blank" class="instagram"><i class="bi bi-instagram"></i></a>
            </div>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>ICTC 2021</strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <script>
  // function myFunction() {
  //   var dots = document.getElementById("dots");
  //   var moreText = document.getElementById("more");
  //   var btnText = document.getElementById("myBtn");
  
  //   if (dots.style.display === "none") {
  //     dots.style.display = "inline";
  //     btnText.innerHTML = "Read more"; 
  //     moreText.style.display = "none";
  //   } else {
  //     dots.style.display = "none";
  //     btnText.innerHTML = "Read less"; 
  //     moreText.style.display = "inline";
  //   }
  // }

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
var countDownDate = new Date("Oct 26, 2022 00:00:00").getTime();

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
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
  </script>
  
</body>

</html>