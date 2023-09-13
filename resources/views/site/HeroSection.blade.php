    <section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
      <h1 class="mb-1 mt-2 pb-0">{{$title}}</h1>
        <p style="font-size:1.6rem;color:rgb(107, 221, 244)">"{{$theme}}."</p>
      <p class="mb-1 pb-0">{{$conferenceVenue}}</p>
      <p class="mb-1 pb-0" style=" color:rgb(95, 245, 95);">
        {{$presentedFromdate}}<sup style="color:white">th</sup> 
        <span style="color:white;">-</span>
         {{$presentedTodate}}<sup style="color:white">th</sup>
         {{$presentedMonthDate}} 
         {{$eventYear}}
      </p>
      {{-- Counter --}}
      <p style="text-align: center;font-size:1.5rem;margin-top: 0px;"
      id="demo"></p>
      <a href="{{route('opening')}}" class="about-btn" style="font-size: 1.4rem">Register</a>
      <div class="row">
        {{-- <div class="col-xl-6">

        </div> --}}
        {{-- <div class="col-xl-6">
          
          <a href="{{route('opening')}}" class="about-btn" style="font-size: 1.4rem">Register</a>
        </div> --}}
      </div>
      {{-- <a href="http://registertaic.ictc.go.tz/ictcReg/public/" target="_blank" class="about-btn" style="font-size: 1.4rem">Register</a> --}}
    </div>
  </section>