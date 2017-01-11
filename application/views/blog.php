<?php include('header.php'); ?>

<style type="text/css">

.timeline {
  list-style: none;
  padding: 0;
  position: relative;
}
.timeline:before {
  top: 0;
  bottom: 0;
  position: absolute;
  content: "";
  width: 2px;
  background-color: #f1f1f1;
  left: 40px;
  margin-left: -1.5px;
}
.timeline > li {
  margin-bottom: 50px;
  position: relative;
  min-height: 50px;
}
.timeline > li:before,
.timeline > li:after {
  content: " ";
  display: table;
}
.timeline > li:after {
  clear: both;
}
.timeline > li .timeline-panel {
  width: 100%;
  float: right;
  padding: 0 20px 0 100px;
  position: relative;
  text-align: left;
}
.timeline > li .timeline-panel:before {
  border-left-width: 0;
  border-right-width: 15px;
  left: -15px;
  right: auto;
}
.timeline > li .timeline-panel:after {
  border-left-width: 0;
  border-right-width: 14px;
  left: -14px;
  right: auto;
}
.timeline > li .timeline-image {
  left: 0;
  margin-left: 0;
  width: 100px;
  height: 150px;
  position: absolute;
  z-index: 100;
  /*background-color: #1abc9c;*/
  /*background-color: #fed136;*/
  color: white;
  border-radius: 100%;
  border: 7px solid #f1f1f1;
  text-align: center;
}
.timeline > li .timeline-image h4 {
  font-size: 10px;
  margin-top: 12px;
  line-height: 14px;
}
.timeline > li.timeline-inverted > .timeline-panel {
  float: right;
  text-align: left;
  padding: 0 20px 0 100px;
}
.timeline > li.timeline-inverted > .timeline-panel:before {
  border-left-width: 0;
  border-right-width: 15px;
  left: -15px;
  right: auto;
}
.timeline > li.timeline-inverted > .timeline-panel:after {
  border-left-width: 0;
  border-right-width: 14px;
  left: -14px;
  right: auto;
}
.timeline > li:last-child {
  margin-bottom: 0;
}
.timeline .timeline-heading h4 {
  margin-top: 0;
  color: inherit;
  font-family: 'Comfortaa', cursive !important;

}
.timeline .timeline-heading h4.subheading {
  text-transform: none;
  color:#e74c3c;
  font-family: 'Comfortaa', cursive !important;
}
.timeline .timeline-body > p,
.timeline .timeline-body > ul {
  margin-bottom: 0;
}
@media (min-width: 768px) {
  .timeline:before {
    left: 50%;
  }
  .timeline > li {
    margin-bottom: 100px;
    min-height: 100px;
  }
  .timeline > li .timeline-panel {
    width: 41%;
    float: left;
    padding: 0 20px 20px 30px;
    text-align: right;
  }
  .timeline > li .timeline-image {
    width: 100px;
    height: 100px;
    left: 50%;
    margin-left: -50px;
  }
  .timeline > li .timeline-image h4 {
    font-size: 13px;
    margin-top: 16px;
    line-height: 18px;
  }
  .timeline > li.timeline-inverted > .timeline-panel {
    float: right;
    text-align: left;
    padding: 0 30px 20px 20px;
  }
}
@media (min-width: 992px) {
  .timeline > li {
    min-height: 150px;
  }
  .timeline > li .timeline-panel {
    padding: 0 20px 20px;
  }
  .timeline > li .timeline-image {
    width: 150px;
    height: 150px;
    margin-left: -75px;
  }
  .timeline > li .timeline-image h4 {
    font-size: 18px;
    margin-top: 30px;
    line-height: 26px;
  }
  .timeline > li.timeline-inverted > .timeline-panel {
    padding: 0 20px 20px;
  }
}
@media (min-width: 1200px) {
  .timeline > li {
    min-height: 170px;
  }
  .timeline > li .timeline-panel {
    padding: 0 20px 20px 100px;
  }
  .timeline > li .timeline-image {
    width: 170px;
    height: 170px;
    margin-left: -85px;
  }
  .timeline > li .timeline-image h4 {
    margin-top: 40px;
  }
  .timeline > li.timeline-inverted > .timeline-panel {
    padding: 0 100px 20px 20px;
  }
}

.imagecaption {
        width:60%;
        top:0;
        right:0;
        position: absolute;
        background-color: rgba(255,255,255,0.9);
        text-align: center;
        /*font:300 1em Josefin Sans,Arial,Helvetica !important;*/
}

.imagecaption h4{
  margin:0px;
  padding:3%;
}
</style>




<!-- <div class="banner" style="background-color: #1abc9c;height:400px;background-size:;">
          <div class="caption" style="margin-top:5%;">
            <div class="caption-wrapper">
              <div class="caption-info">              
                <img style="width:200px;height:200px;" src="<?= base_url() ?>public/personal_template/images/logo circle green.png" class="img-circle profile">
                <h1 style="margin-top:2%;color:white;" class="animated bounceInUp">Your Personal Event Planner</h1>
              </div>
            </div>
          </div>
</div> -->




<section id="blog">
<!-- /title banner -->
<div class="col-sm-12 bannerDiv">
  <h2>Blog</h2>
  <div class="myarrow"></div>
</div>
</section>



<!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row" style="margin-top:4%;">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image col-sm-2">
                                <img style="" class="img-circle img-responsive" src="<?= base_url(); ?>public/media/profiles/1.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>2009-2011</h4>
                                    <h4 class="subheading">Our Humble Beginnings</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="<?= base_url(); ?>public/media/profiles/5.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>March 2011</h4>
                                    <h4 class="subheading">An Agency is Born</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="<?= base_url(); ?>public/media/profiles/17.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>December 2012</h4>
                                    <h4 class="subheading">Transition to Full Service</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="<?= base_url(); ?>public/media/profiles/15.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>July 2014</h4>
                                    <h4 class="subheading">Phase Two Expansion</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image" style="background-color: #1abc9c">
                                <h4>Be Part
                                    <br>Of Our
                                    <br>Story!</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>




<section id="own-story">
  <div class="col-sm-12 bannerDiv">
  <h2>Write Your Own Story</h2>
  <div class="myarrow"></div>
  <!-- <h2><i class="fa fa-arrow-down" aria-hidden="true"></i></h2> -->
</div>


<div class="col-sm-8 col-sm-offset-2" style="padding:7%;color:black;background-color: white;">

  <!-- <div class="row">
    <div class="col-sm-12">
    <h2>Lets get in touch !</h2>
    </div>
  </div> -->

  <div class="row contact_form">
    <div class="col-sm-6"><input type="text" class="form-control" placeholder="Title" /></div>
    <div class="col-sm-12">
      <textarea rows="10" cols="10" class="form-control" placeholder="Story" ></textarea>
    </div>
    <div class="col-sm-4">
      <button type="submit" class="btn  btn-default">Submit</button>
    </div>
  </div>
</div>


</section>












<?php include('footer.php'); ?>


<script type="text/javascript">
  

  $(document).ready(function(){
    var hash = document.location.hash;
    if($(hash).length != 0 )
    {
      $('html, body').animate({
                scrollTop: $(hash).offset().top - 73
            }, 750);
  
    }
    
  });
</script>





