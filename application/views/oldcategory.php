<?php include('header.php'); ?>

<div class="container col-sm-10 col-sm-offset-1" style="height:100%;padding-bottom:0px;color:black;background-color: white;">

  <div class="row">

    <div class="col-sm-2 affix" style="z-index: 1 !important; height:100vh;padding: 0px;margin:0px;background-color: #1abc9c;">
      <div class="bannerDiv autosize" style="color:white;background-color: #1abc9c;">
          <h2 style="border-bottom:2px solid;margin-top: 2%;"><?= $category_name; ?></h2>
          
          <div class="row" style="margin-top: 10%;padding:2%;" >
            <div class="col-sm-10 col-sm-offset-1">
              <p class="category-desc">
                <?= $category->description; ?>
              </p>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
              <hr>
            </div>
          </div>

          <div class="row">
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
          </div>

           <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
              <hr>
            </div>
          </div>


      </div>
    </div> 

    <div class="col-sm-9 content categoryContentDiv" style="margin-left:20.01% !important;padding:0px;margin:0px;margin-top: 2%;">
      <div class="form-group">
          <div class="col-sm-12" style="padding-right:0px;">
            <div class="inner-addon right-addon">
                <i class="glyphicon glyphicon-search"></i>
                <input type="text" class="form-control" placeholder="Search For a User" />
            </div>
          </div>
          <div class="form-group col-sm-4 pull-right" style="padding:10px;">
            <div class="row">
              <div class="col-sm-2">
                <label for="sel1">Sort:</label>
              </div>
              <div class="col-sm-10">
                 <label class="checkbox-inline"><input type="checkbox" value="">Newest</label>
                 <label class="checkbox-inline"><input type="checkbox" value="">Top Rated</label>
              </div>
            </div>
          </div>
      </div>

     

      <!-- USERS LOOP -->
      <div class="row userContent col-sm-12">
        <?php foreach ($users as $user): ?>
            <div id="<?= $user->user_id; ?>" class="one-user-div col-sm-6" style="">
                <div class="row" style="height:100px;">
                  <div class="col-sm-11 col-sm-offset-1" style="padding-left: 0px;padding-top: 3%;">
                    <div class="row" style="">
                      <div class="col-sm-2" style="padding-left:0px !important;padding-right:0px;">
                        <a href="<?= base_url(); ?>user/<?= $user->username; ?>">
                          <?php if (isset($user->profile_picture)): ?>
                          <img  style="height:75px;width:75px;" class="img-responsive img-circle" src="<?= base_url().$user->profile_picture->source_url;?>">
                          <?php else: ?>
                            <img class="img-responsive img-circle" src="<?= base_url();?>public/images/usernotfound.jpg">
                          <?php endif ?>
                        </a>
                      </div>
                      <div class="col-sm-10" style="padding-left:4%;padding-right:0px;">
                        <a href="<?= base_url(); ?>user/<?= $user->username; ?>">
                          <p  class="username"><?= $user->username; ?></p>
                          <p class="userType"><?= $user->type_name; ?></p>
                        </a>
                      </div>
                      <div class="col-sm-10">
                        <div class="col-sm-5 col-sm-offset-6">
                            <button style="<?= ($user->relation)? '' : 'display:none;' ; ?>" value="<?= $user->user_id; ?>" id="unfollow_<?= $user->user_id; ?>" class="unfollowBTN btn btn-primary btn-block headerBTN">
                             <i class="fa fa-check-square-o" aria-hidden="true"></i>
                              Following
                            </button>
                             <button style="<?= ($user->relation)? 'display:none;' : '' ; ?>" value="<?= $user->user_id; ?>" id="follow_<?= $user->user_id; ?>" class="followBTN btn btn-primary btn-block headerBTN">
                           <i class="fa fa-square-o" aria-hidden="true"></i>
                            Follow
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                   <div class="col-sm-11 col-sm-offset-1">
                    <div class="row">
                      <div class="col-sm-12" style="padding-left:0px;padding-right:0px;">
                          <hr>
                          <?php foreach ($user->media as $x): ?>
                          <div class="col-sm-3" style="padding:0px;margin:0px;height:100px;">
                              <img style="width:97%;height:97%;" class="img-responsive" style="" src="<?= base_url().$x->source_url;?>">
                          </div>
                          <?php endforeach ?>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>




    </div>



    




</div>


</div>







<?php include('footer.php'); ?>








