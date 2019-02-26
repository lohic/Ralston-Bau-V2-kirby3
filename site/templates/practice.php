<?php snippet('header') ?>

<!-- practice.php -->

practice

<main>
  <header class="intro">
    <h1><?= $page->title() ?></h1>
  </header>
  <div class="text">
    <?= $page->description()->kt() ?>
  </div>
</main>

<!-- fin practice.php -->

<?php snippet('footer') ?>
