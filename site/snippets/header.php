<!doctype html>
<html lang="en">
<head>

<meta charset="utf-8">
<!-- <meta name="viewport" content="width=device-width,initial-scale=1.0"> -->
<meta name='viewport' content='initial-scale=1,maximum-scale=1,user-scalable=no' />
<meta name='rb:domain' content='<?= parse_url( $kirby->url() )['host'] ?>'>

<title><?= $site->title() ?> | <?= $page->title() ?></title>

<?= js(['assets/vendor/jquery-3.3.1.min.js',
		 'assets/vendor/js.cookie-2.2.0.min.js',
		 'assets/vendor/jssocials-1.4.0/dist/jssocials.min.js',
		 'assets/vendor/slick-1.8.1/slick/slick.min.js',
		 'https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js',
		 'assets/js/main.js?v=1.31']) ?> 

<?= css(['https://use.typekit.net/vrl2tmu.css',
		 'https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css',
		 'assets/fonts/Colaborate/stylesheet.css',
		 'assets/vendor/jssocials-1.4.0/dist/jssocials.css',
		 'assets/vendor/slick-1.8.1/slick/slick.css',
		 'assets/css/reset.css',
		 'assets/css/style.css?v=1.31'/*,
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