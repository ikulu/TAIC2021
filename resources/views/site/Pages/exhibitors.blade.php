@extends('site.Pages.pageLayout')
@section('baseSlot')
<section id="speakers">
    <div class="container" data-aos="fade-up">
      <div class="section-header">
        <h2>EXHIBITION</h2>
      </div>
      <div class="container text-center" style="border-radius: .8rem">
        <div class="row">
            <div class="col-10 ">
                <p style="font-size: larger">
                    The conference will be featured by ICT products exhibition from multinationals, institutions, innovators and local
                    ICT based service companies. Please contact the ICT Commission through <span
                        style="color: rgb(6, 54, 6); font-weight:600">taic@ictc.go.tz</span> for more information
                    on exhibition and sponsorship opportunites.
                </p>
            </div>
        </div>
    </div>

      <div class="row">
        <div class="col-lg-6">
          <div style="text-align:center;background-color:antiquewhite;" class="speaker" data-aos="fade-up" data-aos-delay="300" >
            <img src="{{ asset('siteimg/icons/singlebooth.png') }}" alt="Speaker 3" width="400px" height="400px">
            <div class="details">
              <h3><a href="speaker-details.html">TZS 2,000,000</a></h3>
              <p>(3m*3m)</p>
              <p>Benefit: 2 company passes</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
            <div style="text-align:center;background-color:rgb(250, 235, 215);" class="speaker" data-aos="fade-up" data-aos-delay="300" >
              <img src="{{ asset('siteimg/icons/doublebooth.png') }}" alt="Speaker 3" width="400px" height="400px">
              <div class="details">
                <h3><a href="speaker-details.html">TZS 3,000,000</a></h3>
                <p>(6m*3m)</p>
                <p>Benefit: 3 company passes</p>
              </div>
            </div>
          </div>
      </div>
    </div>

  </section><!-- End Speakers Section -->
@endsection
