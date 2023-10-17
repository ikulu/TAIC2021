@extends('site.Pages.pageLayout')
@section('baseSlot')
    <section id="speakers" class="custormBG">
        <div class="container-fluid" data-aos="fade-up">
            <div class="section-header">
                <h2>WOMEN & YOUTH IN ICT DAYS</h2>
            </div>
            <div class="container text-center" style="border-radius:.8rem">
                <div class="row justify-content-center">
                    <div class="col-10 ">
                        <div class="form-guest">
                            <div class="form_wrapper">
                                <div class="form_container">
                                  <div class="title_container">
                                    <h2>Provide your details</h2>
                                  </div>
                                 
                                  </div>
                                  <div class="row clearfix">
                                    <div class="">
                                      <form method="post" action="{{route('registerGuest')}}">
                                        @csrf
                                        <div class="row clearfix">
                                            <div class="col_half">
                                              <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                                                <input type="text" id="firstName" name="firstName" placeholder="First Name" />
                                                @error('firstName')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                 @enderror
                                              </div>
                                            </div>
                                            <div class="col_half">
                                              <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                                                <input type="text" id="lastName" name="lastName" placeholder="Last Name" required />
                                                 @error('lastName')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                 @enderror

                                              </div>
                                            </div>
                                          </div>
                                        <div class="input_field"> <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
                                          <input type="email"  id="email" name="email" placeholder="Email" required />
                                           @error('email')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                 @enderror
                                        </div>
                                        <div class="input_field"> <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
                                          <input type="text" id="phoneNumber" name="phoneNumber" placeholder="255******" required />
                                           @error('phoneNumber')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                 @enderror
                                        </div>
                                        <div class="input_field"> <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
                                          <input type="text" id="institution" name="institution" placeholder="Institution" required />
                                           @error('institution')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                 @enderror
                                        </div>
                                        <div class="input_field radio_option">
                                          <input type="radio" name="gender" value="M" id="rd1">
                                          <label for="rd1">Male</label>
                                          <input type="radio" name="gender" value="F" id="rd2">
                                          <label for="rd2">Female</label>
                                          @error('gender')
                                          <div class="alert alert-danger">{{ $message }}</div>
                                           @enderror
                                          </div>
                                            <div class="input_field select_option">
                                              <select id="regionID" name="regionID">
                                                <option disabled>Region</option>
                                                @foreach ( $regions as $region )                                                    
                                                <option value="{{$region->id}}">{{$region->region}}</option>
                                                @endforeach
                                              </select>
                                              @error('regionID')
                                              <div class="alert alert-danger">{{ $message }}</div>
                                               @enderror
                                              <div class="select_arrow"></div>
                                            </div>
                                          
                                        <input class="button" type="submit" value="Register" />
                                      </form>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              </div>
                    </div>
                </div>
            </div>
        </div>

    </section><!-- End Speakers Section -->
@endsection
