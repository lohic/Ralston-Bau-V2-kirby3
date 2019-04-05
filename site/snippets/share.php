<!-- share.php -->
<?php
// if( $page->thumbnail()->isNotEmpty() ) {
// 	$thumb = $page->thumbnail()->toFile()->resize(400,null)->url();
// }else{
// 	$thumb = $kirby->url('assets').'/images/black.png';
// }
if( $page->images()->isNotEmpty() ){
	$thumb = $page->images()->first()->resize(400,null)->url();
}else{
	$thumb = $kirby->url('assets').'/images/black.png';
}
// echo $thumb;
?>
<div class="social-container">
	<div class="links">
		<a href="mailto:?subject=Ralston Bau – <?= $page->title() ?>&body=<?= $page->url() ?>">
			<img src="<?= $kirby->url('assets') ?>/images/email.svg" alt="">
		</a>
		<a href="#" data-type="facebook" data-url="<?= $page->url() ?>" data-title="<?= $page->title() ?>" data-description="Ralston Bau – <?= $page->title() ?>" data-media="<?= $thumb; ?>" class="prettySocial">
			<img src="<?= $kirby->url('assets') ?>/images/facebook.svg" alt="">
		</a>
		<a href="#" data-type="linkedin" data-url="<?= $page->url() ?>" data-title="<?= $page->title() ?>" data-description="Ralston Bau – <?= $page->title() ?>" data-via="ralston-&-bau" data-media="<?= $thumb; ?>" class="prettySocial">
			<img src="<?= $kirby->url('assets') ?>/images/linkedin.svg" alt="">
		</a>
		<a href="#" data-type="twitter" data-url="<?= $page->url() ?>" data-description="Ralston Bau – <?= $page->title() ?>" data-via="RalstonBau" class="prettySocial">
			<img src="<?= $kirby->url('assets') ?>/images/twitter.svg" alt="">
		</a>
	</div>
</div>
<!-- fin share.php -->