<?php snippet('header') ?>

<!-- case.php -->

<div id="main-content" data-menu="cases" data-submenu="<?= $page->themes()->toData(",")[0] ?>">
	<header class="intro">
		<?= snippet('gallery', ['page' => $page]); ?>
		<div class="gradient"></div>
		<h2><?= $page->title() ?></h2>
	</header>

	<main>
		<?php //echo snippet('share') ?>
		
		<section class="case">
			<div class="text">

				<?php if( $page->description()->isNotEmpty() ) : ?>
				<div class="description">
					<?= $page->description()->kt() ?>
				</div>
				<?php endif; ?>
				<?= $page->text()->kt() ?>
			</div>
		</section>
		
		
		<?php 

		$bigpictures = $page->bigpictures()->toPages();
		if($bigpictures->count() > 0) :
		?>
		<!-- <h3>Big Picture</h3> -->
		<?php
		endif;
		foreach($bigpictures as $practice_data): ?>
		<?= snippet('practice', ['page' => $practice_data, 'showtitle'=> false]) ?>
		
		<?php endforeach ?>


	
		
		<?php 

		$peoples = $page->peoples()->toPages();
		if($peoples->count() > 0) :
		?>
		<!-- <h3>Peoples</h3> -->
		<?php
		endif;
		foreach ($peoples as $practice_data): ?>
		<?= snippet('practice', ['page' => $practice_data, 'showtitle'=> false]) ?>

		<?php endforeach ?>


		
		<?php
		$scenarios = $page->scenarios()->toPages();
		if($scenarios->count() > 0) :
		?>
		<!-- <h3>Scenario</h3> -->
		<?php
		endif;
		foreach ($scenarios as $practice_data): ?>
		<?= snippet('practice', ['page' => $practice_data, 'showtitle'=> false]) ?>
		
		<?php endforeach ?>


		<?php

		$forms = $page->forms()->toPages();
		if($forms->count() > 0) :
		?>
		<!-- <h3>Form</h3> -->
		<?php
		endif;

		foreach ($forms as $practice_data): ?>
		<?= snippet('practice', ['page' => $practice_data, 'showtitle'=> false]) ?>

		<?php endforeach ?>
		
		<?php echo snippet('share') ?>

		<?php echo snippet('map', ['global'=> false]) ?>
	</main>
</div>

<!-- fin case.php -->

<?php snippet('footer') ?>
