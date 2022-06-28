<x-app-layout>
<main id="main" class="main">
    <div class="pagetitle">
      <h1>Contacts</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
          <li class="breadcrumb-item active">Contacts</li>
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
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Add Contacts</button>
                </li>

              </ul>
              <div class="tab-content pt-2">
              <?php 
                  $address = '';
                  $phone = '';
                  $email = '';
                  
                  $contacts = DB::select("SELECT * FROM contacts");
                  if(isset($contacts)){
                    foreach($contacts AS $contact){
                      $address = $contact->address;
                      $phone = $contact->phone;
                      $email = $contact->email;
                    }
                  }
                ?>
                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">Event Venue</h5>
                  @if (Auth::user()->hasRole('admin'))
                  <p class="small fst-italic">This previews the Conference Address, Phone and Email as appears on the Official Website Speakers Section. </p>
                  @endif
                  <h5 class="card-title">Contacts Section Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Contact(s)</div>
                  </div>
 
                  <div class="row">
                  <form action="editcontactssection" method="POST">
                    @csrf
                      <div class='col-lg-3 col-md-4 label'>
                        <div style='text-align:center' class='speaker; data-aos='fade-up' data-aos-delay='300'>
                          <br />
                          <div class='details'>
                            <h6><a href=''>{{$address}}</a></h6>
                            <input name='address' type='text' class='form-control' id='fullName' value='{{$address}}'>
                            <br />
                            <h6><a href=''>{{$phone}}</a></h6>
                            <input name='phone' type='text' class='form-control' id='fullName' value='{{$phone}}'>
                            <br />
                            <h6><a href=''>{{$email}}</a></h6>
                            <input name='email' type='text' class='form-control' id='fullName' value='{{$email}}'>
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
                  <form action="addcontactssection" method="POST">
                    @csrf
                  
                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Address</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="address" type="text" class="form-control" id="fullName" value="">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Email</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="email" type="email" class="form-control" id="fullName" value="">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="phone" type="phone" class="form-control" id="fullName" value="">
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