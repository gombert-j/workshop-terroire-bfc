<section class="body">
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


                <div class="popup">
                    <div class="popup-content" id="popup-content">
                        <button class="close-popup">Fermer</button>
                    </div>
                </div>
            </div>
</section>


<section class="recherche">
    <div id="scroll">
        <?= $listeDomaines ?>
    </div>


</section>
<script src="../controllers/controller-Liste.js"></script>