<section class="card">
    <article>
        <h3><?= $article['title'] ?></h3>
        <p><?= $article['content'] ?></p>
        <p class="margin-top-l">
            <strong>Publiée par :</strong> <?= $user->findById($article['author'])['firstname'] . ' ' . $user->findById($article['author'])['lastname'] ?> le <?= $article['createdAt'] ?><br>
            <?php if(!empty($article['modifiedAt'])): ?>
                Modifié le: <?= $article['modifiedAt'] ?>
            <?php endif; ?>
        </p>
        <p>
            <a href="<?= $view->path('delete', [$article['id']]); ?>" class="btn">Supprimer</a>
            <a href="<?= $view->path('edit', [$article['id']]); ?>" class="btn">Modifier</a>
        </p>
    </article>
</section>