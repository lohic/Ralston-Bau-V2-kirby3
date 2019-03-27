<!-- practice.php (snippet)-->
<header class="intro">
	<?= snippet('gallery', ['page' => $page]); ?>
	<?php if($showtitle == true) : ?>
	<div class="gradient"></div>
	<h2><?= $page->title() ?></h2>
	<?php endif; ?>
</header>

<?php if($showtitle == true) : ?>
<?= snippet('share') ?>
<?php endif; ?>

<div class="text">
	<?= $page->description()->kt() ?>
</div>
<!-- fin practice.php -->