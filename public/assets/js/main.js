// Scrolling Effect
$('#sidebarCollapse').on('click', function () {
    $('#sidebar').toggleClass('active');
});


$(window).on("scroll", function() {
    if($(window).scrollTop()) {
          $('nav').addClass('navScroll');
          $('.logo-nav').addClass('logo-nav-white');

    }

    else {
          $('nav').removeClass('navScroll');
          $('.logo-nav').removeClass('logo-nav-white');
    }
});

$(document).ready(function($) {
    $('a[data-rel^=lightcase]').lightcase();
});





$(".btn,a").hover(function(){
    $(this).addClass('animated pulse infinite ');
});
$(".btn,a").mouseleave("animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd",function(){
    $(this).removeClass('animated pulse infinite ');
});


