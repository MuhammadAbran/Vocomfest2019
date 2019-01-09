$(document).ready(function(){
  // navbar scroll
	$(window).scroll(function(){
	    	if($(window).scrollTop() >0){
	    		$('#main-navbar').addClass('navbar-scroll') ;
	    	}else{
	    		$('#main-navbar').removeClass('navbar-scroll') ;
	    	}
	    }) ;

  // slider slick
	 $('.testi-content').slick({
		 dots: true,
		 autoplay: true,
  	autoplaySpeed: 2000,
	 });

   // lightcase
	 $('a[data-rel^=lightcase]').lightcase();

   // nicescroll
	 $("body").niceScroll({
		 cursorcolor:"#95a5a6",
		 cursorwidth:"5px",
		 cursorborder:"1px solid transparent",
		 cursorborderradius:"0px"
	 });

	 // to ease when click '#' url
	$(document).on('click', 'a', function(event){
	    // event.preventDefault();

	    $('html, body').animate({
	        scrollTop: $( $.attr(this, 'href') ).offset().top
	    }, 1000);
	});
 });
