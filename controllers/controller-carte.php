<?php
//FONCTIONS PHP SUPPLEMENTAIRES SI BESOIN (Par ex: Recherche d'entrées dans la base de données)
include("../models/BDD.php");
$vin = new BDD();
$dataVin = $vin->request("SELECT nom, adresse, longitude, latitude, chemin_Fichier FROM vin");
$vin->close();
echo "<script>var vin = $dataVin;</script>";

$fromage = new BDD();
$dataFromage = $fromage->request("SELECT nom, adresse, longitude, latitude, chemin_Fichier FROM fromage");
$fromage->close();
echo "<script>var fromage = $dataFromage;</script>";

$escargots = new BDD();
$dataEscargots = $escargots->request("SELECT nom, adresse, longitude, latitude, chemin_Fichier FROM escargot");
$escargots->close();
echo "<script>var escargots = $dataEscargots;</script>";

/////////////////////////////////////////////////////////////// AFFICHAGE DE LA PAGE
ob_start(); //Active le buffer
?>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
    integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
    crossorigin=""/>
<link rel="stylesheet" href="../public/css/style.css">
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
    integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
    crossorigin="">
</script>

<div class="card">
        <div class="header_card">Domaine a rechercher</div>
        <div class="body_card">
        <div class="filtre">
                        <ul>
                            <li>
                                <input type="checkbox" id="vin" checked> Vin
                            </li>
                            <li>
                                <input type="checkbox" id='fromage' checked> Fromage
                            </li>
                            <li>
                                <input type="checkbox" id='escargot' checked> Escargot
                            </li>
                        </ul>
                    </div>
        </div>
</div>

<div id="map"></div>
<script type="module" src="../controllers/map.js"></script>
<?php
require("../views/view-carte.php"); //(Dans le Buffer) Mets le contenu de views/view-accueil.php
$content = ob_get_clean(); //Mets le contenu du buffer dans $content

require('../views/template.php'); //Appel du template (qui utilise $content)



?>