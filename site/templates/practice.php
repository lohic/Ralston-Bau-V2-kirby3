<?php snippet('header') ?>
<!-- practice.php -->
<div id="main-content" data-menu="practices" data-submenu="<?= $page->practicetype() ?>">
	<main>
		<?= snippet('practice', ['showtitle'=> true]); ?>
	</main>
	
	<div class="related text">
		<h3><?= t("linked"); ?></h3>
		<ul class="related-cases">
			<?php 

			$linkedCases = array();

			$linkedCases[] = $pages->find('cases')->children()->listed()->filter(function($case) use ($page) {
				return $case->bigpictures()->toPages()->has($page);
			});


			$linkedCases[] = $pages->find('cases')->children()->listed()->filter(function($case) use ($page) {
				return $case->peoples()->toPages()->has($page);
			});


			$linkedCases[] = $pages->find('cases')->children()->listed()->filter(function($case) use ($page) {
				return $case->scenarios()->toPages()->has($page);
			});

			$linkedCases[] = $pages->find('cases')->children()->listed()->filter(function($case) use ($page) {
				return $case->forms()->toPages()->has($page);
			});

			// print_r($linkedCases)

			foreach ($linkedCases as $cases) :
				foreach ($cases as $case) :

					if( $case->thumbnail()->isNotEmpty() ){
						$image = $case->thumbnail()->toFile()->resize(320,200)->url();
					}else{
						$image = $kirby->url('assets') . '/images/black.png';
					}

			?>
			<a href="<?= $case->url() ?>">
				<li style="background-image: url(<?= $image ?>)">
					<h2><?= $case->title() ?></h2>
				</li>
			</a>
			<?php
				endforeach;
			endforeach;


			 ?>
		</ul>
	</div>

</div>
<!-- fin practice.php -->
<?php snippet('footer') ?>