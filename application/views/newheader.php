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
    <!-- <link href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css" rel="stylesheet" /> -->
    <!-- <link rel="stylesheet" href="<?= base_url() ?>public/public/personal_template/assets/animate/animate.css" /> -->
    <link rel="stylesheet" href="<?= base_url() ?>public/personal_template/assets/animate/set.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/new_styles.css" />
  </head>
  <body >
    <?php if ($isLoggedIn): ?>
      <input type="hidden" id="isLoggedIn" value="<?= $loggedInFollower->id; ?>">
    <?php endif ?>

       
<input type="hidden" id="base_url" value="<?= base_url(); ?>">  

  
    <nav class="navbar navbar-trans navbar-fixed-top" role="navigation">
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
                <ul class="">
                    <li><a href="#landing">Home</a></li>
                    <li><a href="#categories">Categories</a>
                        <ul class="fallback hidden-xs">
                            <?php foreach ($categories as $x): ?>
                                <li><a href="<?= base_url().'category/'.rawurlencode($x->name); ?>">
                                    <?= ($x->name); ?>
                                </a></li>
                            <?php endforeach ?>
                        </ul>
                    </li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="#section5">Trending</a></li>
                    <li>&nbsp;</li>
                </ul>
            </div>
            <div class="brand-div col-sm-2 nospace">
                <a class="navbar-brand brand" href="#section1" style="padding-top: 0px;">
                    <img class="img-responsive" src="<?= base_url(); ?>public/images/logo circle green.png">
                </a>
            </div>
            

            
            <div class="nav navbar-nav navbar-right col-sm-5" style="padding:0px;margin:0px;">
                <?php if ($isLoggedIn): ?>
                    <ul class="nav navbar-nav pull-right col-sm-5">
                    <li>
                        <a href="<?= base_url(); ?>follower/<?= $loggedInFollower->username; ?>">
                                    <i class="fa fa-user"></i>
                                     <?= strtoupper($loggedInFollower->username); ?>
                                </a>
                    </li>
                    <li>
                        <a href="<?= base_url();?>logout">Log Out</a>
                    </li>
                    </ul>
                <?php else: ?>
                    <ul class="nav navbar-nav pull-right col-sm-5">
                    <li>
                        <a href="javascript:void(0);" data-toggle="modal" data-target="#registerModal">
                                <i class="fa fa-user-plus fa-lg"></i>
                                Sign Up
                            </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" data-toggle="modal" data-target="#loginModal">
                                <i class="fa fa-sign-in fa-lg"></i>
                                Log In
                            </a>
                    </li>
                    </ul>
                <?php endif ?>
                  
            </div>


           

         
            
            
            
        </div>
    </div>
</nav>