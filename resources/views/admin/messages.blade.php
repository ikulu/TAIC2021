<x-app-layout>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Messages</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
          <li class="breadcrumb-item active">Messages</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        
        <div class="col-xl-12">

          <div class="card">
            <x-alert />
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Preview</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">Messages</h5>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Messages</div>
                    <table id="table_id" class="display">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Message</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                    <?php 
                      $apname = '';
                      $Messages = DB::select("SELECT * FROM messages");
                      foreach($Messages AS $Message){
                    ?>
                        <tr>
                            <td>{{$Message->name}}</td>
                            <td>{{$Message->email}}</td>
                            <td>{{$Message->subject}}</td>
                            <td>{{$Message->message}}</td>
                        </tr>
                    <?php
                      }
                    ?>
                        </tbody>
                    </table>
                  </div>
 
                </div>
                
            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
</x-app-layout>