<section>
<h2><?= $article->title ?></h2>

<p><?= $article->content ?></p>

<p>Cette merde à été écrit par <strong><?=$user->findById($article->author, 'id')->firstname . ' ' . $user->findById($article->author, 'id')->lastname?></strong></p>

<p>Créé le: <?= $article->createdAt ?></p>
