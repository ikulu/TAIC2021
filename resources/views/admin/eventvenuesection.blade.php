<x-app-layout>
<main id="main" class="main">
    <div class="pagetitle">
      <h1>Event Venue</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
          <li class="breadcrumb-item active">Event Venue</li>
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
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Add Event Venue</button>
                </li>

              </ul>
              <div class="tab-content pt-2">
              <?php 
                  $location = '';
                  $about = '';
                  
                  $eventvenue = DB::select("SELECT * FROM venues");
                  if(isset($eventvenue)){
                    foreach($eventvenue AS $eventvenues){
                      $location = $eventvenues->location;
                      $about = $eventvenues->about;
                    }
                  }
                ?>
                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">Event Venue</h5>
                  @if (Auth::user()->hasRole('admin'))
                  <p class="small fst-italic">This previews the Conference Location and About the location as appears on the Official Website Speakers Section. </p>
                  @endif
                  <h5 class="card-title">Event Venues Section Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Event Venue(s)</div>
                  </div>
 
                  <div class="row">
                  <form action="editeventvenue" method="POST">
                    @csrf
                      <div class='col-lg-3 col-md-4 label'>
                        <div style='text-align:center' class='speaker; data-aos='fade-up' data-aos-delay='300'>
                          <br />
                          <div class='details'>
                            <h6><a href='speaker-details.html'>{{$location}}</a></h6>
                            <input name='location' type='text' class='form-control' id='fullName' value='{{$location}}'>
                            <br />
                            <h6><a href='speaker-details.html'>{{$about}}</a></h6>
                            <input name='about' type='text' class='form-control' id='fullName' value='{{$about}}'>
                         </div>
                        </div>
                        <div class="text-center">
                          <button type="submit" class="btn btn-primary">Edit</button>
                        </div>
                      </div>
                  </form>
                  </div>

                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                
                  <!-- Profile Edit Form -->
                  <form action="addeventvenuesection" method="POST">
                    @csrf
                  
                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Location</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="location" type="text" class="form-control" id="fullName" value="">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">About</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="about" type="text" class="form-control" id="fullName" value="">
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