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
<script type="text/javascript">
    var analyticsFileTypes = [''];
    var analyticsSnippet = 'enabled';
    var analyticsEventTracking = 'enabled';
</script>
<script type="text/javascript">
	var _gaq = _gaq || [];
  
	_gaq.push(['_setAccount', 'UA-32912844-1']);
    _gaq.push(['_addDevId', 'i9k95']); // Google Analyticator App ID with Google
	_gaq.push(['_trackPageview']);

	(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
</script>
</body>
</html>
