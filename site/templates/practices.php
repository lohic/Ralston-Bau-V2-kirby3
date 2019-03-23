<?php snippet('header') ?>
<!-- practices.php -->
<div id="main-content" data-menu="practices">
	<main class="grid">
		<!-- <div class="grid-sizer"></div> -->
		<?php
		$practices = page('practices')->children()
			->listed()
			->filterBy('practicetype', param('practicetype'), ',');
		foreach($practices as $page):
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
<!-- fin practices.php -->
<?php snippet('footer') ?>