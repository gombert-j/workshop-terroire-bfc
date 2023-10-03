<?php
//FONCTIONS PHP SUPPLEMENTAIRES SI BESOIN (Par ex: Recherche d'entrées dans la base de données)


/////////////////////////////////////////////////////////////// AFFICHAGE DE LA PAGE
ob_start(); //Active le buffer
require("views/view-accueil.php"); //(Dans le Buffer) Mets le contenu de views/view-accueil.php
$content = ob_get_clean(); //Mets le contenu du buffer dans $content

require('views/template.php'); //Appel du template (qui utilise $content)



?>