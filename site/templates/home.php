<?php snippet('header') ?>

<!-- home.php -->

<main>
  <header class="intro">
    <h1><?= $page->title() ?></h1>
  </header>
  <div class="text">
    <?= $page->text()->kt() ?>
  </div>
</main>

<!-- fin home.php -->

<?php snippet('footer') ?>
