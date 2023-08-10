    <section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
      <h1 class="mb-1 mt-2 pb-0">{{$title}}</h1>
        <p style="font-size:1.6rem;color:rgb(107, 221, 244)">"{{$theme}}"</p>
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
      {{-- <a href="#" class="about-btn scrollto" target="blank" style="font-size: 1.4rem">Register</a> --}}
      <a href="#" id="showPopoverBtn" class="about-btn" target="blank" style="font-size: 1.4rem">Register</a>
    </div>
    <div id="popoverContainer" class="popover-container">
      <div class="popover-card">
          <img src="{{asset('siteimg/icons/waiting.png')}}" alt="Waiting">
          <p style="color: black;">Registration  will be Open <span style="color:rgb(22, 74, 3);font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">August 17, 2023</span></p>
          <button id="closePopoverBtn">Close</button>
      </div>
  </div>
  </section>