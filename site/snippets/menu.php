<!-- menu.php -->


	<header class="header">
		<a class="logo" href="<?= $site->url() ?>"><?= $site->title() ?></a>

		<!-- pages -->
		<nav id="menu" class="menu">
			<?php foreach ($site->children()->listed() as $item): ?>
				<?= $item->title()->link() ?>
			<?php endforeach ?>
		</nav>

		<!-- cases -->
		<?php if ($casethemes = page('cases')->children()->listed()->pluck("themes", ",", true)): ?>
		<nav id="menu-cases" class="menu">
			<?php foreach ($casethemes as $theme): ?>
				<a href="<?= $site->url().'/cases/theme:'.$theme ?>"><?= html($theme) ?></a>
			<?php endforeach ?>
		</nav>
		<?php endif ?>

		<!-- practices -->
		<?php if ($practicetype = page('practices')->children()->listed()->pluck("practicetype", ",", true)): ?>
		<nav id="menu-practices" class="menu">
			<?php foreach ($practicetype as $step): ?>
				<a href="<?= $site->url().'/practices/practicetype:'.$step ?>"><?= html($step) ?></a>
			<?php endforeach ?>
		</nav>
		<?php endif ?>

		<!-- social + external -->
		<?php if ($about = page('about')): ?>
		<nav class="social">   
			<?php foreach ($about->social()->toStructure() as $social): ?>
				<a href="<?= $social->url() ?>" target="_blank"><?= $social->platform() ?></a>
			<?php endforeach ?>
		</nav>
		<?php endif ?>

	</header>

<!-- fin menu.php -->