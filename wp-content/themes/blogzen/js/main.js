var window, document, jQuery;
(function ($) {
    "use strict";
    
   

		
	/*====================================
	Isotop And Masonry Active
	======================================*/
	$(window).on('load', function () {
		$('.isotop-active').masonry({
			// options
			itemSelector: '.grid-item',
		});
		if ($.fn.isotope) {
			$(".isotop-active").isotope({
				filter: '*',
			});
			$('.project-nav ul li').on('click', function () {
				$(".project-nav ul li").removeClass("active");
				$(this).addClass("active");
				var selector = $(this).attr('data-filter');
				$(".isotop-active").isotope({
					filter: selector,
					animationOptions: {
						duration: 750,
						easing: 'easeOutCirc',
						queue: false,
					}
				});
				return false;
			});
		}
	});

	

	  
    
})(jQuery);