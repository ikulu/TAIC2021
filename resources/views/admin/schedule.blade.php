<x-app-layout>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Schedule</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
          <li class="breadcrumb-item active">Schedule</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        
        <div class="col-xl-8">

          <div class="card">
            <x-alert />
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Preview</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-add">Create Schedule</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">Header</h5>
                  @if (Auth::user()->hasRole('admin'))
                  <p class="small fst-italic">This previews the Schedule as appears on the Official Website header. </p>
                  @endif
                  <h5 class="card-title">Schedule Details</h5>

                  <div class="row">
                    <ul class="nav nav-tabs" role="tablist" data-aos="fade-up" data-aos-delay="100">
                      <li class="nav-item">
                        <a class="nav-link active" href="#day-1" role="tab" data-bs-toggle="tab">Wednesday</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#day-2" role="tab" data-bs-toggle="tab">Thurthday</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#day-3" role="tab" data-bs-toggle="tab">Friday</a>
                      </li>
                    </ul>

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
                    <div class="tab-content row justify-content-center" data-aos="fade-up" data-aos-delay="200">
                      <div role="tabpanel" class="col-lg-12 tab-pane fade show active" id="day-1">
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
                          <div class="col-md-2"><time>{{$timefrom}}</time> - <time>{{$timeto}}</time></div>
                          <div class="col-md-4">
                            <h4>{{$action}}</h4>
                          </div>
                          <div class="col-md-4">
                            <h4>{{$venue}}</h4>
                          </div>
                          <div class="col-md-2">
                            <a href="{{ asset('/' . $id1 . '/deleteschedule') }}" class="btn btn-warning btn-sm" title="Delete Schedule"><i class="bi bi-trash"></i></a>
                          </div>
                        </div>
                        <?php } ?>
                      </div>
                      
                      <div role="tabpane1" class="col-lg-12 tab-pane fade show active" id="day-2">
                        <?php 
                        foreach($schedule2 AS $schedules2){
                          $day2 = $schedules2->day;
                          $action2 = $schedules2->action;
                          $timefrom2 = $schedules2->timefrom;
                          $timeto2 = $schedules2->timeto;
                          $venue2 = $schedules2->venue;
                          $id2 = $schedules2->id;
                        ?>
                        <div class="row schedule-item">
                          <div class="col-md-2"><time>{{$timefrom2}}</time> - <time>{{$timeto2}}</time></div>
                          <div class="col-md-4">
                            <h4>{{$action2}}</h4>
                          </div>
                          <div class="col-md-4">
                            <h4>{{$venue2}}</h4>
                          </div>
                          <div class="col-md-2">
                            <a href="{{ asset('/' . $id2 . '/deleteschedule') }}" class="btn btn-warning btn-sm" title="Delete Schedule"><i class="bi bi-trash"></i></a>
                          </div>
                        </div>
                        <?php } ?>
                      </div>

                      <div role="tabpane1" class="col-lg-12 tab-pane fade show active" id="day-3">
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
                          <div class="col-md-2"><time>{{$timefrom3}}</time> - <time>{{$timeto3}}</time></div>
                          <div class="col-md-4">
                            <h4>{{$action3}}</h4>
                          </div>
                          <div class="col-md-4">
                            <h4>{{$venue3}}</h4>
                          </div>
                          <div class="col-md-2">
                            <a href="{{ asset('/' . $id3 . '/deleteschedule') }}" class="btn btn-warning btn-sm" title="Delete Schedule"><i class="bi bi-trash"></i></a>
                          </div>
                        </div>
                        <?php } ?>
                      </div>

                    </div>
                  </div>
 
                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-add">
                  
                  <!-- Profile Edit Form -->
                  <form action="addschedule" method="POST">
                    @csrf
                  
                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Day</label>
                      <select name="day" class="block mt-1 w-full border-grey-300 focus:border-indigo-300 focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                      </select>
                    </div>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Event</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="action" type="text" class="form-control" id="fullName">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">From Time</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="fromtotime1" type="time" class="form-control" id="fullName">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">To Time</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="fromtotime2" type="time" class="form-control" id="fullName">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Venue</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="venue" type="text" class="form-control" id="fullName">
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                  </form><!-- End Profile Edit Form -->

                </div>
                
              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
</x-app-layout>