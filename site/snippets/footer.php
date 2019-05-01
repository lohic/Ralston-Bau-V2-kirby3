<!-- footer.php -->

<?php if($page->uid() != 'maintenance') { ?>

</div>

<?php } ?>

<div id="newsletter">

	<form action="//tinyletter.com/ralstonbau" method="post" target="popupwindow" onsubmit="window.open('//tinyletter.com/ralstonbau', 'popupwindow', 'scrollbars=yes,width=800,height=600');return true">
		
		<p><input type="text" name="email" id="tlemail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="email@domain.ltd" />
		<input type="hidden" value="1" name="embed"/>
		<button type="submit" id="btn-send" class="button"><?= t('subscribe','Subscribe') ?></button></p>

		<p><a href="https://tinyletter.com" target="_blank">powered by TinyLetter</a></p>

	</form>

</div>

<script>
	$("#share").jsSocials({
    	showLabel: false,
        shares: [{
	        share: "email",
	        logo: "<?= $kirby->url('assets') ?>/images/email.svg"
		}, {
	        share: "facebook",
	        logo: "<?= $kirby->url('assets') ?>/images/facebook.svg"
		}, {
	        share: "linkedin",
	        logo: "<?= $kirby->url('assets') ?>/images/linkedin.svg"
		}, {
	        share: "twitter",
	        logo: "<?= $kirby->url('assets') ?>/images/twitter.svg"
    	}]
    });
</script>
<?php echo snippet('matomo'); ?> 

<!-- Matomo -->
<script type="text/javascript">
  var _paq = window._paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//analytics.ralstonbau.com/";
    _paq.push(['setTrackerUrl', u+'matomo.php']);
    _paq.push(['setSiteId', '1']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- End Matomo Code -->

</body>
</html>
