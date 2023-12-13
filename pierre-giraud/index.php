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
        
        $pierre = new Admin('Pierre', 'abcdef', 'Sud');
        $mathilde = new Admin('Math', 123456, 'Nord');
        $florian = new Utilisateur('Flo', 'flotri', 'Est');
        
        $pierre->setBan('Paul', 'Jean');
        $mathilde->setBan('Thomas');
        
        $pierre->getBan();
        echo '<br>';
        $mathilde->getBan();
      ?>
      <p>Un paragraphe</p>
    </body>
</html>