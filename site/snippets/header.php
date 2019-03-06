<!doctype html>
<html lang="en">
<head>

<meta charset="utf-8">
<!-- <meta name="viewport" content="width=device-width,initial-scale=1.0"> -->
<meta name='viewport' content='initial-scale=1,maximum-scale=1,user-scalable=no' />

<title><?= $site->title() ?> | <?= $page->title() ?></title>

<?= js(['assets/js/jquery-3.3.1.min.js',
			'assets/prettySocial-1.1.0/jquery.prettySocial.min.js',
			'https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js',
			'assets/js/main.js']) ?> 

<?= css(['https://use.typekit.net/vrl2tmu.css',
			 'assets/fonts/Colaborate/stylesheet.css',
			 'assets/fontawesome-free-5.7.2-web/css/all.min.css',
			 'assets/css/index.css',
			 'assets/css/style.css',
			 'https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css',
			 '@auto']) ?>

</head>
<body>

<?php if($site->maintenance()->isTrue() and $page->uid() != 'maintenance') { go('maintenance');} ?>

<?php if($page->uid() != 'maintenance') { ?>
<?php 	snippet('menu') ?>
<?php } ?>

<!-- fin header.php -->