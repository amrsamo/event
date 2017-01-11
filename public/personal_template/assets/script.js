
$(".navscroll").click(function(){

    var name = $(this).attr('name');
    // var name = "#"+name;

    if( $("#"+name).length != 0){
            var name = "#"+name;
            var navbarHeight = $(".navbar").height() + 10;
            $('html, body').animate({
                scrollTop: $(name).offset().top - navbarHeight + 12
            }, 750);
    }else
    {
        var base_url = $("#base_url").val();
        var redirect_url = base_url+"#"+name;
        window.location.href = redirect_url;
    }
    


});

$(".one-media-div").hover(function(){
    // $(this).find('.mediaInfo').css('background-color','white');
    // $(this).find('.mediaInfo').css('border','1px solid #bdc3c7');
    // $(this).find('.mediaInfo').css('border-top','none');
},function(){
    // $(this).find('.mediaInfo').css('border','none');
});



$(document).ready(function () {
        var windowHeight = screen.height;
        var navbarHeight = $(".navbar").height();
        // height = navbarHeight*8;
        var height = windowHeight - navbarHeight - navbarHeight;
        $('.mybanner').css('height', height);

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
            $(button).addClass('unlikeBTN');
            $(button).removeClass('likeBTN');
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
            $(button).addClass('likeBTN');
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




$(window).on('scroll', function() {
    var scrollTop = $(this).scrollTop();
    var navbarHeight = $(".navbar").height();
    $('.mySection').each(function() {
        var topDistance = $(this).offset().top;

        if ( (topDistance-navbarHeight) < scrollTop ) {
            $('.navscroll').each(function(){ $(this).css('border','none'); });
            var id = $(this).attr('id');
            // alert(id);
            $(".navscroll[name='"+id+"']").css('border-bottom','2px solid #e74c3c');
        }
    });
});






function isScrolledIntoView(elem)
{
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();

    var elemTop = $(elem).offset().top;
    var elemBottom = elemTop + $(elem).height();

    return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
}