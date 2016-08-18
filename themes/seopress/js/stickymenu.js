( function( $ ) {
	$(document).ready(function() {
		
		if( $(window).width() > 943 )
		{
			
			//i am making #navbarouter sticky and both menu are inside this div id
			var h = $('#navbarouter').offset().top;
			
			var placeholder = document.createElement('div');
			placeholder.setAttribute("id", "menuplaceholder");
			placeholder.style.width = $('#navbarouter').width() + 'px';
			placeholder.style.height = $('#navbarouter').height() + 'px';
			
			$(window).scroll(function () {
				if( $(this).scrollTop() > h )
				{
					$('#navbarouter').addClass('seopress_sticky_menu_top');
					$('#navbarouter').after(placeholder);
					$('#menuplaceholder').css('display','block');
				}
				else
				{
					$('#navbarouter').removeClass('seopress_sticky_menu_top');
					$('#menuplaceholder').css('display','none');
				}
				
			});
			//i am making #navbarouter sticky and both menu are inside this div id END

		}
	});
})( jQuery );
