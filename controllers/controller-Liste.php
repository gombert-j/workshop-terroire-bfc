<?php
/////////////////////////////////////// RECHERCHE DE LA BDD
$user = 'root';
$mdp = 'root';


try {
    $db = new PDO(
        'mysql:host=localhost;dbname=projetsite;',
        $user,
        $mdp
    );
} catch (Exception $e) {
    die('erreur: ' . $e);
}
$sqlQuery = 'SELECT * FROM vin';
$donnees = $db->prepare($sqlQuery);
$donnees->execute();
$recipes = $donnees->fetchAll();

$listeDomaines = "";
ob_start();
foreach ($recipes as $recipe) {
    $templateNomLieu = $recipe['nom'];
    $adresse = $recipe['adresse'];
    //echo $recipe['contact'];
    //echo $recipe['horaire'];
    //echo $recipe['site'];
    require("../views/elements_liste_domaines/template_carte_domaine.php");
}
$listeDomaines = ob_get_clean();


/////////////////////////////////////// ELEMENTS DE LA BASE DE LA PAGE
ob_start(); //Active le buffer
require("../views/Liste_domaines.php"); //(Dans le Buffer) Mets le contenu de views/view-accueil.php
$content = ob_get_clean(); //Mets le contenu du buffer dans $content


/////////////////////////////////////// UTILISATION DU TEMPLATE ET AFFICHAGE DE LA PAGE
require('../views/template.php'); //Appel du template (qui utilise $content)
