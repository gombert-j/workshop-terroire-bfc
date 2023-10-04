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
                            if (this.checked) {
                                if (this.id == "vin") {
                                    var elements = document.querySelectorAll(".vin");
                                    elements.forEach(element => {
                                        element.style.display = 'block';
                                    });

                                } else if (this.id == "fromage") {
                                    var elements = document.querySelectorAll(".fromage");
                                    elements.forEach(element => {
                                        element.style.display = 'block';
                                    })

                                } else {
                                    var elements = document.querySelectorAll(".escargot");
                                    elements.forEach(element => {
                                        element.style.display = 'block';
                                    })
                                }
                            } else {
                                if (this.id == "vin") {
                                    var elements = document.querySelectorAll(".vin");
                                    elements.forEach(element => {
                                        element.style.display = 'none';
                                    })
                                } else if (this.id == "fromage") {
                                    var elements = document.querySelectorAll(".fromage");
                                    elements.forEach(element => {
                                        element.style.display = 'none';
                                    })
                                } else {
                                    var elements = document.querySelectorAll(".escargot");
                                    elements.forEach(element => {
                                        element.style.display = 'none';
                                    })
                                }
                            }
                        });
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