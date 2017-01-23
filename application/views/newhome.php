<?php include('newheader.php'); ?>


<input type="hidden" id="homepage" value="1">
<section class="container-fluid" id="landing" style="background-color: rgba(0,0,0,0.3);">
    <div class="v-center landing_content">
        <h1 class="text-center">Your Personal Event Planner</h1>
        <h2 class="text-center lato animate slideInDown">You Know Best How To Plan</h2>
        <p class="text-center">
            <br>
            <div class="col-sm-12 text-center">
              <?php if ($isLoggedIn): ?>
                   <a href="<?= base_url(); ?>category/Capture%20The%20Moment" class="landing_a">Check Our Photographers!</a>
              <?php else: ?>
                <a href="#" class="landing_a" data-toggle="modal" data-target="#registerModal">
                  Sign Up For Free
                </a>
              <?php endif ?>
              <a href="<?= base_url(); ?>" class="landing_a">What's Trending?</a>
            </div>
        </p>
    </div>
    <a href="#categories">
        <div class="scroll-down bounceInDown animated">
            <span>
                <i class="fa fa-angle-down fa-2x"></i>
            </span>
        </div>
    </a>
</section>


<section class="container-fluid container-nofull" id="categories" style="">
<div class="newbanner text-center">
  <h2 style="font-size: 200%;">
    CATEGORIES
  </h2>
</div>
<div class="bannerspacer"></div>
<div class="grid">
  <?php foreach ($categories as $x): ?>
  <div class="col-sm-4 " style="padding:0px;">
    <div class="imagecaption-xs visible-xs">
          <!-- <h4 style="font-size:1.2em">
            <?= $x->name; ?>
          </h4> -->
      </div>
    <div>
      <figure class="effect-oscar  wowload fadeInUp" style="width:100%;padding:1%;background-color: white;">
        <img class="img-responsive category_image" style="width:100%;" src="<?= base_url().$x->image_url ?>" alt="img01"/>
        <figcaption style="padding-top:35%;">
                <p class="p-large"><?= $x->info; ?><br>
                <a href="<?= base_url().'category/'.rawurlencode($x->name); ?>" title="<?= $x->name; ?>" style="text-decoration:none;border:none;">
                  <i class="fa fa-arrow-right" aria-hidden="true"></i>
                  Check Out The Best
                </a>
                </p>
            </figcaption>
      </figure>
      <div class="imagecaption hidden-xs" style="display: none;">
          <h4 style="font-size:1.2em">
            <?= $x->name; ?>
          </h4>
      </div>
    </div>
  </div>
  <?php endforeach ?> 
</div>
</section>

<section class="container-fluid container-nofull" id="about">
    <div class="white">
        <div class="row">
            <div class="col-md-12">
                <div class="newbanner text-center">
                  <h2 style="font-size: 200%;">
                    ABOUT
                  </h2>
                </div>
            </div>
        </div>
        <div class="bannerspacer"></div>

