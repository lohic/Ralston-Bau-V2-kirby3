<?php snippet('header') ?>
<!-- default.php -->
<div id="main-content" data-menu="studio">
	<header class="intro">
		<div class="gradient"></div>
		<h2><?= $page->title() ?></h2>
	</header>
	<main>
		<div class="text">
			<?= $page->text()->kt() ?>
		</div>
	</main>
</div>
<!-- fin default.php -->
<?php snippet('footer') ?>