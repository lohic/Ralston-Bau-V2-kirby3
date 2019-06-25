<!-- share.php -->
<?php
if( $page->images()->isNotEmpty() ){
	$thumb = $page->images()->first()->resize(400,null)->url();
}else{
	$thumb = $kirby->url('assets').'/images/black.png';
}
?>
<div class="social-container">
	<div id="share"></div>
</div>
<!-- fin share.php -->