<?php snippet('header') ?>
<!-- cases.php -->
<div id="main-content" data-menu="cases">
	<main class="grid">
		<!-- <div class="grid-sizer"></div> -->
		<?php
		$cases = page('cases')->children()
			->listed()
			->filterBy('themes', param('theme'), ',');
		foreach($cases as $page):
		?>
		<div class="tile">
			<a href="<?= $page->url() ?>">
			<div class="gradient"></div>
			<h2><?= $page->title() ?></h2>
			<?php if( $page->thumbnail()->isNotEmpty() ) : ?>
				<?= $page->thumbnail()->toFile()->resize(400,null) ?>
			<?php else : ?>
				<img alt="" src="<?= $kirby->url('assets') ?>/images/black.png">
			<?php endif;?>
			</a>
		</div>
		<?php endforeach; ?>
	</main>
</div>
<!-- fin cases.php -->
<?php snippet('footer') ?>