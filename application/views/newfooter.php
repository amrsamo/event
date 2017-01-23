<section class="container-fluid" id="section7">
    <div class="row">
        <!--fontawesome icons-->
        <div class="col-sm-1 col-sm-offset-3 col-xs-4 text-center">
            <i class="fa fa-github fa-4x"></i>
        </div>
        <div class="col-sm-1 col-xs-4 text-center">
            <i class="fa fa-foursquare fa-4x"></i>
        </div>
        <div class="col-sm-1 col-xs-4 text-center">
            <i class="fa fa-pinterest fa-4x"></i>
        </div>
        <div class="col-sm-1 col-xs-4 text-center">
            <i class="fa fa-google-plus fa-4x"></i>
        </div>
        <div class="col-sm-1 col-xs-4 text-center">
            <i class="fa fa-twitter fa-4x"></i>
        </div>
        <div class="col-sm-1 col-xs-4 text-center">
            <i class="fa fa-dribbble fa-4x"></i>
        </div>
    </div>
</section>

<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-3 column">
                <h4>Information</h4>
                <ul class="nav">
                    <li><a href="about-us.html">Products</a></li>
                    <li><a href="about-us.html">Services</a></li>
                    <li><a href="about-us.html">Benefits</a></li>
                    <li><a href="elements.html">Developers</a></li>
                </ul>
            </div>
            <div class="col-xs-6 col-md-3 column">
                <h4>Follow Us</h4>
                <ul class="nav">
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Google+</a></li>
                    <li><a href="#">Pinterest</a></li>
                </ul>
            </div>
            <div class="col-xs-6 col-md-3 column">
                <h4>Contact Us</h4>
                <ul class="nav">
                    <li><a href="#">Email</a></li>
                    <li><a href="#">Headquarters</a></li>
                    <li><a href="#">Management</a></li>
                    <li><a href="#">Support</a></li>
                </ul>
            </div>
            <div class="col-xs-6 col-md-3 column">
                <h4>Customer Service</h4>
                <ul class="nav">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Delivery Information</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms &amp; Conditions</a></li>
                </ul>
            </div>
        </div>
        <!--/row-->
        <p class="text-right">©2015</p>
    </div>
</footer>

<div class="scroll-up">
    <a href="#"><i class="fa fa-angle-up"></i></a>
</div>

<div id="loginModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h2 class="text-center">
                <img style="width:50%;margin:0 auto;" class="img-responsive" src="<?= base_url(); ?>public/images/logo black.png" class="img-circle">
                <br>Login</h2>
            </div>
            <div class="modal-body row">
                <h6 class="text-center">COMPLETE THESE FIELDS TO SIGN UP</h6>
                <form action="<?= base_url(); ?>followerlogin" method="post" class="col-md-10 col-md-offset-1 col-xs-12 col-xs-offset-0">
                    <div class="form-group">
                        <input name="email" type="email" class="form-control input-lg" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input name="password" type="password" class="form-control input-lg" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-main btn-lg btn-block">Sign In</button>
                        <span class="pull-right"><a href="#">Register</a></span><span><a href="#">Need help?</a></span>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <h6 class="text-center"><a href="">Privacy is important to us. Click here to read why.</a></h6>
            </div>
        </div>
    </div>
</div>


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
                <input type="submit" name="register" value="Register Now" class="btn btn-main btn-block " tabindex="7"></div>
              </div>
            </form>
          </div>
          <div class="col-xs-12 col-sm-10 col-md-10 col-sm-offset-1 col-md-offset-1">
            <form role="form" method="post" action="<?= base_url(); ?>followerlogin" >
              <h2>Already a User ?<small> Login now..</small></h2>
              <hr class="colorgraph">
              <div class="form-group">
                <input type="email" name="email" value="" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="4" required>
                <input type="password" name="password" value="" id="password" class="form-control input-lg" placeholder="Email Address" tabindex="4" required>
              </div>
              <hr class="colorgraph">
              <div class="row">
                <div class="col-xs-12 col-md-6 col-md-offset-3">
                <input type="submit" name="register" value="Login" class="btn btn-main btn-block" tabindex="7"></div>
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



<div id="registerModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h2 class="text-center">
                <img style="width:50%;margin:0 auto;" class="img-responsive" src="<?= base_url(); ?>public/images/logo black.png" class="img-circle">
                <br>Register Now! <small>and access all our amazing features.</small></h2>
            </div>
            <div class="modal-body row">
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
            <div class="modal-footer">
                <h6 class="text-center"><a href="">Privacy is important to us. Click here to read why.</a></h6>
            </div>
        </div>
    </div>
</div>
    <!--scripts loaded here-->
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>


    <!-- jquery -->
<script src="<?= base_url() ?>public/personal_template/assets/jquery.js"></script>



<!-- wow script -->


<!-- boostrap -->
<script src="<?= base_url() ?>public/personal_template/assets/bootstrap/js/bootstrap.js" type="text/javascript" ></script>
    <script src="<?= base_url() ?>public/personal_template/assets/jquery.masonry.min.js"></script>
    
    <script src="<?= base_url(); ?>public/js/new_scripts.js"></script>
  </body>
</html>