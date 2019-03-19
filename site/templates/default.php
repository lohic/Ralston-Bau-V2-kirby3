<?php snippet('header') ?>
<!-- default.php -->
<div id="main-content" data-menu="studio">

	<main class="texte">
		<header class="intro">
			<?= snippet('gallery', ['page' => $page]); ?>
			<h1><?= $page->title() ?></h1>
		</header>

		<div class="text">
			<?= $page->text()->kt() ?>
		</div>
	</main>
</div>
<!-- fin default.php -->
<?php snippet('footer') ?>