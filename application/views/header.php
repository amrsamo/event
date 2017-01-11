<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Eventopic</title>



<!-- <link href="https://fonts.googleapis.com/css?family=Arima+Madurai" rel="stylesheet"> -->
<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">

<!-- Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:600' rel='stylesheet' type='text/css'>

<!-- font awesome -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<!-- bootstrap -->
<link rel="stylesheet" href="<?= base_url() ?>public/personal_template/assets/bootstrap/css/bootstrap.min.css" />

<!-- animate.css -->
<link rel="stylesheet" href="<?= base_url() ?>public/public/personal_template/assets/animate/animate.css" />
<link rel="stylesheet" href="<?= base_url() ?>public/personal_template/assets/animate/set.css" />

<!-- gallery -->
<link rel="stylesheet" href="<?= base_url() ?>public/personal_template/assets/gallery/blueimp-gallery.min.css">

<!-- favicon -->
<link rel="shortcut icon" href="<?= base_url() ?>public/images/logo black.png.jpg" type="image/x-icon">
<link rel="icon" href="<?= base_url() ?>public/images/logo black.png.jpg" type="image/x-icon">


<link rel="stylesheet" href="<?= base_url() ?>public/personal_template/assets/style.css">




<style type="text/css">

.navbar{
  background-color: black;
  border-color: black;
  /*padding-bottom: 10px;*/
}

  .navbar-brand{
    padding:0px;
    margin:0px;
    padding-left:10px;
    padding-top:10px;
  }

  .navbar-nav{
    padding-top:10px;
    padding-left: 30px;
    font-size:0.8em;
    color:white;
  }

  .navbar-form{
    padding-left: 5%;
    padding-top: 10px;
  }

  .navbar-form input{
    width:10%;
  }


  .navbar-right{
    margin-top: 10px;
  }
</style>
</head>

<body>
<?php if ($isLoggedIn): ?>
  <input type="hidden" id="isLoggedIn" value="<?= $loggedInFollower->id; ?>">
<?php endif ?>

       
<input type="hidden" id="base_url" value="<?= base_url(); ?>">       

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?= base_url(); ?>" style="">
      <img style="width:50px;height:50px;" src="<?= base_url() ?>public/personal_template/images/logo circle green.png" class="img-circle profile">
      <span>EvenTopic</span>
    </a>
    </div>


    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="navscroll" name="categories">
          <a href="#">Categories</a>
        </li>
        <li class="navscroll" name="about"><a href="#">About</a></li>
        <li class="navscroll" name="contact"><a href="#">Contact Us</a></li>
        <li class="navscroll" id=""><a href="<?= base_url(); ?>trending">Trending</a></li>
        <li class="navscroll" id=""><a href="<?= base_url(); ?>blog">Blog</a></li>
      </ul>
      <form class="navbar-form navbar-left" action="<?= base_url(); ?>search" method="post">
        <div class="form-group">
          <!-- <input type="text" class="form-control" placeholder="Search"> -->
          <div class="inner-addon right-addon">
              <i class="glyphicon glyphicon-search"></i>
              <input type="text" name="input" class="searchinput form-control" placeholder="Search" />
          </div>
        </div>
      </form>
     
      <ul class="nav navbar-nav navbar-right" style="">
      <?php if ($isLoggedIn): ?>
        <li>
        <a  href="<?= base_url(); ?>/follower/<?= $loggedInFollower->username; ?>" class="navbar-link" class="dropdown-toggle" data-toggle="dropdown" style="color:#e74c3c">
          <?= $loggedInFollower->username; ?><span class="caret"></span>
        </a>
        <ul id="login-dp" class="dropdown-menu">
        <li>
           <div class="row">
              <div class="col-md-12">
                Welcome <?= $loggedInFollower->first_name ?>
                 <form class="form" role="form" method="post" action="<?= base_url();?>logout" accept-charset="UTF-8" id="login-nav">
                    <div class="form-group">
                       <button type="submit" class="btn btn-primary btn-block">Log Out</button>
                    </div>
                 </form>
                 <div class="form-group">
                       <a href="<?= base_url(); ?>follower/<?= $loggedInFollower->username; ?>">
                         <button type="submit" class="btn btn-primary btn-block">Go To Profile</button>
                       </a>
                    </div>
              </div>
           </div>
        </li>
      </ul>
        </li>
      <?php else: ?>
        <li><p style="color: !important" class="navbar-text navbar-right">Hello Guest!</p></li>
      <?php endif ?>

        <li class="dropdown" style="padding:0px;margin:0px; <?= ($isLoggedIn)? 'display: none;' : ''; ?>" >
          <a  style="padding-top:11%;margin:0px;padding-right: 2%;color:white !important" href="#" style="color:white !important;" class="dropdown-toggle" data-toggle="dropdown"><b>Sign Up</b> <span class="caret"></span></a>
      <ul id="login-dp" class="dropdown-menu">
        <li>
           <div class="row">
              <div class="col-md-12">
                Sign Up Through
                <div class="social-buttons">
                  <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i></a>
                  <a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i></a>
                </div>
                                or
                 <form class="form" role="form" method="post" action="<?= base_url();?>signup" accept-charset="UTF-8" id="login-nav">
                    <div class="form-group">
                       <label class="sr-only" for="exampleInputEmail2">Email address</label>
                       <input type="email" name="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
                    </div>
                    <div class="form-group">
                       <label class="sr-only" for="exampleInputPassword2">Password</label>
                       <input type="password" name="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                       <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
                    </div>
                 </form>
              </div>
           </div>
        </li>
      </ul>
       <li class="dropdown" style="padding:0px;margin:0px;<?= ($isLoggedIn)? 'display: none;' : ''; ?>" >
          <a  style="padding-top:11%;margin:0px;color:white !important;" href="#" style="color:white !important;" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
      <ul id="login-dp" class="dropdown-menu">
        <li>
           <div class="row">
              <div class="col-md-12">
                Login Via
                <div class="social-buttons">
                  <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i></a>
                  <a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i></a>
                </div>
                                or
                 <form class="form" role="form" method="post" action="<?= base_url(); ?>followerlogin" accept-charset="UTF-8" id="login-nav">
                    <div class="form-group">
                       <label class="sr-only" for="exampleInputEmail2">Email address</label>
                       <input type="email" name="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
                    </div>
                    <div class="form-group">
                       <label class="sr-only" for="exampleInputPassword2">Password</label>
                       <input type="password" name="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                             <div class="help-block text-right"><a href="">Forget the password ?</a></div>
                    </div>
                    <div class="form-group">
                       <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                    </div>
                    <div class="checkbox">
                       <label>
                       <input type="checkbox"> keep me logged-in
                       </label>
                    </div>
                 </form>
              </div>
              <div class="bottom text-center">
                New here ? <a href="#"><b>Join Us</b></a>
              </div>
           </div>
        </li>

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>



