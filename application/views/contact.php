<?php include('header.php'); ?>
<script src='<?php echo base_url(); ?>public/js/HkcEANI0EeO+diIACrqE1A.js'></script>
<script>jwplayer.key="XGdqDrPpGaekuPVmdKIYnI/guGliLkihtQm6Dw==";</script>

        <!-- Heading Row -->
        <div class="row">
            <div class="col-md-9">
                <h1 class="page-header headline">Contact Us!</h1>
                <form action="" method="post">
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="name" class="h4">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter name" required>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="email" class="h4">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message" class="h4 ">Message</label>
                        <textarea id="message" class="form-control" rows="5" placeholder="Enter your message" required></textarea>
                    </div>
                    <button type="submit" name="submit" id="form-submit" class="btn btn-success btn-lg pull-right ">Submit</button>
                </form>
                <?php if (isset($error)): ?>
                    <hr>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <div class="alert alert-danger">
                              <strong>Error!</strong> <?= $error; ?>
                            </div>
                        </div>
                    </div>
                <?php endif ?>
                <?php if (isset($success)): ?>
                    <hr>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <div class="alert alert-success">
                              <strong>Done!</strong> <?= $success; ?>
                            </div>
                        </div>
                    </div>
                <?php endif ?>
            </div>
            <!-- /.col-md-8 -->
            <div class="col-md-3">
                <?php include('sidebar.php'); ?>
            </div>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->

<?php include('footer.php'); ?>



        
