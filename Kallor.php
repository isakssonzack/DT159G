<?php
$page_title = "Kallor";
include("parts/header.php");
?>

<div class = "IntroKallor"> <h1>  Faktan som bygger upp vår hemsidan:</h1> </div>
<div class ="RutaK">
<div class = "TextKallor">
  <p>  
      Datan som vi har använt oss av kommer från Brottsförebyggande Rådets hemsida. Graferna och tabellerna som används visualiseras på denna hemsida
      använder endast infromation från BRA.se
      <br></br>
      Om du är själv är intresserad att skapa egna tabeller så har vi länkat till deras hemsida: 
      <a href="https://www.bra.se/" target="_blank"> https://www.bra.se/ </a> 
      <br></br>
      Dem brottstyper som vi har inriktat oss när vi visualiserar brott mot privatpersoner är dessa brott:
        <li> Mord / Dråp </li>
        <li> Rån </li>
        <li> Stöld </li>
        <li> Våld / Misshandel </li>
        <li> Våldtäkter / Sexuella brott </li>
        <li> Hot / Trakasserier </li>
        <li> Bostadsinbrott </li>
      <br></br>
      Utöver det har vi också använt oss av Googles API för att kunna visuallisera kriminaliteten över Sverige.
  </p>
</div>
</div>

<?php
include("parts/footer.php");
?>