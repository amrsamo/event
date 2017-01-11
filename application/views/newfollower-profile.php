<?php include('newheader.php'); ?>

<section class="container" id="section1" style="min-height: 60%;">
    <div class="col-sm-12 container">
        
        <div class="row">
          <div class="col-sm-12">

            <div class="row">
              <div class="col-sm-2">
                  <img class="img-responsive img-circle" style="height:150px;width:150px;" src="<?= base_url();?>public/images/usernotfound.jpg" >
                </div>
                <div class="col-sm-10 user-info">
                  <div class="row">
                    <h3 class="bold" style="margin-top: 0px;">
                      <span class="user-headline"><?= $follower->username; ?></span>
                    </h3>
                  </div>
                </div>
            </div>

            <div class="row user-info">

              <!-- CONTACT SECTION -->
              <div class="user-info col-sm-3 col-sm-offset-2">
                <h2 style="margin-top: 0px;"><small>Contact</small></h2>
                  <div class="col-sm-12">
                     <div class="row bounceInDown animated">
                       <div class="col-sm-1 nopadding">
                         <span><i class="fa fa-user" aria-hidden="true"></i></span>
                       </div>
                       <div class="col-sm-11 nopadding">
                         <span><?= $follower->first_name.' '.$follower->last_name; ?></span>
                       </div>
                     </div>
                     <div class="row bounceInDown animated">
                       <div class="col-sm-1 nopadding">
                         <span><i class="fa fa-envelope" aria-hidden="true"></i></span>
                       </div>
                       <div class="col-sm-11 nopadding">
                         <span><?= $follower->email; ?></span>
                       </div>
                     </div>
                     <div class="row bounceInDown animated">
                       <div class="col-sm-1 nopadding">
                         <span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                       </div>
                       <div class="col-sm-11 nopadding">
                         <span><?= $follower->city_name.', '.$follower->country_name; ?></span>
                       </div>
                     </div>
                  </div>
              </div>

              <!-- FOLLOWING SECTION -->
              <div class="user-info col-sm-2">
                <h2 class="text-center" style="margin-top: 0px;"><small>Following</small></h2>
                  <h3 class="text-center bounceInDown animated"><?= count($following); ?></h3>
              </div>

               <!-- LIKES SECTION -->
              <div class="user-info col-sm-2">
                <h2 class="text-center" style="margin-top: 0px;"><small>Likes</small></h2>
                  <h3 class="text-center bounceInDown animated"><?= count($likes); ?></h3>
              </div>


            </div>



          </div>
        </div>
    </div>
      <a href="#section2">
        <div class="scroll-down bounceInDown animated">
            <span>
                <i class="fa fa-angle-down fa-2x"></i>
            </span>
        </div>
      </a>
</section>

<div class="container content" id="section2">

  <!-- SEARCH FILTERS -->
  <div class="row">
    <div class="col-sm-12">
      <div class="col-sm-8">
        <div class="col-sm-1 nopadding nomargin">
          <p>Filter By : </p>
        </div>
        <div class="col-sm-2">
          <div class="form-group">
            <label class="checkbox-inline"><input type="checkbox" value="">Newest</label>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="form-group">
            <label class="checkbox-inline"><input type="checkbox" value="">Top Rated</label>
          </div>
        </div>
      </div>
      <div class="col-sm-4 pull-right">
        <form role="search">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search User Media" aria-describedby="basic-addon2">
            <span class="input-group-addon" id="basic-addon2">
                <i class="glyphicon glyphicon-search"></i>
            </span>
          </div>
        </form>
      </div>
    </div>
  </div>





    <div class="row myspacer user-media">
    <?php foreach ($feed as $x): ?>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 one-media-div spacer-down">
      <?php 
            $user = new stdClass(); 
            $user->username = $x->username; 
            $follower = true;
            $user->profile_picture = new stdClass();
            $user->profile_picture->source_url = $x->user_source_url;
            $x->id = $x->media_id;
      ?>
      <?php include('media-item.php'); ?>
    </div>
    <?php endforeach ?>

  </div>


</div>









<!--  -->
<!--  -->


<?php include('newfooter.php'); ?>
<script type="text/javascript">
  var $container = $('.user-media');
  
    $container.imagesLoaded( function(){
      $container.masonry({
        itemSelector : '.one-media-div'
      });

    });
</script>