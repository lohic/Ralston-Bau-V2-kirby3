<?php snippet('header') ?>
<!-- default.php -->
<div id="main-content" data-menu="studio">
	<header class="intro">
		<?= snippet('gallery', ['page' => $page]); ?>
		<div class="gradient"></div>
		<h2><?= $page->title() ?></h2>
	</header>
	<main>
		<div class="text<?= $page->columnToggle()->isTrue()?' columns':''; ?>">
			<?= $page->text()->kt()->ft() ?>
		</div>

		<?php if($page->mapToggle()->isTrue()) : ?>
		<?php echo snippet('map', ['global'=> true]) ?>
		<?php endif;?>
	</main>
</div>
<!-- fin default.php -->
<?php snippet('footer') ?>