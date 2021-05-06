<!-- ---------------------------------- Karta ---------------------------------- -->
<div class = "Karta"> <h1> Kriminalitet över Sverige </h1></div>
<div class = "Ruta1">

  <div id="map" style="margin-left:12.5%;margin-right:12.5%;width:70%;height:400px;"></div>

  <script>

  function initMap() {
    // Platser
    var location_Goteborg = {lat: 57.70716 , lng: 11.96679};    // Göteborg
    var location_Sundsvall = {lat: 62.39129, lng: 17.3063}      // Sundsvall
    var location_Malmo = {lat: 55.60587, lng: 13.00073};        // Malmö
    var location_Linkoping = {lat: 58.41086, lng: 15.62157};    // Linköping
    var location_Gavle = {lat: 60.67452, lng: 17.14174};        // Gävle
    var location_Karlstad = {lat: 59.3793, lng: 13.50357};      // Karlstad
    var location = {lat: 59.33258, lng: 18.0649}                // Stockholm 
  
    var map = new google.maps.Map(document.getElementById("map"), {
      zoom: 4,
      center: location
    });
        
    // -------- Markörer --------

    // Göteborg
    var marker = new google.maps.Marker({
      position: location_Goteborg,
      map: map
    });
    // Sundsvall
    var marker = new google.maps.Marker({
      position: location_Sundsvall,
      map: map
    });
    // Malmö
    var marker = new google.maps.Marker({
      position: location_Malmo,
      map: map
    });
    // Linköping
    var marker = new google.maps.Marker({
      position: location_Linkoping,
      map: map
    });
     // Gävle
     var marker = new google.maps.Marker({
      position: location_Gavle,
      map: map
    });
    // Karlstad
    var marker = new google.maps.Marker({
      position: location_Karlstad,
      map: map
    });
    // Stockholm
    var marker = new google.maps.Marker({
      position: location,
      map: map,
      content: '<h2>STAD</h2>'

    });
   
  }

  </script>

  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnrdXvViCsLW1g79fQjEgn6rQQROw8VeM
  &callback=initMap"></script>