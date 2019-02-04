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


$('.center').slick({
    centerMode: true,
    centerPadding: '60px',
    slidesToShow: 3,
    responsive: [
        {
        breakpoint: 768,
        settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 1
        }
        },
        {
        breakpoint: 480,
        settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 1
        }
        }
    ]
});

window.sr = ScrollReveal({reset:true});

sr.reveal('.bottom-animated', {
    duration: 1500,
    origin:'bottom',
    distance:'50px'
});


$("html").easeScroll({

    frameRate: 60,
    animationTime: 2500,
    stepSize: 250,
    pulseAlgorithm: 1,
    pulseScale: 8,
    pulseNormalize: 1,
    accelerationDelta: 20,
    accelerationMax: 1,
    keyboardSupport: true,
    arrowScroll: 350,
    touchpadSupport: true,
    fixedBackground: true
  
  });

