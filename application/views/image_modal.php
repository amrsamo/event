<!-- Modal -->
<div class="modal  fade" id="user_media_<?= $x->id;?>" role="dialog">
  <div class="modal-dialog">
  
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
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
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-12">
            <img class="image-modal img-responsive" src="<?= base_url().$x->source_url; ?>">
          </div>
        </div>
        <div class="row">
           <div class="col-sm-12">
             <p class="userdesc"><?= $x->description; ?></p>
           </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
    
  </div>
</div> <!-- END MODAL -->