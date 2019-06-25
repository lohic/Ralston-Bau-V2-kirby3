<?php snippet('header') ?>

<!-- maintenance.php -->

<?php // https://getkirby.com/docs/cheatsheet/panel-fields/structure ?>

<?php if( ! $site->maintenance()->isTrue() ) { go('home');} ?>

<div id="title" class="drawer">
	<h1><img id="logo" src="<?= kirby()->url() ?>/assets/images/logo.svg" alt="Ralston Bau"></h1>


	<div id="mobile-menu">

		<!-- lang selector -->
		<!-- <nav class="languages" role="navigation">
			<ul>
				<?php foreach($kirby->languages() as $language): ?>
				<li<?php e($kirby->language() == $language, ' class="active"') ?>>
					 <a href="<?= $page->url($language->code()) ?>"><?= html($language->name()) ?></a>
				</li>
				<?php endforeach ?>
			</ul>
		</nav> -->
	</div>


	<button id="btn-newsletter"><?= t('newsletter','Newsletter') ?></button>        
</div>

<div id="content" class="drawer maintenance">
	<div id="info" class="drawer">
			
		<h1>Now</h1>


		<?php foreach(pages('notes')->children()->listed()->sortBy('date', 'asc') as $article): ?>

		<div>
			<h2><?= $article->title()->html() ?></h2>
			<p><?= $article->place()->text() ?><br><?= $article->datefromto()->text() ?></p>
		</div>
	
		<?php endforeach; ?>
	</div>


	<div id="main" class="drawer">
	
		<p id="cases" class="togglebloc hideonopen">Cases and practice will soon be shown here.</p>
		
		<div id="intro" class="togglebloc hideonclose">
			<p class="lang"><?= page('home')->intro()->text() ?></p>
		</div>


		<div id="contact">
			<a href="http://www.ideal-lab.org" target="_blank"><img class="btn-ideallab" src="<?= kirby()->url() ?>/assets/images/ideal_lab_logo-white.svg" alt="ideal lab"></a>
			<a href="http://www.idealist.institute" target="_blank"><img class="btn-idealistinstitute" src="<?= kirby()->url() ?>/assets/images/idealist-institute-logo-white.svg" alt="idealist institute"></a>
			<a href="https://www.facebook.com/ralstonbau" target="_blank"><img class="btn-facebook" src="<?= kirby()->url() ?>/assets/images/facebook.svg" alt="facebook"></a>
			<a href="https://www.instagram.com/studioralstonbau" target="_blank"><img class="btn-instagram" src="<?= kirby()->url() ?>/assets/images/instagram.svg" alt="instagram"></a>
			<a href="mailto:studio@ralstonbau.com"><img class="btn-mail" src="<?= kirby()->url() ?>/assets/images/email.svg" alt="mail"></a>
		</div>
	</div>

</div>


<script>

	var lang_arr = ["en", "no", "fr"];
	var lang_id  = 0;

	var intro = {
		"fr" : "<?= page('home')->content('fr')->intro()->text() ?>",
		"en" : "<?= page('home')->content('en')->intro()->text() ?>",
		"no" : "<?= page('home')->content('no')->intro()->text() ?>"
	};	

	// $(document).ready(function(){
	// 	console.log("RALSTON BAU ok");



	// 	//  MAINTENANCE DRAWERS
	// 	$('.lang').text( intro.en );

	// 	setTimeout(function(){ 
	// 		$("#info").toggleClass("loading");
	// 		$("#main").toggleClass("loading");
	// 	}, 2000);


	// 	$("#info").click(function(e){
	// 		$("#info").toggleClass("loading");
	// 		$("#main").toggleClass("loading");
	// 	})

		var lang_bloc = document.querySelector("p.lang");

	// 	console.log(lang_bloc);

		lang_bloc.addEventListener("animationstart", listener, false);
		lang_bloc.addEventListener("animationend", listener, false);
		lang_bloc.addEventListener("animationiteration", listener, false);


		function listener(event) {
			console.log("ok listener");

			switch(event.type) {
				case "animationstart":
					console.log("animationstart");
				break;
				case "animationend":
					console.log("animationend");
				break;
				case "animationiteration":
					lang_id  = (lang_id + 1)%lang_arr.length;

					console.log("animationiteration");
					$('.lang').text( intro[ lang_arr[lang_id] ] );
				break;
			}
		}




	// 	// STORIES PANEL
	// 	$("#newsletter").css("visibility", "hidden");

	// 	$("#btn-newsletter").click(function(event){
	// 		$("#newsletter")
	// 			.css("visibility", "")
	// 			.addClass('open');//.show();
	// 	});

	// 	$("#newsletter").click(function(event){
	// 		$("#newsletter")
	// 			.removeClass('open');//.hide();
	// 	});

	// })


</script>

<!-- fin maintenance.php -->

<?php snippet('footer') ?>