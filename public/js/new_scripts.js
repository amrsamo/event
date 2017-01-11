/* activate scrollspy menu */
$('body').scrollspy({
  target: '#navbar-collapsible',
  offset: 52
});

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



$(".navbar-nav a").click(function()
{
    var href = $(this).attr('href');
    if($(href).length == 0)
    {
      if(href == '#categories' || href == '#')
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
            $(button).find('.fa').removeClass('fa-square-o');
            $(button).find('.fa').addClass('fa-check-square-o');
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
            $(button).find('.fa').addClass('fa-square-o');
            $(button).find('.fa').removeClass('fa-check-square-o');
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

