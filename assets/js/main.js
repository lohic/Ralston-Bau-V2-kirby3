/* ==========================================================================
   DESIGNED BY Loïc Horellou
   			   www.loichorellou.net
   it's a little bit messy here !
   ========================================================================== */

// javascript

var overmenu = false;
var lastDelta = 0;
var cookieExpiration = new Date(new Date().getTime() + 60 * 60 * 1000); // 60 minutes



$(function(){

	console.log('Ralston Bau ok');
	let domainName = $("[name='rb:domain']").attr("content");
	// console.log('domain', domainName);
	
	 
	if( document.referrer.search( domainName ) === -1){
		let hideLanding = false
		Cookies.set('hideLanding', hideLanding, { path: '/', domain: domainName, expires: cookieExpiration })
	}

	let isMenuOpened = Cookies.get('menu.open') === "true" ? true : false;
	let hideLanding  = Cookies.get('hideLanding') === "true" ? true : false;

	console.log("hideLanding",hideLanding)

	// console.log('isMenuOpened',isMenuOpened);

	$("body").addClass("notransition");


	if(isMenuOpened === true){
		$("#info").removeClass("loading");
		$("#main").removeClass("loading");
	}else{
		$("#info").addClass("loading");
		$("#main").addClass("loading");
	}

	let clearNoTransition = window.setTimeout( function(){ $("body").removeClass("notransition"); console.log("transition ok") },2000);
	

	if( hideLanding && $("body").hasClass("home") ){
		$("#intro").hide()
		$("#newsletter").show()
		$(".the-grid").show()
	}


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

	$("a:not(:internal)").click(function(event){
		$(this).attr("target", "_blank");

		// console.log( "EXTERNAL : ",$(this).attr("href") );
	});



	/**
	 * MENU
	 * @type {[type]}
	 */
	let selectedMenu = $("#main-content").data('menu');
	let selectedSubMenu = $("#main-content").data('submenu');

	// console.log("selectedMenu:" + selectedMenu + " | selectedSubMenu:" + selectedSubMenu);

	if(selectedMenu != ""){
		$("#main-menu").find("."+selectedMenu).addClass('selected');
		$("#secondary-menu").find("."+selectedMenu).css("display","block");
	}

	if(selectedSubMenu != ""){
		$("#main-menu").find("."+selectedSubMenu).addClass('active');
		$("#secondary-menu").find("."+selectedSubMenu).addClass('active');
	}


	$("#main-menu>ul>li>a").click(function(event){

		// console.log("#main-menu item click");

		$("#main-menu li").removeClass('selected');
		$("#main-menu li, #secondary-menu li").removeClass('active');
		$("#secondary-menu ul").css("display","none");

		$(this).parent().addClass('selected');

		$("#info").removeClass("loading");
		$("#main").removeClass("loading");

		let clickedMenu = $(this).parent().data('menu');
		$("#secondary-menu").find("."+clickedMenu).css("display","block");
	});

	$(".menu a").click(function(event){
		isMenuOpened = true;
		Cookies.set('menu.open', isMenuOpened, { path: '/', domain: domainName, expires: cookieExpiration });
		// console.log('isMenuOpened',isMenuOpened);
	})



	/**
	 * MOBILE MENU
	 */

	$("#hamburger").click(function(event){

		$(this).toggleClass('active')
		$("#mobile-menu").toggleClass("show");

	});



	$("body").mousemove(function(event){
		if( event.originalEvent.clientX < $("#main").offset().left ){
			overmenu = true;
		}else{
			overmenu = false;
		}
		setTimeout(function(){
			if(!overmenu){
				$("#info").addClass("loading");
				$("#main").addClass("loading");

				isMenuOpened = false;
				Cookies.set('menu.open', isMenuOpened, { path: '/', domain: domainName, expires: cookieExpiration });
				// console.log('isMenuOpened',isMenuOpened);
			}
		}, 2000);
	})


	/**
	 * LANDING ON HOME
	 */

	if( !hideLanding && $("body").hasClass("home") ){
		

		$("#intro").show()
		$("#newsletter").hide()
	 	$(".the-grid").hide()


	 	if( !is_touch_device() ){
	 		console.log("LANDING PAGE Desktop")

			setTimeout(function(){
				console.log("grid fade in out")

				$(".the-grid").fadeIn(2000)
				$("#newsletter").show()
				$("#intro").fadeOut(2000, function(){

					console.log("end fade out")

					hideLanding = true
					Cookies.set('hideLanding', hideLanding, { path: '/', domain: domainName, expires: cookieExpiration })

				});


				// isMenuOpened = false;
				// Cookies.set('menu.open', isMenuOpened, { path: '/', domain: domainName });

			}, 6000);

		}else{
			console.log("LANDING PAGE Touch")
			// https://css-tricks.com/simple-swipe-with-vanilla-javascript/
			
			var hammertime = new Hammer(document.querySelector("#intro"));
			hammertime.get('swipe').set({ direction: Hammer.DIRECTION_VERTICAL });
			hammertime.on('pan', function(ev) {
				// console.log(ev, ev.deltaY, "translate", `translate3d(0px, ${ev.deltaY}px, 0px)`);

				$("#intro")
				.css("transition", "none")
				.css("transform", `translate3d(0px, ${ev.deltaY}px, 0px)`)

				lastDelta = ev.deltaY;
			});
			hammertime.on('panend', function(ev) {
				// console.log(ev, ev.deltaY);

				

				if(lastDelta > 300 || lastDelta < -300){
					$(".the-grid").fadeIn(1000)
					$("#newsletter").show()
					$("#intro")
					.css("transition", "transform ease-in-out 0.5s")
					.css("transform", `translate3d(0px, ${2 * lastDelta}px, 0px)`)
					.fadeOut(1000, function(){

						console.log("end fade out")

						hideLanding = true
						Cookies.set('hideLanding', hideLanding, { path: '/', domain: domainName, expires: cookieExpiration })

					});
				}else{
					$("#intro")
					.css("transition", "transform ease-in-out 0.5s")
					.css("transform", "translate3d(0px, 0px, 0px)")
				}
			});
			// hammertime.on('swipe', function(ev) {
			// 	// console.log(ev);

			// 	$(".the-grid").fadeIn(1000)
			// 	$("#newsletter").show()
			// 	$("#intro").fadeOut(1000, function(){

			// 		console.log("end fade out")

			// 		hideLanding = true
			// 		Cookies.set('hideLanding', hideLanding, { path: '/', domain: domainName })

			// 	});
			// });

		}



	} else {
		$("#intro").hide()
		$("#newsletter").show()
		$(".the-grid").show()
	}

	// pour réafficher l'annonce après la fermeture de la fenetre
	// $(window).on( "unload",function() {
	// 	hideLanding = false
	// 	Cookies.set('hideLanding', hideLanding, { path: '/', domain: domainName, expires: cookieExpiration })
	// })




	/**
	 * GRID
	 * @type {String}
	 */
	setTimeout(function(){
		if(!overmenu){
			$("#info").addClass("loading");
			$("#main").addClass("loading");

			isMenuOpened = false;
			Cookies.set('menu.open', isMenuOpened, { path: '/', domain: domainName });

			// console.log('isMenuOpened',isMenuOpened);
		}
	}, 2000);

	$("#info a").click(function(e){
		e.stopPropagation();
	})

	$("#info").click(function(e){
		$("#info").toggleClass("loading");
		$("#main").toggleClass("loading");

		if( $("#main").hasClass('loading') ){
			isMenuOpened = false;
		}else{
			isMenuOpened = true;
		}
		Cookies.set('menu.open', isMenuOpened, { path: '/', domain: domainName });
		// console.log('isMenuOpened',isMenuOpened);
		$("body").removeClass("notransition");
	})


	
	/**
	 * GALLERY CAROUSSEL
	 * @type {Boolean}
	 */
	
	$('.gallery').each(function(){

		let showdots = false;

		if( $(this).find("figure").length > 1 ){
			showdots = true;
		}

		$(this).slick({
			dots: showdots,
			infinite: false,
			speed: 300,
			slidesToShow: 1,
			centerMode: false,
			variableWidth: true
		});
	})


	/**
	 * GALLERY FANCYBOX
	 */

	$('[data-fancybox="gallery"]').fancybox({
		infobar: false,
		toolbar: false, //"auto",
	});


	/**
	 * SCROLL MENU BEHAVIOR
	 */

	var previousScrollVal = 0;

	$(window).scroll(function(){
		// console.log( $('body').scrollTop() + " " + ( $(document).height() - $('body').height() ) );
		if( $('body').scrollTop() >= ( $(document).height() - $('body').height() ) ){
			$("#search-newsletter").addClass("show");
		}else{
			$("#search-newsletter").removeClass("show");
		}
	})

	$(window).bind('scroll', function(e) {
		var val = $(this).scrollTop();

		// console.log(previousScrollVal - val);

		if( previousScrollVal - val >= 0){ // on remonte

			$("#search-newsletter").addClass("show");
			$("#title>h1").removeClass("hide");
		}else{
			if (val >= ( $(document).height() - $('body').height() )) {
				$("#search-newsletter").addClass("show");
			} else {
				$("#search-newsletter").removeClass("show");
			}
			if (val > 40) {
				$("#title>h1").addClass("hide");
			} else {
				$("#title>h1").removeClass("hide");
			}
		}
		previousScrollVal = val;

	});
	
	


	/**
	 * NEWSLETTER
	 */
	$("#newsletter").css("visibility", "hidden");

	$("#btn-newsletter").click(function(event){
		$('#newsletter #tlemail').val("");
		$("#newsletter")
			.css("visibility", "")
			.addClass('open');//.show();
	});

	$("#newsletter").click(function(event){
		$("#newsletter")
			.removeClass('open');//.hide();
	});	

	$("input, textarea, #btn-send").click(function(event){
		// console.log("stop propagation")
		event.stopPropagation();
	});

	
});


jQuery.event.special.touchstart = {
  setup: function( _, ns, handle ){
    if ( ns.includes("noPreventDefault") ) {
      this.addEventListener("touchstart", handle, { passive: false });
    } else {
      this.addEventListener("touchstart", handle, { passive: true });
    }
  }
};

jQuery.event.special.touchmove = {
  setup: function( _, ns, handle ){
    if ( ns.includes("noPreventDefault") ) {
      this.addEventListener("touchmove", handle, { passive: false });
    } else {
      this.addEventListener("touchmove", handle, { passive: true });
    }
  }
};

function is_touch_device() {
	return (('ontouchstart' in window)
		|| (navigator.MaxTouchPoints > 0)
		|| (navigator.msMaxTouchPoints > 0));
}

// if (!is_touch_device()) {
//  document.getElementById('touchOnly').style.display='none';
// }

