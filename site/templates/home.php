<?php snippet('header') ?>
<!-- home.php -->
<div id="main-content" class="grid" data-menu="cases" data-submenu="">
	<main class="the-grid">
		<!-- <div class="grid-sizer"></div> -->
		<?php
		$cases = page('cases')->children()
			->listed();
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
<!-- fin home.php -->
<?php snippet('footer') ?>