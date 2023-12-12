<h1 style="text-align: center;font-size:33px;margin-top: 100px; color:green; background-color:red; width:fit-content; margin:auto">
    <?= $titrePage; ?>
</h1>

<h2>
    <?= implode(" ", $persons)?>
</h2>

<h2>
    Son nom: <?= $persons["nom"]?> <br> Son prénom: <?= $persons["prenom"]?><br> Son âge: <?= $persons["age"]?>
</h2>

<?= $this->dbug($persons)?>