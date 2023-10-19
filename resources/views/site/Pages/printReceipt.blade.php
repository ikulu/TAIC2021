@extends('site.Pages.pageLayout')
@section('baseSlot')
    <section id="speakers" class="custormBG">
        <div class="container-fluid" data-aos="fade-up">
            <div class="section-header">
                <h2>Conference Receipt</h2>
            </div>
            <div class="container text-center" style="border-radius:.8rem">
                <div class="row justify-content-center">
                    <div class="col-10 ">
                        <div class="form_wrapper">
                            <form method="get" action="{{$urlIprs}}">
                                {{-- @csrf --}}
                                <div class="row clearfix">
                                    <div class="">
                                      <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                                        <input type="text" id="controlNumber" name="controlNumber" placeholder="Your control Number" />
                                        @error('controlNumber')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                         @enderror
                                      </div>
                                    </div>               
                                <input class="button" type="submit" value="Download" />
                              </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section><!-- End Speakers Section -->
@endsection
