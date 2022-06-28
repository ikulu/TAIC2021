<x-app-layout>
<main id="main" class="main">
    <div class="pagetitle">
      <h1>Exhibitors</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
          <li class="breadcrumb-item active">Exhibitors</li>
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
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Add Exhibitors Section</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">Exhibitors</h5>
                  @if (Auth::user()->hasRole('admin'))
                  <p class="small fst-italic">This previews the Conference Exhibitors as appears on the Official Website Speakers Section. </p>
                  @endif
                  <h5 class="card-title">Exhibitors Section Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Exhibitor(s)</div>
                  </div>
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
                  <div class="row">
                      <?php
                      foreach($exhibitors AS $exhibitor){
                          $picture = $exhibitor->picture;
                          $exhibitorsname = $exhibitor->exhibitorsname;
                          $id = $exhibitor->id;
                      echo "
                      <div class='col-lg-3 col-md-4 label'>
                        <div style='text-align:center' class='speaker; data-aos='fade-up' data-aos-delay='300'>
                          <img src='siteimg/speakers/person.png' alt='Speaker 3' class='img-fluid'>
                          <div class='pt-2'>
                            <a href='#' class='btn btn-primary btn-sm' title='Upload new profile image'><i class='bi bi-upload'></i></a>
                          </div>
                          <br />
                          <div class='details'>
                            <h6><a href='speaker-details.html'>$exhibitorsname</a></h6>
                            <input name='fullname' type='text' class='form-control' id='fullName' value='$exhibitorsname'>
                            ";?>
                            <a href="{{ asset('/' . $id . '/deleteexhibitorssection') }}" class="btn btn-danger btn-sm" title="Delete Exhibitor"><i class="bi bi-trash"></i></a>
                          <?php echo "</div>
                        </div>
                      </div>";
                      }
                      ?>
                  </div>

                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                
                  <!-- Profile Edit Form -->
                  <form action="addexhibitorssection" method="POST">
                    @csrf
                  
                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Exhibitors Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="exhibitorsname" type="text" class="form-control" id="fullName" value="">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Exhibitors Logo</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="picture" type="text" class="form-control" id="fullName" value="">
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