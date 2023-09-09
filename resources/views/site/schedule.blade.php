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
