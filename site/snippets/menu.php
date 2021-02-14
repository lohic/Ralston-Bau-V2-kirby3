<!-- menu.php -->


<div id="title" class="drawer">
	<?php if($logo = $site->logo()->toFile() ): ?>
	<h1><a class="logo" href="<?= $site->url() ?>"><img id="logo" class="custom" src="<?= $logo->url() ?>" alt="Ralston Bau"></a></h1>
	<?php else : ?>
	<h1><a class="logo" href="<?= $site->url() ?>"><img id="logo" src="<?= $kirby->url('assets') ?>/images/logo.svg" alt="Ralston Bau"></a></h1>
	<?php endif; ?>
	<button id="hamburger" class="button">
		<div class="hamburger-box">
			<div class="hamburger-inner"></div>
		</div><!-- <img src="<?= $kirby->url('assets') ?>/images/hamburger.svg"> -->
	</button>


	<!-- MOBILE MENU -->
	<div id="mobile-menu">
	<!-- main menu -->
	<nav id="main-menu" class="menu">
		<ul>
			<!-- practices -->
			<li class="practices" data-menu="practices"><a href="#"><?= $site->practicetxt()->text() //t('practice') ?></a>
				<ul class="sub-menu">

					<?php 

						$practicelist = page('practices')->children()->listed()->pluck("practicetype", ",", true);
						$practicetype = ['bigpicture','people','scenario','form'];
					 ?>
					<?php if ($practicetype): ?>
					<?php foreach ($practicetype as $step): ?>
					<?php if(in_array($step, $practicelist, true)): ?>
						<li <?php e(Url::current() == $site->url().'/practices/practicetype:'.$step, ' class="active '.$step.'"', ' class="'.$step.'"') ?>><a href="<?= $site->url().'/practices/practicetype:'.$step ?>"><?=  $site->{$step.'txt'}()->text()//t($step) ?></a></li>
					<?php endif ?>
					<?php endforeach ?>
					<?php endif ?>
				</ul>
			</li>
			<!-- cases -->
			<li class="cases" data-menu="cases"><a href="#"><?= $site->casestxt()->text() //t('cases') ?></a>
				<ul class="sub-menu">
					<?php $casethemes2 = $site->projectscategories()->toStructure(); ?>
					<?php foreach ($casethemes2 as $theme): ?>
						
						<?php

						$themename = $theme->{ "name_" . kirby()->language() }()->text();

						if( $themename->isEmpty() ){
							$themename = $theme->name_en()->text();
						}

						// echo $themename;
						?>

						<li <?php e(Url::current() == $site->url().'/cases/theme:'.$theme->name_en()->text(), ' class="active '.$theme->name_en()->text().'"',  ' class="'.$theme->name_en()->text().'"') ?>><a href="<?= $site->url().'/cases/theme:'.$theme->name_en()->text() ?>"><?= html( Str::ucfirst( $themename ) ) ?></a></li>
					<?php endforeach ?>

				</ul>
			</li>
			<!-- pages -->
			<li class="studio" data-menu="studio"><a href="#"><?= $site->studiotxt()->text() //t('studio') ?></a>
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
			<?php // if( $language->code() != "no"): ?>
			<li<?php e($kirby->language() == $language, ' class="active"') ?>>
				 <a href="<?= $page->url($language->code()) ?>"><?= html($language->name()) ?></a>
			</li>
			<?php // endif; ?>
			<?php endforeach ?>
		</ul>
	</nav>

	
	</div>


	<div id="search-newsletter">
		<?php if($site->enablesearch()->isTrue()) :?>
		<form class="search-form" action="<?= $site->page('search')->url() ?>">
			<?php 

			if(!isset( $query ) ){
				$query = "";
			}

			?>
			<input type="text" name="q" value="<?= html($query) ?>">
			<button type="submit"><img alt="search" src="<?= $kirby->url('assets') ?>/images/search-black.svg"></button>
		</form>
		<?php endif; ?>  
		
		<?php if($site->newsletterform()->isTrue()) :?>
		<button id="btn-newsletter" class="button"><?= t('newsletter','Newsletter') ?></button> 
		<?php endif; ?> 
	</div>    
</div>


<div id="content" class="drawer">
	<div id="info" class="drawer loading">
			
		

		<nav id="secondary-menu" class="menu">
			<!-- practices -->
			<ul class="practices sub-menu">
				<?php if ($practicetype): ?>
				<?php foreach ($practicetype as $step): ?>
				<?php if(in_array($step, $practicelist, true)): ?>
					<li <?php e(Url::current() == $site->url().'/practices/practicetype:'.$step, ' class="active '.$step.'"', ' class="'.$step.'"') ?> ><a href="<?= $site->url().'/practices/practicetype:'.$step ?>"><?= $site->{$step.'txt'}()->text() // t($step) ?></a></li>
				<?php endif ?>
				<?php endforeach ?>
				<?php endif ?>
			</ul>
			<!-- cases -->
			<ul class="cases sub-menu">
				<?php $casethemes2 = $site->projectscategories()->toStructure(); ?>
				<?php foreach ($casethemes2 as $theme): ?>
				
					<?php

					$themename = $theme->{ "name_" . kirby()->language() }()->text();

					if( $themename->isEmpty() ){
						$themename = $theme->name_en()->text();
					}

					// echo $themename;
					?>

					<li <?php e(Url::current() == $site->url().'/cases/theme:'.$theme->name_en()->text(), ' class="active '.$theme->name_en()->text().'"',  ' class="'.$theme->name_en()->text().'"') ?>><a href="<?= $site->url().'/cases/theme:'.$theme->name_en()->text() ?>"><?= html( Str::ucfirst( $themename ) ) ?></a></li>
				<?php endforeach ?>
			</ul>
			<!-- studio -->
			<ul class="studio sub-menu">
				<?php foreach ($site->children()->listed() as $item): ?>
					<li <?php e(Url::current() == $item->url(), ' class="active"') ?>><?= $item->title()->link() ?></li>
				<?php endforeach ?>
			</ul>
		</nav>
	
		<?php // echo snippet("news"); ?>

	</div>
	<div id="main" class="drawer txt-normal loading">

<!-- fin menu.php