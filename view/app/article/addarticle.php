<?php 
// $nom = $users->firstname . ' ' . $users->lastname;

?>

<section>
    <h3>Ajout d'un article</h3>
    <form method="POST">
        <?= $formAdd->label("titre") ?>
        <?= $formAdd->input("titre") ?>
        <?= $formAdd->error("titre") ?>
        <br>
        <?= $formAdd->label("contenu") ?>
        <?= $formAdd->textarea("contenu") ?>
        <?= $formAdd->error("contenu") ?>
        <br>
        <?= $formAdd->select("auteur", $users, 'firstname') ?>
        <br>
        <?= $formAdd->submit("submitted", "Ajouter article") ?>
    </form>
</section>