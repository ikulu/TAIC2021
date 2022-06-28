<x-app-layout>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Speakers</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
          <li class="breadcrumb-item active">Speakers</li>
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
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Add Speakers Section</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">Speakers</h5>
                  @if (Auth::user()->hasRole('admin'))
                  <p class="small fst-italic">This previews the Conference Guest of Honour and Speakers as appears on the Official Website Speakers Section. </p>
                  @endif
                  <h5 class="card-title">Speakers Section Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Honour Speaker(s)</div>
                    
                    <?php 
                      $fullname = '';
                      $occupation = '';
                      $fb = '';
                      $twitter = '';
                      $insta = '';
                      $ini = '';
                      $fullnameM = '';
                      $occupationM = '';
                      $fbM = '';
                      $twitterM = '';
                      $instaM = '';
                      $iniM = '';
                      $idM = '';
                      $speakers = DB::select("SELECT * FROM speakers WHERE title = 'others'");
                      $speakersMain = DB::select("SELECT * FROM speakers WHERE title = 'main'");
                      if(isset($speakersMain)){
                        foreach($speakersMain AS $speakerM){
                          $fullnameM = $speakerM->fullname;
                          $occupationM = $speakerM->occupation;
                          $profileM = $speakerM->profile;
                          $facebookM = $speakerM->facebook;
                          $twitterM = $speakerM->tweeter;
                          $iniM = $speakerM->ini;
                          $idM = $speakerM->id;
                        }
                      }
                    ?>
                    <form class="row g-3" action="/editspeakerssection" method="POST">
                      @csrf
                      <div class="col-lg-9 col-md-8">
                        <?php
                        if($idM != ''){
                        ?>
                          <div class='col-lg-3 col-md-4 label'>
                          <div style='text-align:center' class='speaker' data-aos='fade-up' data-aos-delay='300'>
                            <img src="{{asset('profiles/'.$profileM)}}" alt='Speaker 3' class='img-fluid'>
                            <div class='pt-2'>
                              <a href='#' class='btn btn-primary btn-sm' title='Upload new profile image'><i class='bi bi-upload'></i></a>
                            </div>
                            <br />
                            <div class='details'>
                              <h6><a href='speaker-details.html'>Fullname : {{$fullnameM}}</a></h6>
                              <input name='fullnameM' type='text' class='form-control' id='fullName' value='{{$fullnameM}}'>
                              <p>Occupation : {{$occupationM}}</p>
                              <input name='occupationM' type='text' class='form-control' id='fullName' value='{{$occupationM}}'>
                              <div class='social'>
                                <a href=''><i class='bi bi-twitter'></i></a>
                                <a href=''><i class='bi bi-facebook'></i></a>
                                <a href=''><i class='bi bi-instagram'></i></a>
                                <a href=''><i class='bi bi-linkedin'></i></a>
                              </div>
                            </div>
                            </div>
                            <div class='text-center'>
                              <input name='id' type='hidden' class='form-control' id='fullName' value='{{$idM}}'>
                              <button type='submit' class='btn btn-primary'>Update</button>
                              <a href="{{ asset('/' . $idM . '/deletespeakerssection') }}" class="btn btn-danger btn-sm" title="Delete Guest Of Honour"><i class="bi bi-trash"></i></a>
                            </div>
                          </div>
                        <?php
                        }else{
                          echo "<h3>No Registered Guest Of Honour</h3>";
                        }
                        ?>
                      </div>
                    </div>
                    </form>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Other Speaker(s)</div>
                  </div>
 
                  <div class="row">
                      <?php
                      foreach($speakers AS $speaker){
                          $fullname = $speaker->fullname;
                          $occupation = $speaker->occupation;
                          $profile = $speaker->profile;
                          $facebook = $speaker->facebook;
                          $twitter = $speaker->tweeter;
                          $ini = $speaker->ini;
                          $id = $speaker->id;
                      echo "
                      <div class='col-lg-3 col-md-4 label'>
                        <div style='text-align:center' class='speaker; data-aos='fade-up' data-aos-delay='300'>";?>
                          <img src="{{asset('profiles/'.$profile)}}" alt='Speaker 3' class='img-fluid'>
                          <?php echo "    <div class='pt-2'>
                            <a href='#' class='btn btn-primary btn-sm' title='Upload new profile image'><i class='bi bi-upload'></i></a>
                          </div>
                          <br />
                          <div class='details'>
                            <h6><a href='speaker-details.html'>$fullname</a></h6>
                            <p>$occupation</p>
                            <div class='social'>
                              <a href=''><i class='bi bi-twitter'></i></a>
                              <a href=''><i class='bi bi-facebook'></i></a>
                              <a href=''><i class='bi bi-instagram'></i></a>
                              <a href=''><i class='bi bi-linkedin'></i></a>
                            </div>
                            ";?>
                            <a href="{{ asset('/' . $id . '/deletespeakerssection') }}" class="btn btn-danger btn-sm" title="Delete Guest Of Honour"><i class="bi bi-trash"></i></a>
                          <?php echo "</div>
                        </div>
                      </div>";
                      }
                      ?>
                  </div>

                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                
                  <!-- Profile Edit Form -->
                  <form action="addspeakerssection" method="POST" enctype="multipart/form-data">
                    @csrf
                  
                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Speaker Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="fullname" type="text" class="form-control" id="fullName" value="">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Speaker Profile</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="profile" type="file" class="form-control" id="fullName" value="">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Speaker Occupation</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="occupation" type="text" class="form-control" id="fullName" value="">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Instagram Link</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="instagram" type="text" class="form-control" id="fullName" value="">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Facebook Link</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="facebook" type="text" class="form-control" id="fullName" value="">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Twitter Link</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="twitter" type="text" class="form-control" id="fullName" value="">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">in Link</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="in" type="text" class="form-control" id="fullName" value="">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Title</label>
                      <div class="col-md-8 col-lg-9">
                        <select name="title" class="block mt-1 w-full border-grey-300 focus:border-indigo-300 focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                            <option value="main">Guest Of Honour</option>
                            <option value="others">Speaker</option>
                        </select>
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Save Changes</button>
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