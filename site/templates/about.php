<?php snippet('header') ?>
<!-- about.php -->
<div id="main-content" data-menu="studio">

	<main class="texte">
		<header class="intro">
			<?= snippet('gallery', ['page' => $page]); ?>
			<h1><?= $page->title() ?></h1>
		</header>

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