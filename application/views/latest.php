<?php include('header.php'); ?>
<script src='<?php echo base_url(); ?>public/js/HkcEANI0EeO+diIACrqE1A.js'></script>
<script>jwplayer.key="XGdqDrPpGaekuPVmdKIYnI/guGliLkihtQm6Dw==";</script>

        <!-- Heading Row -->
        <div class="row">
            <div class="col-md-9">
                <hr>
                <!-- Content Row -->
                <div class="row section_header">
                    <div class="col-md-9">
                        <h3 class="headline">Latest Videos</h3>
                    </div>
                    <?php 
                        $videos = $latest;
                        include('videos_loop.php');
                     ?>
                    
                </div>
                <!-- /.row -->
            </div>
            <!-- /.col-md-8 -->
            <div class="col-md-3">
                <?php include('sidebar.php'); ?>
            </div>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->

<?php include('footer.php'); ?>


        
