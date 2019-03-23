<!-- practice.php (snippet)-->

<?php if($showtitle == true) : ?>
<h3><?= $page->title() ?></h3>
<?php endif; ?>

<?= snippet('gallery', ['page' => $page]); ?>

<div class="text"><?= $page->description()->kt() ?></div>

<!-- fin practice.php -->