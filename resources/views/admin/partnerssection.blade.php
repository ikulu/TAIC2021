<x-app-layout>
<main id="main" class="main">
    <div class="pagetitle">
      <h1>Partiners</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
          <li class="breadcrumb-item active">Partiners</li>
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
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Add Partiners Section</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">Partiners</h5>
                  @if (Auth::user()->hasRole('admin'))
                  <p class="small fst-italic">This previews the Conference Partiners as appears on the Official Website Speakers Section. </p>
                  @endif
                  <h5 class="card-title">Partiners Section Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Partiner(s)</div>
                  </div>
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
                  <div class="row">
                      <?php
                      foreach($partners AS $partner){
                          $picture = $partner->picture;
                          $partnersname = $partner->partnersname;
                          $id = $partner->id;
                      echo "
                      <div class='col-lg-3 col-md-4 label'>
                        <div style='text-align:center' class='speaker; data-aos='fade-up' data-aos-delay='300'>
                          <img src='siteimg/speakers/person.png' alt='Speaker 3' class='img-fluid'>
                          <div class='pt-2'>
                            <a href='#' class='btn btn-primary btn-sm' title='Upload new profile image'><i class='bi bi-upload'></i></a>
                          </div>
                          <br />
                          <div class='details'>
                            <h6><a href='speaker-details.html'>$partnersname</a></h6>
                            <input name='fullname' type='text' class='form-control' id='fullName' value='$partnersname'>
                            ";?>
                            <a href="{{ asset('/' . $id . '/deletepartnerssection') }}" class="btn btn-danger btn-sm" title="Delete Partner"><i class="bi bi-trash"></i></a>
                          <?php echo "</div>
                        </div>
                      </div>";
                      }
                      ?>
                  </div>

                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                
                  <!-- Profile Edit Form -->
                  <form action="addpartnerssection" method="POST">
                    @csrf
                  
                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Partiner Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="partnersname" type="text" class="form-control" id="fullName" value="">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Partiners Logo</label>
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