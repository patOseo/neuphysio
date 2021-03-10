// Add your custom JS here.

// Navbar Toggler 
jQuery('.hamburger').off('click');
jQuery('.hamburger').on('click', function(){
  jQuery(this).toggleClass('navbar-open');
  jQuery(this).toggleClass('is-active');
  jQuery('.nav-overlay').fadeToggle();
  jQuery('body').toggleClass('menu-open');
});

jQuery(function($){
	// Accordion Block Plus/Minus
	// Add minus icon for collapse element which is open by default
    $(".collapse.show").each(function(){
    	$(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
    });
    
    // Toggle plus minus icon on show hide of collapse element
    $(".collapse").on('show.bs.collapse', function(){
    	$(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
    }).on('hide.bs.collapse', function(){
    	$(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
    });

    // Company logos slider
    $('.companies-slider').slick({
      slidesToShow: 5,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 4000,
    });
});

