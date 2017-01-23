
      <div class="row">
        <div class="col-sm-12">
          <div class="col-sm-1 nopadding">
            <a href="<?= base_url(); ?>user/<?= $user->username; ?>">
              <?php if (isset($user->profile_picture)): ?>
                <img class="user-circle-small img-circle" src="<?= base_url().$user->profile_picture->source_url;?>">
              <?php else: ?>
                <img class="user-circle-small img-circle" src="<?= base_url();?>public/images/usernotfound.jpg">
              <?php endif ?>
              </a>
          </div>
          <div class="col-sm-6 col-xs-4 nopadding">
            <p class="small-line-height bold"><?= $x->title; ?></p>
          </div>
          <div class="col-sm-4 col-xs-4 pull-right">
              <div class="col-sm-6 nopadding heart_div">
                <?php if ($x->like): ?>
                  <button value="<?= $x->id; ?>" id="<?= $x->id; ?>" class="unlikeBTN btn btn-main btn-block headerBTN">
                       <i class="fa fa-heart" aria-hidden="true"></i>
                  </button>
                <?php else: ?>
                  <button value="<?= $x->id; ?>" id="<?= $x->id; ?>" class="likeBTN btn btn-block headerBTN">
                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                  </button>
                <?php endif ?> 
               <!--  <button style="<?= ($x->like)? '' : 'display:none;' ; ?>" value="<?= $x->id; ?>" id="<?= $x->id; ?>" class="unlikeBTN btn btn-main btn-block headerBTN">
                 <i class="fa fa-heart" aria-hidden="true"></i>
                </button> -->
                <!-- <button style="<?= ($x->like)? 'display:none;' : '' ; ?>" value="<?= $x->id; ?>" id="<?= $x->id; ?>" class="likeBTN btn btn-main btn-block headerBTN">
                <i class="fa fa-heart-o" aria-hidden="true"></i>
                </button> -->
              </div>
              <div class="col-sm-6 nopadding likes_div">
                <span class="likes_counter_<?= $x->id;?>"><?= $x->statistics->likes; ?></span>
              </div>
              

               
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-12" style="margin-top: 1%;">
            <div class="col-sm-12 col-xs-3 media-item nopadding">
                <a class="mediaModal" id="<?= $x->id;?>" href="<?= base_url().$x->source_url; ?>" data-title="A random title" data-footer="A custom footer text" data-gallery="example-gallery" >
                <img data-toggle="modal" data-target="#user_media_<?= $x->id;?>" class="img-responsive imgcursor" src="<?= base_url().$x->source_url; ?>">
            </div>
            <?php include('image_modal.php'); ?>
        </div>
      </div>
