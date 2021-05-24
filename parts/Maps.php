<div id="map" style="margin-left:12.5%;margin-right:12.5%;width:70%;height:400px;"></div>
<script>

function initMap() {
  // Utgångspunkt på kartan (Standard)
  var location_Gavle = {lat: 60.67452, lng: 17.14174};        // Gävle

  var map = new google.maps.Map(document.getElementById("map"), {
    zoom: 4,
    center: location_Gavle,
    gestureHandling: "cooperative",
  });
 
  // lat/lng hittades från: https://latitude.to/
  const tourStops = [
    [{ lat: 55.60587, lng: 13.00073 }, "Region Syd: </br> <?php echo $Sy1 + $Sy2 + $Sy3 + $Sy4 + $Sy5 + $Sy6 + $Sy7 ?> st brott"],
    [{ lat: 58.41086, lng: 15.62157 }, "Region Öst: </br> <?php echo $O1 + $O2 + $O3 + $O4 + $O5 + $O6 + $O7 ?> st brott"],
    [{ lat: 67.85572, lng: 20.22513 }, "Region Nord: </br> <?php echo $N1 + $N2 + $N3 + $N4 + $N5 + $N6 + $N7 ?> st brott"], 
    [location_Gavle , "Region Mitt: </br> <?php echo $M1 + $M2 + $M3 + $M4 + $M5 + $M6 + $M7 ?> st brott"],
    [{ lat: 59.3793, lng: 13.503577 }, "Region Bergslagen: </br> <?php echo $B1 + $B2 + $B3 + $B4 + $B5 + $B6 + $B7 ?> st brott"],
    [{ lat: 59.33258, lng: 18.0649 }, "Region Stockholm: </br> <?php echo $St1 + $St2 + $St3 + $St4 + $St5 + $St6 + $St7 ?> st brott"],
    [{ lat: 57.70716 , lng: 11.96679 }, "Region Väst: </br> <?php echo $V1 + $V2 + $V3 + $V4 + $V5 + $V6 + $V7 ?> st brott"],
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
&callback=initMap"> </script>