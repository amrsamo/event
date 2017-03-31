

    <div class="col-sm-6 category_user_div">
    <!-- FIRST ROW - IMAGE AND FOLLOW BTN -->
    <div class="row nospace">
      <div class="col-sm-3 nospace">
        <a class="user_image" href="<?= base_url(); ?>user/<?= $user->username; ?>">
          <?php if (isset($user->profile_picture)): ?>
              <img src="<?= base_url().$user->profile_picture->source_url;?>" class="img-circle img-responsive">
            <?php else: ?>
              <img src="<?= base_url();?>public/images/usernotfound.jpg" class="img-circle img-responsive">
            <?php endif ?>
        </a>
      </div>
      <div class="col-sm-2 col-sm-offset-1">
         <!-- <button class="btn_follow">follow</button> -->

         <button style="<?= ($user->relation)? '' : 'display:none;' ; ?>" value="<?= $user->user_id; ?>" id="unfollow_<?= $user->user_id; ?>" class="unfollowBTN btn_follow">
              following
         </button>

         <button style="<?= ($user->relation)? 'display:none;' : '' ; ?>" value="<?= $user->user_id; ?>" id="follow_<?= $user->user_id; ?>" class="followBTN btn_follow">
            follow
         </button>
      </div>
    </div>

    <!-- SECOND ROW USERNAME -->
    <div class="row nospace">
      <div class="col-sm-12">
        <a href="<?= base_url(); ?>user/<?= $user->username; ?>">
          <p class="title"><?= $user->username; ?></p>
        </a>
        <p class="category"><?= $user->type_name; ?></p>
      </div>
    </div>


    <!-- THIRD ROW USER IMAGES -->
    <div class="row nospace user_images_carousal">
      <div class="col-sm-12">

        <ul class="bxslider">
            <?php foreach ($user->media as $x): ?>
                <?php $x->id = $x->random_number; ?>
                 <li><a class="mediaModal" id="<?= $x->id;?>" href="<?= base_url().$x->source_url; ?>" data-title="A random title" data-footer="A custom footer text" data-gallery="example-gallery" >
                <img data-toggle="modal" data-target="#user_media_<?= $x->id;?>" class="img-responsive imgcursor" src="<?= base_url().$x->source_url; ?>"></a>
            <?php endforeach ?>
           
              <li>
                <a href="<?= base_url(); ?>user/<?= $user->username; ?>">
                  <img style="-webkit-filter: grayscale(100%);filter: grayscale(100%);" class="img-responsive imgcursor" src="<?= base_url(); ?>public/images/more.jpg">
                </a>
              </li>
            
         
        </ul>

        <?php foreach ($user->media as $x): ?>
        <?php $x->id = $x->random_number; ?>
        <?php include('image_modal.php'); ?></li>
        <?php endforeach ?>
        
      </div>
    </div>
  </div>