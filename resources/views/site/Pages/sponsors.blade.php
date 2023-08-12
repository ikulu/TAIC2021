@extends('site.Pages.pageLayout')
@section('baseSlot')
    <section id="schedule" class="section-with-bg">
        <div class="" data-aos="fade-up">
            <div class="section-header">
                <h2>SPONSORSHIP CATEGORIES</h2>
            </div>
            <div class="container text-center" style="border-radius: .8rem">
                <div class="row">
                    <div class="col-10 ">
                        <p style="font-size: larger">
                            For companies wishing to target a specific day, materials or social events during the
                            Conference, individual sponsorship provides an attractive option. This allows your
                            organisation to choose your desired level of involvement and exposure to attendees at the
                            the Conference. Please contact ICT Commission through <span
                                style="color: rgb(6, 54, 6); font-weight:600">taic@ictc.go.tz</span> for more information
                            on sponsorship opportunites.
                        </p>
                    </div>
                </div>
            </div>

            <ul class="nav nav-tabs" role="tablist" data-aos="fade-up" data-aos-delay="100">
                <li class="nav-item m-1">
                    <a class="nav-link active" href="#tanzanite" role="tab" data-bs-toggle="tab">TANZANITE</a>
                </li>
                <li class="nav-item m-1">
                    <a class="nav-link" href="#platinum" role="tab" data-bs-toggle="tab">PLATINUM</a>
                </li>
                <li class="nav-item m-1">
                    <a class="nav-link " href="#gold" role="tab" data-bs-toggle="tab">GOLD</a>
                </li>
                <li class="nav-item m-1">
                    <a class="nav-link" href="#silver" role="tab" data-bs-toggle="tab">SILVER</a>
                </li>
                <li class="nav-item m-1">
                    <a class="nav-link" href="#bronze" role="tab" data-bs-toggle="tab">BRONZE</a>
                </li>
            </ul>

            <div class="container tab-content row justify-content-center" data-aos="fade-up" data-aos-delay="200">
                <!-- Panels -->
                <div role="tabpanel" class="col-lg-7  tab-pane show fade active" id="tanzanite">
                    <div class="row schedule-item">
                        <div class="col-md-2"><span style="color: rgb(6, 54, 6); font-weight:700">TANZANITE</span></div>
                        <div class="col-md-10">
                            <h4>SLOT <span>available</span></h4>
                        </div>
                    </div>

                    <div class="row schedule-item">
                        <div class="col-md-2"><time></time></div>
                        <div class="col-md-10">
                            <img src="{{ asset('siteimg/icons/i1.png') }}" alt="1" width="64px" height="64px">
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="col-lg-7  tab-pane fade" id="platinum">
                    <div class="row schedule-item">
                        <div class="col-md-2"><span style="color: rgb(6, 54, 6); font-weight:700">PLATINUM</span></div>
                        <div class="col-md-10">
                            <h4>SLOT <span>available</span></h4>
                        </div>
                    </div>

                    <div class="row schedule-item">
                        <div class="col-md-2"><time></time></div>
                        <div class="col-md-10">
                            <img src="{{ asset('siteimg/icons/i3.png') }}" alt="1" width="64px" height="64px">

                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="col-lg-7  tab-pane fade" id="gold">
                    <div class="row schedule-item">
                        <div class="col-md-2"><span style="color: rgb(6, 54, 6); font-weight:700">GOLD</span></div>
                        <div class="col-md-10">
                            <h4>SLOT <span>available</span></h4>
                        </div>
                    </div>

                    <div class="row schedule-item">
                        <div class="col-md-2"><time></time></div>
                        <div class="col-md-10">
                            <img src="{{ asset('siteimg/icons/i3.png') }}" alt="1" width="64px" height="64px">

                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="col-lg-7  tab-pane fade" id="silver">
                    <div class="row schedule-item">
                        <div class="col-md-2"><span style="color: rgb(6, 54, 6); font-weight:700">SILVER</span></div>
                        <div class="col-md-10">
                            <h4>SLOT <span>available</span></h4>
                        </div>
                    </div>

                    <div class="row schedule-item">
                        <div class="col-md-2"><time></time></div>
                        <div class="col-md-10">
                            <img src="{{ asset('siteimg/icons/i5.png') }}" alt="1" width="64px" height="64px">
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="col-lg-7  tab-pane fade" id="bronze">
                    <div class="row schedule-item">
                        <div class="col-md-2"><span style="color: rgb(6, 54, 6); font-weight:700">BRONZE</span></div>
                        <div class="col-md-10">
                            <h4>SLOT <span>available</span></h4>
                        </div>
                    </div>

                    <div class="row schedule-item">
                        <div class="col-md-2"><time></time></div>
                        <div class="col-md-10">
                            <img src="{{ asset('siteimg/icons/i10.png') }}" alt="1" width="64px" height="64px">

                        </div>
                    </div>
                </div>
            </div>
    </section><!-- End Schedule Section -->
@endsection
