
<section>
    <h3>Ajout d'un article</h3>
    <form method="POST">
        <?= $formAddEdit->label("titre") ?>
        <?= $formAddEdit->input("titre", "text", $articleEdit['title']) ?>
        <?= $formAddEdit->error("titre") ?>
        <br>
        <?= $formAddEdit->label("contenu") ?>
        <?= $formAddEdit->textarea("contenu", $articleEdit['content']) ?>
        <?= $formAddEdit->error("contenu") ?>
        <br>
        <?= $formAddEdit->submit("submitted", "Modifier article") ?>
    </form>
</section>