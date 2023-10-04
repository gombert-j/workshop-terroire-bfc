<?php
/////////////////////////////////////// RECHERCHE DE LA BDD
$user = 'admin';
$mdp = 'admin';


try {
    $db = new PDO(
        'mysql:host=localhost;dbname=projetsite;',
        $user,
        $mdp
    );
} catch (Exception $e) {
    die('erreur: ' . $e);
}
$listeDomaines = "";
$types = array('vin', 'fromage', 'escargot');
foreach ($types as $key=>$type) {
    $classe = "'".'card_liste '.$type."'";

    $sqlQuery = "SELECT * FROM ". $type;
    $donnees = $db->prepare($sqlQuery);
    $donnees->execute();
    $recipes = $donnees->fetchAll();

    ob_start();
    foreach ($recipes as $recipe) {
        $templateNomLieu = $recipe['nom'];
        $adresse = $recipe['adresse'];
        //echo $recipe['contact'];
        //echo $recipe['horaire'];
        //echo $recipe['site'];
        require("../views/elements_liste_domaines/template_carte_domaine.php");
    }
    $listeDomaines .= ob_get_clean();
}


/////////////////////////////////////// ELEMENTS DE LA BASE DE LA PAGE
ob_start(); //Active le buffer
require("../views/Liste_domaines.php"); //(Dans le Buffer) Mets le contenu de views/view-accueil.php
$content = ob_get_clean(); //Mets le contenu du buffer dans $content


/////////////////////////////////////// UTILISATION DU TEMPLATE ET AFFICHAGE DE LA PAGE
require('../views/template.php'); //Appel du template (qui utilise $content)
