<?php include('newheader.php'); ?>

<style type="text/css">
  body{
    background-image:url('<?= base_url(); ?>public/images/bg.png');
    background-size: 10%;
  }
</style>


<div class="col-sm-10 col-sm-offset-1" id="section1" style="background-image: url('<?= base_url() ?>public/media/wallpapers/17.jpeg');background-size: cover;margin-top:6%;padding-top: 10%;padding-bottom: 10%;padding-left:0px;padding-right:0px;">
    
    <div class="category_desc nospace">
        <h1 class="text-center">Search Results For : <?= $search_input; ?></h1>
        <?php if (isset($noResults)): ?>
          <h2 class="text-center lato animate slideInDown" style="width:90%;margin:0 auto;">
            <small style="line-height: 1.3;color:white;">0 Results Found.</small>
          </h2>
        <?php endif ?>
    </div>
</div>

<div class="category_filters col-sm-10 col-sm-offset-1">
  <div class="col-sm-1">
    <a class="a_nostyle" href="">
      <span data-target="<?= base_url(); ?>category/"> all</span>
    </a>
    <img style="margin-left:25%" src="<?= base_url(); ?>public/images/wishbone_crop.png" height="20" width="20">
  </div>
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