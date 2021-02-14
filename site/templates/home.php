<?php snippet('header') ?>
<!-- home.php -->
<div id="main-content" class="grid" data-menu="cases" data-submenu="">

	<div id="intro">
		<div>
			<p class="lang"><?= page('home')->intro()->text() ?></p>
		</div>
	</div>

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
			<div class="tile-title">
				<?php if($page->showcity()->isTrue()): ?>
				<p class="ville"><?php  

				$addresses = $page->addresses()->toStructure();
				$villes = array();


				foreach($addresses as $address ) :
	
					$location = $address->map()->yaml();
		
					if( !empty( $location['city'] ) ) :

						$villes[] = $location['city'];

					endif;
						
				endforeach;


				echo count($villes)>0 ? implode(", ", $villes) : "";

			?></p><?php endif; ?>
				<h2><?= $page->title() ?></h2>
			</div>
			<?php if( $page->thumbnail()->isNotEmpty() && !is_null($page->thumbnail()->toFile() ) ) : ?>
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