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
            
            $pierre = new Admin('Pierre', 'abcdef');
            $mathilde = new Utilisateur('Math', 123456);
            
            echo $pierre->getNom(). '<br>';
            echo $mathilde->getNom(). '<br>';
            
            $pierre->setBan('Paul');
            $pierre->setBan('Jean');
            echo $pierre->getBan();
        ?>
        <p>Un paragraphe</p>
    </body>
</html>