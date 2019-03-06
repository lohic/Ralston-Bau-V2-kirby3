<?php snippet('header') ?>

<!-- case.php -->

case

<main>
	<header class="intro">
		<h1><?= $page->title() ?></h1>
		<p><?= $page->date() ?></p>

	</header>


	<div class="text">
		<?= $page->text()->kt() ?>
	</div>


	<?= snippet('map') ?>

	<?php 

	$bigpictures = $page->bigpictures()->toPages();
	foreach($bigpictures as $practice_data): ?>

	<?= snippet('practice', ['practice' => $practice_data]) ?>
	
	<?php endforeach ?>

	<?php 

	$peoples = $page->peoples()->toPages();
	foreach ($peoples as $practice_data): ?>
	
	<?= snippet('practice', ['practice' => $practice_data]) ?>

	<?php endforeach ?>

	<?php

	$scenarios = $page->scenarios()->toPages();
	foreach ($scenarios as $practice_data): ?>
	
	<?= snippet('practice', ['practice' => $practice_data]) ?>
	
	<?php endforeach ?>

	<?php

	$forms = $page->forms()->toPages();
	foreach ($forms as $practice_data): ?>

	<?= snippet('practice', ['practice' => $practice_data]) ?>

	<?php endforeach ?>
	
	<?= snippet('share') ?>
</main>

<!-- fin case.php -->

<?php snippet('footer') ?>
