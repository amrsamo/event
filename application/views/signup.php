<?php include('newheader.php'); ?>


<section class="container" id="signup">
  <div class="row">
      <div class="col-xs-12 col-sm-10 col-md-10 col-sm-offset-1 col-md-offset-1">
      <form role="form" method="post" action="<?= base_url(); ?>signup/try" >
        <h2>Please Sign Up <small>It's free and always will be.</small></h2>
        <hr class="colorgraph">
        <div class="row col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <?php if (isset($error)): ?>
            <div class="col-sm-12 alert alert-danger">
              <strong>Proccess Failed - </strong> <?= $error; ?>
            </div>
          <?php endif ?>
          <?php if (isset($success)): ?>
            <div class="col-sm-12 alert alert-success">
              <strong></strong> <?= $success; ?>
            </div>
          <?php endif ?>
        </div>
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="form-group">
              <input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1" value="<?= ( isset($input)? $input['first_name'] : ''); ?>" required>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="form-group">
              <input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Last Name" value="<?= ( isset($input)? $input['last_name'] : ''); ?>" tabindex="2" required>
            </div>
          </div>
        </div>
        <div class="form-group <?= (isset($errorfield) && $errorfield == 'username')? 'has-error has-feedback' : '';  ?>" >
          <input type="text" name="username" id="display_name" class="form-control input-lg" placeholder="Username" tabindex="3" value="<?= ( isset($input)? $input['username'] : ''); ?>" required>
        </div>
        <div class="form-group <?= ($haserror == 'email')? 'has-error has-feedback' : '' ; ?> <?= ($hassuccess == 'email')? 'has-success has-feedback' : '' ; ?> <?= (isset($errorfield) && $errorfield == 'email')? 'has-error has-feedback' : '';  ?>"">
          <input type="email" name="email" value="<?= ( isset($input)? $input['email'] : (isset($mail)? $mail : '') );?>" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="4" required>
        </div>
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="form-group">
            <input type="hidden" name="country" value="62">
              <label>Country</label>
              <select name="country" class="form-control input-lg" disabled>
                <?php foreach ($countries as $x): ?>
                  <?php if ($x->id == 62): ?>
                    <option value="<?= $x->id; ?>" selected><?= $x->country_name ?></option>
                  <?php else: ?>
                    <option value="<?= $x->id; ?>" ><?= $x->country_name ?></option>
                  <?php endif ?>
                <?php endforeach ?>
              </select>
              <!-- <input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1"> -->
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="form-group">
              <input type="hidden" name="city" value="1">
              <label>City</label>
                <select name="city" class="form-control input-lg" disabled>
                  <?php foreach ($cities as $x): ?>
                  <?php if ($x->id == 1): ?>
                    <option value="<?= $x->id; ?>" selected><?= $x->city_name ?></option>
                  <?php else: ?>
                    <option value="<?= $x->id; ?>" ><?= $x->city_name ?></option>
                  <?php endif ?>
                <?php endforeach ?>
                </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="form-group <?= (isset($errorfield) && $errorfield == 'password')? 'has-error has-feedback' : '';  ?>">
              <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" value="<?= ( isset($input)? $input['password'] : (isset($password)? $password : '') ); ?>" tabindex="5" required>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="form-group <?= (isset($errorfield) && $errorfield == 'password_confirmation')? 'has-error has-feedback' : '';  ?>" >
              <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" value="<?= ( isset($input)? $input['password_confirmation'] : ''); ?>" placeholder="Confirm Password" tabindex="6" required>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-4 col-sm-3 col-md-3">
            <span class="button-checkbox">
              <button type="button" class="btn" data-color="info" tabindex="7">I Agree</button>
              <input type="checkbox" name="terms" id="t_and_c" class="hidden" value="1">
            </span>
          </div>
          <div class="col-xs-8 col-sm-9 col-md-9">
             By clicking <strong class="label label-primary">Register</strong>, you agree to the <a href="#" data-toggle="modal" data-target="#t_and_c_m">Terms and Conditions</a> set out by this site, including our Cookie Use.
          </div>
        </div>
        
        <hr class="colorgraph">
        <div class="row">
          <div class="col-xs-12 col-md-6"><input type="submit" name="register" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>

          

        </div>
      </form>
    </div>
  </div>
</section>








<!-- Modal -->
<div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title" id="myModalLabel">Terms & Conditions</h4>
      </div>
      <div class="modal-body">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">I Agree</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>



<?php include('newfooter.php'); ?>


<script type="text/javascript">
  $(function () {


    $('.button-checkbox').each(function () {

        // Settings
        var $widget = $(this),
            $button = $widget.find('button'),
            $checkbox = $widget.find('input:checkbox'),
            color = $button.data('color'),
            settings = {
                on: {
                    icon: 'glyphicon glyphicon-check'
                },
                off: {
                    icon: 'glyphicon glyphicon-unchecked'
                }
            };

        // Event Handlers
        $button.on('click', function () {
            $checkbox.prop('checked', !$checkbox.is(':checked'));
            $checkbox.triggerHandler('change');
            updateDisplay();
        });
        $checkbox.on('change', function () {
            updateDisplay();
        });

        // Actions
        function updateDisplay() {
            var isChecked = $checkbox.is(':checked');

            // Set the button's state
            $button.data('state', (isChecked) ? "on" : "off");

            // Set the button's icon
            $button.find('.state-icon')
                .removeClass()
                .addClass('state-icon ' + settings[$button.data('state')].icon);

            // Update the button's color
            if (isChecked) {
                $button
                    .removeClass('btn-default')
                    .addClass('btn-' + color + ' active');
            }
            else {
                $button
                    .removeClass('btn-' + color + ' active')
                    .addClass('btn-default');
            }
        }

        // Initialization
        function init() {

            updateDisplay();

            // Inject the icon if applicable
            if ($button.find('.state-icon').length == 0) {
                $button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i>');
            }
        }
        init();
    });
});
</script>





