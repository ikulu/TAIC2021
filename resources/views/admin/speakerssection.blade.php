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
                  <h5 class="card-title">Speakers <span>{{count($speakers)}}</span></h5>
                  <ul>
                    @foreach ($speakers as $speaker )
                        <li style="display:inline;margin: .6rem 0rem;border-radius:.2rem;padding:.4rem">
                          <div>
                            <img width="80px" height="80px" style="border-radius: 2rem;margin:0px .4rem" src="{{asset('uploads/speakersProfiles/'.$speaker->profile)}}" alt="">
                          </div>
                          <div>{{strtoupper($speaker->fullname)}}  {{$speaker->showStatus}}</div>
                          <div>
                          @if($speaker->showStatus === 0)
                            <form class="" action="{{route('update_showStatus',$speaker->id)}}" method="POST">
                              @csrf                             
                              <button type="submit" class="btn btn-sm btn-info">Show</button>
                            </form>
                          @endif
                          </div>
                          
                        </li>
                    @endforeach
                  </ul>

              </div><!-- End Bordered Tabs -->
              <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                <h5 class="card-title">Add Speaker</h5>

                <!-- Profile Edit Form -->
              @include('admin.partials.addSpeakerForm')

              </div>

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
</x-app-layout>