<?php foreach ($videos as $video): ?>
      <div class="col-md-4" style="margin-bottom:10%;max-height:200px !important;">
          <a href="<?php echo base_url(); ?>v/<?= $video->video_id?>">
              <img class="img-responsive" style="height:147px !important;" src="<?= $video->video_images['image']; ?>" alt=""
              onError="this.src='<?php echo base_url(); ?>public/images/notfound.jpg'">
          </a>
          <p class="text-center" style="max-height:10px;">
          	<?= $video->title; ?>
          </p>
      </div>
<?php endforeach ?>