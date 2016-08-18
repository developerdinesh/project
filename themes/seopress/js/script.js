( function( $ ) {
	$(document).ready(function() {
			
			//back to top
			var scrollTrigger = 500;
			$(window).on('scroll', function () {
				var scrollTop = $(window).scrollTop();
				if( scrollTop > scrollTrigger )
				{
					$('#back-to-top').addClass('back-to-top-show');
				}
				else
				{
					$('#back-to-top').removeClass('back-to-top-show');
				}
			});
				
			$('#back-to-top').on('click', function (e) {
				e.preventDefault();
				$('html,body').animate({
					scrollTop: 0
				}, 700);
			});
			//back to top END
			
			//Add img-responsive class to all images
			 $('body img').addClass("img-responsive");
			 //Add img-responsive class to all images END
			
			
			
			//Load start
			$(window).load(function() {
				$(".seopress-load-icon").fadeOut("slow");
			});
			//Load start END
			
			
		});
		

	
} )( jQuery );
