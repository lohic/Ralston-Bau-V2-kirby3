menu.php -->


<div id="title" class="drawer">
	<h1><a class="logo" href="<?= $site->url() ?>"><img id="logo" src="<?= $kirby->url('assets') ?>/images/logo.svg" alt="Ralston Bau"></a></h1>

	<!-- main menu -->
	<nav id="main-menu">
		<ul>
			<li class="practices"><a href="#"><?= t('practice') ?></a>
				<ul class="sub-menu">
					<?php if ($practicetype = page('practices')->children()->listed()->pluck("practicetype", ",", true)): ?>
					<?php foreach ($practicetype as $step): ?>
						<li <?php e(Url::current() == $site->url().'/practices/practicetype:'.$step, ' class="active"') ?>><a href="<?= $site->url().'/practices/practicetype:'.$step ?>"><?= html($step) ?></a></li>
					<?php endforeach ?>
					<?php endif ?>
				</ul>
			</li>
			<li class="cases"><a href="#"><?= t('cases') ?></a>
				<ul class="sub-menu">
					<?php if ($casethemes = page('cases')->children()->listed()->pluck("themes", ",", true)): ?>
					<?php foreach ($casethemes as $theme): ?>
						<li <?php e(Url::current() == $site->url().'/cases/theme:'.$theme, ' class="active"') ?>><a href="<?= $site->url().'/cases/theme:'.$theme ?>"><?= html($theme) ?></a></li>
					<?php endforeach ?>
					<?php endif ?>
				</ul>
			</li>
			<li class="studio"><a href="#"><?= t('studio') ?></a>
				<ul class="sub-menu">
					<!-- pages -->
					<?php foreach ($site->children()->listed() as $item): ?>
						<li <?php e(Url::current() == $item->url(), ' class="active"') ?>><?= $item->title()->link() ?></li>
					<?php endforeach ?>
				</ul>
			</li>
		</ul>
	</nav>

	<!-- lang selector -->
	<nav class="languages" role="navigation">
		<ul>
			<?php foreach($kirby->languages() as $language): ?>
			<li<?php e($kirby->language() == $language, ' class="active"') ?>>
				 <a href="<?= $page->url($language->code()) ?>"><?= html($language->name()) ?></a>
			</li>
			<?php endforeach ?>
		</ul>
	</nav>

	<!-- contact menu  -->
	<nav id="contact">
		<?php if ($about = page('about')): ?>
		<?php foreach ($about->social()->toStructure() as $social): ?>
			<a href="<?= $social->url() ?>" target="_blank"><?= $social->platform() ?></a>
		<?php endforeach ?>
		<?php endif ?>
		<a href="https://www.facebook.com/ralstonbau" target="_blank"><img class="btn-facebook" src="<?= $kirby->url('assets') ?>/images/facebook-black.svg" alt="facebook"></a>
		<a href="https://www.instagram.com/studioralstonbau" target="_blank"><img class="btn-instagram" src="<?= $kirby->url('assets') ?>/images/instagram-black.svg" alt="instagram"></a>
		<a href="mailto:studio@ralstonbau.com"><img class="btn-mail" src="<?= $kirby->url('assets') ?>/images/mail-black.svg" alt="mail"></a>
	</nav>
	

	<button id="btn-newsletter"><?= t('newsletter','Newsletter') ?></button>        
</div>


<div id="content" class="drawer">
	<div id="info" class="drawer">
			
		

		<nav id="secondary-menu">
			<ul class="practices sub-menu">
				<?php if ($practicetype = page('practices')->children()->listed()->pluck("practicetype", ",", true)): ?>
				<?php foreach ($practicetype as $step): ?>
					<li <?php e(Url::current() == $site->url().'/practices/practicetype:'.$step, ' class="active"') ?>><a href="<?= $site->url().'/practices/practicetype:'.$step ?>"><?= html($step) ?></a></li>
				<?php endforeach ?>
				<?php endif ?>
			</ul>
			<ul class="cases sub-menu">
				<?php if ($casethemes = page('cases')->children()->listed()->pluck("themes", ",", true)): ?>
				<?php foreach ($casethemes as $theme): ?>
					<li <?php e(Url::current() == $site->url().'/cases/theme:'.$theme, ' class="active"') ?>><a href="<?= $site->url().'/cases/theme:'.$theme ?>"><?= html($theme) ?></a></li>
				<?php endforeach ?>
				<?php endif ?>
			</ul>
			<ul class="studio sub-menu">
				<!-- pages -->
				<?php foreach ($site->children()->listed() as $item): ?>
					<li <?php e(Url::current() == $item->url(), ' class="active"') ?>><?= $item->title()->link() ?></li>
				<?php endforeach ?>
			</ul>
		</nav>
	
		<!-- <h1>Now</h1> -->
		<?php //foreach($site->children()->findBy('uid','notes')->children()->visible()->sortBy('date', 'asc') as $article): ?>

	<!-- 	<div>
			<h2><?php // echo $article->title()->html() ?></h2>
			<p><?php // echo $article->place()->text() ?><br><?php // echo $article->datefromto()->text() ?></p>
		</div> -->
	
		<?php //endforeach; ?>




		

	</div>


	<div id="main" class="drawer txt-normal">

<!-- fin menu.php