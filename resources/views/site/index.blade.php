@extends('site.layout.layout')
@section('content')

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

@include('site.hotelsSection')



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

@endsection