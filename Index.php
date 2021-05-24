<?php
$page_title = "Start";
include("parts/header.php");  // Header
?>



<!-- ---------------------------------- Intro ---------------------------------- -->
<div class = "Intro"> <h1> Vad är vårt syfte?  </h1></div>
<div class = "Ruta0">
<p> 
Målet med denna hemsida är att visa hur kriminaliteten i Sverige är fördelad, för att främst upplysa den svenska befolkningen om vart man ska vara extra försiktig, 
vi valde då att avgränsa projektet mot att enbart fokusera på brottstyper som riktar sig direkt mot privatpersoner, inom de området. Men vi kommer också att inkludera
alla brottstyper inom andra områden på hemsidan. </br></br>

Hemsidan är uppdelat i tre huvuddelar vilket är översiktlig karta över hela Sverige, årsutvecklingen och månads fördelnibg samt individuell statistik. 
Utöver det så finns det även ytligare två sidor som innehåller information om vart hemsidan är baserad från samt information om oss som ligger bakom hemsidan. 
</p>
</div> <!-- Stänger Ruta0 -->



<!-- ---------------------------------- Regioner ---------------------------------- -->
<div class = "Karta"> <h1> Kriminalitet över Sverige </h1></div>
<div class = "Ruta1">
<?php
include("parts/Region.php");  // Region (Data)
include("parts/Maps.php");    // Google Maps
?>

<p> 
Brottsförebyggande Rådets delar in Sverige i sju olika regioner så att brotten som förövas kan geograftiskt markeras.
Här visualiserar vi med hjälp av Google Maps vart dessa regioner finns, samt visar hur många brott som anmälldes under år 2020.

<!-- Alla regioner med data -->
<li style= "margin-left:7%;"> <b> Region Stockholm: </b><?php echo $St1 + $St2 + $St3 + $St4 + $St5 + $St6 + $St7 ?> st brott </li>
<li style= "margin-left:7%;"> <b> Region Syd: </b><?php echo $Sy1 + $Sy2 + $Sy3 + $Sy4 + $Sy5 + $Sy6 + $Sy7 ?> st brott </li>
<li style= "margin-left:7%;"> <b> Region Väst: </b><?php echo $V1 + $V2 + $V3 + $V4 + $V5 + $V6 + $V7 ?> st brott </li>
<li style= "margin-left:7%;"> <b> Region Öst: </b><?php echo $O1 + $O2 + $O3 + $O4 + $O5 + $O6 + $O7 ?> st brott </li>
<li style= "margin-left:7%;"> <b> Region Mitt: </b><?php echo $M1 + $M2 + $M3 + $M4 + $M5 + $M6 + $M7 ?> st brott </li>
<li style= "margin-left:7%;"> <b> Region Bergslagen: </b><?php echo $B1 + $B2 + $B3 + $B4 + $B5 + $B6 + $B7 ?> st brott </li>
<li style= "margin-left:7%;"> <b> Region Nord: </b><?php echo $N1 + $N2 + $N3 + $N4 + $N5 + $N6 + $N7 ?> st brott </li>
</p>  

<!-- Förklarande bild -->
<h2 style= "margin-left:7%;"> Regionerna i Sverige: </h2>
<img src="Bilder/Regioner.jpg" alt="Regioner" style="width: 450px; height: 600px; margin-left:8%;"/>

</div> <!-- Stänger Ruta1 -->



<!-- ---------------------------------- År/Månad ---------------------------------- -->
<div class="Years"> <h1> Årsutveckling / Månadsutveckling </h1></div>
<div class="Ruta2"> 
<?php
include("parts/Year.php");                // Årsutveckling (Data)
include("parts/Month.php");               // Månadsutveckling (Data)
include("parts/YearMonthGraph.php");      // Graf
?>  
</div> <!-- Stänger Ruta2 -->



<!-- ---------------------------------- Kommun ---------------------------------- -->
<div class = "Kommun"> <h1> Kriminalitet över vald kommun </h1> </div>
<div class = "Ruta3">
<?php
include("parts/Kommun.php");        // Kommun (Data)
include("parts/KommunKnapp.php")    // Val/Knapp
?>

