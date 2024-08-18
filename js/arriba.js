$(document).ready(function(){
	$('.ir-arriba').click(function(){
		$('body, html').animate({
			scrollTop: '0px'
		}, 120);
	});
	$(window).scroll(function(){
		if( $(this).scrollTop()> 0 ){
			$('.ir-arriba').slideDown(120);
		} else {
			$('.ir-arriba').slideUp(120);
		}
	});
});