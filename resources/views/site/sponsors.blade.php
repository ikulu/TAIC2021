<section id="supporters" class="section-with-bg">

    <div class="container" data-aos="fade-up">
      <div class="section-header">
        <h2>Tanzanite Sponsors</h2>
      </div>
      <?php if($sponsorsname == ''){?>
      <div style="margin: auto;width: 50%;padding: 10px;" class="row no-gutters supporters-wrap clearfix" data-aos="zoom-in" data-aos-delay="100">
        <div class="col-lg-4 col-md-4 col-xs-6">
          <div class="supporter-logo">
            <a><img src="{{ asset('siteimg/sponsors/') }}" class="img-fluid" alt=""></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-xs-6">
          <div class="supporter-logo">
            <a><img src="{{ asset('siteimg/sponsors/') }}" class="img-fluid" alt=""></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-xs-6">
          <div class="supporter-logo">
            <a><img src="{{ asset('siteimg/sponsors/') }}" class="img-fluid" alt=""></a>
          </div>   
        </div>

      </div>

      <?php }else{
        echo '<div class="row no-gutters supporters-wrap clearfix" data-aos="zoom-in" data-aos-delay="100">';
        foreach($sponsors AS $sponsor){
          $picture = $sponsor->picture;
          $sponsorsname = $sponsor->sponsorsname;
          ?>
        <div class="col-lg-3 col-md-4 col-xs-6">
          <p style="text-align:center">{{$sponsorsname}}</p>
          <div class="supporter-logo">
            <img src="{{ asset('sponsors/'.$picture) }}" class="img-fluid" alt="">
          </div>
        </div>
      
      <?php
        }
        echo '</div>';
      } ?>
    </div>

  </section>

    <!-- End Sponsors Section -->

    <!-- ======= Sponsors Section ======= -->
    <section id="supporters" class="section-with-bg">

        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <h2>Silver Sponsors</h2>
          </div>
          <?php if($sponsorsname == ''){?>
          <div style="margin: auto;width: 50%;padding: 10px;" class="row no-gutters supporters-wrap clearfix" data-aos="zoom-in" data-aos-delay="100">
            <div class="col-lg-6 col-md-4 col-xs-6">
              <div class="supporter-logo">
                <a><img src="{{ asset('siteimg/sponsors/') }}" class="img-fluid" alt=""></a>
              </div>
            </div>
  
            <div class="col-lg-6 col-md-4 col-xs-6">
              <div class="supporter-logo">
                <a><img src="{{ asset('siteimg/sponsors/') }}" class="img-fluid" alt=""></a>
              </div>
            </div>
  
          </div>
          <?php }else{
            echo '<div class="row no-gutters supporters-wrap clearfix" data-aos="zoom-in" data-aos-delay="100">';
            foreach($sponsors AS $sponsor){
              $picture = $sponsor->picture;
              $sponsorsname = $sponsor->sponsorsname;
              ?>
            <div class="col-lg-3 col-md-4 col-xs-6">
              <p style="text-align:center">{{$sponsorsname}}</p>
              <div class="supporter-logo">
                <img src="{{ asset('sponsors/'.$picture) }}" class="img-fluid" alt="">
              </div>
            </div>
          
          <?php
            }
            echo '</div>';
          } ?>
        </div>
  
      </section><!-- End Sponsors Section -->
      
      <!-- ======= Sponsors Section ======= -->
      <section id="supporters" class="section-with-bg">
  
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <h2>Bronze Sponsors</h2>
          </div>
          <?php if($sponsorsname == ''){?>
          <div class="row no-gutters supporters-wrap clearfix" data-aos="zoom-in" data-aos-delay="100">
            <!-- <p style="text-align:center">To be confirmed</p> -->
            <div class="col-lg-4 col-md-4 col-xs-6">
              <div class="supporter-logo">
                <a><img src="{{ asset('siteimg/sponsors/') }}" class="img-fluid" alt=""></a>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-4 col-xs-6">
              <div class="supporter-logo">
                <a><img src="{{ asset('siteimg/sponsors/') }}" class="img-fluid" alt=""></a>
              </div>
            </div>
            
            <div class="col-lg-4 col-md-4 col-xs-6">
              <div class="supporter-logo">
              <a><img src="{{ asset('siteimg/sponsors/') }}" class="img-fluid" alt=""></a>
              </div>
            </div>
  
          </div>
          <?php }else{
            echo '<div class="row no-gutters supporters-wrap clearfix" data-aos="zoom-in" data-aos-delay="100">';
            foreach($sponsors AS $sponsor){
              $picture = $sponsor->picture;
              $sponsorsname = $sponsor->sponsorsname;
              ?>
            <div class="col-lg-3 col-md-4 col-xs-6">
              <p style="text-align:center">{{$sponsorsname}}</p>
              <div class="supporter-logo">
                <img src="{{ asset('sponsors/'.$picture) }}" class="img-fluid" alt="">
              </div>
            </div>
          
          <?php
            }
            echo '</div>';
          } ?>
        </div>
  
      </section>
      <!-- End Sponsors Section -->