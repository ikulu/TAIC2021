@extends('site.Pages.pageLayout')
@section('baseSlot')
    <section id="schedule" class="custormBG">
        <div class="" data-aos="fade-up">
            <div class="section-header">
                <h2>INTERNATIONAL SPONSORSHIPS</h2>
            </div>
            <div class="container text-center" style="border-radius: .8rem">
                <div class="row justify-content-center">
                    <div class="col-10 ">
                        <p style="font-size: larger">
                            For International companies and organisation wishing to target a specific day, materials or social events during the
                            Conference, individual sponsorship provides an attractive option. This allows your
                            organisation to choose your desired level of involvement and exposure to attendees at the
                            the Conference. Please contact ICT Commission through <span
                                style="color: rgb(6, 54, 6); font-weight:600">taic@ictc.go.tz</span> for more information
                            on sponsorship opportunites.
                        </p>
                    </div>
                </div>
            </div>

            <div class="tab-content row justify-content-center" data-aos="fade-up" data-aos-delay="200">
                <!-- Panels -->
                @foreach ( $sponsporImg as $img )
                <div role="tabpanel" class="col-lg-7  tab-pane show fade active" id="tanzanite">
                    <div class="row schedule-item justify-content-center ">
                        <img src="{{ asset('siteimg/sponsors/Foreigner').'/'.$img }}" alt="{{$img}}" width="300px" height="600px">
                    </div>
                </div>
                @endforeach
               
    </section><!-- End Schedule Section -->
@endsection
