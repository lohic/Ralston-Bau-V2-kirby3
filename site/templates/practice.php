<?php snippet('header') ?>
<!-- practice.php -->
<div id="main-content" data-menu="practices" data-submenu="<?= $page->practicetype() ?>">
	<main>
		<?= snippet('practice', ['showtitle'=> true]); ?>
	</main>
</div>
<!-- fin practice.php -->
<?php snippet('footer') ?>