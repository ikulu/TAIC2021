@extends('site.Pages.pageLayout')
@section('baseSlot')
    <section id="speakers" class="custormBG">
        <div class="container-fluid" data-aos="fade-up">
            <div class="section-header">
                <h2>Women's Day in ICT timetable</h2>
            </div>
            <div class="container text-center" style="border-radius:.8rem">
                <div class="row">
                    <div class="col-10">
                        <img src="{{asset('siteimg/timetable/day1-2.jpg')}}" class="img-fluid" alt="">
                        <img src="{{asset('siteimg/timetable/day1-3.jpg')}}" class="img-fluid" alt="">

                    </div>
                </div>
            </div>            
        </div>

    </section><!-- End Speakers Section -->
@endsection
