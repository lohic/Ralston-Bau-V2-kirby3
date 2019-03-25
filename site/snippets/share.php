<!-- share.php -->
<?php
if( $page->thumbnail()->isNotEmpty() ) {
	$thumb = $page->thumbnail()->resize(400,null);
}else{
	$thumb = $kirby->url('assets').'/images/black.png';
}
?>
<div class="social-container">
	<div class="links">
		<a href="#" data-type="twitter" data-url="<?= $page->url() ?>" data-description="Ralston Bau – <?= $page->title() ?>" data-via="RalstonBau" class="prettySocial"><img src="<?= $kirby->url('assets') ?>/images/twitter.svg" alt=""></a>
		<a href="#" data-type="facebook" data-url="<?= $page->url() ?>" data-title="<?= $page->title() ?>" data-description="Ralston Bau – <?= $page->title() ?>" data-media="<?= $thumb; ?>" class="prettySocial"><img src="<?= $kirby->url('assets') ?>/images/facebook.svg" alt=""></a>
		
		<!-- <a href="#" data-type="pinterest" data-url="<?= $page->url() ?>" data-description="Custom share buttons for Pinterest, Twitter, Facebook and Google Plus." data-media="http://sonnyt.com/assets/imgs/prettySocial.png" class="prettySocial fab fa-pinterest-p"></a> -->
		<a href="#" data-type="linkedin" data-url="<?= $page->url() ?>" data-title="<?= $page->title() ?>" data-description="Ralston Bau – <?= $page->title() ?>" data-via="ralston-&-bau" data-media="<?= $thumb; ?>" class="prettySocial"><img src="<?= $kirby->url('assets') ?>/images/linkedin.svg" alt=""></a>
		<a href="mailto:?subject=Ralston Bau – <?= $page->title() ?>&body=<?= $page->url() ?>"><img src="<?= $kirby->url('assets') ?>/images/email.svg" alt=""></a>
	</div>
</div>
<!-- fin share.php -->