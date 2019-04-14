<!-- practice.php (snippet)-->
<section class="practice">
	<header class="intro">
		<?= snippet('gallery', ['page' => $page]); ?>
		<?php //if($showtitle == true) : ?>
		<!-- <div class="gradient"></div> -->
		<!-- <h2><?= $page->title() ?></h2> -->
		<?php //endif; ?>
	</header>

	<?php //if($showtitle == false) : ?>
	<h3 class="practice-title"><?= $page->title() ?></h3>
	<?php //endif; ?>

	<div class="text">
		<?php if( $page->legend()->isNotEmpty() ) : ?>
		<div class="description">
			<?= $page->legend()->kt() ?>
		</div>
		<?php endif; ?>
		<?= $page->description()->kt() ?>
	</div>

	<?php if($showtitle == true) : ?>
	<?= snippet('share') ?>
	<?php endif; ?>
</section>

<!-- fin practice.php -->