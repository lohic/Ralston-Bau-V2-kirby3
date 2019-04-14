<!-- menu.php -->


<div id="title" class="drawer">
	<h1><a class="logo" href="<?= $site->url() ?>"><img id="logo" src="<?= $kirby->url('assets') ?>/images/logo.svg" alt="Ralston Bau"></a></h1>
	<button id="hamburger" class="button"><!-- <img src="<?= $kirby->url('assets') ?>/images/hamburger.svg"> --></button>

	<div id="mobile-menu">
	<!-- main menu -->
	<nav id="main-menu">
		<ul>
			<!-- practices -->
			<li class="practices" data-menu="practices"><a href="#"><?= t('practice') ?></a>
				<ul class="sub-menu">

					<?php 

						$practicelist = page('practices')->children()->listed()->pluck("practicetype", ",", true);
						$practicetype = ['bigpicture','people','scenario','form'];
					 ?>
					<?php if ($practicetype): ?>
					<?php foreach ($practicetype as $step): ?>
					<?php if(in_array($step, $practicelist, true)): ?>
						<li <?php e(Url::current() == $site->url().'/practices/practicetype:'.$step, ' class="active '.$step.'"', ' class="'.$step.'"') ?>><a href="<?= $site->url().'/practices/practicetype:'.$step ?>"><?= t($step) ?></a></li>
					<?php endif ?>
					<?php endforeach ?>
					<?php endif ?>
				</ul>
			</li>
			<!-- cases -->
			<li class="cases" data-menu="cases"><a href="#"><?= t('cases') ?></a>
				<ul class="sub-menu">
					<?php if ($casethemes = page('cases')->children()->listed()->pluck("themes", ",", true)): ?>
					<?php foreach ($casethemes as $theme): ?>
						<li <?php e(Url::current() == $site->url().'/cases/theme:'.$theme, ' class="active '.$theme.'"',  ' class="'.$theme.'"') ?>><a href="<?= $site->url().'/cases/theme:'.$theme ?>"><?= html( Str::ucfirst( $theme) ) ?></a></li>
					<?php endforeach ?>
					<?php endif ?>
				</ul>
			</li>
			<!-- pages -->
			<li class="studio" data-menu="studio"><a href="#"><?= t('studio') ?></a>
				<ul class="sub-menu">
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

	
	</div>
	

	<button id="btn-newsletter" class="button"><?= t('newsletter','Newsletter') ?></button>        
</div>


<div id="content" class="drawer">
	<div id="info" class="drawer loading">
			
		

		<nav id="secondary-menu">
			<!-- practices -->
			<ul class="practices sub-menu">
				<?php if ($practicetype): ?>
				<?php foreach ($practicetype as $step): ?>
				<?php if(in_array($step, $practicelist, true)): ?>
					<li <?php e(Url::current() == $site->url().'/practices/practicetype:'.$step, ' class="active '.$step.'"', ' class="'.$step.'"') ?> ><a href="<?= $site->url().'/practices/practicetype:'.$step ?>"><?= t($step) ?></a></li>
				<?php endif ?>
				<?php endforeach ?>
				<?php endif ?>
			</ul>
			<!-- cases -->
			<ul class="cases sub-menu">
				<?php if ($casethemes): ?>
				<?php foreach ($casethemes as $theme): ?>
					<li <?php e(Url::current() == $site->url().'/cases/theme:'.$theme, ' class="active '.$theme.'"',  ' class="'.$theme.'"') ?> ><a href="<?= $site->url().'/cases/theme:'.$theme ?>"><?= html( Str::ucfirst($theme) ) ?></a></li>
				<?php endforeach ?>
				<?php endif ?>
			</ul>
			<!-- studio -->
			<ul class="studio sub-menu">
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
	<div id="main" class="drawer txt-normal loading">

<!-- fin menu.php