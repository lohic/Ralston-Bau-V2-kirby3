<section class="gallery">
<?php $panorama = "" ?>
<?php if( $page->panorama()->isNotEmpty() ) : ?>
<?php $panorama = $page->parent().'/'.$page->slug().'/'.$page->panorama()->toFile()->filename(); ?>			
	<figure class="panorama">
		<div style="background-image: url(<?= $page->panorama()->toFile()->url() ?>)"></div>
	</figure>
<?php endif; ?>
<?php foreach ($page->images()->not( $panorama )->sortBy('sort') as $image): ?>
	<figure>
		<!-- <a href="<?= $image->link()->or($image->url()) ?>"> -->
		<?php if($image->embed()->isNotEmpty()) : ?>
		<?= $image->embed() ?>
		<?php else: ?>
		<?= $image->resize(null,600) ?>
		<?php endif; ?>
		<!-- </a> -->
	</figure>
<?php endforeach ?>
</section>