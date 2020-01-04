<?php snippet('header') ?>
<!-- cases.php -->
<div id="main-content" class="grid" data-menu="cases">
	<main class="the-grid">
		<!-- <div class="grid-sizer"></div> -->
		<?php
		$cases = page('cases')->children()
			->listed()
			// ->filterBy('themes', param('theme'), ',');
			->filterBy('themes2', param('theme'), ',');
		foreach($cases as $page):
		?>
		<div class="tile">
			<a href="<?= $page->url() ?>">
			<div class="gradient"></div>
			<h2><?php  

				$addresses = $page->addresses()->toStructure();
				$villes = array();


				foreach($addresses as $address ) :
	
					$location = $address->map()->yaml();
		
					if( !empty( $location['city'] ) ) :

						$villes[] = $location['city'];

					endif;
						
				endforeach;


				echo count($villes)>0 ? "<span class=\"ville\">".implode(", ", $villes)."</span><br>" : "";

			?><?= $page->title() ?></h2>
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