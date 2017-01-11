<?php include('newheader.php'); ?>

<section class="container" id="section1" style="min-height: 50%;">
    <div class="">
        <h1 class="text-center"><?= $category_name; ?></h1>
        <h2 class="text-center lato animate slideInDown" style="width:90%;margin:0 auto;">
          <small style="line-height: 1.3"><?= $category->description; ?></small>
        </h2>
    </div>
    <a href="#section2">
        <div class="scroll-down bounceInDown animated">
            <span>
                <i class="fa fa-angle-down fa-2x"></i>
            </span>
        </div>
    </a>
</section>

<div class="container content" id="section2">

   <div class="row">
    <div class="col-sm-8 col-xs-12">
      <div class="col-sm-2 col-xs-2">
        <div class="form-group">
          <label class="checkbox-inline"><input type="checkbox" value="">Newest</label>
        </div>
      </div>
      <div class="col-sm-2 col-xs-2">
        <div class="form-group">
          <label class="checkbox-inline"><input type="checkbox" value="">Top Rated</label>
        </div>
      </div>
         <?php if (isset($sub_category) && !empty($sub_category)): ?>
                <?php foreach ($sub_category as $sub): ?>
                  <div class="col-sm-2 col-xs-2">
                      <div class="form-group">
                      <label class="checkbox-inline"><input type="checkbox" value="">
                      <i class="fa fa-<?= $sub->icon; ?>" aria-hidden="true"></i>
                      <?= $sub->name; ?>
                      </label>
                    </div>
                  </div>
                <?php endforeach ?>
         <?php endif ?>
    </div>
    <div class="col-sm-4 col-xs-12 ">
      <div class="col-xs-9 col-sm-8 pull-right">
         <form class="navbar-form" role="search">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search" aria-describedby="basic-addon2">
            <span class="input-group-addon" id="basic-addon2">
                <i class="glyphicon glyphicon-search"></i>
            </span>
          </div>
        </form>
      </div>
    </div>
  </div>




  <div class="row myspacer categoryajaxcontent">
    <?php foreach ($users as $user): ?>
     <?php include('user-modal.php'); ?>
    <?php endforeach ?>
    
  </div>


  <div class="row load-more load-element text-center">
      <input type="hidden" id="category_id" value="<?= $category->id; ?>">
      <input type="hidden" id="min_id" value="<?= $min_id; ?>">
      <input type="hidden" id="x1" value="0">
      <i class="fa fa-spinner fa-spin fa-2x"></i>
  </div>
</div>












<?php include('newfooter.php'); ?>

<script>
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
        $.ajax({
          url: targetURL,
          method: "POST",
          data: { category: category_id , min_id:min_id },
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