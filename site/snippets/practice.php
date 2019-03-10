<!-- practice.php (snippet)-->

<h3><?= $page->title() ?></h3>

<?= snippet('gallery', ['page' => $page]); ?>

<div><?= $page->description()->kt() ?></div>

<!-- fin practice.php -->