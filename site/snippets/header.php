<!doctype html>
<html lang="en">
<head>

<meta charset="utf-8">
<!-- <meta name="viewport" content="width=device-width,initial-scale=1.0"> -->
<meta name='viewport' content='initial-scale=1,maximum-scale=1,user-scalable=no' />

<title><?= $site->title() ?> | <?= $page->title() ?></title>

<?= js(['assets/vendor/jquery-3.3.1.min.js',
		// 'assets/vendor/isotope.pkgd.min.js',
		// 'assets/vendor/imagesloaded.pkgd.min.js',
		// 'assets/vendor/prettySocial-1.1.0/jquery.prettySocial.min.js',
		 'assets/vendor/jquery.cookie-1.4.1.min.js',
		 'assets/vendor/jssocials-1.4.0/dist/jssocials.min.js',
		 'assets/vendor/slick-1.8.1/slick/slick.min.js',
		 'https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js',
		 'assets/js/main.js?v=1.25']) ?> 

<?= css(['https://use.typekit.net/vrl2tmu.css',
		 'https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css',
		 'assets/fonts/Colaborate/stylesheet.css',
		 'assets/vendor/jssocials-1.4.0/dist/jssocials.css',
		 // 'assets/vendor/jssocials-1.4.0/dist/jssocials-theme-minimal.css',
		 // 'assets/vendor/fontawesome-free-5.7.2-web/css/all.min.css',
		 'assets/vendor/slick-1.8.1/slick/slick.css',
		 'assets/css/reset.css',
		 'assets/css/style.css?v=1.20'/*,
		 '@auto'*/]) ?>

<?php

$domain = $kirby->url();

Cookie::set("test", "ok", ["lifetime"=>10,"domain"=>$domain]); ?>

<?php if( $site->projectbgcolor() != "#000000" || $site->projecttxtcolor() != "#FFFFFF" ) : ?>
<style>
	#main{
		background: <?= $site->projectbgcolor() ?>;
		color: <?= $site->projecttxtcolor() ?>;
	}
</style>
<?php endif; ?>

</head>

<body>

<?php if($site->maintenance()->isTrue() and $page->uid() != 'maintenance') { go('maintenance');} ?>

<?php if($page->uid() != 'maintenance') { ?>
<?php 	snippet('menu') ?>
<?php } ?>

<!-- fin header.php -->