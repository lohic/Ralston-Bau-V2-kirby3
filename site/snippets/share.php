<!-- share.php -->
<div class="social-container">
	<div class="links">
		<a href="#" data-type="twitter" data-url="<?= $page->url() ?>" data-description="Custom share buttons for Pinterest, Twitter, Facebook and Google Plus." data-via="RalstonBau" class="prettySocial"><img src="<?= $kirby->url('assets') ?>/images/twitter.svg" alt=""></a>

		<a href="#" data-type="facebook" data-url="<?= $page->url() ?>" data-title="<?= $page->title() ?>" data-description="Custom share buttons for Pinterest, Twitter, Facebook and Google Plus." data-media="http://sonnyt.com/assets/imgs/prettySocial.png" class="prettySocial"><img src="<?= $kirby->url('assets') ?>/images/facebook.svg" alt=""></a>
		
		<!-- <a href="#" data-type="pinterest" data-url="<?= $page->url() ?>" data-description="Custom share buttons for Pinterest, Twitter, Facebook and Google Plus." data-media="http://sonnyt.com/assets/imgs/prettySocial.png" class="prettySocial fab fa-pinterest-p"></a> -->

		<a href="#" data-type="linkedin" data-url="<?= $page->url() ?>" data-title="<?= $page->title() ?>" data-description="Custom share buttons for Pinterest, Twitter, Facebook and Google Plus." data-via="sonnyt" data-media="http://sonnyt.com/assets/imgs/prettySocial.png" class="prettySocial"><img src="<?= $kirby->url('assets') ?>/images/linkedin.svg" alt=""></a>


		<a href="mailto:chose@bidule.fr?subject=Ralstonbau – <?= $page->title() ?>&body=<?= $page->url() ?>"><img src="<?= $kirby->url('assets') ?>/images/email.svg" alt=""></a>
	</div>
</div>

<!-- fin share.php -->