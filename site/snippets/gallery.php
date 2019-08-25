<section class="gallery">
<?php $panorama = "" ?>
<?php if( $page->panorama()->isNotEmpty() ) : ?>
<?php

if( $page->parent() != null ) :
	$panorama = $page->parent().'/'.$page->slug().'/'.$page->panorama()->toFile()->filename(); 
else :
	$panorama = $page->slug().'/'.$page->panorama()->toFile()->filename(); 
endif;

?>
	<figure class="panorama" style="background-image: url(<?= $page->panorama()->toFile()->url() ?>)">
		<!-- <div style="background-image: url(<?= $page->panorama()->toFile()->url() ?>) !important"></div> -->
		<?= $page->panorama()->toFile()->resize(null,700) ?>
	</figure>
<?php endif; ?>
<?php foreach ($page->images()->not( $panorama )->sortBy('sort') as $image): ?>
	<figure>
		<!-- <a href="<?= $image->link()->or($image->url()) ?>"> -->
		<?php if($image->embed()->isNotEmpty()) : ?>
		<?= $image->embed() ?>
		<?php else: ?>
		<a class="fullscreen-link" data-fancybox="gallery" href="<?= $image->link()->or($image->url()) ?>">
			<img class="fullscreen-btn" src="<?= $kirby->url('assets') ?>/images/fullscreen.svg" >
		</a>
		<?= $image->resize(null,700) ?>
		<?php endif; ?>
		<!-- </a> -->
	</figure>
<?php endforeach ?>


</section>