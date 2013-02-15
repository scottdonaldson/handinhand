$('document').ready(function(){

	// ----- MENU ------- //

	$('.sub-menu').hide();
	
	if((!navigator.userAgent.match(/iPhone/i)) && (!navigator.userAgent.match(/iPod/i)) && (!navigator.userAgent.match(/iPad/i))) {
		
		$('li.menu-item').mouseenter(function(){
			$(this).find('.sub-menu').slideDown('fast');
		});	
		
		$('li.menu-item').mouseleave(function(){
			$(this).find('.sub-menu').slideUp('fast');
		}); 
	}
		
	
	// ------ BANNER TEXT ------- //
	
	
	$('.banner-text p').each(function(i){
									  
		var length = $(this).text().length;	
		
		if(length<30) {
			$(this).addClass('banner-extralarge');
		} else if(length<80) {
			$(this).addClass('banner-large');
		} else if(length<150) {
			$(this).addClass('banner-medium');	
		} else if(length>151) {
			$(this).addClass('banner-small');
		}
	});
	
	
	// -------- BANNER SLIDERS -------- //
	
	$('.flexslider').flexslider({
		animation:'slide',	
		animationDuration:800,
		controlNav:false,
		directionNav:false,
		keyboardNav:false,
		slideshowSpeed:6500,
	});
	
	$('#tagline').fitText(2);  
	
	
	// --------- Fitvids ---------- //
	
	$('article').fitVids();
	
});