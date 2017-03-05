<!-- Modal -->
<div class="modal  fade" id="user_media_<?= $x->id;?>" role="dialog">
  <div class="modal-dialog">
  
    <!-- Modal content-->
    <div class="modal-content">
      <!-- <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">
          <div class="row">
            <div class="col-sm-12">
              <div>
                <a href="javascript:void(0)" style="text-decoration: none;cursor:default">
                <?= $x->title; ?>
                </a>
              </div>
              
             
            </div>
          </div>
        </h4>
      </div> -->
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-12">
            <img class="image-modal img-responsive" src="<?= base_url().$x->source_url; ?>">
          </div>
        </div>
        <div class="row modal-hover nospace">
           <div class="col-sm-1">
             <!-- <img class="img-responsive img-circle" src="<?= base_url().$user->profile_picture->source_url; ?>"> -->
           </div>
           <div class="col-sm-8 nospace">
             <h2 class="nospace"><?= $x->title; ?></h2>
             <p class="nospace" ><?= $x->description; ?></p>
           </div>
           <div class="col-sm-2 nospace pull-right">
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
        </div>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div> -->
    </div>
    
  </div>
</div> <!-- END MODAL -->