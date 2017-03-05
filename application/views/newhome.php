<?php include('newheader.php'); ?>


<input type="hidden" id="homepage" value="1">
<section class="container-fluid" id="landing" style="background-color: rgba(0,0,0,0.3);">
    <div class="v-center landing_content" style="margin-top: 27%;">
        <h2 style="font-family: 'Nixie';font-weight:900;font-size: 300%;letter-spacing: 0px;" class="text-center">YOU KNOW BEST HOW TO PLAN</h2>
    </div>

    <!-- LANDING SOCIAL -->
    <div class="landing_social">
      <div class="col-sm-2">
        <img class="img-responsive" src="<?= base_url(); ?>public/images/landing/fb.png">
      </div>
      <div class="col-sm-2">
        <img class="img-responsive" src="<?= base_url(); ?>public/images/landing/insta.png">
      </div>
      <div class="col-sm-2">
        <img class="img-responsive" src="<?= base_url(); ?>public/images/landing/pinterest.png">
      </div>
      <div class="col-sm-2">
        <img class="img-responsive" src="<?= base_url(); ?>public/images/landing/snapch.png">
      </div>
      <div class="col-sm-2 tel">
        <img class="img-responsive" src="<?= base_url(); ?>public/images/landing/tel.png">
      </div>
    </div>

    <!-- LANDING BUTTONS -->
    <div class="landing_btns">
      <div class="col-sm-5">
        <button class=" btn_header" >Sign up for free</button>
      </div>
      <div class="col-sm-5">
        <button class=" btn_header" >Sign up for free</button>
      </div>
    </div>

</section>

<div class="newbanner text-center" id="categories">
  <span>
    CATEGORIES
  </span>
</div>

<section class="container-fluid container-nofull"  style="padding-bottom: 8%;">
  <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1" style="background-color: white;margin-top: 8%;padding:0px;">
    <?php foreach ($categories as $x): ?>
    <div class="category_item col-sm-4 nospace">
        <div class="imagecaption">
            <h4>
              <?= $x->category->name; ?>
            </h4>
            <div class="imagecaption_hover nospace">
              <?php foreach ($x->sub as $sub): ?>
                <a href="<?= base_url(); ?>category/<?= rawurlencode($x->category->name) ?>?filter=<?= rawurlencode($sub->name); ?>">
                  <span data-target="<?= base_url(); ?>category/"> . <?= $sub->name; ?></span>
                </a>
              <?php endforeach ?>
                <a href="<?= base_url(); ?>category/<?= rawurlencode($x->category->name) ?>">
                  <span> . All</span>
                </a>
            </div>
        </div>
       <img class="img-responsive category_image" style="width:100%;" src="<?= base_url().$x->category->image_url ?>" alt="img01"/>
    </div>
    <?php endforeach ?> 
  </div>
</section>



<div class="newbanner text-center" id="about">
  <span>
    ABOUT
  </span>
    <p>Nobody should convince you they know better. When it comes to your very own event, You might just need some guidance and hints. Thats's all !!</p>
</div>

