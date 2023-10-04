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
                            var elements = document.querySelectorAll("."+this.id);
                            elements.forEach(element => {
                                if (this.checked) {element.style.display = 'block';}
                                else {element.style.display = 'none';}
                            });
                        })
                    });

                </script>





            </div>
            <h3>Distance</h3>
        </div>
</section>






<section class="recherche">
    <div id="scroll">
        <?= $listeDomaines ?>
    </div>


</section>