<section id="schedule" class="section-with-bg">
    <div class="container" data-aos="fade-up">
      <div class="section-header">
        <h2>Event Schedule</h2>
      </div>

      <ul class="nav nav-tabs" role="tablist" data-aos="fade-up" data-aos-delay="100">
        <li class="nav-item m-1">
          <a class="nav-link active" href="#day-1" role="tab" data-bs-toggle="tab">Monday</a>
        </li>
        <li class="nav-item m-1">
          <a class="nav-link" href="#day-2" role="tab" data-bs-toggle="tab">Tuesday</a>
        </li>
        <li class="nav-item m-1">
          <a class="nav-link " href="#day-3" role="tab" data-bs-toggle="tab">Wednesday</a>
        </li>
        <li class="nav-item m-1">
          <a class="nav-link" href="#day-4" role="tab" data-bs-toggle="tab">Thursday</a>
        </li>
        <li class="nav-item m-1">
          <a class="nav-link" href="#day-5" role="tab" data-bs-toggle="tab">Friday</a>
        </li>
      </ul>

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
        $location = $conferenceVenue;
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
