<?php snippet('header') ?>
<!-- practices.php -->

practices

<main>
	<?php
	$practices = page('practices')->children()
		->listed()
		->filterBy('practicetype', param('practicetype'), ',');
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

<!-- fin practices.php -->
<?php snippet('footer') ?>