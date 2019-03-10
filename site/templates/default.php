<?php snippet('header') ?>

<!-- default.php -->

<main>
  <header class="intro">
    <h1><?= $page->title() ?></h1>
  </header>
  <div class="text">
    <?= $page->text()->kt() ?>
  </div>
</main>

<!-- fin default.php -->

<?php snippet('footer') ?>
