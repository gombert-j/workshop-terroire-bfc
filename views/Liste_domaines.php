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

                <script>
                    const checkboxes = document.querySelectorAll('input[type="checkbox"]');
                    checkboxes.forEach(checkbox => {
                        checkbox.addEventListener('change', function() {
                            var elements = document.querySelectorAll("." + this.id);
                            elements.forEach(element => {
                                if (this.checked) {
                                    element.style.display = 'block';
                                } else {
                                    element.style.display = 'none';
                                }
                            });
                        })
                    });
                </script>

                <div class="popup">
                    <div class="popup-content">
                        <h3><? foreach ($tab_pop as $tab)
                                echo $tab;
                            ?></h3>


                        <button class="close-popup">Fermer</button>
                    </div>




                    <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            var div = document.querySelectorAll(".card_liste");
                            popup = document.querySelector(".popup");
                            var closePopup = document.querySelector(".close-popup");

                            div.forEach((element) => {
                                element.addEventListener("click", () => {
                                    popup.style.display = "block";
                                });
                            });

                            closePopup.addEventListener("click", () => {
                                popup.style.display = "none";
                            });

                            // Fermer la pop-up en cliquant à l'extérieur de la pop-up
                            popup.addEventListener("click", (e) => {
                                if (e.target === popup) {
                                    popup.style.display = "none";
                                }
                            });

                        })
                    </script>
                </div>
            </div>
</section>






<section class="recherche">
    <div id="scroll">
        <?= $listeDomaines ?>
    </div>


</section>