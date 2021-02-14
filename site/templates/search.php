<?php snippet('header') ?>
<!-- search.php -->
<div id="main-content" class="grid search-result" data-menu="search">
	<h1>Search results: <?= isset($_GET["q"])? $_GET["q"] : "" ?></h1>
	<main class="the-grid">
		<!-- <div class="grid-sizer"></div> -->
		<?php
		// $cases = page('cases')->children()
		// 	->listed()
		// 	->filterBy('themes2', param('theme'), ',');
		// foreach($cases as $page):
		
		foreach ($results as $page):
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
<!-- fin search.php -->
<?php snippet('footer') ?>