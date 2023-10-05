const checkboxes = document.querySelectorAll('input[type="checkbox"]');
checkboxes.forEach(checkbox => {
    checkbox.addEventListener('change', function () {
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


function pointer() {
    console.log("hello");
}
document.addEventListener("DOMContentLoaded", function () {
    var div = document.querySelectorAll(".card_liste");
    popup = document.querySelector(".popup");
    var closePopup = document.querySelector(".close-popup");
    var popupContent = document.getElementById("popup-content");

    div.forEach((element, index) => {
        element.addEventListener("click", () => {
            popup.style.display = "block";
            var contacts = element.getAttribute("data-contacts");
            var site = element.getAttribute("data-site");
            var horaire = element.getAttribute("data-horaire");
            var horaireSplit = horaire.split(";");

            // Afficher les données dans le popup-content

            popupContentHTML = "<h3>" + "Contacts: " + contacts + "<br>" +
                "Site: " + site + "<br>";
            var joursSemaine = ["lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi", "dimanche"];

            for (let i = 0; i < joursSemaine.length; i++) {
                popupContentHTML += joursSemaine[i] + ": " + horaireSplit[i];

            }

            popupContentHTML += "<br>" + "<img  src=\'../public/images/marker.png\'width='25' height='25' onclick='pointer()' " +
                "</h3>";

            popupContent.innerHTML = popupContentHTML;

            /*popupContent.innerHTML = "<h3>" + "Contacts: " + contacts + "<br>" +
                "Site: " + site + "<br>" +
                "Horaire: " + "<br>" + "lundi:" + horaire.split(";") + "<br>" + "<img  src=\'../public/images/marker.png\'width='25' height='25' onclick='pointer()' " +
                "</h3>";*/




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