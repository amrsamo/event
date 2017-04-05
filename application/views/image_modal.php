<!-- Modal -->
<div class="imageModal modal fade" id="user_media_<?= $x->id;?>" role="dialog">
  <div class="modal-dialog">
  
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <div class="row">
          <div class="col-sm-10 col-sm-offset-1">
            <div class="col-sm-4 text-center">
              <a href="">
                <p><?= $user->username; ?></p>
                <div class="col-sm-2 col-sm-offset-5">
                  <img class="img-responsive img-circle" src="<?= base_url().$user->profile_picture->source_url; ?>">
                </div>
              </a>
            </div>
            <div class="col-sm-2">
              <!-- <p>Like</p> -->
              <?php if ($x->like): ?>
                    <div value="<?= $x->id; ?>" id="<?= $x->id; ?>" class="col-sm-2 heart_div img-responsive like unlikeBTN">
                      <!-- <p><?= $x->statistics->likes; ?></p> -->
                    </div>
                    <p><?= $x->statistics->likes; ?></p>
                <?php else: ?>
                    <div value="<?= $x->id; ?>" id="<?= $x->id; ?>" class="col-sm-2 heart_div img-responsive unlike likeBTN">
                      <!-- <p><?= $x->statistics->likes; ?></p> -->
                    </div>
                    <p style="clear:both;"><?= $x->statistics->likes; ?></p>
                <?php endif ?>
            </div>

             <div class="col-sm-2">
              <!-- <p>Views</p> -->
              <div class="col-sm-4">
                <i style="font-size: 140%;" class="fa  fa-eye" aria-hidden="true"></i>
                <p>120</p>
              </div>
            </div>
            <div class="col-sm-2">
              <h2><a href="javascript:void(0);" data-dismiss="modal">&times;Close</a></h2>
            </div>

          </div>
        </div>
      </div>
      <div class="modal-body">
      <!-- <div class="row modal-hover nospace">
           
           <div class="col-sm-8 nospace">
             <h2 class="nospace"><?= $x->title; ?></h2>
             <p class="nospace" ><?= $x->description; ?></p>
           </div>
           <div class="col-sm-1 nospace pull-right">
             <div class="single_media_div_info">
                <?php if ($x->like): ?>
                    <div value="<?= $x->id; ?>" id="<?= $x->id; ?>" class="heart_div img-responsive like unlikeBTN">
                      <p><?= $x->statistics->likes; ?></p>
                    </div>
                <?php else: ?>
                    <div value="<?= $x->id; ?>" id="<?= $x->id; ?>" class="heart_div img-responsive unlike likeBTN">
                      <p><?= $x->statistics->likes; ?></p>
                    </div>
                <?php endif ?> 
              </div>
           </div>
        </div> -->
        <div class="row">
          <div class="col-sm-12">
                <img style="display: block;margin:0 auto;width:auto;" src="<?= base_url().$x->source_url; ?>">
          </div>
        </div>
        
      </div>
    </div>
    
  </div>
</div> <!-- END MODAL -->



