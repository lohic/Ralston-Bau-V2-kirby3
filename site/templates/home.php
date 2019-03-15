<?php snippet('header') ?>
<!-- home.php -->
<div id="main-content" data-menu="home">
	<main>
		<header class="intro">
			<h1><?= $page->title() ?></h1>
		</header>
		<div class="text">
			<?= $page->text()->kt() ?>
		</div>
	</main>
</div>
<!-- fin home.php -->
<?php snippet('footer') ?>