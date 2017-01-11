<?php include('header.php'); ?>

<div class="container col-sm-10 col-sm-offset-1">

  <div class="row">
    <div class="categoryBannerDiv col-sm-12">
      <h2><?= $category_name; ?></h2>
      <hr class="colorgraph">
    </div>
  </div>

  <div class="row myspacer">
    <div class="col-sm-8 col-xs-12">
      <div class="col-sm-2 col-xs-2">
        <div class="form-group">
          <label class="checkbox-inline"><input type="checkbox" value="">Newest</label>
        </div>
      </div>
      <div class="col-sm-2 col-xs-2">
        <div class="form-group">
          <label class="checkbox-inline"><input type="checkbox" value="">Top Rated</label>
        </div>
      </div>
         <?php if (isset($sub_category) && !empty($sub_category)): ?>
                <?php foreach ($sub_category as $sub): ?>
                  <div class="col-sm-2 col-xs-2">
                      <div class="form-group">
                      <label class="checkbox-inline"><input type="checkbox" value="">
                      <i class="fa fa-<?= $sub->icon; ?>" aria-hidden="true"></i>
                      <?= $sub->name; ?>
                      </label>
                    </div>
                  </div>
                <?php endforeach ?>
         <?php endif ?>
    </div>
    <div class="col-sm-4 col-xs-12">
      <div class="col-xs-9 col-sm-8">
        <div class="inner-addon right-addon">
            <i class="glyphicon glyphicon-search"></i>
            <input type="text" class="form-control" placeholder="Search For a User" />
        </div>
      </div>
      <div class="col-xs-3 col-sm-4">
        <button class="btn btn-primary btn-block headerBTN">Search</button>
      </div>
        
    </div>
  </div>

  <div class="row myspacer">
    <?php foreach ($users as $user): ?>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 one-user-div spacer-down">
      <div class="row">
        <div class="col-sm-3 col-xs-3">
          <a href="<?= base_url(); ?>user/<?= $user->username; ?>">
            <?php if (isset($user->profile_picture)): ?>
              <img class="img-responsive img-circle" src="<?= base_url().$user->profile_picture->source_url;?>">
            <?php else: ?>
              <img class="img-responsive img-circle" src="<?= base_url();?>public/images/usernotfound.jpg">
            <?php endif ?>
          </a>
        </div>
        <div class="col-sm-4 col-xs-4">
          <a href="<?= base_url(); ?>user/<?= $user->username; ?>">
            <p  class="username"><?= $user->username; ?></p>
            <p class="userType"><?= $user->type_name; ?></p>
          </a>
        </div>
        <div class="col-sm-4 col-xs-4">
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
      <div class="row col-sm-11 col-sm-offset-1 myspacer">
        <?php foreach ($user->media as $x): ?>
        <div class="col-sm-3 col-xs-3 user-media">
            <a class="mediaModal" id="<?= $x->id;?>" href="<?= base_url().$x->source_url; ?>" data-title="A random title" data-footer="A custom footer text" data-gallery="example-gallery" >
            <img data-toggle="modal" data-target="#user_media_<?= $x->id;?>" class="img-responsive imgcursor" src="<?= base_url().$x->source_url; ?>">
        </div>
        <?php include('image_modal.php'); ?>
        <?php endforeach ?>
      </div>
    </div>
    <?php endforeach ?>

  </div>


</div>



<?php include('footer.php'); ?>








