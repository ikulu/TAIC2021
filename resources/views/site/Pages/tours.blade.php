@extends('site.Pages.pageLayout')
@section('baseSlot')
    <section id="speakers" class="custormBG">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>TOURISM</h2>
            </div>
            <div class="container text-center" style="border-radius: .8rem">
                <div class="row justify-content-center">
                    <div class="col-10 ">
                        <p >
                            Tanzania is endowed with a variety of tourist attractions categorized into natural,
                             cultural, and man-made resources. The country is the home to 22 National Parks: 24 Game Reserves;
                              27 Game Controlled Areas; 38 Wildlife Management Areas; 19 Nature Reserves; One Conservation Area; Three Ramsar
                               Sites; more than 125 archaeological sites and historical sites;
                                over 1,400 km of coastline with pristine beaches; three marine parks and 15 marine reserves;
                                 three Great Lakes; and the Spice Island of Zanzibar. For more details kindly visit 
                            <a href="www.tanzaniatourism.go.tz" target="_blank">Tanzania Tourism</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="container text-center" style="border-radius: .8rem">
                <div class="row justify-content-center">
                    <div class="col-10 ">
                        <h3 style="font-weight: 600">DESTINATIONS</h3>
                        <p >
                            Tanzania as a home to some of Africa's most famous national parks and natural attractions,
                             including majestic Mount Kilimanjaro. Consequently, the most popular things to do in Tanzania
                             and the reason many people visit the country, are safaris and wildlife-related adventures.
                        </p>
                       
                    </div>
                </div>
                <div class="row">
                    @foreach ($tours as $tour)
                    <div class="col-lg-4">
                        <div style="text-align:center;background-color:antiquewhite;" class="speaker" data-aos="fade-up"
                            data-aos-delay="300">
                            <img src="{{ asset('siteimg/tours').'/'.$tour->imgName}}" alt="Speaker 3" width="420px"
                                height="300px">
                            <div class="details p-1">
                                <h3><a href="https://www.tanzaniatourism.go.tz/discover">{{$tour->name}}</a></h3>
                                <p>{{$tour->locDetails}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach             
                    
                </div>
            </div>
        </div>

    </section><!-- End Speakers Section -->
@endsection
