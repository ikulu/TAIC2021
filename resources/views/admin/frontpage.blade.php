<x-app-layout>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Front Page</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
          <li class="breadcrumb-item active">Front Page</li>
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
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Front Page Section</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-add">Add Front Page</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">Front Page</h5>
                  @if (Auth::user()->hasRole('admin'))
                  <p class="small fst-italic">This previews the Conference Title, Dates, Location and Timer as appears on the Official Website Main Section. </p>
                  @endif
                  <h5 class="card-title">Main Page Section Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Section Title</div>
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
                    ?>
                    <div class="col-lg-9 col-md-8">{{$title}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Conference Dates</div>
                    <div class="col-lg-9 col-md-8">{{$fromdate}} - {{$todate}}</div>
                  </div>
 
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Conference Location</div>
                    <div class="col-lg-9 col-md-8">{{$location}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Conference Timmer</div>
                    <div class="col-lg-9 col-md-8">{{$timmer}}</div>
                  </div>

                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                
                  <!-- Profile Edit Form -->
                  <form action="editfrontpage" method="POST">
                    @csrf
                  
                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Section Title</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="title" type="text" class="form-control" id="fullName" value="{{$title}}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Conference From Dates</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="dates1" type="date" class="form-control" id="fullName" value="{{$fromdate}}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Conference To Dates</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="dates2" type="date" class="form-control" id="fullName" value="{{$todate}}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Conference Location</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="location" type="text" class="form-control" id="fullName" value="{{$location}}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Conference Timer</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="timmer" type="date" class="form-control" id="fullName" value="{{$timmer}}">
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                  </form><!-- End Profile Edit Form -->

                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-add">
                
                  <!-- Profile Edit Form -->
                  <form action="addfrontpage" method="POST">
                    @csrf
                  
                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Section Title</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="title" type="text" class="form-control" id="fullName" value="">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Conference From Date</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="dates1" type="date" class="form-control" id="fullName" value="">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Conference To Date</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="dates2" type="date" class="form-control" id="fullName" value="">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Conference Location</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="location" type="text" class="form-control" id="fullName" value="">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Conference Timer</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="timmer" type="date" class="form-control" id="fullName" value="">
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