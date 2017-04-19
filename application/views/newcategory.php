<?php include('newheader.php'); ?>

<style type="text/css">
  body{
    background-image:url('<?= base_url(); ?>public/images/bg.png');
    background-size: 10%;
  }
</style>


<div class="col-sm-10 col-sm-offset-1" id="section1" style="background-image: url('<?= base_url().$category->image_url ?>');background-size: cover;margin-top:6%;padding-top: 10%;padding-bottom: 10%;padding-left:0px;padding-right:0px;">
    
    <div class="category_desc nospace">
        <h1 class="text-center"><?= $category_name; ?></h1>
        <h2 class="text-center lato animate slideInDown" style="width:90%;margin:0 auto;">
          <small style="line-height: 1.3;color:white;"><?= $category->description; ?></small>
        </h2>
    </div>
</div>

<div class="category_filters col-sm-10 col-sm-offset-1">
  <div class="col-sm-1 col-xs-2">
    <a class="a_nostyle" href="<?= base_url(); ?>category/<?= rawurlencode($category->name) ?>">
      <span data-target="<?= base_url(); ?>category/"> all</span>
    </a>
    <img style="margin-left:25%" src="<?= base_url(); ?>public/images/wishbone_crop.png" height="20" width="20">
  </div>
  <?php if (isset($sub_category) && !empty($sub_category)): ?>
        <?php if (count($sub_category) > 4): ?>
          <?php foreach ($sub_category as $sub): ?>
            <div class="col-sm-2 col-xs-3 fivesub sub_category_div">
              <a class="a_nostyle" href="<?= base_url(); ?>category/<?= rawurlencode($category->name) ?>?filter=<?= rawurlencode($sub->name); ?>">
                  <span data-target="<?= base_url(); ?>category/"> . <?= $sub->name; ?></span>
                </a>
            </div>
          <?php endforeach ?>
        <?php else: ?>
          <?php foreach ($sub_category as $sub): ?>
            <div class="col-sm-2 col-xs-3 sub_category_div">
             <a class="a_nostyle" href="<?= base_url(); ?>category/<?= rawurlencode($category->name) ?>?filter=<?= rawurlencode($sub->name); ?>">
                  <span data-target="<?= base_url(); ?>category/"> . <?= $sub->name; ?></span>
                </a>
            </div>
          <?php endforeach ?>
        <?php endif ?>
        
 <?php endif ?>
<!--  <div class="col-sm-1 nospace pull-right" style="margin-right:%;">
     <div class="search">
        <input type="text" class="btn_header" placeholder="search users">
        <span class="line"></span>
        <span class="circle"></span>
      </div>
  </div> -->
</div>

<div class="category_users col-sm-10 col-sm-offset-1 categoryajaxcontent">

 
  <?php foreach ($users as $user): ?>
      <?php 
        if(empty($user->media))
          continue;
       ?>
     <?php include('user-modal.php'); ?>
  <?php endforeach ?>




</div>

<div class="row col-sm-10 col-sm-offset-1 load-more load-element text-center">
      <input type="hidden" id="category_id" value="<?= $category->id; ?>">
      <?php if (isset($min_id)): ?>
        <input type="hidden" id="min_id" value="<?= $min_id; ?>">
      <?php endif ?>
      <input type="hidden" id="x1" value="0">
      <!-- <i class="fa fa-spinner fa-spin fa-2x"></i> -->
  </div>

<div class="clearfix"></div>







<?php if (isset($sub_category_filter)): ?>
  <input type="hidden" id="sub_category_filter" value="<?= $sub_category_filter; ?>">
<?php else: ?>
  <input type="hidden" id="sub_category_filter" value="none">
<?php endif ?>







<?php include('newfooter.php'); ?>

<script>


$(".mediaModal").click(function(){

  var id = $(this).attr('id');
  var element = $("#user_media_"+id).html();
  // alert(element);
  // $("#user_media_"+id).modal('show'); 
  $("#user_media_"+id).css('display','block');

});


$.fn.is_on_screen = function(){
    var win = $(window);
    var viewport = {
        top : win.scrollTop(),
        left : win.scrollLeft()
    };
    viewport.right = viewport.left + win.width();
    viewport.bottom = viewport.top + win.height();
 
    var bounds = this.offset();
    bounds.right = bounds.left + this.outerWidth();
    bounds.bottom = bounds.top + this.outerHeight();
 
    return (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));
};
 
 var start = 1;

$(window).scroll(function(){ // bind window scroll event
  if( $('.load-more').length > 0 ) { // if target element exists in DOM
    if( $('.load-more').is_on_screen() ) { // if target element is visible on screen after DOM loaded
        start--;
        // To Prevent multiple entries
        if(start < 0)
          return;
        

        $(".load-more").removeClass('.load-more');
        var category_id = $("#category_id").val();
        var targetURL   = $("#base_url").val()+"morecategorusers";
        var min_id       = $("#min_id").val();
        var sub_category_filter = $("#sub_category_filter").val();
        
        $.ajax({
          url: targetURL,
          method: "POST",
          data: { category: category_id , min_id:min_id , sub_category_filter:sub_category_filter },
          async:false, 
          success: function(result)
              { 

                // var result = $.parseJSON(result);
              try {
                      var result = jQuery.parseJSON(result);
                  } catch(error) {
                      $(".load-more").hide();
                      return;
                  }
                var min = parseInt(result[1]);
                setTimeout(function(){
                    $(".categoryajaxcontent").append(result[0]).slideDown('slow');
                    updateStart(min);
                },2000);
                   
              }
          });



    }
  }
});



function updateStart(min)
{
  $("#min_id").val(min);
  start = 1;
}

</script>
  
</script>