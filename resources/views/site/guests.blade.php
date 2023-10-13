<section id="speakers">
    <div class="container" data-aos="fade-up">
      <div class="section-header">
        <h2>Guest Of Honour</h2>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6"></div>
        <div class="col-lg-3 col-md-6">
          <div style="text-align:center" class="speaker" data-aos="fade-up" data-aos-delay="300">
          <img src="{{ asset('siteimg/speakers/person.png') }}" alt="" class="img-fluid" style="max-height:300px;min-width:300px">
            <div class="details">
              <h3><a>To Be Confirmed</a></h3>
              <!-- <p></p> -->
              <?php if($fullnameM == ''){ echo "<p>To be Comfirmed</p>";} ?>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6"></div>
      </div>
    </div>
  </section><!-- End Speakers Section -->

    <!-- ======= Speakers Section ======= -->
    <section id="speakers">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Conference Speakers</h2>
        </div>

        <div class="row justify-content-center">
          {{-- Individual speaker --}}
          
          <div class="col-lg-3 col-md-6">
              <div class="speaker" data-aos="fade-up" data-aos-delay="100">
                <img src="{{asset('siteimg/speakers/2023/speaker1.jpg')}}" alt='' class='img-fluid'>
              <div class='details'>
                <h6 style="font-weight:700">
                  <a href='https://softnet.co.tz/' target="_blank">Harish R. Bhatt</a>
                </h6>
                <p>CEO-SOFTNET</p>
                <div class='social'>
                  <a href='#'><i class='bi bi-twitter'></i></a>
                  <a href='#'><i class='bi bi-facebook'></i></a>
                  <a href='#'><i class='bi bi-instagram'></i></a>
                  <a href='#'><i class='bi bi-linkedin'></i></a>
                </div>
              </div>
            </div>
          </div>
          {{-- End Speaker  --}}
          {{-- <div class="col-lg-4 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="300">
              <img src="{{ asset('siteimg/speakers/person.png') }}" alt="" class="img-fluid">
              <div class="details">
                <h3><a>To Be Confirmed</a></h3>
                <p></p>
              </div>
            </div>
          </div> --}}
        </div>
      </div>
      </section>