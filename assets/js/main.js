// javascript
 
$(function(){

	console.log('Ralston Bau yo');


	$.expr[':'].internal = function (obj, index, meta, stack) {
	    // Prepare
	    var
	    $this = $(obj),
	    url = $this.attr('href') || '',
	    isInternalLink;
	    // Check link
	    isInternalLink = /*url.substring(0, rootUrl.length) === rootUrl ||*/ url.indexOf(':') === -1 || obj.hostname == location.hostname;
	    // Ignore or Keep
	    return isInternalLink;
	};

	/**
	 * MENU
	 * @type {[type]}
	 */
	let selectedMenu = $("#main-content").data('menu');
	$("#main-menu").find("."+selectedMenu).addClass('selected');
	$("#secondary-menu").find("."+selectedMenu).css("display","block");


	$("#main-menu>ul>li>a").click(function(event){
		$("#main-menu li").removeClass('selected');
		$("#main-menu li, #secondary-menu li").removeClass('active');
		$("#secondary-menu ul").css("display","none");

		$(this).parent().addClass('selected');

		let clickedMenu = $(this).parent().data('menu');
		$("#secondary-menu").find("."+clickedMenu).css("display","block");

	});


	/**
	 * GRID
	 * @type {String}
	 */
	setTimeout(function(){ 
		$("#info").toggleClass("loading");
		$("#main").toggleClass("loading");
	}, 2000);


	$("#info").click(function(e){
		$("#info").toggleClass("loading");
		$("#main").toggleClass("loading");
	})
	
	
	/**
	 * GALLERY CAROUSSEL
	 * @type {Boolean}
	 */
	$('.gallery').slick({
		dots: true,
		infinite: false,
		speed: 300,
		slidesToShow: 1,
		centerMode: false,
		variableWidth: true
	});

	/**
	 * SHARE
	 */
	$('.prettySocial').prettySocial();


	/**
	 * NEWSLETTER
	 */
	$("#newsletter").css("visibility", "hidden");

	$("#btn-newsletter").click(function(event){
		$("#newsletter")
			.css("visibility", "")
			.addClass('open');//.show();
	});

	$("#newsletter").click(function(event){
		$("#newsletter")
			.removeClass('open');//.hide();
	});	
})

