<x-app-layout>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Header</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
          <li class="breadcrumb-item active">Header</li>
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
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Application Name</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-add">Add Application Name</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">Header</h5>
                  @if (Auth::user()->hasRole('admin'))
                  <p class="small fst-italic">This previews the Application name as appears on the Official Website header. </p>
                  @endif
                  <h5 class="card-title">Application Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">App Name</div>
                    <?php 
                      $apname = '';
                      $apnames = DB::select("SELECT * FROM headers WHERE id IN(SELECT MAX(id) FROM headers)");
                      foreach($apnames AS $name){
                          $apname = $name->appname;
                      }
                    ?>
                    <div class="col-lg-9 col-md-8">{{$apname}}</div>
                  </div>
 
                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                
                  <!-- Profile Edit Form -->
                  <form action="editheader" method="POST">
                    @csrf
                  
                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Application Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="appname" type="text" class="form-control" id="fullName" value="{{$apname}}">
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                  </form><!-- End Profile Edit Form -->

                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-add">
                  
                  <!-- Profile Edit Form -->
                  <form action="addheader" method="POST">
                    @csrf
                  
                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Application Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="appname" type="text" class="form-control" id="fullName">
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