<h2 id="KommunNamn"> Borlänge </h2> 

<!-- Div för Cirkeldiagramet -->
<div class="chart"> <canvas id="myChart" ></canvas> </div>

<!-- Cirkeldiagram (Grunden) -->
<script>
var ctx = document.getElementById('myChart').getContext('2d');
var labels = ['Mord' , 'Misshandel', 'Trakasserier', 'Våldtäkt', 'Inbrott', 'Stöld', 'Rån'];
var colorHex = ['Purple', 'Red', 'Blue', 'Green', 'Orange', 'Yellow', 'Pink'];

// Innehåll/Etiketter/Inställningar
var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
      datasets: [{
            data: [ <?php echo $Bor_1 ?>, <?php echo $Bor_2 ?>, <?php echo $Bor_3 ?>, <?php echo $Bor_4 ?>, 
                    <?php echo $Bor_5 ?>, <?php echo $Bor_6 ?>, <?php echo $Bor_7 ?>],
            backgroundColor: colorHex
      }],
      labels: labels
    },
    options:{
      responsive: true
    }
})

// Uppdatera Cirkeldiagram (Ändra värde/titel)
function CirkelFunction() {
  var kommun = document.getElementById("kommun").value;
      // Borlänge
      if (kommun == "Bo"){
            myChart.data.datasets[0].data = [   <?php echo $Bor_1 ?>, <?php echo $Bor_2 ?>, <?php echo $Bor_3 ?>, <?php echo $Bor_4 ?>, 
                                                <?php echo $Bor_5 ?>, <?php echo $Bor_6 ?>, <?php echo $Bor_7 ?>];
            myChart.update()
            document.getElementById("KommunNamn").innerHTML = "Borlänge"
      }
      // Eskilstuna
      else if( kommun == "Es"){
            myChart.data.datasets[0].data = [   <?php echo $Esk_1 ?>, <?php echo $Esk_2 ?>, <?php echo $Esk_3 ?>, <?php echo $Esk_4 ?>, 
                                                <?php echo $Esk_5 ?>, <?php echo $Esk_6 ?>, <?php echo $Esk_7 ?>];
            myChart.update()
            document.getElementById("KommunNamn").innerHTML = "Eskilstuna"      
      }   
      // Gotland
      else if(kommun == "Got"){
            myChart.data.datasets[0].data = [   <?php echo $Got_1 ?>, <?php echo $Got_2 ?>, <?php echo $Got_3 ?>, <?php echo $Got_4 ?>, 
                                                <?php echo $Got_5 ?>, <?php echo $Got_6 ?>, <?php echo $Got_7 ?>];
            myChart.update()
            document.getElementById("KommunNamn").innerHTML = "Gotland"   
      } 
      // Gävle
      else if(kommun == "Gav"){
            myChart.data.datasets[0].data = [   <?php echo $Gav_1 ?>, <?php echo $Gav_2 ?>, <?php echo $Gav_3 ?>, <?php echo $Gav_4 ?>, 
                                                <?php echo $Gav_5 ?>, <?php echo $Gav_6 ?>, <?php echo $Gav_7 ?>];
            myChart.update()
            document.getElementById("KommunNamn").innerHTML = "Gävle"  
      }
      // Göteborg
      else if (kommun == "Gote"){
            myChart.data.datasets[0].data = [   <?php echo $Gote_1 ?>, <?php echo $Gote_2 ?>, <?php echo $Gote_3 ?>, <?php echo $Gote_4 ?>, 
                                                <?php echo $Gote_5 ?>, <?php echo $Gote_6 ?>, <?php echo $Gote_7 ?>];
            myChart.update()
            document.getElementById("KommunNamn").innerHTML = "Göteborg"  
      }
      // Halmstad
      else if( kommun == "Ha"){
            myChart.data.datasets[0].data = [   <?php echo $Ham_1 ?>, <?php echo $Ham_2 ?>, <?php echo $Ham_3 ?>, <?php echo $Ham_4 ?>, 
                                                <?php echo $Ham_5 ?>, <?php echo $Ham_6 ?>, <?php echo $Ham_7 ?>];
            myChart.update()
            document.getElementById("KommunNamn").innerHTML = "Halmstad"  
      }
      // Jönköping
      else if (kommun == "Jo"){
            myChart.data.datasets[0].data = [   <?php echo $Jon_1 ?>, <?php echo $Jon_2 ?>, <?php echo $Jon_3 ?>, <?php echo $Jon_4 ?>, 
                                                <?php echo $Jon_5 ?>, <?php echo $Jon_6 ?>, <?php echo $Jon_7 ?>];
            myChart.update()
            document.getElementById("KommunNamn").innerHTML = "Jönköping"  
      }
      // Kalmar
      else if( kommun == "Kal"){
            myChart.data.datasets[0].data = [   <?php echo $Kal_1 ?>, <?php echo $Kal_2 ?>, <?php echo $Kal_3 ?>, <?php echo $Kal_4 ?>, 
                                                <?php echo $Kal_5 ?>, <?php echo $Kal_6 ?>, <?php echo $Kal_7 ?>];
            myChart.update()
            document.getElementById("KommunNamn").innerHTML = "Kalmar"  
      }
      // Karlskrona
      else if ( kommun == "Kakrona"){
            myChart.data.datasets[0].data = [   <?php echo $KarK_1 ?>, <?php echo $KarK_2 ?>, <?php echo $KarK_3 ?>, <?php echo $KarK_4 ?>, 
                                                <?php echo $KarK_5 ?>, <?php echo $KarK_6 ?>, <?php echo $KarK_7 ?>];
            myChart.update()
            document.getElementById("KommunNamn").innerHTML = "Karlskrona"  
      }
      // Karlstad
      else if( kommun == "Kastad"){
            myChart.data.datasets[0].data = [   <?php echo $KarS_1 ?>, <?php echo $KarS_2 ?>, <?php echo $KarS_3 ?>, <?php echo $KarS_4 ?>, 
                                                <?php echo $KarS_5 ?>, <?php echo $KarS_6 ?>, <?php echo $KarS_7 ?>];
            myChart.update()
            document.getElementById("KommunNamn").innerHTML = "Karlstad"  
      }
      // Kiruna
      else if(kommun == "Kiruna"){
            myChart.data.datasets[0].data = [   <?php echo $Kiruna_1 ?>, <?php echo $Kiruna_2 ?>, <?php echo $Kiruna_3 ?>, <?php echo $Kiruna_4 ?>,
                                                <?php echo $Kiruna_5 ?>, <?php echo $Kiruna_6 ?>, <?php echo $Kiruna_7 ?>];
            myChart.update()
            document.getElementById("KommunNamn").innerHTML = "Kiruna"  
      }
      // Linköping
      else if( kommun == "Li"){
            myChart.data.datasets[0].data = [   <?php echo $Li_1 ?>, <?php echo $Li_2 ?>, <?php echo $Li_3 ?>, <?php echo $Li_4 ?>, 
                                                <?php echo $Li_5 ?>, <?php echo $Li_6 ?>, <?php echo $Li_7 ?>];
            myChart.update()
            document.getElementById("KommunNamn").innerHTML = "Linköping"  
      }
      // Malmö
      else if (kommun == "Ma"){
            myChart.data.datasets[0].data = [   <?php echo $Ma_1 ?>, <?php echo $Ma_2 ?>, <?php echo $Ma_3 ?>, <?php echo $Ma_4 ?>, 
                                                <?php echo $Esk_5 ?>, <?php echo $Esk_6 ?>, <?php echo $Esk_7 ?>];
            myChart.update()
            document.getElementById("KommunNamn").innerHTML = "Malmö"  
      }
      // Stockholm
      else if( kommun == "St"){
            myChart.data.datasets[0].data = [   <?php echo $StK_1 ?>, <?php echo $StK_2 ?>, <?php echo $StK_3 ?>, <?php echo $StK_4 ?>, 
                                                <?php echo $StK_5 ?>, <?php echo $StK_6 ?>, <?php echo $StK_7 ?>];
            myChart.update()
            document.getElementById("KommunNamn").innerHTML = "Stockholm"  
      }
      // Sundsvall
      else if (kommun == "Su"){
            myChart.data.datasets[0].data = [   <?php echo $Su_1 ?>, <?php echo $Su_2 ?>, <?php echo $Su_3 ?>, <?php echo $Su_4 ?>, 
                                                <?php echo $Su_5 ?>, <?php echo $Su_6 ?>, <?php echo $Su_7 ?>];
            myChart.update()
            document.getElementById("KommunNamn").innerHTML = "Sundsvall"  
      }
      // Uppsala
      else if( kommun == "Uppsala"){
            myChart.data.datasets[0].data = [   <?php echo $UpS_1 ?>, <?php echo $UpS_2 ?>, <?php echo $UpS_3 ?>, <?php echo $UpS_4 ?>, 
                                                <?php echo $UpS_5 ?>, <?php echo $UpS_6 ?>, <?php echo $UpS_7 ?>];
            myChart.update()
            document.getElementById("KommunNamn").innerHTML = "Uppsala"  
      }
      // Upplands västby
      else if( kommun == "Upplands"){
            myChart.data.datasets[0].data = [   <?php echo $UpL_1 ?>, <?php echo $UpL_2 ?>, <?php echo $UpL_3 ?>, <?php echo $UpL_4 ?>, 
                                                <?php echo $UpL_5 ?>, <?php echo $UpL_6 ?>, <?php echo $UpL_7 ?>];
            myChart.update()
            document.getElementById("KommunNamn").innerHTML = "Upplands västby"  
      }
      // Varberg
      else if (kommun == "Var"){
            myChart.data.datasets[0].data = [   <?php echo $Var_1 ?>, <?php echo $Var_2 ?>, <?php echo $Var_3 ?>, <?php echo $Var_4 ?>, 
                                                <?php echo $Var_5 ?>, <?php echo $Var_6 ?>, <?php echo $Var_7 ?>];
            myChart.update()
            document.getElementById("KommunNamn").innerHTML = "Varberg"  
      }
      // Västerås
      else if( kommun == "Vas"){
            myChart.data.datasets[0].data = [   <?php echo $Vas_1 ?>, <?php echo $Vas_2 ?>, <?php echo $Vas_3 ?>, <?php echo $Vas_4 ?>, 
                                                <?php echo $Vas_5 ?>, <?php echo $Vas_6 ?>, <?php echo $Vas_7 ?>];
            myChart.update()
            document.getElementById("KommunNamn").innerHTML = "Västerås"  
      }
      // Örebro
      else if (kommun == "Ore"){
            myChart.data.datasets[0].data = [   <?php echo $Ore_1 ?>, <?php echo $Ore_2 ?>, <?php echo $Ore_3 ?>, <?php echo $Ore_4 ?>, 
                                                <?php echo $Ore_5 ?>, <?php echo $Ore_6 ?>, <?php echo $Ore_7 ?>];
            myChart.update()
            document.getElementById("KommunNamn").innerHTML = "Örebro"  
      }
      // Östersund
      else if( kommun == "Oster"){
            myChart.data.datasets[0].data = [   <?php echo $Oster_1 ?>, <?php echo $Oster_2 ?>, <?php echo $Oster_3 ?>, <?php echo $Oster_4 ?>, 
                                                <?php echo $Oster_5 ?>, <?php echo $Oster_6 ?>, <?php echo $Oster_7 ?>];
            myChart.update()
            document.getElementById("KommunNamn").innerHTML = "Östersund"  
      }
      else{
        alert("Kommunen finns inte")
      }
};     
</script>
</div> <!-- Stänger Ruta3 -->



<!-- ---------------------------------- Footer ---------------------------------- -->
<?php
include("parts/footer.php");
?>