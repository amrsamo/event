<?php include('newheader.php'); ?>


<section class="container" id="signup">
  <div class="row">
      <div class="col-xs-12 col-sm-10 col-md-10 col-sm-offset-1 col-md-offset-1">
      <form role="form" method="post" action="<?= base_url(); ?>followerlogin" >
        <h2>Login <small></small></h2>
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
              <input type="text" name="email" id="display_name" class="form-control input-lg" placeholder="Email" tabindex="3" value="<?= ( isset($input)? $input['username'] : ''); ?>" required>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="form-group <?= (isset($errorfield) && $errorfield == 'password')? 'has-error has-feedback' : '';  ?>">
              <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" value="<?= ( isset($input)? $input['password'] : (isset($password)? $password : '') ); ?>" tabindex="5" required>
            </div>
          </div>
        </div>
        <hr class="colorgraph">
        <div class="row">
          <div class="col-xs-12 col-md-6"><a href="#" class="btn btn-success btn-block btn-lg">Login</a></div>
        </div>
      </form>
    </div>
  </div>
</section>





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





