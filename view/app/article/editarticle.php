
<section>
    <h3>Ajout d'un article</h3>
    <form method="POST">
        <?= $formAddEdit->label("titre") ?>
        <?= $formAddEdit->input("titre", "text", $articleEdit->title) ?>
        <?= $formAddEdit->error("titre") ?>
        <br>
        <?= $formAddEdit->label("contenu") ?>
        <?= $formAddEdit->textarea("contenu") ?>
        <?= $formAddEdit->error("contenu") ?>
        <br>
        <?= $formAddEdit->select("auteur", $users, 'firstname') ?>
        <br>
        <?= $formAddEdit->submit("submitted", "Ajouter article") ?>
    </form>
</section>