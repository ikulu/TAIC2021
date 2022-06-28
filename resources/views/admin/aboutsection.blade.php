<x-app-layout>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>About Section</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
          <li class="breadcrumb-item active">AboutSection</li>
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
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit About Section</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-add">Add About Section</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">About Section</h5>
                  @if (Auth::user()->hasRole('admin'))
                  <p class="small fst-italic">This previews the Conference Title, About, Where and When the event is expected to take place. </p>
                  @endif
                  <h5 class="card-title">About Section Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Section Title</div>
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
                    ?>
                    <div class="col-lg-9 col-md-8">{{$title}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">About The Conference</div>
                    <div class="col-lg-9 col-md-8">{{$about}}</div>
                  </div>
 
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Conference Place</div>
                    <div class="col-lg-9 col-md-8">{{$where}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Conference Days</div>
                    <div class="col-lg-9 col-md-8">{{$when}}</div>
                  </div>

                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                
                  <!-- Profile Edit Form -->
                  <form action="editaboutsection" method="POST">
                    @csrf
                  
                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Section Title</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="title" type="text" class="form-control" id="fullName" value="{{$title}}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">About Conference</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="about" type="text" class="form-control" id="fullName" value="{{$about}}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Where</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="where" type="text" class="form-control" id="fullName" value="{{$where}}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">When</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="when" type="text" class="form-control" id="fullName" value="{{$when}}">
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                  </form><!-- End Profile Edit Form -->

                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-add">
                
                  <!-- Profile Edit Form -->
                  <form action="addaboutsection" method="POST">
                    @csrf
                  
                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Section Title</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="title" type="text" class="form-control" id="fullName" value="">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">About Conference</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="about" type="text" class="form-control" id="fullName" value="">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Where</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="where" type="text" class="form-control" id="fullName" value="">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">When</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="when" type="text" class="form-control" id="fullName" value="">
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