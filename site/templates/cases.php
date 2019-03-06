<?php snippet('header') ?>
<!-- cases.php -->

cases

<main>
	<?php
	$practices = page('cases')->children()
		->listed()
		->filterBy('themes', param('theme'), ',');
	foreach($practices as $page):
	?>
	<header class="intro">
		<h1><?= $page->title() ?></h1>
	</header>
	<div class="text">
		<?= $page->text()->kt() ?>
	</div>
	<?php endforeach; ?>

</main>

<!-- fin cases.php -->
<?php snippet('footer') ?>