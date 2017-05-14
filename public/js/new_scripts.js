/* activate scrollspy menu */
$('body').scrollspy({
  target: '#navbar-collapsible',
  offset: 520
});

var window_width = $(window).width();
if(window_width <= 1024)
{
  // $(".category_image").css('height','250px');
}


$(".wide-container").css('height',$(".navbar").height()+"px");
var window_width = $(window).width();
var check = true;

var logo_original_height = $(".brand-div img").height();
var logo_original_width = $(".brand-div img").width();


$(window).load(function(){

  // if( $("#homepage").length)
  // {


   

    var scroll = $(window).scrollTop();
    if(scroll == 0)
    {
      $(".navbar-collapse").css('margin-top','5px');
      $(".navbar-collapse").css('background','transparent');
      $(".brand-div a").css('background','transparent');

      var brand_height = $(".brand-div img").height();
      var navbar_height = $(".navbar-collapse").height();
      var margin_top_value = ((brand_height/1.6) - navbar_height) + 'px';
      $(".navbar-left").css('margin-top',margin_top_value);
      // $(".navbar-right").css('margin-top',margin_top_value);
    }
    else
    {
      $(".navbar-left").css('margin-top','0px');
      $(".navbar-right").css('margin-top','0px');
      $(".navbar-collapse").css('background','black');
      $(".brand-div a").css('background','black');
      $(".navbar-collapse").css('margin-top','0px');
      $(".brand-div img").css('height','75px');
      $(".brand-div img").css('width','75px');
      // $(".arrow").hide();
    $("#arrow_left").css('display','none');

    }


    var left_header_content_height = $(".left_header_content").height();
    var left_header_content_offset = $('.left_header_content').offset().top;

    $("#arrow_left").height(left_header_content_height);
    $("#arrow_left").css('margin-top',left_header_content_offset-5);
    $("#arrow_right").height(left_header_content_height);
    $("#arrow_right").css('margin-top',left_header_content_offset-5);

  // }
  // else
  // {
  //   $(".brand-div").css('height',$('.navbar-left').height()+'px');
  //   $(".navbar-right").css('height',$(".navbar-left").height()+'px');
  //   $(".navbar-left").removeClass('hide');
  //   $(".brand-div img").css('height',$(".navbar-left").height()+'px');
  //   $(".brand-div img").css('width',$(".navbar-left").height()+'px');
  // }
    
var sub_category_hover = false;
var categories_header_link_hover = false;

$(".sub_category").hover(function(){
  sub_category_hover = true;
});

$(".sub_category").mouseleave(function(){
  sub_category_hover = false;
});


  $(".navbar").css('visibility','visible');
  // style="visibility: hidden"

  

  $(".categories_header_link").hover(function(){

    $('.sub_category').slideDown('fast');
    categories_header_link_hover = true;

  });

  $(".categories_header_link").mouseleave(function(){
      setTimeout(
      function() 
      {

        if(sub_category_hover == false){
          $('.sub_category').slideUp('fast');
          // categories_header_link_hover = false;
        }

      }, 500);
      categories_header_link_hover = false;
  });




  $(".sub_category").mouseleave(function(){

    // $('.sub_category').slideUp('fast');
    setTimeout(
      function() 
      {

        if(sub_category_hover == false && categories_header_link_hover == false)
          $('.sub_category').slideUp('fast');

      }, 500);

  });

  $(".header_link_div a").click(function(){
    $(this).css('text-decoration','none');
  });



  $(".category_filters span").click(function(){
    $(".category_filters span").each(function(){
      $(this).removeClass('active');
    });
    $(this).addClass('active');
  });


 


    $('.bxslider').bxSlider({
      minSlides: 3,
      maxSlides: 3,
      slideWidth: 360,
      slideMargin: 10,
      adaptiveHeight:false
    });


});



$(window).scroll(function (event) {

    

    var scroll = $(window).scrollTop();
    if(scroll == 0)
    {
      var brand_height = logo_original_height;
      var navbar_height = $(".navbar-collapse").height();
      var margin_top_value = ((brand_height/1.6) - navbar_height) + 'px';

      $(".navbar-left").css('margin-top',margin_top_value);
      $(".navbar-right").css('margin-top',margin_top_value);
      $(".navbar-collapse").css('background','transparent');
      $(".brand-div a").css('background','transparent');
      $(".navbar-collapse").css('margin-top','5px');
      $(".brand-div img").css('height',logo_original_height+'px');
      $(".brand-div img").css('width',logo_original_width+'px');
      $(".arrow").show();
      check = true;
    }
    
    if(scroll != 0 && check)
    {
      $(".navbar-left").css('margin-top','0px');
      $(".navbar-right").css('margin-top','0px');
      $(".navbar-collapse").css('background','black');
      $(".brand-div a").css('background','black');
      $(".navbar-collapse").css('margin-top','0px');
      $(".brand-div img").css('height','75px');
      $(".brand-div img").css('width','75px');
      // $(".arrow").hide();
      // $("#arrow_left").css('height','38%');
      // $("#arrow_left").css('top','0');
      // $("#arrow_right").css('height','38%');
      // $("#arrow_right").css('top','61.8%');
      $("#arrow_left").css('margin-top','0px');
      $("#arrow_right").css('margin-top','0px');
      check = false;
    }



});




$(".circle").click(function(){
      
      $("#searchForm").submit();


});

