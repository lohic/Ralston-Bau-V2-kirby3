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

			<!-- contact menu  -->
			<nav id="contact" class="">
				<?php if ($about = page('about')): ?>
				<?php foreach ($about->social()->toStructure() as $social): ?>
					<!-- <a href="<?= $social->url() ?>" target="_blank"><?= $social->platform() ?></a> -->
				<?php endforeach ?>
				<?php endif ?>
				<a href="https://www.facebook.com/ralstonbau" target="_blank"><img class="btn-facebook" src="<?= $kirby->url('assets') ?>/images/fb.svg" alt="facebook"></a>
				<a href="https://www.instagram.com/studioralstonbau" target="_blank"><img class="btn-instagram" src="<?= $kirby->url('assets') ?>/images/ig.svg" alt="instagram"></a>
				<a href="mailto:studio@ralstonbau.com"><img class="btn-mail" src="<?= $kirby->url('assets') ?>/images/email.svg" alt="mail"></a>
			</nav>
		</div>
	</main>
</div>
<!-- fin about.php -->
<?php snippet('footer') ?>