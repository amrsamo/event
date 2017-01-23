<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 one-user-div spacer-down">
      <div class="row">
        <div class="imagediv col-sm-1 col-xs-3" style="padding-right: 0px;padding-left: 0px;margin-left: 15px;">
          <a href="<?= base_url(); ?>user/<?= $user->username; ?>">
            <?php if (isset($user->profile_picture)): ?>
              <img class="user-circle-small img-circle" src="<?= base_url().$user->profile_picture->source_url;?>">
            <?php else: ?>
              <img class="user-circle-small img-circle" src="<?= base_url();?>public/images/usernotfound.jpg">
            <?php endif ?>
          </a>
        </div>
        <div class="col-sm-6 col-xs-4 nopadding">
          <a class="myanchor" href="<?= base_url(); ?>user/<?= $user->username; ?>">
            <p class="small-line-height bold nopadding nomargin"><?= $user->username; ?></p>
            <p class="small-line-height nopadding"><small><?= $user->type_name; ?></small></p>
          </a>
        </div>
        <div class="col-sm-4 col-xs-4 pull-right">
            <button style="<?= ($user->relation)? '' : 'display:none;' ; ?>" value="<?= $user->user_id; ?>" id="unfollow_<?= $user->user_id; ?>" class="unfollowBTN btn btn-main btn-block headerBTN">
             <!-- <i class="fa fa-check-square-o" aria-hidden="true"></i> -->
              Following
            </button>
             <button style="<?= ($user->relation)? 'display:none;' : '' ; ?>" value="<?= $user->user_id; ?>" id="follow_<?= $user->user_id; ?>" class="followBTN btn btn-block headerBTN">
            <!-- <i class="fa fa-square-o" aria-hidden="true"></i> -->
            Follow
            </button>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12 myspacer" style="margin-top: 2%;">
            <?php foreach ($user->media as $x): ?>
            <div class="col-sm-6 col-xs-3 user-media">
                <a class="mediaModal" id="<?= $x->id;?>" href="<?= base_url().$x->source_url; ?>" data-title="A random title" data-footer="A custom footer text" data-gallery="example-gallery" >
                <img data-toggle="modal" data-target="#user_media_<?= $x->id;?>" class="img-responsive imgcursor" src="<?= base_url().$x->source_url; ?>">
            </div>
            <?php include('image_modal.php'); ?>
            <?php endforeach ?>
        </div>
      </div>
    </div>