<?php include('newheader.php'); ?>


<style type="text/css">
  body{
    background-image:url('<?= base_url(); ?>public/images/bg.png');
    background-size: 10%;
  }
</style>



<div class="col-sm-10  col-sm-offset-1 user_profile">
    
    <div class="row nospace">
        <div class="col-sm-2 nospace">
          <img class="img-responsive img-circle" src="<?= base_url().$user->profile_picture->source_url; ?>" >
        </div>
        <div class="user_title col-sm-10">
          <h2><?= $user->username; ?></h2>
          <span><a target="_blank" href="<?= $user->website; ?>"><?= $user->website; ?></a></span>
          <button style="<?= ($user->relation)? '' : 'display:none;' ; ?>" value="<?= $user->user_id; ?>" id="unfollow_<?= $user->user_id; ?>" class="unfollowBTN btn_follow follow_button">
              following
         </button>

         <button style="<?= ($user->relation)? 'display:none;' : '' ; ?>" value="<?= $user->user_id; ?>" id="follow_<?= $user->user_id; ?>" class="followBTN btn_follow follow_button">
            follow
         </button>
        </div>
    </div>


    <div class="row nospace">
      <div class="col-sm-8 col-sm-offset-2 user_info">
        <div class="col-sm-10 col-xs-10 bio_section">
          <div class="col-sm-12">
            <h2>BIO</h2>
            <p><?= $user->bio; ?></p>
          </div>

          <div class="col-sm-6">
            <h2>EMAIL</h2>
            <p><?= $user->email; ?></p>
          </div>
          <div class="col-sm-6">
            <h2>ADDRESS</h2>
            <p><?= $user->address; ?></p>
          </div>
          <div class="col-sm-12">
            <h2>PHONE</h2>
            <p>
            <?php $count = count($contacts); $counter = 0; ?>
            <?php foreach ($contacts as $x): ?>
                <?php if ($counter == $count-1): ?>
                  <?= $x->value ?>
                <?php else: ?>
                  <?= $x->value.' - '; ?>
                <?php endif ?>
                
                <?php $counter++; ?>
             <?php endforeach ?>
            </p>
          </div>
        </div>
        <div class="col-sm-2 col-xs-2 contacts_section">
          <?php if (isset($social)): ?>
            <?php foreach ($social as $x): ?>
              <div class="col-sm-12 col-xs-10 nospace">
                <a href="<?= $x->link; ?>">
                  <img class="img-responsive"  src="<?= base_url(); ?>public/images/landing/<?= $x->image; ?>">
                </a>
              </div>
            <?php endforeach ?>
          <?php endif ?>
        </div>
      </div>
    </div>
</div>


<div class="category_filters col-sm-10 col-sm-offset-1">
  <div class="col-sm-1">
    <a class="a_nostyle" href="<?= base_url(); ?>user/<?= rawurlencode($user->username) ?>"><span>all</span></a>
  </div>
  <div class="col-sm-1">
    <img src="<?= base_url(); ?>public/images/wishbone_crop.png" height="20" width="20">
  </div>
  <?php if (is_array($videos) && count($videos) > 0): ?>
    <div class="col-sm-1 col-sm-offset-1">
        <a class="a_nostyle" href="<?= base_url(); ?>user/<?= rawurlencode($user->username) ?>?filter=videos"><span>videos</span></a>
    </div>
  <?php endif ?>
 <!--  <div class="col-sm-1 col-sm-offset-1">
            <span>Albums</span>
  </div> -->
 <!-- <div class="col-sm-2 pull-right" style="margin-right: 3%;">
     <div class="search">
        <input type="text" class="btn_header" placeholder="search media">
        <span class="line"></span>
        <span class="circle"></span>
      </div>
  </div> -->
</div>



<div class="category_users usermediacontent col-sm-10 col-sm-offset-1 categoryajaxcontent">

<div class="row myspacer user-media">

<?php if (isset($_GET['filter']) && $_GET['filter'] == 'videos'): ?>

  <?php foreach ($videos as $video): ?>
    <?php 
      $video_id = explode('v=', $video->url);
      $video_id = $video_id[1];
     ?>
    <div class="col-sm-4">
      <iframe width="420" height="315" src="https://www.youtube.com/embed/<?= $video_id; ?>">
      </iframe>
    </div>
  <?php endforeach ?>


<?php else: ?>

 <?php foreach ($media as $x): ?>

      <div class="col-sm-4 col-xs-4 single_media_div nospace">
        <a class="mediaModal" id="<?= $x->id;?>" href="<?= base_url().$x->source_url; ?>" data-title="A random title" data-footer="A custom footer text" data-gallery="example-gallery" >
                <img data-toggle="modal" data-target="#user_media_<?= $x->id;?>" class="img-responsive" src="<?= base_url().$x->source_url; ?>">
        </a>
        <div class="single_media_div_info">
          <?php if ($x->like): ?>
              <!-- <div value="<?= $x->id; ?>" id="<?= $x->id; ?>" class="heart_div like unlikeBTN">
                <p><?= $x->statistics->likes; ?></p>
              </div> -->
          <?php else: ?>
              <<!-- div value="<?= $x->id; ?>" id="<?= $x->id; ?>" class="heart_div unlike likeBTN">
                <p><?= $x->statistics->likes; ?></p>
              </div> -->
          <?php endif ?> 
        </div>
      </div>
      <?php include('image_modal.php'); ?>
    <?php endforeach ?>

<?php endif ?>

 
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