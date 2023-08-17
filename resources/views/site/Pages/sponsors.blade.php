@extends('site.Pages.pageLayout')
@section('baseSlot')
    <section id="schedule" class="custormBG">
        <div class="" data-aos="fade-up">
            <div class="section-header">
                <h2>SPONSORSHIP CATEGORIES</h2>
            </div>
            <div class="container text-center" style="border-radius: .8rem">
                <div class="row justify-content-center">
                    <div class="col-10 ">
                        <h3 style="font-weight: 600">MAIN SPONSORSHIPS</h3>
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
            <div class="tab-content row justify-content-center" data-aos="fade-up" data-aos-delay="200">
                <!-- Panels -->
                <div role="tabpanel" class="col-lg-7  tab-pane show fade active" id="tanzanite">
                    <div class="row schedule-item justify-content-center ">
                        <div class="col-md-8">
                            <span style="color: rgb(6, 54, 6); font-weight:700; font-size:xx-large;">TANZANITE</span>
                        </div>
                        <div class="col-md-4">
                            <div>
                                <h4>SLOT <span>available</span></h4>
                            </div>
                            <div>
                                <img src="{{ asset('siteimg/icons/i1.png') }}" alt="1" width="64px" height="64px">
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="col-lg-7  tab-pane fade" id="platinum">
                    <div class="row schedule-item">
                        <div class="col-md-8"><span style="color: rgb(6, 54, 6); font-weight: 700; font-size:xx-large;">PLATINUM</span></div>
                        <div class="col-md-4">
                            <div>
                                <h4>SLOT <span>available</span></h4>
                            </div>
                            <div>
                                <img src="{{ asset('siteimg/icons/i3.png') }}" alt="1" width="64px" height="64px">
                            </div>
                        </div>
                    </div>

                </div>
                <div role="tabpanel" class="col-lg-7  tab-pane fade" id="gold">
                    <div class="row schedule-item">
                        <div class="col-md-8"><span style="color: rgb(6, 54, 6); font-weight: 700; font-size:xx-large;">GOLD</span></div>
                        <div class="col-md-4">
                            <div>
                                <h4>SLOT <span>available</span></h4>
                            </div>
                            <div>
                                <img src="{{ asset('siteimg/icons/i3.png') }}" alt="1" width="64px" height="64px">
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="col-lg-7  tab-pane fade" id="silver">
                    <div class="row schedule-item">
                        <div class="col-md-8"><span style="color: rgb(6, 54, 6); font-weight: 700; font-size:xx-large;">SILVER</span></div>
                        <div class="col-md-4">
                            <div>
                                <h4>SLOT <span>available</span></h4>
                            </div>
                            <div>
                                <img src="{{ asset('siteimg/icons/i5.png') }}" alt="1" width="64px" height="64px">
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="col-lg-7  tab-pane fade" id="bronze">
                    <div class="row schedule-item">
                        <div class="col-md-8"><span style="color: rgb(6, 54, 6); font-weight: 700; font-size:xx-large;">BRONZE</span></div>
                        <div class="col-md-4">
                            <div>
                                <h4>SLOT <span>availvable</span></h4>
                            </div>
                            <div>
                                <img src="{{ asset('siteimg/icons/i10.png') }}" alt="1" width="64px" height="64px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-4">
                <div class="col-md-10 text-center">
                    <h3 style="font-weight: 600">SPONSORSHIP IN KIND</h3>
                </div>
            </div>
            <ul class="nav nav-tabs" role="tablist" data-aos="fade-up" data-aos-delay="100">
                <li class="nav-item m-1">
                    <a class="nav-link active" href="#group1" role="tab" data-bs-toggle="tab">GROUP 1</a>
                </li>
                <li class="nav-item m-1">
                    <a class="nav-link" href="#group2" role="tab" data-bs-toggle="tab">GROUP 2</a>
                </li>
                <li class="nav-item m-1">
                    <a class="nav-link " href="#group3" role="tab" data-bs-toggle="tab">GROUP 3</a>
                </li>
                <li class="nav-item m-1">
                    <a class="nav-link" href="#group4" role="tab" data-bs-toggle="tab">GROUP 4</a>
                </li>
                <li class="nav-item m-1">
                    <a class="nav-link" href="#group5" role="tab" data-bs-toggle="tab">GROUP 5</a>
                </li>
                
                <li class="nav-item m-1">
                    <a class="nav-link" href="#group6" role="tab" data-bs-toggle="tab">GROUP 6</a>
                </li>
            </ul>
            <div class="tab-content row justify-content-center" data-aos="fade-up" data-aos-delay="200">
                <!-- Panels -->
                <div role="tabpanel" class="col-lg-7  tab-pane show fade active" id="group1">
                    <div class="row schedule-item justify-content-center ">
                        <div class="col-md-8">
                            <span style="color: rgb(6, 54, 6); font-weight:700; font-size:xx-large;">Special group with Disabilities Venue Sponsor</span>
                        </div>
                        <div class="col-md-4">
                            <div>
                                <h4>SLOT <span>available</span></h4>
                            </div>
                            <div>
                                <img src="{{ asset('siteimg/icons/i3.png') }}" alt="1" width="64px" height="64px">
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="col-lg-7  tab-pane fade" id="group2">
                    <div class="row schedule-item">
                        <div class="col-md-8"><span style="color: rgb(6, 54, 6); font-weight: 700; font-size:xx-large;">Conference side Events Sponsor</span></div>
                        <div class="col-md-4">
                            <div>
                                <h4>SLOT <span>available</span></h4>
                            </div>
                            <div>
                                <img src="{{ asset('siteimg/icons/i6.png') }}" alt="1" width="64px" height="64px">
                            </div>
                        </div>
                    </div>

                </div>
                <div role="tabpanel" class="col-lg-7  tab-pane fade" id="group3">
                    <div class="row schedule-item">
                        <div class="col-md-8"><span style="color: rgb(6, 54, 6); font-weight: 700; font-size:xx-large;">COCKTAIL Venue Sponsor</span></div>
                        <div class="col-md-4">
                            <div>
                                <h4>SLOT <span>available</span></h4>
                            </div>
                            <div>
                                <img src="{{ asset('siteimg/icons/i2.png') }}" alt="1" width="64px" height="64px">
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="col-lg-7  tab-pane fade" id="group4">
                    <div class="row schedule-item">
                        <div class="col-md-8"><span style="color: rgb(6, 54, 6); font-weight: 700; font-size:xx-large;">Digital Youth Participation Sponsor</span></div>
                        <div class="col-md-4">
                            <div>
                                <h4>SLOT <span>available</span></h4>
                            </div>
                            <div>
                                <img src="{{ asset('siteimg/icons/i2.png') }}" alt="1" width="64px" height="64px">
                            </div>
                            <small>5 complimentary passes cost of sponsporing 30 youths to participate TAIC & Awards</small>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="col-lg-7  tab-pane fade" id="group5">
                    <div class="row schedule-item">
                        <div class="col-md-8"><span style="color: rgb(6, 54, 6); font-weight: 700; font-size:xx-large;">TAIC Gala Dinner</span></div>
                        <div class="col-md-4">
                            <div>
                                <h4>SLOT <span>availvable</span></h4>
                            </div>
                            <div>
                                <img src="{{ asset('siteimg/icons/i2.png') }}" alt="1" width="64px" height="64px">
                            </div>
                        </div>
                    </div>
                </div>
                
                <div role="tabpanel" class="col-lg-7  tab-pane fade" id="group6">
                    <div class="row schedule-item">
                        <div class="col-md-8"><span style="color: rgb(6, 54, 6); font-weight: 700; font-size:xx-large;">Booklets Graphic Design and Printing Sponsor</span></div>
                        <div class="col-md-4">
                            <div>
                                <h4>SLOT <span>availvable</span></h4>
                            </div>
                            <div>
                                <img src="{{ asset('siteimg/icons/i1.png') }}" alt="1" width="64px" height="64px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section><!-- End Schedule Section -->
@endsection
