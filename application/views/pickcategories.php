<?php include('newheader.php'); ?>

<style type="text/css">
  /* Credit to bootsnipp.com for the css for the color graph */
.colorgraph {
  height: 5px;
  border-top: 0;
  background: #c4e17f;
  border-radius: 5px;
  background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
}
</style>

<section class="container" id="signup" style="padding-top: 10%;">


<div class="row">
    <div class="col-xs-12 col-sm-10 col-md-10 col-sm-offset-1 col-md-offset-1">
    <form role="form" method="post" action="#" >
      <h2>Please Choose Your Favorite Categories <small>(Optional)</small></h2>
      <hr class="colorgraph">
      <div class="row">
        <?php foreach ($sub_categories as $x): ?>
          <div class="col-xs-12 col-sm-3 col-md-3">
            <div class="form-group">
              
              <input name="<?= $x->id; ?>" value="<?= $x->id; ?>" id="box<?= $x->id;  ?>" type="checkbox" />

              <label for="box<?= $x->id ?>"><?= $x->name; ?></label>
              <i class="fa fa-<?= $x->icon;  ?>" aria-hidden="true"></i>
            </div>
          </div>
        <?php endforeach ?>
        <!-- <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="form-group">
            <input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1" value="<?= ( isset($input)? $input['first_name'] : ''); ?>" required>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="form-group">
            <input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Last Name" value="<?= ( isset($input)? $input['last_name'] : ''); ?>" tabindex="2" required>
          </div>
        </div> -->
      </div>
      
    
     
      
      <hr class="colorgraph">
      <div class="row">
        <div class="col-xs-12 col-md-6"><input type="submit" name="done" value="Done" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
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





