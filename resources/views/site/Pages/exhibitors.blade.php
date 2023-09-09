@extends('site.Pages.pageLayout')
@section('baseSlot')
    <section id="speakers" class="custormBG">
        <div class="container-fluid" data-aos="fade-up">
            <div class="section-header">
                <h2>EXHIBITION</h2>
            </div>
            <div class="container text-center" style="border-radius:.8rem">
                <div class="row">
                    <div class="col-10 ">
                        <p style="font-size: larger">
                            The conference will be featured by ICT products exhibition from multinationals, institutions,
                            innovators and local
                            ICT based service companies. Please contact the ICT Commission through <span
                                style="color: rgb(6, 54, 6); font-weight:600">taic@ictc.go.tz</span> for more information
                            on exhibition and sponsorship opportunites.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row" style="background-color: white">
                <div class="col-6">
                    <img src="{{ asset('siteimg/sponsors/Local/exhibition1.jpg') }}" alt="exhibit1" height="600px" style="border-radius:.8rem">
                </div>
                <div class="col-6">
                    <img src="{{ asset('siteimg/sponsors/Foreigner/exhibition1.jpg') }}" alt="exhibit2" height="600px" style="border-radius:.8rem">
                </div>
            </div>
        </div>

    </section><!-- End Speakers Section -->
@endsection
