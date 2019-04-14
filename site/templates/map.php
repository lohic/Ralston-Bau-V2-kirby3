<?php snippet('header') ?>
<!-- default.php -->
<div id="main-content" data-menu="map">
	<header class="intro">
		<?= snippet('gallery', ['page' => $page]); ?>
		<div class="gradient"></div>
		<h2><?= $page->title() ?></h2>
	</header>
	<main>
		<div class="text">
			<?= $page->text()->kt() ?>
		</div>

		<?php echo snippet('map', ['global'=> true]) ?>
	</main>
</div>
<!-- fin default.php -->
<?php snippet('footer') ?>