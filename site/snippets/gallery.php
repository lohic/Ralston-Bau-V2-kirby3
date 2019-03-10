<section class="gallery">
	<?php foreach ($page->images() as $image): ?>
	<figure>
		<!-- <a href="<?= $image->link()->or($image->url()) ?>"> -->
			<?= $image->resize(null,550) ?>
		<!-- </a> -->
	</figure>
	<?php endforeach ?>
</section>