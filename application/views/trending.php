<?php include('header.php'); ?>

<div class="col-sm-10 col-sm-offset-1" style="padding:1%;padding-bottom:0px;color:black;background-color: white;margin-top:3.5%;">

  <div class="row">

    <div class="col-sm-3 affix" style="z-index: 1 !important; height:100vh;padding: 0px;margin:0px;background-color: #1abc9c;">
      <div class="bannerDiv autosize" style="color:white;background-color: #1abc9c;">
          <h2 style="border-bottom:2px solid;margin-top: 2%;">
          <i class="fa fa-bolt" aria-hidden="true"></i>Trending</h2>
          <div class="row" style="margin-top: 10%;padding:2%;" >
            <div class="col-sm-10 col-sm-offset-1">
              <p class="category-desc">
                
              </p>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
              <hr>
            </div>
          </div>

        <!--   <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
              <p><b>
                     <span><i class="fa fa-bars" aria-hidden="true"></i></span> 
                    <?= strtoupper($category->name); ?>
              </b></p>
              <?php if (isset($sub_category) && !empty($sub_category)): ?>
                <?php foreach ($sub_category as $sub): ?>
                  <p class="sub-category-icon">
                    <span><i class="fa fa-<?= $sub->icon; ?>" aria-hidden="true"></i></span>
                    <span><?= $sub->name; ?></span>
                  </p>
                <?php endforeach ?>
                <p class="sub-category-icon">
                    <span><i class="fa fa-star" aria-hidden="true"></i></span>
                    <span>All</span>
                </p>
              <?php else: ?>
                <p class="sub-category-icon">
                    <span><i class="fa fa-star" aria-hidden="true"></i></span>
                    <span>All</span>
                </p>
              <?php endif ?>
            </div>
          </div> -->


          

      </div>
    </div> 

    <div class="col-sm-8 categoryContentDiv" style="margin-left:30.01% !important;padding:0px;margin:0px;margin-top: 2%;">

      <!-- USERS LOOP -->
      <div class="row userContent col-sm-12">
        <?php foreach ($users as $user): ?>
            <div id="<?= $user->id; ?>" class="one-user-div col-sm-6" style="">
                <div class="row">
                  <a href="<?= base_url(); ?>user/<?= $user->username; ?>">
                    <p  class="username"><?= $user->username; ?>
                    <p id="span_<?= $user->id; ?>" class="go-to-profile">Go to Profile</p>
                    </p>
                  </a>
                </div>
                <div class="row">
                  <div class="col-sm-10" style="padding-left:0px;padding-right:0px;">
                    <?php if (isset($user->profile_picture)): ?>
                      <img  class="img-responsive img-thumbnail" src="<?= base_url().$user->profile_picture->source_url;?>">
                    <?php else: ?>
                      <img class="img-responsive img-thumbnail" src="<?= base_url();?>public/images/usernotfound.jpg">
                    <?php endif ?>
                  </div>
                  <div class="col-sm-10" style="padding-left:0px;padding-right:0px;">
                    <!-- <span class="userType"><?= $user->type_name; ?></span> -->
                    <p class="userdesc"><?= $user->bio; ?></p>
                  </div>
                  <div class="col-sm-6 user-social-icons" style="padding-left:0px;padding-right:0px;">
                    <i class="fa fa-facebook-square" aria-hidden="true"></i>
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                    <i class="fa fa-twitter-square" aria-hidden="true"></i>
                  </div>
                  <div class="col-sm-5 pull-right" style="padding-left:0px;padding-right:0px;">
                    <button type="submit" class="btn headerBTN btn-default">Follow</button>
                  </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>




    </div>



    




</div>


</div>







<?php include('footer.php'); ?>











