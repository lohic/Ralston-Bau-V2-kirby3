<!doctype html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">

	<title><?= $site->title() ?> | <?= $page->title() ?></title>

	<?php //echo css(['assets/css/index.css', '@auto']) ?>

</head>
<body>

	<header class="header">
		<a class="logo" href="<?= $site->url() ?>"><?= $site->title() ?></a>

		<!-- pages -->
		<nav id="menu" class="menu">
			<?php foreach ($site->children()->listed() as $item): ?>
				<?= $item->title()->link() ?>
			<?php endforeach ?>
		</nav>

		<!-- cases -->
		<?php if ($cases = page('cases')): ?>
		<nav id="menu-cases" class="menu">
			<?php foreach ($cases->children()->listed() as $case): ?>
				<?= $case->title()->link() ?>
			<?php endforeach ?>
		</nav>
		<?php endif ?>

		<!-- practices -->
		<?php if ($practices = page('practices')): ?>
		<nav id="menu-practices" class="menu">
			<?php foreach ($practices->children()->listed() as $practice): ?>
				<?= $practice->title()->link() ?>
			<?php endforeach ?>
		</nav>
		<?php endif ?>

		<!-- social + external -->
		<?php if ($about = page('about')): ?>
		<nav class="social">   
			<?php foreach ($about->social()->toStructure() as $social): ?>
				<a href="<?= $social->url() ?>"><?= $social->platform() ?></a>
			<?php endforeach ?>
		</nav>
		<?php endif ?>

	</header>

<!-- fin header.php -->