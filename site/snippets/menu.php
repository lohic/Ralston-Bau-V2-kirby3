<!-- menu.php -->


<div id="title" class="drawer">
	<h1><a class="logo" href="<?= $site->url() ?>"><img id="logo" src="<?= $kirby->url() ?>/assets/images/logo.svg" alt="Ralston Bau"></a></h1>

	<nav class="languages" role="navigation">
		<ul>
			<?php foreach($kirby->languages() as $language): ?>
			<li<?php e($kirby->language() == $language, ' class="active"') ?>>
				<a href="<?= $page->url($language->code()) ?>">
					<?= html($language->name()) ?>
				</a>
			</li>
			<?php endforeach ?>
		</ul>
	</nav>


	<div id="contact">
		<a href="https://www.facebook.com/ralstonbau" target="_blank"><img class="btn-facebook" src="<?= $kirby->url() ?>/assets/images/facebook-black.svg" alt="facebook"></a>
		<a href="https://www.instagram.com/studioralstonbau" target="_blank"><img class="btn-instagram" src="<?= $kirby->url() ?>/assets/images/instagram-black.svg" alt="instagram"></a>
		<a href="mailto:studio@ralstonbau.com"><img class="btn-mail" src="<?= $kirby->url() ?>/assets/images/mail-black.svg" alt="mail"></a>
	</div>


	<!-- social + external -->
	<?php if ($about = page('about')): ?>
	<nav class="social">   
		<?php foreach ($about->social()->toStructure() as $social): ?>
			<a href="<?= $social->url() ?>" target="_blank"><?= $social->platform() ?></a>
		<?php endforeach ?>
	</nav>
	<?php endif ?>

	<button id="btn-newsletter"><?= t('newsletter','Newsletter') ?></button>        
</div>


<div id="content" class="drawer">
	<div id="info" class="drawer">
			
		<h1>Now</h1>


		<?php foreach($site->children()->findBy('uid','notes')->children()->visible()->sortBy('date', 'asc') as $article): ?>

		<div>
			<h2><?= $article->title()->html() ?></h2>
			<p><?= $article->place()->text() ?><br><?= $article->datefromto()->text() ?></p>
		</div>
	
		<?php endforeach; ?>



		<!-- pages -->
		<nav id="menu" class="menu">
			<?php foreach ($site->children()->listed() as $item): ?>
				<?= $item->title()->link() ?>
			<?php endforeach ?>
		</nav>

		<!-- cases -->
		<?php if ($casethemes = page('cases')->children()->listed()->pluck("themes", ",", true)): ?>
		<nav id="menu-cases" class="menu">
			<?php foreach ($casethemes as $theme): ?>
				<a href="<?= $site->url().'/cases/theme:'.$theme ?>"><?= html($theme) ?></a>
			<?php endforeach ?>
		</nav>
		<?php endif ?>

		<!-- practices -->
		<?php if ($practicetype = page('practices')->children()->listed()->pluck("practicetype", ",", true)): ?>
		<nav id="menu-practices" class="menu">
			<?php foreach ($practicetype as $step): ?>
				<a href="<?= $site->url().'/practices/practicetype:'.$step ?>"><?= html($step) ?></a>
			<?php endforeach ?>
		</nav>
		<?php endif ?>

		

	</div>


	<div id="main" class="drawer">

<!-- fin menu.php -->