<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TAIC - 2023</title>
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
  <header id="header" class="d-flex align-items-center ">
    <div class="container-fluid container-xxl d-flex align-items-center">

      <div id="logo" class="me-auto">
        <?php 
          $apname = '';
          $apnames = DB::select("SELECT * FROM headers WHERE id IN(SELECT MAX(id) FROM headers)");
          foreach($apnames AS $name){
              $apname = $name->appname;
          }
          if($apname == ''){
            $apname = "2023";
          }
        ?>
        <h1><a href="/">TAIC<span>{{$apname}}</span></a></h1>
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#speakers">Speakers</a></li>
          <li><a class="nav-link scrollto" href="#schedule">Schedule</a></li>
          <li><a class="nav-link scrollto" href="#venue">Venue</a></li>
          <li><a class="nav-link scrollto" href="#hotels">Hotels</a></li>
          <li><a class="nav-link scrollto" href="#supporters">Sponsors</a></li>
          <li class="dropdown"><a href="#"><span>TAIC Events</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a href="sitedocuments/TAIC 2021_FINAL_REPORT.pdf" target="blank"><span>TAIC 2022</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#about">PRESENTATIONS</a></li>
                </ul>
              </li>
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
    if($location == ''){$location = 'Julius Nyerere International Convention Centre (JNICC) Tanzania';}
    if($fromdate == ''){$fromdate = '2023-10-18';}
    if($todate == ''){$todate = '2023-10-20';}
    $fromdate = date_create($fromdate);
    $todate = date_create($todate);
    $presentedFromdate = date_format($fromdate,"d");
    $presentedTodate = date_format($todate,"d");
    $presentedMonthDate = date_format($fromdate,"F");
    $presentedYearDate = date_format($fromdate,"Y"); 
  ?>

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
      <h1 class="mb-4 pb-0">{{$title}}</h1>
      <p>THEME : To be Confirmed.</p>
      <p class="mb-4 pb-0">{{$presentedFromdate}} - {{$presentedTodate}} {{$presentedMonthDate}} {{$presentedYearDate}}, {{$location}}</p>
      <p style="text-align: center;font-size: 60px;margin-top: 0px;" id="demo"></p>
      <a href="" class="glightbox play-btn mb-4"></a>
      <a href="#schedule" class="about-btn scrollto" target="blank">TIMETABLE</a>
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
    if($about == ''){
      $about = 'The Tanzania Annual ICT Conference (TAIC) is one of the largest international gathering of
      ICT industry players in Tanzania that offers a unique platform for capacity building, policy
      dialogues, business investors networking, professional discussion, experience and knowledge
      sharing on the global ICT issues, business opportunities, knowledge and skills needs to cope
      with the dynamic digital ecosystem. The Conference also serves as a platform for participants to
      discuss enabling environment for ICT growth towards socio-economic development in Tanzania.
      The 5 th TAIC 2019 succeeds two TAICs and two Annual ICT Professionals Conferences
      (AIPC) that the Information and Communication Technologies (ICT) Commission has been
      organizing since 2017 bringing together more than 800 ICT stakeholders from both Government
      and Private Sector, Small Medium Enterprises, Academia, researchers, startups, ICT
      Entrepreneurs and the business industry. organized by the Tanzania ICT Commission.
      The conference discussions focus on a wide range of topics emphasizing on the role of ICT in
      social-economic development and the role of ICT as an important tool for attainment of
      Tanzania Development Vision and Sustainable Development Goals. The conference will be
      featured with exhibitions from various ICT stakeholders showcasing their products, services
      and innovations.';
    }
    if($when == ''){$when = 'Wednesday to Friday';}

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

  <!-- ======= About Section ======= -->
  <section id="about">
    <div class="container" data-aos="fade-up">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-header">
            <h2>{{$title}}</h2>
          </div>
          <p style="text-align: center;">{{$about}}</p>
        </div>
        </div>
      </div>
  </section><!-- End About Section -->
    
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
          <img src="{{ asset('siteimg/speakers/person.png') }}" alt="" class="img-fluid" style="max-height:300px;min-width:300px">
            <div class="details">
              <h3><a>To Be Confirmed</a></h3>
              <!-- <p></p> -->
              <?php if($fullnameM == ''){ echo "<p>To be Comfirmed</p>";} ?>
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
            <div class="speaker" data-aos="fade-up" data-aos-delay="200">
              <img src="{{ asset('siteimg/speakers/person.png') }}" alt="" class="img-fluid" style="min-height:300px;min-width:300px">
              <div class="details">
                <h3><a>To Be Confirmed</a></h3>
                <p></p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="200">
              <img src="{{ asset('siteimg/speakers/person.png') }}" alt="" class="img-fluid" style="min-height:300px;min-width:300px">
              <div class="details">
                <h3><a>To Be Confirmed</a></h3>
                <p></p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="300">
              <img src="{{ asset('siteimg/speakers/person.png') }}" alt="" class="img-fluid">
              <div class="details">
                <h3><a>To Be Confirmed</a></h3>
                <p></p>
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
          <div role="tabpanel" class="col-lg-9 tab-pane fade show" id="day-1">

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
                <div class="col-md-9">
                  <h4>To Be Confirmed</h4>
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
              <div class="col-md-9">
                <h4>To Be Confirmed</h4>
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
                <h4>To Be Confirmed</h4>
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
          $about = '';
        }
        if($location == ''){
          $location = 'Julius Nyerere International Convention Centre (JNICC) Tanzania';
        }
      }
    ?>
    <!-- ======= Venue Section ======= -->
    <section id="venue">

      <div class="container-fluid" data-aos="fade-up">

        <div class="section-header">
          <h2>Event Venue</h2>
        </div>

        <div class="row g-0">
          <div class="col-lg-6 venue-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.6396190453916!2d39.29141791477213!3d-6.813613495075424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x185c4b13ab3b27db%3A0x5e80e2765959908e!2sJulius%20Nyerere%20International%20Convention%20Centre!5e0!3m2!1sen!2stz!4v1688892519149!5m2!1sen!2stz" frameborder="0" style="border:0" allowfullscreen></iframe>
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
          <?php } ?>
        </div>
      </div>

    </section><!-- End Venue Section -->

    <!-- ======= Hotels Section ======= -->
    <section id="hotels" class="section-with-bg">

      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Hotels</h2>
          <p>Her are some nearby hotels</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-12 col-md-6">
            <div class="hotel">
              <div class="hotel-img">
              </div>
              <h3 style="align-content: center;"><a>To Be Confirmed</a></h3>
            </div>
          </div>

        </div>
      </div> 

    </section><!-- End Hotels Section -->

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
          <h2>Tanzanite Sponsors</h2>
        </div>
        <?php if($sponsorsname == ''){?>
        <div style="margin: auto;width: 50%;padding: 10px;" class="row no-gutters supporters-wrap clearfix" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-lg-4 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <a><img src="{{ asset('siteimg/sponsors/') }}" class="img-fluid" alt=""></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <a><img src="{{ asset('siteimg/sponsors/') }}" class="img-fluid" alt=""></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <a><img src="{{ asset('siteimg/sponsors/') }}" class="img-fluid" alt=""></a>
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

    <!-- ======= Sponsors Section ======= -->
    <section id="supporters" class="section-with-bg">

      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Silver Sponsors</h2>
        </div>
        <?php if($sponsorsname == ''){?>
        <div style="margin: auto;width: 50%;padding: 10px;" class="row no-gutters supporters-wrap clearfix" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-lg-6 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <a><img src="{{ asset('siteimg/sponsors/') }}" class="img-fluid" alt=""></a>
            </div>
          </div>

          <div class="col-lg-6 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <a><img src="{{ asset('siteimg/sponsors/') }}" class="img-fluid" alt=""></a>
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
    
    <!-- ======= Sponsors Section ======= -->
    <section id="supporters" class="section-with-bg">

      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Bronze Sponsors</h2>
        </div>
        <?php if($sponsorsname == ''){?>
        <div class="row no-gutters supporters-wrap clearfix" data-aos="zoom-in" data-aos-delay="100">
          <!-- <p style="text-align:center">To be confirmed</p> -->
          <div class="col-lg-4 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <a><img src="{{ asset('siteimg/sponsors/') }}" class="img-fluid" alt=""></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <a><img src="{{ asset('siteimg/sponsors/') }}" class="img-fluid" alt=""></a>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-4 col-xs-6">
            <div class="supporter-logo">
            <a><img src="{{ asset('siteimg/sponsors/') }}" class="img-fluid" alt=""></a>
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
          <div class="col-lg-4 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <a><img src="{{ asset('siteimg/sponsors/') }}" class="img-fluid" alt=""></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <a><img src="{{ asset('siteimg/sponsors/') }}" class="img-fluid" alt=""></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <a><img src="{{ asset('siteimg/sponsors/') }}" class="img-fluid" alt=""></a>
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

          <div class="col-lg-4 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <a><img src="{{ asset('siteimg/sponsors/') }}" class="img-fluid" alt=""></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <a><img src="{{ asset('siteimg/sponsors/') }}" class="img-fluid" alt=""></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <a><img src="{{ asset('siteimg/sponsors/') }}" class="img-fluid" alt=""></a>
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

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

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
