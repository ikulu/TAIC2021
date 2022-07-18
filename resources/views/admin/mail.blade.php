<x-app-layout>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Mail</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
          <li class="breadcrumb-item active">Mail</li>
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

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">Mail</h5>
                  @if (Auth::user()->hasRole('admin'))
                  <p class="small fst-italic">This previews the submited Mails from the Official Website header. </p>
                  @endif
                  <h5 class="card-title">Application Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Mails</div>
                    <?php 
                      $apname = '';
                      $Mails = DB::select("SELECT * FROM mails");
                      foreach($Mails AS $Mail){
                        $emails = $Mail->email;

                        echo $emails . '<br />';
                      }
                    ?>

                  </div>
 
                </div>
                
            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
</x-app-layout>