<!DOCTYPE html>
<html>
    <head>
        <title>Page de traitement</title>
        <meta charset="utf-8">
    </head>
    <body>
        <p>Dans le formulaire précédent, vous avez fourni les
        informations suivantes :</p>
        
        <?php

            $id = $_GET['immat_id'];
            $marque = $_GET['marque_id'];
            $couleur = $_GET['couleur_id'];

            echo 'id : '.$id.'<br>';
            echo 'Marque : ' .$marque.'<br>';
            echo 'Couleur : ' .$couleur.'<br>';
        ?>
    </body>
</html>