<div class="section-white-content">
    <div class="row" style="padding-top:20px;">
        <div class="col-sm-4" style="text-align: center;">
          <p style="font-size:1.4em;text-align: center;">FOLLOWER</p>
          <!-- <img class="col-sm-6 col-sm-offset-3" src="<?= base_url();?>public/media/icons/follower.png"> -->
          <!-- <i class="fa fa-users fa-5x" aria-hidden="true"></i> -->
          <p class="about_desc col-sm-12" style="font-size:1.2em;color:#777">
            If you like to follow the scene in Egypt and what's trending regarding the events, <a href="">Eventopic</a> can get you all the information you need in one place. 
          </p>
        </div>
        <div class="col-sm-4" style="text-align: center;">
          <p style="font-size:1.4em;text-align: center;">TALENT</p>
          <!-- <img class=" col-sm-6 col-sm-offset-3" src="<?= base_url();?>public/media/icons/talent.png"> -->
          <!-- <i class="fa fa-asterisk fa-5x" aria-hidden="true"></i> -->
          <p class="about_desc col-sm-12" style="font-size:1.2em;color:#777">
            Add your portfolio and show your talent on <a href="">Eventopic</a>, The one place that has it all ;) 
          </p>
        </div>
        <div class="col-sm-4" style="text-align: center;">
          <p style="font-size:1.4em;text-align: center;">VENUE</p>
          <!-- <img class=" col-sm-6 col-sm-offset-3" src="<?= base_url();?>public/media/icons/hotel.png"> -->
          <!-- <i class="fa fa-location-arrow fa-5x" aria-hidden="true"></i> -->
          <p class="about_desc col-sm-12" style="margin-top:5%;font-size:1.2em;color:#777">
            Are you interested in renting your venue for events? Add your portfolio on <a href="">Eventopic</a> and get more requests every day.
          </p>
        </div>

        <div class="col-sm-12 text-center" style="margin-top:5%;">
          <h3 style="background-color: black;color:white;">OUR LUCKY SIGNS</h3>
        </div>
        <div class="row">
            <div class="col-sm-4 col-xs-4" style="text-align: center;">
            <p style="font-size:1.3em;text-align: center;">4 Leave Clover</p>
            <img class=" col-sm-4 col-sm-offset-4 img-responsive" src="<?= base_url();?>public/images/signs/4leaveclover.png">
          </div>
          <div class="col-sm-4 col-xs-4" style="text-align: center;">
            <p style="font-size:1.3em;text-align: center;">Wishbone</p>
            <img class=" col-sm-4 col-sm-offset-4" style="height:60px;" src="<?= base_url();?>public/images/signs/wishbone.png">
          </div> 
          <div class="col-sm-4 col-xs-4" style="text-align: center;">
            <p style="font-size:1.3em;text-align: center;">Lady Bird</p>
            <img class=" col-sm-4 col-sm-offset-4" style="height:60px;" src="<?= base_url();?>public/images/signs/ladybird.png">
          </div> 
        </div>
        
        <div class="row" style="margin-top: 5%;">
          <div class="col-sm-4 col-xs-4" style="text-align: center;">
            <p style="font-size:1.4em;text-align: center;">barnstar</p>
            <img class=" col-sm-4 col-sm-offset-4" style="height:60px;" src="<?= base_url();?>public/images/signs/barnstar.png">
          </div> 
          <div class="col-sm-4 col-xs-4" style="text-align: center;">
            <p style="font-size:1.4em;text-align: center;">horseshoe</p>
            <img class=" col-sm-4 col-sm-offset-4" style="height:60px;" src="<?= base_url();?>public/images/signs/horseshoe.png">
          </div> 
          <div class="col-sm-4 col-xs-4" style="text-align: center;">
            <p style="font-size:1.4em;text-align: center;">fish</p>
            <img class=" col-sm-4 col-sm-offset-4" style="height:60px;" src="<?= base_url();?>public/images/signs/fish.png">
          </div>
        </div>
        
        <div class="col-sm-4 col-xs-4 col-xs-offset-4 col-sm-offset-4" style="text-align: center;margin-top: 5%;">
          <p style="font-size:1.4em;text-align: center;">dream catcher</p>
          <img class=" col-sm-4 col-sm-offset-4" style="height:100px;" src="<?= base_url();?>public/images/signs/dreamcatcher.png">
        </div>   
    </div>

    <p style="color:black;font-size: 1.4em;text-align: center;width:80%;margin-left:10%;padding:2%;">
      Nobody should convice you they know better. When it comes to your own event, You might just need some guidance and hints and that's all.
    </p>
</div>
        <!--/row-->
        <div class="row">
            <br>
        </div>
    </div>
    <!--/container-->
</section>








<section class="container-fluid container-nofull" id="contact">
    <div class="white">
         <div class="row">
            <div class="col-md-12">
                <div class="newbanner text-center">
                  <h2 style="font-size: 200%;">
                    CONTACT
                  </h2>
                </div>
            </div>
        </div>
        <div class="bannerspacer"></div>
        <div class="row section-white-content">
            <div class="col-md-8 col-md-offset-1">
                <div class="row form-group">
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name" required="">
                    </div>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="middleName" name="firstName" placeholder="Middle Name" required="">
                    </div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name" required="">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-5">
                        <input type="email" class="form-control" name="email" placeholder="Email" required="">
                    </div>
                    <div class="col-sm-5">
                        <input type="email" class="form-control" name="phone" placeholder="Phone" required="">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-10">
                        <input type="homepage" class="form-control" placeholder="Website URL" required="">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-10">
                        <button class="btn btn-default btn-lg pull-right">Contact Us</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 pull-right">
                <address>
                  <strong>Some LLC</strong><br>
                  795 Folsom Ave, Suite 600<br>
                  Newport, RI 94107<br>
                  P: (123) 456-7890
                </address>
                <address>
              <strong>Email Us</strong><br>
              <a href="mailto:#">first.last@example.com</a>
            </address>
            </div>
        </div>
    </div>
</section>

<!--  -->
<!--  -->


<?php include('newfooter.php'); ?>