function adjustLogoWidth(x,time,top)
{
  // TO ADJUST THE LOGO WIDTH
  var window_20percert = (window_width * x ) / 100 ;
  var left = window_width - window_20percert;

  var imageSrc = $(".brand img").attr('src');
  var pos = imageSrc.indexOf("images/");
  var imageSrc = imageSrc.substring(0, pos);

  if(x == 7){
    imageSrc = imageSrc+'images/logo green.png';
    top = 0;
    $(".brand img").attr('src',imageSrc);
  }
  else{
    imageSrc = imageSrc+'images/logo circle green.png';
    $(".brand img").attr('src',imageSrc);
  }


  left = left/2;
  $( ".brand" ).animate({
    width: window_20percert+'px',
    height: window_20percert+'px',
    left : '0px',
    top : top+'px'
  }, time, function() {
     $(".brand img").attr('src',imageSrc);
     $(".brand").removeClass('hide');
     $(".landing_content").css('padding-top',($(".brand").height()/2)+top+'px');
  });
}


/* smooth scrolling sections */
$('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top - 50
        }, 800);
        
        if (this.hash=="#section1") {
            $('.scroll-up').hide();
        }
        else {
            $('.scroll-up').show();
        }
        
        
        // activte animations in this section
        target.find('.animate').delay(1200).addClass("animated");
        setTimeout(function(){
            target.find('.animated').removeClass("animated");
        },2000);
        
        return false;
      }
    }
});

var heart_div_height = $(".heart_div").height();
$(".likes_div").each(function(){
  $(this).css('height',heart_div_height);

  //get the height of the counter inside of it 
  var counterHeight = $(this).find('span').height();
  var padding = (heart_div_height - counterHeight) / 2 ;
  $(this).css('padding-top',padding-5+'px');
  $(this).css('padding-bottom',padding+'px');
})

$(".navbar-nav a").click(function()
{
    var href = $(this).attr('href');
    if($(href).length == 0)
    {
      if(href == '#' || href == '#')
      {

      }
      else
      {
        var base_url = $("#base_url").val();
        var redirect_url = base_url+href;
        window.location.href = redirect_url;
      }
    }
    
});

$(document).on('click', '.likeBTN', makeLike);
$(document).on('click', '.unlikeBTN', makeUnlike);
$(document).on('click', '.mediaModal', makeView);

function makeView()
{
    var media_id = $(this).attr('id');
    var targetURL    = $("#base_url").val()+"makeview";
    $.ajax({
    url: targetURL,
    method: "POST",
    data: { media: media_id }, 
    success: function(result)
        {

        }
    });
}


function makeLike()
{
    //Check if logged in or not
    if($("#isLoggedIn").length != 0)
    {
      var media_id     = $(this).attr('id');
      var loggedIN_id = $("#isLoggedIn").val();
      var targetURL    = $("#base_url").val()+"makelike";
      var button = $(this);
      $.ajax({
        url: targetURL,
        method: "POST",
        data: { follower: loggedIN_id, media: media_id }, 
        success: function(result)
        {
            $(button).addClass('btn-main');
            $(button).removeClass('likeBTN');
            $(button).addClass('unlikeBTN');
            $(button).find('.fa').removeClass('fa-heart-o');
            $(button).find('.fa').addClass('fa-heart');
            var likes = parseInt($('.likes_counter_'+media_id).html());
            likes++;
            $('.likes_counter_'+media_id).html(likes);
        }
      });
    }
    else
    {
      $('#signUpPopUp').modal('toggle');
    }
}

function makeUnlike()
{
    //Check if logged in or not
    if($("#isLoggedIn").length != 0)
    {
      var media_id     = $(this).attr('id');
      var loggedIN_id = $("#isLoggedIn").val();
      var targetURL    = $("#base_url").val()+"makeunlike";
      var button = $(this);
      $.ajax({
        url: targetURL,
        method: "POST",
        data: { follower: loggedIN_id, media: media_id }, 
        success: function(result)
        {
            $(button).removeClass('unlikeBTN');
            $(button).removeClass('btn-main');
            $(button).addClass('likeBTN');
            $(button).find('.fa').addClass('fa-heart-o');
            $(button).find('.fa').removeClass('fa-heart');
            var likes = parseInt($('.likes_counter_'+media_id).html());
            likes--;
            $('.likes_counter_'+media_id).html(likes);
        }
      });
    }
    else
    {
      $('#signUpPopUp').modal('toggle');
    }
}



 $(".followBTN").click(function(){

    //Check if logged in or not
    if($("#isLoggedIn").length != 0)
    {
      var user_id     = $(this).val();
      var loggedIN_id = $("#isLoggedIn").val();
      var targetURL    = $("#base_url").val()+"makefollow";

      $.ajax({
        url: targetURL,
        method: "POST",
        data: { follower: loggedIN_id, user: user_id }, 
        success: function(result)
        {
            $("#follow_"+user_id).hide();
            $("#unfollow_"+user_id).show();
        }
      });
    }
    else
    {
      $('#signUpPopUp').modal('toggle');
    }

  });


  $(".unfollowBTN").click(function(){

    //Check if logged in or not
    if($("#isLoggedIn").length != 0)
    {
      var user_id     = $(this).val();
      var loggedIN_id = $("#isLoggedIn").val();
      var targetURL    = $("#base_url").val()+"makeunfollow";

      $.ajax({
        url: targetURL,
        method: "POST",
        data: { follower: loggedIN_id, user: user_id }, 
        success: function(result)
        {
            $("#follow_"+user_id).show();
            $("#unfollow_"+user_id).hide();
        }
      });
    }
    else
    {
      $('#signUpPopUp').modal('toggle');
    }

  });

