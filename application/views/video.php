<?php include('header.php'); ?>
<script src='<?php echo base_url(); ?>public/js/HkcEANI0EeO+diIACrqE1A.js'></script>
<script>jwplayer.key="XGdqDrPpGaekuPVmdKIYnI/guGliLkihtQm6Dw==";</script>

        <!-- Heading Row -->
        <div class="row">
            <div class="col-md-9">
                <h1 class="page-header headline"><?= $video->title; ?></h1>
                <!-- VIDEO PLAYBACK -->
                <div class='video-playback'>
                    <div class='video-container'>
                        <div id='video-featured'>
                        </div>
                    </div>
                 </div>
                <!-- END VIDEO PLAYBACK -->
                
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

                <hr>
                <!-- Content Row -->
                <div class="row section_header">
                    <div class="col-md-9">
                        <h3 class="headline">Popular Videos</h3>
                    </div>
                    <?php 
                        $videos = $popular;
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
<script type="text/javascript">

var file  = "<?= $video_files['mp4']['url'];  ?>";
var image = "<?= $video_images['image'];  ?>";

jwplayer('video-featured').setup(
{
    playlist:
    [{
    image: image,
    sources:
    [
        { file: file }
    ]
    }],
  primary: 'flash',
  width: "100%",
  height:"100%",
  aspectratio: "16:9",
  ga: {},
  autostart:true,
  events:
  {
      onReady: function(e)
      {
        opt_event('vload');
        },
        onBeforePlay: function(e)
        {
            opt_event('adrequest');
        },
        onAdImpression: function(e)
        {
            opt_event('adstart');
        },
        onAdClick: function(e)
        {
            opt_event('adclick');
        },
        onAdComplete: function(e)
        {
            opt_event('adcomplete');        
        }
  }
});
</script>


        
