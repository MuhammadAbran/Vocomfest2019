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
})

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
    duration: 2000,
    origin:'bottom',
    distance:'200px'
});
sr.reveal('.top-animated', {
    duration: 2000,
    origin:'top',
    distance:'200px'
});

sr.reveal('.left-animated', {
    duration: 2000,
    origin:'left',
    distance:'200px'
});
sr.reveal('.right-animated', {
    duration: 2000,
    origin:'right',
    distance:'200px'
});


$(".btn,a").hover(function(){
    $(this).addClass('animated pulse infinite ');
});
$(".btn,a").mouseleave("animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd",function(){
    $(this).removeClass('animated pulse infinite ');
});


$('body').on('click','.publish-btn',function(){
    alert('hai');
})

