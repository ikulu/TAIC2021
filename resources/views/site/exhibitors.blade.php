<section id="supporters" class="section-with-bg">

    <div class="container" data-aos="fade-up">
      <div class="section-header">
        <h2>Exhibitors</h2>
      </div>
      <?php if($exhibitorsname == ''){?>
      <div class="row no-gutters supporters-wrap clearfix" data-aos="zoom-in" data-aos-delay="100">

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
        foreach($exhibitors AS $exhibitor){
          $picture = $exhibitor->picture;
          $exhibitorsname = $exhibitor->exhibitorsname;
          ?>

        <div class="col-lg-3 col-md-4 col-xs-6">
          <p style="text-align:center">{{$exhibitorsname}}</p>
          <div class="supporter-logo">
            <img src="{{ asset('exhibitors/'.$picture) }}" class="img-fluid" alt="">
          </div>
        </div>

        <?php
        }
        echo '</div>';
        } ?>
    </div>

  </section>