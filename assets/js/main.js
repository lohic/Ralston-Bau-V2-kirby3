// javascript
 
$(function(){

	console.log('Ralston Bau ok');


	$('.prettySocial').prettySocial();

	$('.gallery').slick({
		dots: false,
		infinite: true,
		speed: 300,
		slidesToShow: 1,
		centerMode: false,
		variableWidth: true
	});

})