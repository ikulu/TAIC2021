<x-app-layout>
<main id="main" class="main">
    <div class="pagetitle">
      <h1>Sponsors</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
          <li class="breadcrumb-item active">Sponsors</li>
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
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Add Sponsors Section</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">Sponsors</h5>
                  @if (Auth::user()->hasRole('admin'))
                  <p class="small fst-italic">This previews the Conference Sponsors as appears on the Official Website Speakers Section. </p>
                  @endif
                  <h5 class="card-title">Sponsors Section Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Sponsor(s)</div>
                  </div>
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
                  <div class="row">
                      <?php
                      foreach($sponsors AS $sponsor){
                          $picture = $sponsor->picture;
                          $sponsorsname = $sponsor->sponsorsname;
                          $id = $sponsor->id;
                      echo "
                      <div class='col-lg-3 col-md-4 label'>
                        <div style='text-align:center' class='speaker; data-aos='fade-up' data-aos-delay='300'>";?>
                          <img src="{{asset('sponsors/'.$picture)}}" alt='' class='img-fluid'>
                          <?php echo "<div class='pt-2'>
                          </div>
                          <br />
                          <div class='details'>
                            <h6><a href='speaker-details.html'>$sponsorsname</a></h6>
                            ";?>
                            <a href="{{ asset('/' . $id . '/deletesponsorssection') }}" class="btn btn-danger btn-sm" title="Delete Sponsour"><i class="bi bi-trash"></i></a>
                          <?php echo "</div>
                        </div>
                      </div>";
                      }
                      ?>
                  </div>

                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                
                  <!-- Profile Edit Form -->
                  <form action="addsponsorssection" method="POST" enctype="multipart/form-data">
                    @csrf
                  
                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Sponsour Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="sponsorsname" type="text" class="form-control" id="fullName" value="">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Sponsour Logo</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="picture" type="file" class="form-control" id="fullName" value="">
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