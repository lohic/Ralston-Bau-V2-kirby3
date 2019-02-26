<?php snippet('header') ?>

<!-- case.php -->

case

<main>
  <header class="intro">
    <h1><?= $page->title() ?></h1>
    <p><?= $page->date() ?></p>


	<?php foreach ($page->bigpictures()->children() as $bigpicture): ?>
		<?= $bigpicture ?>
	<?php endforeach ?>

	<?php foreach ($page->peoples()->children() as $people): ?>
		<?= $people ?>
	<?php endforeach ?>

	<?php foreach ($page->scenarios()->children() as $scenario): ?>
		<?= $scenario ?>
	<?php endforeach ?>

	<?php foreach ($page->forms()->children() as $form): ?>
		<?= $form ?>
	<?php endforeach ?>

  </header>
  <div class="text">
    <?= $page->text()->kt() ?>
  </div>
</main>

<!-- fin case.php -->

<?php snippet('footer') ?>
