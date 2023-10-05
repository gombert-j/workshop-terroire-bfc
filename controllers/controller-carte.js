// Instanciations
const latitude = 47.3226777534083;
const longitude = 5.037883925163827;
var map = L.map('map').setView([latitude, longitude], 8);
fetch('../public/data-regions/bfc.json')
  .then(function(response) {
    return response.json();
  })
  .then(function(data) {
    var BFClayer = L.geoJSON(data).addTo(map);

    BFClayer.setStyle({
      color: '#a1063bff',
      weight: 2,
      opacity: 0.8,
      fillOpacity: 0.2
    });

    var bounds = BFClayer.getBounds();
    map.fitBounds(bounds);
  });
var markersVin = [];
var markersFromage = [];
var markersEscargots = [];
var redIcon = new L.Icon({
  iconUrl:'../public/images/marker-vin-icon.png'
})
var greenIcon = new L.Icon({
  iconUrl:'../public/images/marker-escargot-icon.png'
})
var yellowIcon = new L.Icon({
  iconUrl:'../public/images/marker-fromage-icon.png'
})

// Fonctionnement
for (var i = 0; i < vin.length; i++) {
    var lieu = vin[i];
    var marker = L.marker([lieu.longitude, lieu.latitude], {icon:redIcon}).addTo(map);
    marker.bindPopup("<div class = popup-content><img src=../public/"+ lieu.chemin_Fichier +" width = 300></br>" + lieu.nom + "</br>" + lieu.adresse + "</div>"); // Affichez le nom du lieu lorsqu'on clique sur le marqueur
    
    markersVin.push(marker);
  }



for (var i = 0; i < fromage.length; i++) {
  var lieu = fromage[i];
  var marker = L.marker([lieu.longitude, lieu.latitude], {icon:yellowIcon}).addTo(map);
  marker.bindPopup("<div class = popup-content> <img src=../public/"+ lieu.chemin_Fichier +" width = 300></br>" + lieu.nom + "</br>" + lieu.adresse + "</div>"); // Affichez le nom du lieu lorsqu'on clique sur le marqueur
  
  // Ajoutez le marqueur au tableau des marqueurs
  markersFromage.push(marker);
}



for (var i = 0; i < escargots.length; i++) {
  var lieu = escargots[i];
  var marker = L.marker([lieu.longitude, lieu.latitude], {icon:greenIcon}).addTo(map);
  marker.bindPopup("<div class = popup-content> <img src=../public/"+ lieu.chemin_Fichier +" width = 300></br>" + lieu.nom + "</br>" + lieu.adresse + "</div>"); // Affichez le nom du lieu lorsqu'on clique sur le marqueur
  
  // Ajoutez le marqueur au tableau des marqueurs
  markersEscargots.push(marker);
}
L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
  maxZoom: 18,
  attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

const checkboxes = document.querySelectorAll('input[type="checkbox"]');
  checkboxes.forEach(checkbox => {
    checkbox.addEventListener('change', function() {
      if (this.checked) {
        if(this.id == "vin"){
          for (var i = 0; i<markersVin.length; i++){
            markersVin[i].addTo(map)
          }
        }
        else if(this.id == "fromage"){
          for (var i = 0; i<markersFromage.length; i++){
            markersFromage[i].addTo(map)
          }
        }
        else{
          for (var i = 0; i<markersEscargots.length; i++){
            markersEscargots[i].addTo(map)
          }
        }
      } 
      else {
        if(this.id == "vin"){
          for (var i = 0; i<markersVin.length; i++){
            markersVin[i].removeFrom(map)
          }
        }
        else if(this.id == "fromage"){
          for (var i = 0; i<markersFromage.length; i++){
            markersFromage[i].removeFrom(map)
          }
        }
        else{
          for (var i = 0; i<markersEscargots.length; i++){
            markersEscargots[i].removeFrom(map)
          }          
        }
      }
    });
  });