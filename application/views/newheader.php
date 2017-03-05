<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>EvenTopic - Create your own event!</title>
    <meta name="description" content="This one page example has a fixed navbar and full page height sections. Each section is vertically centered on larger screens, and then stack responsively on smaller screens. Scrollspy is used to activate the current menu item. This layout also has a contact form example. Uses animate.css, FontAwesome, Google Fonts (Lato and Bitter) and Bootstrap." />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="generator" content="Codeply">

    <!-- favicon -->
    <link rel="shortcut icon" href="<?= base_url() ?>public/images/logo black.png.jpg" type="image/x-icon">
    <link rel="icon" href="<?= base_url() ?>public/images/logo black.png.jpg" type="image/x-icon">

    <link rel="stylesheet" href="<?= base_url() ?>public/css/bootstrap.min.css" />
    <link href="<?= base_url() ?>public/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?= base_url() ?>public/public/css/animate.min.css" />
    <!-- <link rel="stylesheet" href="<?= base_url() ?>public/personal_template/assets/animate/set.css" /> -->
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/new_styles.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/jquery.bxslider.css" />
  </head>
  <body >
    <?php if ($isLoggedIn): ?>
      <input type="hidden" id="isLoggedIn" value="<?= $loggedInFollower->id; ?>">
    <?php endif ?>

       
<input type="hidden" id="base_url" value="<?= base_url(); ?>">  

  
    <nav class="navbar navbar-trans navbar-fixed-top" role="navigation" style="visibility: hidden">
    <div class="wide-container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapsible">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            
        </div>
        <div class="navbar-collapse collapse" id="navbar-collapsible" >
            <div class="col-sm-5 nospace nav navbar-nav navbar-left nospace">
                <div class="left_header_content" style="height:40px;background-color:black !important;color: white;">
                    <div class="header_link_div big_header header_hover col-sm-3 text-center">
                        <a href="#landing">home</a>
                    </div>
                    <div class="header_link_div big_header categories_header_link col-sm-3 text-center">
                        <a href="#categories">categories</a>
                    </div>
                    <div class="sub_category col-sm-12">
                            <?php foreach ($categories as $x): ?>
                                <div class="col-sm-12 nospace">
                                    <a href="<?= base_url().'category/'.rawurlencode($x->category->name); ?>">
                                        <?= ($x->category->name); ?>
                                    </a>
                                </div>
                            <?php endforeach ?>
                        </div>
                    <div class="header_link_div big_header header_hover col-sm-3 text-center">
                        <a href="#trending">trending</a>
                    </div>
                    <div class=" header_link_div big_header header_hover col-sm-2 text-center">
                        <a href="#about">about</a>
                    </div>
                </div>
            </div>
            <div id="arrow_left"></div>
            <div class="brand-div col-sm-2 nospace">
                <a class="navbar-brand brand" href="#section1" style="padding-top: 0px;">
                    <img class="img-responsive" src="<?= base_url(); ?>public/images/logo circle green.png">
                </a>
            </div>
            

            <div id="arrow_right"></div>
            <div class="col-sm-5 nospace nav navbar-nav navbar-left nospace">
                <?php if ($isLoggedIn): ?>
                    <div class="left_header_content" style="height:40px;background-color:black !important;color: white;">
                        <div class="header_link_div header_hover big_header col-sm-3 text-center" style="margin-right: 50px;">
                            <a href="#contact">Contact</a>
                        </div>
                        <div class="header_link_div col-sm-2 text-center nospace" >
                            <a href="<?= base_url(); ?>follower/<?= $loggedInFollower->username; ?>">
                                <button class=" btn_header" >Profile</button>
                            </a>
                        </div>
                        <div class="header_link_div col-sm-2 text-center nospace">
                            <a href="<?= base_url(); ?>logout">
                                <button class=" btn_header" >Logout</button>
                            </a>
                        </div>
                        <div class="header_link_div col-sm-2 text-center nospace">
                            <div class="search">
                              <input type="text" class="btn_header" placeholder="search..">
                              <span class="line"></span>
                              <span class="circle"></span>
                            </div>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="left_header_content" style="height:40px;background-color:black !important;color: white;">
                        <div class="header_link_div header_hover big_header col-sm-3 text-center" style="margin-right: 50px;">
                            <a href="#contact">Contact</a>
                        </div>
                        <div class="header_link_div col-sm-2 text-center nospace">
                            <button data-toggle="modal" data-target="#loginModal" class=" btn_header" >login</button>
                        </div>
                        <div class="header_link_div col-sm-2 text-center nospace">
                            <button data-toggle="modal" data-target="#signUpPopUp" class=" btn_header" >sign up</button>
                        </div>
                        <div class="header_link_div col-sm-2 text-center nospace">
                            <div class="search">
                              <input type="text" class="btn_header" placeholder="search..">
                              <span class="line"></span>
                              <span class="circle"></span>
                            </div>
                        </div>
                    </div>
                <?php endif ?>
                  
            </div>


           

         
            
            
            
        </div>
    </div>
</nav>