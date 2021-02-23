<!doctype html>
<html lang="en">
<head>

<meta charset="utf-8">
<!-- <meta name="viewport" content="width=device-width,initial-scale=1.0"> -->
<meta name='viewport' content='initial-scale=1,maximum-scale=1,user-scalable=no' />
<meta name="description" content="<?= $site->description()->text() ?>">
<meta name="keywords" content="<?= $site->keywords()->text() ?>">
<meta name="author" content="Ralston Bau">
<meta name='rb:domain' content='<?= parse_url( $kirby->url() )['host'] ?>'>

<!--
	┌────────────────────────────────┐
	│████████████████████████████████│
	│ 		                         │
	│ SITE DESIGNED BY LOIC HORELLOU │
	│      www.loichorellou.net      │
	│ 		                         │
	│▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓│
	└────────────────────────────────┘
-->

<meta property="og:title" content="<?= $page->title() ?> | 	<?= $site->title() ?>" />
<meta property="og:description" content="<?= $page->title() ?> : <?= Str::replace( $page->description()->text(), "\n", " " ) ?>" />
<meta property="article:published_time" content="<?= $page->date()->toDate('Y-m-d') ?>" />
<meta property="og:url" content="<?= $page->url() ?>" />


<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@ralstonbau">
<meta name="twitter:title" content="<?= $page->title() ?> | 	<?= $site->title() ?>">
<meta name="twitter:description" content="<?= Str::short( Str::replace( $page->description()->text(), "\n", " " ), 199 ) ?>">
<meta name="twitter:creator" content="@ralstonbau">

<?php if( $page->thumbnail()->isNotEmpty() ) : ?>
<meta property="og:image" content="<?= $page->thumbnail()->toFile()->resize(400,400)->url() ?>" />
<meta name="twitter:image" content="<?= $page->thumbnail()->toFile()->resize(400,400)->url() ?>">
<?php elseif( $site->thumbnail()->isNotEmpty() ) :?>
<meta property="og:image" content="<?= $site->thumbnail()->toFile()->resize(400,400)->url() ?>" />
<meta name="twitter:image" content="<?= $site->thumbnail()->toFile()->resize(400,400)->url() ?>">

<?php endif; ?>



<title><?= $page->title() ?> | 	<?= $site->title() ?></title>

<?=  js(['assets/vendor/jquery-3.3.1.min.js',
		 'assets/vendor/hammer.min.js',
		 'assets/vendor/js.cookie-2.2.0.min.js',
		 'assets/vendor/jssocials-1.4.0/dist/jssocials.min.js',
		 'assets/vendor/slick-1.8.1/slick/slick.min.js',
		 'assets/vendor/fancybox-master/dist/jquery.fancybox.min.js',
		 'https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js',
		 'assets/js/main.js?v=1.47']) ?> 

<?= css(['https://use.typekit.net/vrl2tmu.css',
		 'https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css',
		 'assets/fonts/Colaborate/stylesheet.css',
		 'assets/vendor/jssocials-1.4.0/dist/jssocials.css',
		 'assets/vendor/slick-1.8.1/slick/slick.css',
		 'assets/vendor/fancybox-master/dist/jquery.fancybox.min.css',
		 'assets/css/reset.css',
		 'assets/css/style.css?v=1.53'/*,
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

<body class="<?php echo $page->slug() ?>">

<?php if($site->maintenance()->isTrue() and $page->uid() != 'maintenance') { go('maintenance');} ?>

<?php if($page->uid() != 'maintenance') { ?>
<?php 	snippet('menu') ?>
<?php } ?>

<!-- fin header.php -->