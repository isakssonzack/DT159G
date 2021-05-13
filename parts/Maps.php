<div id="map" style="margin-left:12.5%;margin-right:12.5%;width:70%;height:400px;"></div>
<script>

function initMap() {
  // Platser
  var location_Goteborg = {lat: 57.70716 , lng: 11.96679};    // Göteborg
  var location_Kiruna = {lat: 67.85572, lng: 20.22513}        // Kiruna
  var location_Malmo = {lat: 55.60587, lng: 13.00073};        // Malmö
  var location_Linkoping = {lat: 58.41086, lng: 15.62157};    // Linköping
  var location_Gavle = {lat: 60.67452, lng: 17.14174};        // Gävle
  var location_Karlstad = {lat: 59.3793, lng: 13.50357};      // Karlstad
  var location_Stockholm = {lat: 59.33258, lng: 18.0649};     // Stockholm 
  
  var map = new google.maps.Map(document.getElementById("map"), {
    zoom: 4,
    center: location_Gavle,
    gestureHandling: "cooperative",
  });
 
  const tourStops = [
    [{ lat: 55.60587, lng: 13.00073 }, "Region Syd"],
    [{ lat: 58.41086, lng: 15.62157 }, "Region Öst"],
    [{ lat: 67.85572, lng: 20.22513 }, "Region Norr"],
    [{ lat: 60.67452, lng: 17.14174 }, "Region Mitt"],
    [{ lat: 59.3793, lng: 13.503577 }, "Region Bergslagen"],
    [{ lat: 59.33258, lng: 18.0649 }, "Region Stockholm"],
    [{ lat: 57.70716 , lng: 11.96679 }, "Region Väst"],
  ];
    
  // Create an info window to share between markers.
  const infoWindow = new google.maps.InfoWindow();
    
  // Create the markers.
  tourStops.forEach(([position, title], i) => {
    const marker = new google.maps.Marker({
      position,
      map,
      title: `${title}`,
      optimized: false,
    });
          
    // Add a click listener for each marker, and set up the info window.
    marker.addListener("click", () => {
      infoWindow.close();
      infoWindow.setContent(marker.getTitle());
      infoWindow.open(marker.getMap(), marker);
      map.setZoom(8);
      map.setCenter(marker.getPosition());
    });
  });
}
 
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnrdXvViCsLW1g79fQjEgn6rQQROw8VeM
&callback=initMap"></script>