<section class="container-fluid"  style="min-height: 0px;">
  <div class="section-white-content">
      <div class="row" style="padding-top:0px;">
          <div class="col-sm-4" style="text-align: center;">
            <p class="header-md">FOLLOWER</p>
            <p class="about_desc col-sm-12" style="font-size:1.2em;color:#777">
              If you like to follow the scene in Egypt and what's trending regarding the events, <a href="">Eventopic</a> can get you all the information you need in one place. 
            </p>
          </div>
          <div class="col-sm-4" style="text-align: center;">
            <p class="header-md">TALENT</p>
            <p class="about_desc col-sm-12" style="font-size:1.2em;color:#777">
              Add your portfolio and show your talent on <a href="">Eventopic</a>, The one place that has it all ;) 
            </p>
          </div>
          <div class="col-sm-4" style="text-align: center;">
            <p class="header-md">VENUE</p>
            <p class="about_desc col-sm-12" style="margin-top:5%;font-size:1.2em;color:#777">
              Are you interested in renting your venue for events? Add your portfolio on <a href="">Eventopic</a> and get more requests every day.
            </p>
          </div>

          <div class="col-sm-12 text-center luckysigns_btn animated infinite bounce" style="margin-top:5%;">
            <img class="img-responsive" style="width:22%;margin:0 auto;" src="<?= base_url();?>public/images/luckysigns.jpg">
          </div>


          <div class="luckysigns_div col-sm-10 col-sm-offset-1">
            <div class="row">

                <div class="col-sm-4">
                  <div class="col-sm-4 col-sm-offset-4">
                    <img class=" img-responsive" src="<?= base_url();?>public/images/signs/4leaveclover.png">
                  </div>
                  <div class="col-sm-12 text-center">
                    <span>4 leave clover</span>
                  </div>
                </div>

                <div class="col-sm-4">
                  <div class="col-sm-4 col-sm-offset-4">
                    <img class=" img-responsive" src="<?= base_url();?>public/images/signs/wishbone.png">
                  </div>
                  <div class="col-sm-12 text-center">
                    <span>wishbone</span>
                  </div>
                </div>

                <div class="col-sm-4">
                  <div class="col-sm-4 col-sm-offset-4">
                    <img class=" img-responsive" src="<?= base_url();?>public/images/signs/ladybird.png">
                  </div>
                  <div class="col-sm-12 text-center">
                    <span>ladybird</span>
                  </div>
                </div>
                
            </div>


            <div class="row">

                <div class="col-sm-4">
                  <div class="col-sm-4 col-sm-offset-4">
                    <img class=" img-responsive" src="<?= base_url();?>public/images/signs/dreamcatcher.png">
                  </div>
                  <div class="col-sm-12 text-center">
                    <span>dreamcatcher</span>
                  </div>
                </div>

                <div class="col-sm-4">
                  <div class="col-sm-4 col-sm-offset-4">
                    <img class=" img-responsive" src="<?= base_url();?>public/images/signs/barnstar.png">
                  </div>
                  <div class="col-sm-12 text-center">
                    <span>barnstar</span>
                  </div>
                </div>

                <div class="col-sm-4">
                  <div class="col-sm-4 col-sm-offset-4">
                    <img class=" img-responsive" src="<?= base_url();?>public/images/signs/horseshoe.png">
                  </div>
                  <div class="col-sm-12 text-center">
                    <span>horseshoe</span>
                  </div>
                </div>
                
            </div>

            <div class="row">

                <div class="col-sm-4 col-sm-offset-4">
                  <div class="col-sm-4 col-sm-offset-4">
                    <img class=" img-responsive" src="<?= base_url();?>public/images/signs/fish.png">
                  </div>
                  <div class="col-sm-12 text-center">
                    <span>fish</span>
                  </div>
                </div>

            </div>
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4">
                  <div class="col-sm-12 text-center">
                    <span><i class="fa fa-arrow-circle-up" aria-hidden="true"></i></span>
                  </div>
                </div>
            </div>
          </div>
             
      </div>

  </div>
    <!--/container-->
</section>


<div class="container-fluid container-nofull" style="height:10px;">
</div>

<div class="newbanner text-center" id="trending">
  <span>
    TRENDING
  </span>
</div>

<section class="container-fluid container-nofull"  style="padding-bottom: 0%;">
  <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1" style="background-color: white;margin-top: 4%;padding:0px;">
    
    <div class="row">
    <!-- Carousel -->
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      </ol>
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
          <div class="item active">
            <img src="<?= base_url(); ?>public/images/andreas-ronningen-29698.jpg" alt="First slide">
                    <!-- Static Header -->
                    <div class="header-text hidden-xs">
                        <div class="row">
                          <div class="col-sm-4 text-center nospace">
                              <img class=" img-responsive" src="<?= base_url(); ?>public/images/profile1.jpg">
                          </div>
                          <div class="col-sm-6 pull-right">
                            <button class="btn_header">Go To Profile</button>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-12 nospace">
                            <h2>Davenport_Quinn</h2>
                            <span>Photographer</span>
                          </div>
                        </div>
                    </div><!-- /header-text -->
          </div>
      </div>
      <!-- Controls -->
      <!-- <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
      </a> -->
    </div><!-- /carousel -->
  </div>


  </div>
</section>





<section class="container-fluid container-nofull" id="contact" style="min-height: 0%;margin-bottom: 5%;">
    <div class="white">
            <div class="col-md-12">
                <div class="newbanner text-center">
                  <h2 style="font-size: 200%;">
                    CONTACT
                  </h2>
                </div>
            </div>
        <div class="row section-white-content">
            <div class="col-md-8 col-md-offset-2">
                <div class="row form-group">
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Name" required="">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Email" required="">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-12">
                        <textarea rows="3" class="form-control" placeholder="Message"></textarea>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-4 col-sm-offset-4">
                        <input class="form-control btn_event" type="submit" name="" value="send">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--  -->
<!--  -->


<?php include('newfooter.php'); ?>

<script type="text/javascript">
  
  
  $(".category_item").hover(function(){

    $(this).find('.imagecaption h4').css('background-color','white');
    $(this).find('.imagecaption_hover').css('background-color','rgba(255,255,255,0.1)');
    // $(this).find('.imagecaption_hover').removeClass('hide');
    $(this).find('.imagecaption_hover').slideDown('fast');

  });


  $(".category_item").mouseleave(function(){

    $(this).find('.imagecaption h4').css('background-color','rgba(255,255,255,0.8)');
    $(this).find('.imagecaption_hover').slideUp('fast');

  });



  $(".luckysigns_btn").click(function(){

    $(".luckysigns_div").slideDown('slow');

  }); 


  $(".fa-arrow-circle-up").click(function(){

    $(".luckysigns_div").slideUp('slow');

  }); 

  

</script>