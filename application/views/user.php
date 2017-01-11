<?php include('header.php'); ?>

<div class="container col-sm-10 col-sm-offset-1">


  <div class="row myspacer">


    <div class="col-sm-1 col-xs-2">
      <img class="img-responsive img-thumbnail" style="height:100px;width:100px;" src="<?= base_url().$user->profile_picture->source_url; ?>" >
    </div>

    <div class="col-sm-2 col-xs-2 userProfileSecion mainProfileSection">
      <div class="col-sm-10">
         <h2 style="font-size: 150%;"><?= $user->username; ?></h2>
          <p style="text-align: center;font-size: 120%">
            <span><?= $user->first_name; ?></span>
            <span><?= $user->last_name; ?></span>
          </p>
          <p style="text-align: center;font-size: 100%">
            <?= $user->type_name; ?>
          </p>
      </div>
      <div class="col-sm-2">
        <div class="col-sm-12">
          <?php if (isset($social)): ?>
            <?php foreach ($social as $x): ?>
              <a href="<?= $x->link; ?>" target="_blank">
                <i class="fa fa-<?= $x->name;  ?>-square" aria-hidden="true"></i>
              </a>
            <?php endforeach ?>
          <?php endif ?>
        </div>
      </div>
    </div>


    <div class="col-sm-2 col-xs-2 userProfileSecion" id="profile">
      <div class="col-sm-10">
        <p class="category-desc"><?= $user->bio; ?></p>
      </div>
      <div class="col-sm-1">
        <i id="moreContent_profile" data-target="profile" data-action="more" class="cursor hide fa fa-caret-square-o-down" aria-hidden="true"></i>
        <i id="lessContent_profile" data-target="profile" data-action="less" class="cursor hide fa fa-caret-square-o-up" aria-hidden="true"></i>
      </div>
    </div>



    <div class="col-sm-7 col-xs-2 userProfileSecion" id="contact">
      <div class="col-sm-10">
          <p>
            <span><i class="fa fa-bars" aria-hidden="true"></i></span> 
            CONTACT
          </p>
          <div class="row nospacing">
            <div class="row">
              <div class="col-sm-3">
               <div class="col-sm-3 nospacing">
                 <span style="font-size: 100%;"><i class="fa fa-envelope" aria-hidden="true"></i></span>
               </div>
               <div class="col-sm-9 nospacing">
                 <span style="font-size: 80%;word-wrap: break-word;"><?= $user->email; ?></span>
               </div>
            </div>
            <div class="col-sm-3">
               <div class="col-sm-3 nospacing">
                 <span style="font-size: 100%;"><i class="fa fa-globe" aria-hidden="true"></i></span>
               </div>
               <div class="col-sm-9 nospacing">
                 <span style="font-size: 80%;word-wrap: break-word;"><?= $user->website; ?></span>
               </div>
            </div>
            <div class="col-sm-3">
               <div class="col-sm-3 nospacing">
                 <span style="font-size: 100%;"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
               </div>
               <div class="col-sm-9 nospacing">
                 <span style="font-size: 80%;word-wrap: break-word;"><?= $user->address; ?></span>
               </div>
            </div>
            <div class="col-sm-3">
               <div class="col-sm-3 nospacing">
                 <span style="font-size: 100%;"><i class="fa fa-calendar" aria-hidden="true"></i></span>
               </div>
               <div class="col-sm-9 nospacing">
                 <span style="font-size: 80%;word-wrap: break-word;">
                      User Since <?=  date('j-F-y',strtotime($user->creation_date)); ?>
                 </span>
               </div>
            </div>
            </div>

            <div class="row myspacer">
              <?php if (isset($contacts) && is_array($contacts) && !empty($contacts)): ?>
                  <?php foreach ($contacts as $x): ?>
                    <div class="col-sm-3 myspacer">
                       <div class="col-sm-3 nospacing">
                         <span style="font-size: 100%;"><i class="fa fa-<?= $x->icon;?>" aria-hidden="true"></i></span>
                       </div>
                       <div class="col-sm-9 nospacing">
                         <span style="font-size: 80%;word-wrap: break-word;"><?= $x->value; ?></span>
                       </div>
                    </div>
                  <?php endforeach ?>
                <?php endif ?>
            </div>

          </div>
      </div>
      <div class="col-sm-1">
        <i id="moreContent_contact" data-target="contact" data-action="more" class="cursor hide fa fa-caret-square-o-down" aria-hidden="true"></i>
        <i id="lessContent_contact" data-target="contact" data-action="less" class="cursor hide fa fa-caret-square-o-up" aria-hidden="true"></i>
      </div>
    </div>


  </div>


  <div class="row">
    <hr class="colorgraph">
  </div>

  <div class="row myspacer">
    <div class="col-sm-12 col-xs-12">
      <div class="col-xs-9 col-sm-10">
        <div class="inner-addon right-addon">
            <i class="glyphicon glyphicon-search"></i>
            <input type="text" class="form-control" placeholder="Search User Media" />
        </div>
      </div>
      <div class="col-xs-3 col-sm-2">
        <button class="btn btn-primary btn-block headerBTN">Search</button>
      </div>   
    </div>
  </div>

  <div class="row myspacer userMediaContent">
    <?php foreach ($media as $x): ?>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 one-media-div spacer-down">
        <a class="mediaModal" id="<?= $x->id;?>" href="<?= base_url().$x->source_url; ?>" data-title="A random title" data-footer="A custom footer text" data-gallery="example-gallery" >
        <img data-toggle="modal" data-target="#user_media_<?= $x->id;?>" class="img-responsive imgcursor" src="<?= base_url().$x->source_url; ?>">
      </a>
      <div class="col-sm-12 mediaInfo myspacer">
        <h2><?= $x->title; ?></h2>
        <div class="media_buttons">
         
            <div class="col-sm-3">
              <button type="button" id="<?= $x->id; ?>" class=" <?= (isset($x->like) && $x->like)?          'unlikeBTN' : 'likeBTN'; ?> btn btn-default btn-sm">
                <span class="glyphicon glyphicon-thumbs-up"></span>
                <span class="likes_counter_<?= $x->id;?>"><?= $x->statistics->likes; ?></span>
              </button>
            </div>

          <div class=" row col-sm-3 pull-right">
                <span class="glyphicon glyphicon-eye-open"></span>
                <span class="views_counter_<?= $x->id;?>"> <?= $x->statistics->views; ?></span>
          </div>
        </div>
      </div>
    </div>
    
    <?php include('image_modal.php'); ?>

    <?php endforeach ?>
    </div>


  </div> <!-- END OF CONTAINER -->




