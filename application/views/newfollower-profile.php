<?php include('newheader.php'); ?>


<style type="text/css">
  body{
    background-image:url('<?= base_url(); ?>public/images/bg.png');
    background-size: 10%;
  }
</style>



<div class="col-sm-10 col-sm-offset-1 user_profile">
    
    <div class="row nospace">
        <!-- <div class="col-sm-2 nospace">
          <img class="img-responsive img-circle" src="<?= base_url(); ?>public/images/usernotfound.jpg">
        </div> -->
        <div class="user_title col-sm-10 col-sm-offset-2">
          <h2><?= $follower->username; ?></h2>
          <span><?= $follower->first_name.' '.$follower->last_name; ?></span>
        </div>
    </div>


    <div class="row nospace">
      <div class="col-sm-8 col-sm-offset-2 user_info">
        <div class="col-sm-10 bio_section">
          <div class="col-sm-6">
            <h2>EMAIL</h2>
            <p><?= $follower->email; ?></p>
          </div>
          <div class="col-sm-6">
            <h2>ADDRESS</h2>
            <p><?= $follower->city_name.', '.$follower->country_name; ?></p>
          </div>
        </div>
      </div>
    </div>
</div>


<div class="category_filters col-sm-10 col-sm-offset-1">
  <div class="col-sm-1">
    <span>Feed</span>
  </div>
  <div class="col-sm-1">
    <img src="<?= base_url(); ?>public/images/wishbone_crop.png" height="20" width="20">
  </div>
  <div class="col-sm-1 col-sm-offset-1">
            <span>likes </span><p class="badge"><?= count($likes); ?></p>
  </div>
  <div class="col-sm-1 col-sm-offset-1">
            <span>following </span><p class="badge"><?= count($following); ?></p>
  </div>
 <!-- <div class="col-sm-2 pull-right" style="margin-right: 3%;">
     <div class="search">
        <input type="text" class="btn_header" placeholder="search media">
        <span class="line"></span>
        <span class="circle"></span>
      </div>
  </div> -->
</div>



<div class="category_users col-sm-10 col-sm-offset-1 categoryajaxcontent">

<div class="row myspacer user-media">
  <?php foreach ($feed as $x): ?>

      <div class="col-sm-4 single_media_div nospace">
        <a class="mediaModal" id="<?= $x->id;?>" href="<?= base_url().$x->source_url; ?>" data-title="A random title" data-footer="A custom footer text" data-gallery="example-gallery" >
                <img data-toggle="modal" data-target="#user_media_<?= $x->id;?>" class="img-responsive" src="<?= base_url().$x->source_url; ?>">
        </a>
        <div class="single_media_div_info">
          <?php if ($x->like): ?>
              <div value="<?= $x->id; ?>" id="<?= $x->id; ?>" class="heart_div like unlikeBTN">
                <p><?= $x->statistics->likes; ?></p>
              </div>
          <?php else: ?>
              <div value="<?= $x->id; ?>" id="<?= $x->id; ?>" class="heart_div unlike likeBTN">
                <p><?= $x->statistics->likes; ?></p>
              </div>
          <?php endif ?> 
        </div>
      </div>
      <?php include('image_modal.php'); ?>
    <?php endforeach ?>
</div>


</div>


 
<div class="clearfix"></div>






<?php include('newfooter.php'); ?>

<script type="text/javascript">
  var $container = $('.user-media');
  
    $container.imagesLoaded( function(){
      $container.masonry({
        itemSelector : '.single_media_div'
      });

    });

    var height = $(".container-fluid").height();
    height += 120;
    $(".user-container").css('height',height+'px');
</script>