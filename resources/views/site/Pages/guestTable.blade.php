@extends('site.Pages.pageLayout')
@section('baseSlot')
    <section id="speakers" class="custormBG">
        <div class="container-fluid" data-aos="fade-up">
            <div class="section-header">
                <h2>PARTICIPANTS REGISTERED FOR WOMEN & YOUTH IN ICT DAYS</h2>
            </div>
            <div class="container text-center" style="border-radius:.8rem">
                <div class="row justify-content-center">
                    <div class="col-10"> 
                      <div class="tableData">
                        <table class="table table-striped table-bordered" id="sortableTable">
                          <tr>
                            <th onclick="sortTable(0)">Token</th>
                            <th onclick="sortTable(1)">Name</th>
                            <th onclick="sortTable(2)">Email</th>
                            <th onclick="sortTable(3)">Phone</th>
                            <th onclick="sortTable(4)">Gender</th>
                            <th onclick="sortTable(5)">Institution</th>
                          </tr>
                          @foreach ( $registeredGuests as $guest)
                          <tr>
                            <td>{{$guest->guestToken}}</td>
                            <td class="lalign">{{$guest->firstName}} {{$guest->lastName}}</td>
                            <td>{{$guest->email}}</td>
                            <td>{{$guest->phoneNumber}}</td>
                            <td>{{$guest->gender}}</td>
                            <td>{{$guest->institution}}</td>
                          </tr>
                          @endforeach
                        </table>
                      </div>                        
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Speakers Section -->
@endsection

