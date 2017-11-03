jQuery(document).ready(function ($) {		
	$('.search-icon').click(function(event) {
		if($(this).find('.fa').hasClass('fa-search')){
			$(this).parent().find('.search-form').fadeIn(400);
			$(this).find('.fa-search').removeClass('fa-search').addClass('fa-close');
		}
		else if($(this).find('.fa').hasClass('fa-close')){
			$(this).parent().find('.search-form').fadeOut(400);
			$(this).find('.fa-close').removeClass('fa-close').addClass('fa-search');
		}
	});

	//Плавная прокрутка
  	$("a[href*='#']").bind("click", function(e){
		var anchor = $(this);
		$('html, body').stop().animate({
			scrollTop: $(anchor.attr('href')).offset().top
		}, 500);
		e.preventDefault();
		return false;
	});
});