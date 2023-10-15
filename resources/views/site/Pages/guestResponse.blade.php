@extends('site.Pages.pageLayout')
@section('baseSlot')
    <section id="speakers" class="custormBG">
        <div class="container-fluid" data-aos="fade-up">
            <div class="section-header">
                <h2>WOMEN & YOUTH IN ICT DAY </h2>
            </div>
            <div class="container text-center" style="border-radius:.8rem">
                <div class="row justify-content-center">
                    <div class="col-10 ">
                        <div class="form_container">
                          <div class="title_container">
                            <h2>Welcome to TAIC - 2023</h2>
                          </div>
                          <div class="row">
                            <div class="form_wrapper">
                              <img src="{{asset('siteimg/icons/done.png')}}" alt="success">
                              <ul>
                                <li class="token"> <span><small>Token: </small></span>{{$newGuest->guestToken}}</li>
                                <li> <span>Name: </span>{{$newGuest->firstName}} {{$newGuest->lastName}}</li>
                                <li> <span>Email: </span>{{$newGuest->email}}</li>
                                <li> <span>Phone : </span>{{$newGuest->phoneNumber}}</li>
                                <li> <span>Institution: </span>{{$newGuest->institution}}</li>
                              </ul>
                              <p>Collect your coupon token card at registration booth</p>                              
                            </div>
                          </div>
                        </div>                           
                    </div>
                </div>
            </div>
        </div>

    </section><!-- End Speakers Section -->
@endsection
