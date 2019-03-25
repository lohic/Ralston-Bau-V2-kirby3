<?php snippet('header') ?>
<!-- about.php -->
<div id="main-content" data-menu="studio">
	<header class="intro">
		<?= snippet('gallery', ['page' => $page]); ?>
		<div class="gradient"></div>
		<h2><?= $page->title() ?></h2>
	</header>
	<main class="texte">
		<div class="text">
			<?= $page->text()->kt() ?>
			
			<address>
				<?= $page->address()->kt() ?>
			</address>
			<p class="email"><?= $page->email()->text() ?></p>
		</div>
	</main>
</div>
<!-- fin about.php -->
<?php snippet('footer') ?>