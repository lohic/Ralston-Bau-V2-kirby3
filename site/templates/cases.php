<?php snippet('header') ?>
<!-- cases.php -->

cases

<main class="grid">
	<?php
	$practices = page('cases')->children()
		->listed()
		->filterBy('themes', param('theme'), ',');
	foreach($practices as $page):
	?>
	<div class="tile">
		<a href="<?= $page->url() ?>">
		<h2><?= $page->title() ?></h2>
		<?php if( $page->thumbnail()->isNotEmpty() ) : ?>
			<?= $page->thumbnail()->toFile()->resize(400,null) ?>
		<?php endif;?>
		</a>
	</div>
	<?php endforeach; ?>

</main>

<!-- fin cases.php -->
<?php snippet('footer') ?>