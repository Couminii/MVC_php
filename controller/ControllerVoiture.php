<!DOCTYPE html>
<html> <head>
<meta charset="UTF-8">
<title>Liste des voitures</title> </head>
<body>
<?php


require_once ('../model/ModelVoiture.php'); // chargement du modèle 
$tab_v = ModelVoiture::getAllVoitures(); //appel au modèle pour gerer la BD 

?>
</body> </html>