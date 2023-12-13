<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    
    <body>
        <h1>Titre principal</h1>
        <?php
            require 'classes/utilisateur.class.php';
            require 'classes/admin.class.php';
            require 'classes/abonne.class.php';
            
            $pierre = new Admin('Pierre', 'abcdef', 'Sud');
            $mathilde = new Admin('Math', 123456, 'Nord');
            $florian = new Abonne('Flo', 'flotri', 'Est');
            
            $pierre->setPrixAbo();
            $mathilde->setPrixAbo();
            $florian->setPrixAbo();
            
            echo 'Prix de l\'abonnement pour ';
            $pierre->getNom();
            echo ' : ';
            $pierre->getPrixAbo();
            echo '<br>Prix de l\'abonnement pour ';
            $mathilde->getNom();
            echo ' : ';
            $mathilde->getPrixAbo();
            echo '<br>Prix de l\'abonnement pour ';
            $florian->getNom();
            echo ' : ';
            $florian->getPrixAbo();
        ?>
        <p>Un paragraphe</p>
    </body>
</html>