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

        <div class="row">
        <?php
          foreach($speakers AS $speaker){
              $fullname = $speaker->fullname;
              $occupation = $speaker->occupation;
              $profile = $speaker->profile;
              $facebook = $speaker->facebook;
              $instagram = $speaker->instagram;
              $twitter = $speaker->tweeter;
              $ini = $speaker->ini;
              $id = $speaker->id;

              if($fullname == ''){$fullname = 'Full Name';}
              if($occupation == ''){$occupation = 'Occupation';}
              if($profile == ''){$profile = 'default.png';}
              if($facebook == ''){
                $facebook = '#';
              }else{
                $facebook = "https://www.facebook.com/".$facebook;
              }
              if($twitter == ''){
                $twitter = '#';
              }else{
                $twitter = "https://www.twitter.com/".$twitter;
              }
              if($ini == ''){
                $ini = '#';
              }else{
                $ini = "https://www.linkedin.com/".$ini;
              }
              if($instagram == ''){
                $instagram = '#';
              }else{
                $instagram = "https://www.instagram.com/".$instagram;
              }
        ?>
              <div class="col-lg-4 col-md-6">
              <div class="speaker" data-aos="fade-up" data-aos-delay="100">
              <img src="{{asset('profiles/'.$profile)}}" alt='' class='img-fluid'>
              <div class='details'>
                <h6><a href='speaker-details.html'>{{$fullname}}</a></h6>
                <p>{{$occupation}}</p>
                <div class='social'>
                  <a href='{{$twitter}}'><i class='bi bi-twitter'></i></a>
                  <a href='{{$facebook}}'><i class='bi bi-facebook'></i></a>
                  <a href='{{$instagram}}'><i class='bi bi-instagram'></i></a>
                  <a href='{{$ini}}'><i class='bi bi-linkedin'></i></a>
                </div>
              </div>
            </div>
          </div>
          <?php
          }
          if($fullname == ''){?>
          <div class="col-lg-4 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="200">
              <img src="{{ asset('siteimg/speakers/person.png') }}" alt="" class="img-fluid" style="min-height:300px;min-width:300px">
              <div class="details">
                <h3><a>To Be Confirmed</a></h3>
                <p></p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="200">
              <img src="{{ asset('siteimg/speakers/person.png') }}" alt="" class="img-fluid" style="min-height:300px;min-width:300px">
              <div class="details">
                <h3><a>To Be Confirmed</a></h3>
                <p></p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="300">
              <img src="{{ asset('siteimg/speakers/person.png') }}" alt="" class="img-fluid">
              <div class="details">
                <h3><a>To Be Confirmed</a></h3>
                <p></p>
              </div>
            </div>
          </div>
          <?php }
          ?>
        </div>
      </div>

    </section>