<?php include('header.php'); ?>

<div class="container col-sm-10 col-sm-offset-1" style=" padding:1%;padding-top: 0px;padding-bottom:0px;color:black;background-color: white;">

  <div class="row" style="">

    <div class="col-sm-2 affix" style="z-index: 1 !important;height:100vh;padding: 0px;margin:0px;background-color: #1abc9c;">
      <div class="bannerDiv autosize" style="color:white;background-color: #1abc9c">
          <div class="row">
            <div class="col-sm-12">
                <h2 style="font-size:1.5em;"><?= $user->username; ?></h2>
                <p style="text-align: center;font-size: 1em">
                  <span><?= $user->first_name; ?></span>
                  <span><?= $user->last_name; ?></span>
                </p>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
              <img class="img-responsive img-thumbnail" src="<?= base_url().$user->profile_picture->source_url; ?>" >
            </div>
          </div>

          <div class="row" style="" >
            <div class="col-sm-10 col-sm-offset-1">
              <p class="category-desc">
                <?= $user->bio; ?>
              </p>
            </div>
          </div>

         
          <div class="row">
            <div class="col-sm-10 col-sm-offset-1" style="font-size: 0.8em;">
              <p><b>
                     <span><i class="fa fa-bars" aria-hidden="true"></i></span> 
                    INFO
              </b></p>
              <div class="row sub-category-icon-text" style="margin-bottom: 5%;">
                <div class="col-sm-1">
                  <span><i class="fa fa-envelope" aria-hidden="true"></i></span>
                </div>
                <div class="col-sm-10" style="text-align: left;">
                  <span><?= $user->email; ?></span>
                </div>
              </div>
              <div class="row sub-category-icon-text" style="margin-bottom: 5%;">
                <div class="col-sm-1">
                  <span><i class="fa fa-globe" aria-hidden="true"></i></span>
                </div>
                <div class="col-sm-10" style="text-align: left;">
                  <span><?= $user->website; ?></span>
                </div>
              </div>
              <div class="row sub-category-icon-text" style="margin-bottom: 5%;">
                <div class="col-sm-1">
                  <span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                </div>
                <div class="col-sm-10" style="text-align: left;">
                  <span><?= $user->address; ?></span>
                </div>
              </div>
              <div class="row" style="margin-top: 10%;">
                
              </div>
              <p><b>
                     <span><i class="fa fa-bars" aria-hidden="true"></i></span> 
                    CONTACT
              </b></p>
              <?php if (isset($contacts) && is_array($contacts) && !empty($contacts)): ?>
              <?php foreach ($contacts as $x): ?>
                <div class="row sub-category-icon-text" style="margin-top: 3%;">
                  <div class="col-sm-1">
                    <span><i class="fa fa-<?= $x->icon;?>" aria-hidden="true"></i></span>
                  </div>
                  <div class="col-sm-10" style="text-align: left;">
                    <span style="letter-spacing: 2px;"><?= $x->value; ?></span>
                  </div>
                </div>
                <!-- <p class="sub-category-icon-text">
                    <span><i class="fa fa-<?= $x->icon;?>" aria-hidden="true"></i></span>
                    <span style="letter-spacing: 2px;"><?= $x->value; ?></span>
                </p> -->
              <?php endforeach ?>
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

    <div class="col-sm-9 content userContentDiv" style="margin-left:20% !important; padding:0px;margin:0px;margin-top: 2%;">
      <div class="form-group">
          <div class="col-sm-12" style="padding-right:0px;">
            <div class="inner-addon right-addon">
                <i class="glyphicon glyphicon-search"></i>
                <input type="text" class="form-control" placeholder="Search Media" />
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

      <div class="col-sm-12" style="margin:0px;padding:0px;">
        <hr style="margin:0px;padding:0px">
      </div>

      <!-- USERS LOOP -->
      <div class="row userMediaContent col-sm-12" style="padding:0px;margin:0px;">
        <?php foreach ($media as $x): ?>
            <div id="<?= $user->user_id; ?>" class="one-media-div col-sm-3 col-md-3 col-lg-3 col-xs-12" style="padding-bottom:0.1%;">
                <div class="row">
                  <div class="col-sm-12" style="padding:0px;margin:2px;margin-top:0px;">
                        <a href="<?= base_url().$x->source_url; ?>" data-title="A random title" data-footer="A custom footer text" data-gallery="example-gallery" >
                          <img style="width:100%;border-radius: 5px;" data-toggle="modal" data-target="#user_media_<?= $x->id;?>" class="img-responsive imgcursor" src="<?= base_url().$x->source_url; ?>">
                        </a>
                        <div class="col-sm-10 col-sm-offset-1">
                          <div class="row">
                            <p>
                              <?= $x->title; ?>
                            </p>
                          </div>
                          <div class="row">
                             <div class="col-sm-2">
                               <button>
                                 <span style="background-color:#ecf0f1;font-size: 1.5em;">
                                  <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                                </span>

                               </button> 
                             </div> 
                          </div>
                         
                        </div>
                  </div>
                      <!-- Modal -->
                      <div class="modal fade" id="user_media_<?= $x->id;?>" role="dialog">
                        <div class="modal-dialog">
                        
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">
                                <div class="row">
                                  <div class="col-sm-2" style="margin:0px;">
                                    <img style="height:;" class="img-responsive img-circle" src="<?= base_url().$user->profile_picture->source_url; ?>" >
                                  </div>
                                  <div class="col-sm-10" style="margin:0px;padding:0px;">
                                    <div>
                                      <a href="javascript:void(0)" style="text-decoration: none;cursor:default">
                                      <h2 style="font-family: 'Comfortaa', cursive !important"><?= $user->username; ?></h2>
                                      </a>
                                    </div>
                                    <div>
                                      <p style="font-family: 'Comfortaa', cursive !important;text-align: left;" class="userType"><?= $x->title; ?></p>
                                    </div>
                                    <div>
                                      <span style="font-size:0.7em;font-family: 'Comfortaa', cursive !important;text-align: left;">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        Egypt, Cairo
                                      </span>

                                      <span style="font-size:0.7em;font-family: 'Comfortaa', cursive !important;text-align: left;margin-left: 2%;">
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                        <?=  date('j-F-y',strtotime($x->creation_date)); ?>
                                      </span>
                                    </div>
                                  </div>
                                </div>
                              </h4>
                            </div>
                            <div class="modal-body">
                              <div class="row">
                                <div class="col-sm-10 col-sm-offset-1">
                                  <img class="img-responsive" src="<?= base_url().$x->source_url; ?>">
                                </div>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <div class="row">
                                 <p class="userdesc"><?= $x->description; ?></p>
                              </div>
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                          
                        </div>
                      </div> <!-- END MODAL -->
                  
                </div>
            </div>
        <?php endforeach ?>
    </div>



</div>
</div>


</div>



<div style=""></div>



<?php include('footer.php'); ?>


<script type="text/javascript">

 var $container = $('.userMediaContent');
  
    $container.imagesLoaded( function(){
      $container.masonry({
        itemSelector : '.one-media-div'
      });

    });
  

//    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
//     event.preventDefault();
//     $(this).ekkoLightbox();
// });

</script>








