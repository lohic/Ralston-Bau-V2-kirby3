<h1>Now</h1>
<?php foreach($site->children()->findBy('uid','notes')->children()->visible()->sortBy('date', 'asc') as $article): ?>

<div>
	<h2><?= $article->title()->html() ?></h2>
	<p><?= $article->place()->text() ?><br><?= $article->datefromto()->text() ?></p>
</div>

<?php endforeach; ?>