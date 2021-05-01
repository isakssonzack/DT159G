<?php
$page_title = "Start";
include("parts/header.php");
?>

<!-- ---------------------------------- Intro ---------------------------------- -->

<div class = "Intro"> <h1> Vad är vårt syfte?  </h1></div>
<div class = "Ruta0">

  <div class = "Text">
    <p> 
      Målet med denna hemsida är att visa hur kriminaliteten i Sverige är fördelad, för att främst upplysa den svenska befolkningen om vart man ska vara extra försiktig, 
      vi valde då att avgränsa projektet mot att enbart fokusera på brottstyper som riktar sig direkt mot privatpersoner, inom de området. Men vi kommer också att inkludera
      alla brottstyper inom andra områden på hemsidan.
    
      <br></br> 
    
      Hemsidan är uppdelat i tre huvuddelar vilket är översiktlig karta över hela Sverige, årsutvecklingen och månads fördelnibg samt individuell statistik. 
      Utöver det så finns det även ytligare två sidor som innehåller information om vart hemsidan är baserad från samt information om oss som ligger bakom hemsidan. 
    </p>
  </div>

</div>

<!-- ---------------------------------- Karta ---------------------------------- -->

<div class = "Karta"> <h1> Kriminalitet över Sverige </h1></div>

<div class = "Ruta1">

  <!-- Google Maps -->
  <div id="map" style="margin-left:12.5%;margin-right:12.5%;width:75%;height:400px;"></div>

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
  
  <?php
  include("parts/Region.php");
  ?>


  <!-- Text -->

  <p> 
    Brottsförebyggande Rådets delar in Sverige i sju olika regioner så att brotten som förövas kan geograftiskt markeras.
    Här visualiserar vi med hjälp av Google Maps vart dessa regioner finns, samt visar hur många brott som anmälldes under år 2020.

    <br></br>

    <b> Region Bergslagen: </b><?php echo $B1 + $B2 + $B3 + $B4 + $B5 + $B6 + $B7 ?> st brott <br></br>
    <b> Region Mitt: </b><?php echo $M1 + $M2 + $M3 + $M4 + $M5 + $M6 + $M7 ?> st brott <br></br>
    <b> Region Nord: </b><?php echo $N1 + $N2 + $N3 + $N4 + $N5 + $N6 + $N7 ?> st brott <br></br>
    <b> Region Öst: </b><?php echo $O1 + $O2 + $O3 + $O4 + $O5 + $O6 + $O7 ?> st brott <br></br>
    <b> Region Stockholm: </b><?php echo $St1 + $St2 + $St3 + $St4 + $St5 + $St6 + $St7 ?> st brott <br></br>
    <b> Region Syd: </b><?php echo $Sy1 + $Sy2 + $Sy3 + $Sy4 + $Sy5 + $Sy6 + $Sy7 ?> st brott <br></br>
    <b> Region Väst: </b><?php echo $V1 + $V2 + $V3 + $V4 + $V5 + $V6 + $V7 ?> st brott <br></br>

  </p>
 
  
</div>

<!-- ---------------------------------- År / Månad ---------------------------------- -->

<div class="Years"> <h1> Årsutveckling / Månadsutveckling </h1></div>

<div class="Ruta2"> 

<!--  Hämta data / Grafer  -->
<?php
include("parts/Year.php");
include("parts/Month.php");
include("parts/Graf_1.php");
?>  

</div>


<!-- ---------------------------------- Kommun ---------------------------------- -->

<div class = "Kommun"> <h1> Kriminalitet över vald kommun </h1> </div>

<div class = "Ruta3">

<p> Här kan vi skriva </p>

</div>


<!-- ---------------------------------- Footer ---------------------------------- -->
<?php
include("parts/footer.php");
?>