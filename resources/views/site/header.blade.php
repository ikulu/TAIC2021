<header id="header" class="d-flex align-items-center ">
    <div class="container-fluid container-xxl d-flex align-items-center">

      <div id="logo" class="me-auto">
        
        {{-- <h1><a href="/">TAIC<span>{{$eventYear}}</span></a></h1> --}}
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="{{route('landing')}}">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li class="dropdown"><a href="#"><span>Sponsorships</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown">
                <a href="{{route('localsponsorship')}}"><span>Local Sponsorships</span></a>
              </li>
              <li class="dropdown">
                <a href="{{route('foreignsponsorship')}}"><span>International Sponsorships</span></a>
              </li>
            </ul>
          </li>
          <li><a class="nav-link " href="{{route('exhibiting')}}">Exhibitors</a></li>
          <li><a class="nav-link " href="{{route('hospitality')}}">Hospitality</a></li>
          <li><a class="nav-link " href="{{route('tours')}}">Tours</a></li>
          <li class="dropdown"><a href="#"><span>Gallery</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown">
                <a href="https://infocusstudiotz.client-gallery.com/gallery/women-and-youth-in-ict" target="_blank"><span>Women's in ICT</span></a>
              </li>
              <li class="dropdown">
                <a href="https://infocusstudiotz.client-gallery.com/gallery/7th-taic-2023-official-opening" target="_blank"><span>TAIC photo</span></a>
              </li>
              <li class="dropdown">
                <a href="https://drive.google.com/drive/folders/16jloaMsqZcUfOs46zJyIG7VS1HCtfsKe?usp=share_link" target="_blank"><span>General</span></a>
              </li>
              <li class="dropdown">
                <a href="https://infocusstudiotz.client-gallery.com/gallery/7th-taic-2023-day-two" target="_blank"><span>DAY 2 photo</span></a>
              </li>
              <li class="dropdown">
                <a href="https://infocusstudiotz.client-gallery.com/gallery/7th-taic-2023-day-3" target="_blank"><span>DAY 3 photo</span></a>
              </li>
            </ul>
          </li>
          {{-- <li><a class="nav-link scrollto" href="#speakers">Speakers</a></li> --}}
          {{-- <li><a class="nav-link scrollto" href="#schedule">Schedule</a></li> --}}
          {{-- <li><a class="nav-link scrollto" 
            href="https://aipc.org/member/julius-nyerere-international-convention-centre-jnicc/" target="_blank">Venue</a></li>
          <li class="dropdown"><a href="#"><span>TAIC Events</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a href="sitedocuments/TAIC 2021_FINAL_REPORT.pdf" target="blank"><span>TAIC 2022</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#about">PRESENTATIONS</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="sitedocuments/TAIC 2021_FINAL_REPORT.pdf" target="blank"><span>TAIC 2021</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="sitedocuments/TAIC 2021_FINAL_REPORT.pdf" target="blank">Final Report</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>TAIC 2020</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Final Report</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="https://immigration.go.tz/index.php/immigration-services/visa-information">Apply Visa</a></li> --}}
          <li><a class="nav-link " href="{{route('downloadReceipt')}}">Get Receipt</a></li>   
          <li><a class="nav-link scrollto" href="{{route('conferenceCertificate')}}">Certificate</a></li>     
          <li><a class="nav-link " target="_blank" href="https://drive.google.com/drive/folders/1yfDXO1IVc5rTWrn5FJOvwG9zQle2qOuj">Presentations</a></li>        
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      {{-- <a class="buy-tickets scrollto" href="https://taicregform.ictc.go.tz/" target="blank">Register</a> --}}
    </div>
  </header><!-- End Header -->
