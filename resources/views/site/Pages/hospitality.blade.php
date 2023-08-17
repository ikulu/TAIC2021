@extends('site.Pages.pageLayout')
@section('baseSlot')
    <section id="speakers" class="custormBG">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>HOSPITALITY</h2>
            </div>
            <div class="container text-center" style="border-radius: .8rem">
                <div class="row justify-content-center">
                    <div class="col-10 ">
                        <h3 style="font-weight: 600">HEALTH</h3>
                        <p >
                            For all travellers from yellow fever endemic countries entering the United Republic of Tanzania,
                            international health certificate showing current yellow fever immunisation is required. The cost
                            for
                            Yellow fever vaccination is USD 50. Further details on yellow fever entry requirements and
                            information
                            visit:
                            <a href="https://afyamsafiri.moh.go.tz/">VisitorHealth</a>
                        </p>
                        <p>
                            As far as preventive measures against the spread of COVID-19 are concerned, please note the
                            following:
                        </p>
                        <ul>
                            <li>
                                <p>1. ALL TRAVELERS are required to truthfully fill in an online Traveller’s Health
                                    Surveillance Form within
                                    24 hours before arrival to Tanzania Mainland.
                                    The form is available at <a href="https://afyamsafiri.moh.go.tz/">VisitorHealth</a></p>
                            </li>
                            <li>
                                <p>2. <b>COVID-19 VACCINATION CERTIFICATE AND PCR TEST</b> travellers entering or transiting in
                                     the URT through land boarder, Sea Ports and Airports are advised to be fully vaccinated 
                                     as per approved schedule of primary vaccination against covid-19 in their respective countries.
                                      However, Covid-19 vaccination certificates, RT PCR tests or performing rapid antigen test on
                                       arrival is not mandatory in the URT, unless stated otherwise by conveyance to be used or country 
                                       of their final destination. If travellers originate from countries like 1. The United State of America
                                       2. The Republic of India
                                       3. The Republic of South Africa
                                       4. The Republic of Uganda
                                       5. The Republic of Rwanda
                                       6. The French Republic
                                       7. Democratic Republic Of Congo
                                       8. The Republic of Egypt
                                       9. The Republic of Malawi
                                       10.The United Kingdom, they 
                                       will be tested for COVID 19 upon arrival using a Rapid Antigen Test at their own cost of <b> 10 USD (TZS 23,000)</b> for Tanzania Mainland. 
                                       If found positive they will be tested with RT- PCR for confirmation, 
                                    allowed to self-isolate and the results will be sent via email or any other means.</p>
                            </li>
                            <li>    
                                <p>3. Travel Advisory Note Link</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container text-center" style="border-radius: .8rem">
                <div class="row justify-content-center">
                    <div class="col-10 ">
                        <h3 style="font-weight: 600">HOTELS</h3>
                        <p >
                            As Participant of the TAIC 2023,you may explore and choose accommodation of their preference from the list of hotels provided below:
                        </p>
                       
                    </div>
                </div>
                <div class="row">
                    @foreach ($hotels as $hotel)
                    <div class="col-lg-4">
                        <div style="text-align:center;background-color:antiquewhite;" class="speaker" data-aos="fade-up"
                            data-aos-delay="300">
                            <img src="{{ asset('siteimg/hotels/').'/'.$hotel->imgPath}}" alt="Speaker 3" width="420px"
                                height="350px">
                            <div class="details p-1">
                                <h3><a href="{{$hotel->website}}">{{$hotel->name}}</a></h3>
                                <div class="row justify-content-center">
                                    <div class="col-6"><p>$<span style="font-size: x-large;color:cyan">{{$hotel->minPrice}}</span> - 
                                        $<span style="font-size: x-large;color:cyan">{{$hotel->maxPrice}}</span></p></div>
                                    <div class="col-6 text-center">
                                    <p><span style="font-size: x-large;color:cyan">{{$hotel->noOfStars}}</span> Stars</p></div>
                                </div>
                                <p>{{$hotel->email}}</p>
                                <p>{{$hotel->phoneNumber1}} | {{$hotel->phoneNumber2}}</p>
                                <p>{{$hotel->distance}} Meter from JNICC</p>    
                            </div>
                        </div>
                    </div>
                    @endforeach             
                    
                </div>
            </div>
        </div>

    </section><!-- End Speakers Section -->
@endsection
