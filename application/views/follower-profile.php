<?php include('header.php'); ?>

<div class="container col-sm-10 col-sm-offset-1">


  <div class="row myspacer">


    <div class="col-sm-1 col-xs-2">
      <img class="img-responsive img-thumbnail" style="height:80px;width:80px;" src="<?= base_url() ?>public/images/usernotfound.jpg" >
    </div>

    <div class="col-sm-2 col-xs-2 followerProfileSecion">
      <div class="col-sm-10 nopadding">
         <h2 style="text-align: left;"><?= $follower->username; ?></h2>
          <p style="text-align: center;font-size: 100%">
            <!-- <?= $user->type_name; ?> -->
          </p>
      </div>
    </div>


    <div class="col-sm-1 col-xs-2 followerSectionBtn followerProfileSecion">
      <h2 style="font-size: 150%;">Following</h2>
      <h2><small><?= count($following); ?></small></h2>
    </div>

    <div class="col-sm-1 col-xs-2 followerSectionBtn followerProfileSecion">
      <h2 style="font-size: 150%;">Likes</h2>
      <h2><small><?= count($likes); ?></small></h2>
    </div>




  </div>


  <div class="row">
    <hr class="colorgraph">
  </div>


  <div class="row myspacer userMediaContent">
    <?php foreach ($feed as $x): ?>
    <div style="padding:2%;" class="col-sm-4 one-media-div spacer-down">
     
        <div class="row">
          <a class="mediaModal" id="<?= $x->media_id;?>" href="<?= base_url().$x->source_url; ?>" data-title="A random title" data-footer="A custom footer text" data-gallery="example-gallery" >
          <img style="border-radius: 4px;" data-toggle="modal" data-target="#user_media_<?= $x->media_id;?>" class="img-responsive imgcursor" src="<?= base_url().$x->source_url; ?>">
          </a>
        </div>

      <div class="row">
        <div class="col-sm-10 nopadding">
          <h2><small><?= $x->title; ?></small></h2>
        </div>
        <div class="col-sm-2 pull-right nopadding">
          <small><?=  date('j-M-Y',strtotime($x->media_creation_date)); ?></small>
        </div>
        
      </div>

      <div class="row">
        <div class="col-sm-1 nopadding">
          <a href="<?= base_url(); ?>user/<?= $x->username; ?>">
            <img style="border-radius: 50%;width:34px !important;height:34px !important;" class="img-responsive img-circle" src="<?= base_url(). ( (isset($user->profile_picture))? $user->profile_picture->source_url : $x->user_source_url) ; ?>" >
          </a>
        </div>
        <div class="col-sm-2 nopadding" style="text-align: left;">
          <a href="<?= base_url(); ?>user/<?= $x->username; ?>">
            <p style="line-height: 1;" class="nopadding nomargin"><small><?= $x->username; ?></small></p>
            <p class="nopadding nomargin"><small><?= $x->type_name; ?></small></p>
          </a>
        </div>
        <div class="col-sm-4">
           <div class="media_buttons">
            <div class="col-sm-3">
              <button type="button" id="<?= $x->media_id; ?>" class=" <?= (isset($x->like) && $x->like)?          'unlikeBTN' : 'likeBTN'; ?> btn btn-default btn-sm">
                <span class="glyphicon glyphicon-thumbs-up"></span>
                <span class="likes_counter_<?= $x->media_id;?>"><?= $x->statistics->likes; ?></span>
              </button>
            </div>

            <div class=" row col-sm-3 pull-right">
                  <span class="glyphicon glyphicon-eye-open"></span>
                  <span class="views_counter_<?= $x->media_id;?>"> <?= $x->statistics->views; ?></span>
            </div>
        </div>
        </div>
      </div>
    </div>
    <?php $x->id = $x->media_id; ?>
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








