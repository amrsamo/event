<?php include('newheader.php'); ?>


<style type="text/css">
  body{
    background-image: url('../public/images/bg.png') !important;
    background-size: 10%;
    background-repeat: repeat;
    height:100%;
  }
  section{
    padding-bottom:0px;
  }
</style>
<section class="container-fluid" id="section1" style="min-height: 65%;background-image: url('../public/media/wallpapers/22.jpg');background-position: 0%;background-size: 100%; ">
    
    <div class="col-sm-10 col-sm-offset-1 user-container" style="padding-top:1%;background-color:rgba(0, 0, 0, 0.8);">
        
        <div class="row">
          <div class="col-sm-12">

            <div class="row" >
              <div class="col-sm-2">
                  <img class="img-responsive img-circle" style="height:150px;width:150px;" src="<?= base_url().$user->profile_picture->source_url; ?>" >
                </div>
                <div class="col-sm-10 user-info" style="border-right: none;">
                  <h3 class="bold" style="margin-top: 0px;">
                    <span class="user-headline"><?= $user->username; ?></span>
                    <?php if (isset($social)): ?>
                      <?php foreach ($social as $x): ?>
                        <a href="<?= $x->link; ?>" target="_blank">
                          <?php if ($x->name == 'instagram'): ?>
                            <i class="fa fa-<?= $x->name; ?> fa-2x" aria-hidden="true"></i>
                          <?php else: ?>
                            <i class="fa fa-<?= $x->name; ?>-square fa-2x" aria-hidden="true"></i>
                          <?php endif ?>
                          
                        </a>
                      <?php endforeach ?>
                    <?php endif ?>
                  </h3>
                </div>
            </div>

            <div class="row user-info bounceInDown animated" style="border-right: none;">

              <!-- CONTACT SECTION -->
              <div class="user-info col-sm-3 col-sm-offset-2">
                <h2 style="margin-top: 0px;"><small>Contact</small></h2>
                  <div class="col-sm-12">
                     <div class="row">
                       <div class="col-sm-1 nopadding">
                         <span><i class="fa fa-envelope" aria-hidden="true"></i></span>
                       </div>
                       <div class="col-sm-11 nopadding">
                         <span><?= $user->email; ?></span>
                       </div>
                     </div>
                     <div class="row">
                       <div class="col-sm-1 nopadding">
                         <span><i class="fa fa-globe" aria-hidden="true"></i></span>
                       </div>
                       <div class="col-sm-11 nopadding">
                         <span><?= $user->website; ?></span>
                       </div>
                     </div>
                     <div class="row">
                       <div class="col-sm-1 nopadding">
                         <span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                       </div>
                       <div class="col-sm-11 nopadding">
                         <span><?= $user->address; ?></span>
                       </div>
                     </div>
                  </div>
              </div>

              <!-- BIO SECTION -->
              <div class="user-info col-sm-3">
                <h2 style="margin-top: 0px;"><small>Bio</small></h2>
                  <div class="col-sm-12 nopadding">
                     <span><?= $user->bio; ?></span>
                  </div>
              </div>


              <!-- PHONE NUMBERS SECTION -->
              <div class="user-info col-sm-3" style="border-right: none;">
                <h2 style="margin-top: 0px;"><small>Phone</small></h2>
                  <div class="col-sm-12 nopadding nomargin">
                     <?php foreach ($contacts as $x): ?>
                     <div class="col-sm-6 nopadding">
                       <div class="col-sm-2 nopadding">
                         <span><i class="fa fa-<?= $x->icon;?>" aria-hidden="true"></i></span>
                       </div>
                       <div class="col-sm-10 nopadding">
                         <span style="font-size: 90%;"><?= $x->value; ?></span>
                       </div>
                     </div>
                     <?php endforeach ?>
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
    </div>
      
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
    <?php foreach ($media as $x): ?>
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 one-media-div spacer-down">
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

    var height = $(".container-fluid").height();
    height += 120;
    $(".user-container").css('height',height+'px');
</script>