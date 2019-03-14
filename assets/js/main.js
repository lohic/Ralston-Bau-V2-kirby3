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


	$('.prettySocial').prettySocial();

	$('.gallery').slick({
		dots: false,
		infinite: true,
		speed: 300,
		slidesToShow: 1,
		centerMode: false,
		variableWidth: true
	});

	$("#secondary-menu .active").parent().addClass('show');

	$("#main-menu>ul>li li>a").click(function(event){

		// console.log($(this).attr("href"));
		// 
		// console.log( $("#secondary-menu .active").parent().addClass('show') );

		$("#secondary-menu .active").parent().addClass('show')

		// if($(this).attr("href") == $("nav.sub-menu .active>a").attr("href")){
		// 	console.log( $(this).parent().parent() );
		// }

		// event.preventDefault();

		// console.log("ok");
		// console.log( $(this).parent().find('.sub-menu').html() );

		// $("nav.sub-menu").html( $(this).parent().find('.sub-menu').html() );

	})

	// if( $(this).parent().parent().attr("id") == "menu-menu-mediatheque" ){
	// 	// console.log("MAIN MENU");
		
	// 	$("nav a").removeClass('active');
	// 	$(this).addClass('active');

	// 	$(".col2").hide();
	// 	$(".col2").html("");
	// 	submenu = $(this).parent().find('.sub-menu').html();				
	// }else{
	// 	// console.log("SUB MENU");
	// 	$(".col2 a").removeClass('active');
	// 	$(this).addClass('active');
	// }



	// // console.log("submenu",submenu);

	// if(submenu !== "" && submenu !== undefined){
	// 	$(".col2").scrollTop(0);
	// 	$(".col2").html("<ul>"+submenu+"</ul>");

	// 	$("nav a").unbind("click");

	// 	$(".col2").show();

	// 	$(".col2").optiscroll();
	// 	// $(".col2").optiscroll({ forceScrollbars: true });

	// 	bindMenuAction();
	// }else{
	// 	// $(".col2").html("");
	// }

})