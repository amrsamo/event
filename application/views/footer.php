

<div style="clear: both;"></div>
<!-- Footer Starts -->
<div class="footer text-center" style="">
<p style="text-align: center;"class="wowload flipInX"><a href="#"><i class="fa fa-facebook fa-2x"></i></a> <a href="#"><i class="fa fa-instagram fa-2x"></i></a> <a href="#"><i class="fa fa-twitter fa-2x"></i></a> <a href="#"><i class="fa fa-flickr fa-2x"></i></a> </p>
Copyright 2016 Eventopic. All rights reserved.
</div>
<!-- # Footer Ends -->
<!-- <a href="#home" class="gototop "><i class="fa fa-angle-up  fa-3x"></i></a> -->




<!-- Modal -->
<div id="signUpPopUp" class="modal fade" role="dialog">
  <div class="modal-dialog" style="border:none;">
    <!-- Modal content-->
    <div class="modal-content" style="border:none;">
      <div class="modal-body" style="border:none;">
        <div class="col-xs-12 col-sm-10 col-md-10 col-sm-offset-1 col-md-offset-1">
    <form role="form" method="post" action="<?= base_url(); ?>signup" >
      <h2>Please Sign Up..<small>and access all our cool features</small></h2>
      <hr class="colorgraph">
      <div class="form-group">
        <input type="email" name="email" value="<?= ( isset($input)? $input['email'] : (isset($mail)? $mail : '') );?>" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="4" required>
      </div>
      <hr class="colorgraph">
      <div class="row">
        <div class="col-xs-12 col-md-6 col-md-offset-3">
        <input type="submit" name="register" value="Register Now" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
      </div>
    </form>
  </div>
      </div>
      <div class="modal-footer" style="border:none;">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>







<!-- jquery -->
<script src="<?= base_url() ?>public/personal_template/assets/jquery.js"></script>



<!-- wow script -->
<script src="<?= base_url() ?>public/personal_template/assets/wow/wow.min.js"></script>


<!-- boostrap -->
<script src="<?= base_url() ?>public/personal_template/assets/bootstrap/js/bootstrap.js" type="text/javascript" ></script>

<!-- jquery mobile -->
<script src="<?= base_url() ?>public/personal_template/assets/mobile/touchSwipe.min.js"></script>
<script src="<?= base_url() ?>public/personal_template/assets/respond/respond.js"></script>

<!-- gallery -->
<script src="<?= base_url() ?>public/personal_template/assets/gallery/jquery.blueimp-gallery.min.js"></script>




<!-- custom script -->
<script src="<?= base_url() ?>public/personal_template/assets/script.js"></script>
<script src="<?= base_url() ?>public/personal_template/assets/jquery.masonry.min.js"></script>
<script src="<?= base_url() ?>public/js/front_js.js"></script>
<script src="<?= base_url() ?>public/js/jquery.filterizr.js"></script>
<script src="<?= base_url() ?>public/js/controls.js"></script>
<script src="<?= base_url() ?>public/js/ekko-lightbox.js"></script>


<script type="text/javascript">
	
$(".userprofile_inner").hover(function(){
	$(".userprofile .imagecaption").css('color','black');
});


$(document).ready(function () {
    var navBarHeight = $(".navbar").height();
    var fixedBannerHeight = $(".fixedbanner").height();
    var containerWidth = $(".container").width();

    $(".fixedbanner").css('width',containerWidth);
    $(".container").css('margin-top',navBarHeight) ;
    $(".contentPostBanner").css('margin-top',navBarHeight+fixedBannerHeight);
});






</script>



</body>
</html>