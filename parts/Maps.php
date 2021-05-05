<!-- ---------------------------------- Karta ---------------------------------- -->
<div class = "Karta"> <h1> Kriminalitet över Sverige </h1></div>
<div class = "Ruta1">

  <div id="map" style="margin-left:12.5%;margin-right:12.5%;width:70%;height:400px;"></div>

  <script>

  function initMap() {
    var location = {lat: 63.1792, lng: 14.63566};
    var map = new google.maps.Map(document.getElementById("map"), {
      zoom: 4,
      center: location
    });
        
    var marker = new google.maps.Marker({
      position: location,
      map: map
    });
  }

  </script>

  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnrdXvViCsLW1g79fQjEgn6rQQROw8VeM
  &callback=initMap"></script>