<?php include('footer.php'); ?>


<script type="text/javascript">

 var mainProfileSectionHeight = $(".mainProfileSection").height();

$(".userProfileSecion").each(function(){

    if($(this).hasClass('mainProfileSection'))
    {
      // alert('main section');
    }
    else
    {
      var height = $(this).height();
      if(height > mainProfileSectionHeight)
      {
        $(this).css('height',mainProfileSectionHeight);
        var id = $(this).attr('id');
        $("#moreContent_"+id).removeClass('hide');
      }
    }

});

$(".cursor").click(function(){

    var target = $(this).attr('data-target');
    var action = $(this).attr('data-action');

    if(action == 'more')
    {
      $("#"+target).css('height','inherit');
      $(this).hide();
      $("#lessContent_"+target).removeClass('hide');
      $("#lessContent_"+target).addClass('show');
      $("#moreContent_"+target).addClass('remove');
      $("#moreContent_"+target).removeClass('show');
    }
    else
    {
      $("#"+target).css('height',mainProfileSectionHeight);
      $(this).hide();
      $("#moreContent_"+target).addClass('show');
      $("#moreContent_"+target).removeClass('hide');
      $("#lessContent_"+target).addClass('hide');
      $("#lessContent_"+target).removeClass('show');
    }

}); 

 var $container = $('.userMediaContent');
  
    $container.imagesLoaded( function(){
      $container.masonry({
        itemSelector : '.one-media-div'
      });

    });
  

</script>








