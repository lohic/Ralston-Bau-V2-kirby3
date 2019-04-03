<!-- practice.php (snippet)-->
<header class="intro">
	<?= snippet('gallery', ['page' => $page]); ?>
	<?php if($showtitle == true) : ?>
	<div class="gradient"></div>
	<h2><?= $page->title() ?></h2>
	<?php endif; ?>
</header>

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

<!-- fin practice.php -->