$(function(){

	$('.aside').css('top', $('.header').css('height'));
//
	$('.main__post-like').click(function(){
		if (loged == 'false' || loged == null) {
			alert('Сначала войдите!');
		}
		else{
			$(this).toggleClass('active');
		}
	});
//  

});