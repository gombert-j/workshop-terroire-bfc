<?php ob_start() ?>
            <button class="accueil-box">
              <div class="accueil-box-elem"><img src="public/icons/postage-heart-fill.svg" alt="Logo de la liste des domaines" width="200vh" height="200vh"></div>
              <h1 class="accueil-box-elem">Liste des domaines</h1>
            </button>

            <button class="accueil-box">
              <div class="accueil-box-elem"><img src="public/icons/map-fill.svg" alt="Logo de la carte des domaines" width="200vh" height="200vh"></div>
              <h1 class="accueil-box-elem">Carte des domaines</h1>
            </button>

        </div>
<?php 
$content =  ob_get_clean();
require('views/template.php');