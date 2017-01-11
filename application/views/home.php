<?php include('header.php'); ?>

<style type="text/css">



.imagecaption {
        width:60%;
        top:0;
        right:0;
        position: absolute;
        background-color: rgba(255,255,255,0.9);
        text-align: center;
        /*font:300 1em Josefin Sans,Arial,Helvetica !important;*/
}

.imagecaption h4{
  margin:0px;
  padding:3%;
}
</style>



<div class="mySection">
  <div class="mybanner col-sm-12">
    <div class="featuredlogo col-sm-4 col-sm-offset-5 col-md-4">
      <img style="width:200px;height:200px;" src="<?= base_url() ?>public/personal_template/images/logo circle green.png" class="img-circle profile">
    </div>
    <div class="col-sm-6 col-sm-offset-3">
      <h2 class="banner_header">Your Personal Event Planner</h2>
    </div>
  </div>
</div>


<!-- <div class="banner" style="background-color: #1abc9c;height:600px;background-size:;">
          <div class="caption">
            <div class="caption-wrapper">
              <div class="caption-info">              
                <img style="width:200px;height:200px;" src="<?= base_url() ?>public/personal_template/images/logo circle green.png" class="img-circle profile">
                <h1 style="margin-top:2%;color:black;font-size:3em;" class="animated bounceInUp">Your Personal Event Planner</h1>
              </div>
            </div>
          </div>
</div> -->




<section class="mySection" id="categories">
<!-- /title banner -->
<div class="col-sm-12 bannerDiv">
  <h2>Categories</h2>
  <div class="myarrow"></div>
  <!-- <h2><i class="fa fa-arrow-down" aria-hidden="true"></i></h2> -->
</div>
<div class="grid col-sm-8 col-sm-offset-2" style="padding:0px;color:black;background-color: white;">
  <?php foreach ($categories as $x): ?>
  <div class="col-sm-4" style="padding-left:2px;padding-right:2px;">
    <div>
      <figure class="effect-oscar  wowload fadeInUp" style="width:100%;">
      <?php if ($x->id >= 7): ?>
        <img class="img-responsive" style="height:300px;width:350px;" src="<?= base_url().$x->image_url ?>" alt="img01"/>
      <?php else: ?>
        <img class="img-responsive" style="height:300px;width:350px;padding-bottom:2%;" src="<?= base_url().$x->image_url ?>" alt="img01"/>
      <?php endif ?>
      
        <figcaption style="padding-top:35%;">
                <p style="text-align: center;"><?= $x->info; ?><br>
                <a href="<?= base_url().'category/'.rawurlencode($x->name); ?>" title="<?= $x->name; ?>" style="text-decoration:none;border:none;">
                  <button style="margin-top:5%;" type="button" class="btn btn-default bottomaligned">Check it out</button>
                </a>
            </figcaption>
      </figure>
      <!-- <img class="img-responsive" style="height:300px;width:350px;margin-bottom:2%;" src="<?= base_url().$x->image_url ?>" alt="img01"/> -->
      <div class="imagecaption">
          <h4 style="font-size:1.2em">
            <?= $x->name; ?>
          </h4>
      </div>
    </div>
  </div>
  <?php endforeach ?> 
</div>
</section>







<section class="mySection" id="about">
  <div class="col-sm-12 bannerDiv">
  <h2>About</h2>
  <div class="myarrow" style="left: 51.5%;"></div>
  <!-- <h2><i class="fa fa-arrow-down" aria-hidden="true"></i></h2> -->
</div>
<div class="col-sm-8 col-sm-offset-2" style="padding-top:7%;padding-bottom:7%;color:black;background-color: white;">
    <div class="row" style="padding-top:20px;">
        <div class="col-sm-4" style="text-align: center;">
          <p style="font-size:1.4em;text-align: center;">FOLLOWER</p>
          <img class="col-sm-6 col-sm-offset-3" src="<?= base_url();?>public/media/icons/follower.png">
          <!-- <i class="fa fa-users fa-5x" aria-hidden="true"></i> -->
          <p class="about_desc col-sm-12" style="font-size:1.2em;color:#777">
            If you like to follow the scene in Egypt and what's trending regarding the events, <a href="">Eventopic</a> can get you all the information you need in one place. 
          </p>
        </div>
        <div class="col-sm-4" style="text-align: center;">
          <p style="font-size:1.4em;text-align: center;">TALENT</p>
          <img class=" col-sm-6 col-sm-offset-3" src="<?= base_url();?>public/media/icons/talent.png">
          <!-- <i class="fa fa-asterisk fa-5x" aria-hidden="true"></i> -->
          <p class="about_desc col-sm-12" style="font-size:1.2em;color:#777">
            Add your portfolio and show your talent on <a href="">Eventopic</a>, The one place that has it all ;) 
          </p>
        </div>
        <div class="col-sm-4" style="text-align: center;">
          <p style="font-size:1.4em;text-align: center;">VENUE</p>
          <img class=" col-sm-6 col-sm-offset-3" src="<?= base_url();?>public/media/icons/hotel.png">
          <!-- <i class="fa fa-location-arrow fa-5x" aria-hidden="true"></i> -->
          <p class="about_desc col-sm-12" style="margin-top:5%;font-size:1.2em;color:#777">
            Are you interested in renting your venue for events? Add your portfolio on <a href="">Eventopic</a> and get more requests every day.
          </p>
        </div> 
    </div>

    <p style="color:black;font-size: 1.4em;text-align: center;width:80%;margin-left:10%;padding:2%;">
      Nobody should convice you they know better. When it comes to your own event, You might just need some guidance and hints and that's all.
    </p>
</div>
</section>





<section class="mySection" id="contact">
  <div class="col-sm-12 bannerDiv">
  <h2>Contact Us</h2>
  <div class="myarrow"></div>
  <!-- <h2><i class="fa fa-arrow-down" aria-hidden="true"></i></h2> -->
</div>


<div class="col-sm-8 col-sm-offset-2" style="padding:7%;color:black;background-color: white;">

  <div class="row">
    <div class="col-sm-12">
    <h2>Lets get in touch !</h2>
    </div>
  </div>

  <div class="row contact_form">
    <div class="col-sm-6"><input type="text" class="form-control" placeholder="First Name" /></div>
    <div class="col-sm-6"><input type="text" class="form-control" placeholder="Last Name" /></div>
    <div class="col-sm-6"><input type="text" class="form-control" placeholder="Email" /></div>
    <div class="col-sm-6"><input type="text" class="form-control" placeholder="Phone Number" /></div>
    <div class="col-sm-12">
      <textarea rows="10" cols="10" class="form-control" placeholder="Message" ></textarea>
    </div>
    <div class="col-sm-4">
      <button type="submit" class="btn  btn-default">Send</button>
    </div>
  </div>
</div>


</section>




<?php include('footer.php'); ?>


<script type="text/javascript">
  

  $(document).ready(function(){
    var hash = document.location.hash;
    if($(hash).length != 0 )
    {
      $('html, body').animate({
                scrollTop: $(hash).offset().top - 73
            }, 750);
  
    }
    
  });
</script>