<!-- Login Modal -->
  <div class="modal fade" id="loginModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">

        <div class="modal-header" style="border:none;">
          <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
          
          <div class="col-sm-4 col-sm-offset-4">
            <img style="" src="<?= base_url() ?>public/personal_template/images/circle logo purple.png" class="img-circle img-responsive">
          </div>
        </div>

        <div class="modal-body" style="border:none;clear: both;">
          <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
              <label><b>Username</b></label>
              <input type="text" class="form-control" placeholder="" />
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
              <label><b>Password</b></label>
              <input type="text" class="form-control" placeholder="" />
            </div>
          </div>
          <div class="row">
            <div class="col-sm-3 col-sm-offset-4">
              <button style="font-size: 1.5em;margin-top:5%;width:50%;margin-left: 43%;" type="submit" class="btn headerBTN btn-default">Login</button>
            </div>
          </div>
          
           
        </div>

        <div class="modal-footer" style="border:none;">
          <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
        </div>
      </div>
      
    </div>
  </div>


  <!-- Sign Up Modal -->
  <div class="modal fade" id="signUpModal" role="dialog">
    <div class="modal-dialog" style="background: rgba(0, 0, 0, 1);border:5px solid whitesmoke">
    
      <!-- Modal content-->
      <div class="modal-content">

        <div class="modal-body" style="border:none;clear: both;">
          
          <div class="col-sm-6" style="">
            <div class="row">
              <div class="col-sm-12" style="text-align: center;">
                <h2>As a Follower</h2>
              </div>
            </div>
            <div class="row" style="margin-top: 4%;">
              <div class="col-sm-4 col-sm-offset-4">
                <img class="img-responsive" src="<?= base_url();?>public/media/icons/follower.png">
              </div>
            </div>
            <div class="row" style="margin-top: 10%;">
              <div class="col-sm-5">
                <label><b>Email</b></label>
                <input type="text" class="form-control" placeholder="" />
                <label><b>Username</b></label>
                <input type="text" class="form-control" placeholder="" />
                <button style="font-size: 1em;margin-top:5%;margin-left: 10%;" type="submit" class="btn headerBTN btn-default">Sign up by Email</button>
              </div>
              <div class="col-sm-6 col-sm-offset-1" style="border-left: 1px solid whitesmoke;min-height: 20%;">
               <div class="fb-login-button" data-max-rows="1" data-size="medium" data-show-faces="false" data-auto-logout-link="false"></div>
              </div>
            </div>
          </div>

          <div class="col-sm-6" style="border-left: 1px solid whitesmoke;min-height:50%;">
            <div class="row">
              <div class="col-sm-12" style="text-align: center;">
                <h2>As a Talent</h2>
              </div>
            </div>
            <div class="row" style="margin-top: 4%;">
              <div class="col-sm-4 col-sm-offset-4">
                <img class="img-responsive" src="<?= base_url();?>public/media/icons/talent.png">
              </div>
            </div>
            <div class="row" style="margin-top: 10%;">
              <div class="col-sm-10 col-sm-offset-2">
                <h2 style="font-size: 1.5em;">
                Send us an email describing your talent on <a href="">talent@eventopic.com</a> and we will create your profile right away.
              </h2>
              </div>
            </div>
          </div>
           
        </div>

        <div class="modal-footer" style="border:none;">
        </div>
      </div>
      
    </div>
  </div>






