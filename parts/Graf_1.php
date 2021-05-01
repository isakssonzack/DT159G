<?php
    // Tabellen för årsutvecklingen och månadsutveckling
?>

<!-- --------------------------------------------- Tabell: Årsutveckling --------------------------------------------- -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
google.charts.load("current", {packages:['corechart']});
google.charts.setOnLoadCallback(drawChart);
    
function drawChart() {

// Data som kommer från Excel
var data = google.visualization.arrayToDataTable([

["Årtal", "Antal brott", { role: "style" } ],
["2010", <?php echo $Year2010_1+ $Year2010_2 + $Year2010_3 + $Year2010_4 + $Year2010_5 +  $Year2010_6 + $Year2010_7 ?>, "2010"],
["2011", <?php echo $Year2011_1+ $Year2011_2 + $Year2011_3 + $Year2011_4 + $Year2011_5 +  $Year2011_6 + $Year2011_7 ?>, "2011"],
["2012", <?php echo $Year2012_1+ $Year2012_2 + $Year2012_3 + $Year2012_4 + $Year2012_5 +  $Year2012_6 + $Year2012_7 ?>, "2012"],
["2013", <?php echo $Year2013_1+ $Year2013_2 + $Year2013_3 + $Year2013_4 + $Year2013_5 +  $Year2013_6 + $Year2013_7 ?>, "2013"],
["2014", <?php echo $Year2014_1+ $Year2014_2 + $Year2014_3 + $Year2014_4 + $Year2014_5 +  $Year2014_6 + $Year2014_7 ?>, "2014"],
["2015", <?php echo $Year2015_1+ $Year2015_2 + $Year2015_3 + $Year2015_4 + $Year2015_5 +  $Year2015_6 + $Year2015_7 ?>, "2015"],
["2016", <?php echo $Year2016_1+ $Year2016_2 + $Year2016_3 + $Year2016_4 + $Year2016_5 +  $Year2016_6 + $Year2016_7 ?>, "2016"],
["2017", <?php echo $Year2017_1+ $Year2017_2 + $Year2017_3 + $Year2017_4 + $Year2017_5 +  $Year2017_6 + $Year2017_7 ?>, "2017"],
["2018", <?php echo $Year2018_1+ $Year2018_2 + $Year2018_3 + $Year2018_4 + $Year2018_5 +  $Year2018_6 + $Year2018_7 ?>, "2018"],
["2019", <?php echo $Year2019_1+ $Year2019_2 + $Year2019_3 + $Year2019_4 + $Year2019_5 +  $Year2019_6 + $Year2019_7 ?>, "2019"],
["2020", <?php echo $Year2020_1+ $Year2020_2 + $Year2020_3 + $Year2020_4 + $Year2020_5 +  $Year2020_6 + $Year2020_7 ?>, "2020"],
]);

// Vyn
var view = new google.visualization.DataView(data);
view.setColumns([0, 1,
{calc: "stringify",
type: "string",
role: "annotation" },
]);

// Inställningar
var options = {
title: "Årsutveckling mellan år 2010 och 2020",
legend: { position: "none" },
};

// Tabellen skapas och ritas ut
var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
chart.draw(view, options);
}
  
</script>
<div id="columnchart_values" style="width: 1000px; height: 600px; margin-left:12.5%;"></div>



<!-- --------------------------------------------- Tabell: Månadsutveckling --------------------------------------------- -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
  
var data = google.visualization.arrayToDataTable([
['Månad', 'Antal brott'],
["Jan", <?php echo $Jan_1 + $Jan_2 + $Jan_3 + $Jan_4 + $Jan_5 + $Jan_6 + $Jan_7 ?> ],
["Feb", <?php echo $Feb_1 + $Feb_2 + $Feb_3 + $Feb_4 + $Feb_5 + $Feb_6 + $Feb_7 ?> ],
["Mar", <?php echo $Mar_1 + $Mar_2 + $Mar_3 + $Mar_4 + $Mar_5 + $Mar_6 + $Mar_7 ?> ],
["Apr", <?php echo $Apr_1 + $Apr_2 + $Apr_3 + $Apr_4 + $Apr_5 + $Apr_6 + $Apr_7 ?> ],
["Maj", <?php echo $Maj_1 + $Maj_2 + $Maj_3 + $Maj_4 + $Maj_5 + $Maj_6 + $Maj_7 ?> ],
["Jun", <?php echo $Jun_1 + $Jun_2 + $Jun_3 + $Jun_4 + $Jun_5 + $Jun_6 + $Jun_7 ?> ],
["Jul", <?php echo $Jul_1 + $Jul_2 + $Jul_3 + $Jul_4 + $Jul_5 + $Jul_6 + $Jul_7 ?> ],
["Aug", <?php echo $Aug_1 + $Aug_2 + $Aug_3 + $Aug_4 + $Aug_5 + $Aug_6 + $Aug_7 ?> ],
["Sep", <?php echo $Sep_1 + $Sep_2 + $Sep_3 + $Sep_4 + $Sep_5 + $Sep_6 + $Sep_7 ?> ],
["Okt", <?php echo $Okt_1 + $Okt_2 + $Okt_3 + $Okt_4 + $Okt_5 + $Okt_6 + $Okt_7 ?> ],
["Nov", <?php echo $Nov_1 + $Nov_2 + $Nov_3 + $Nov_4 + $Nov_5 + $Nov_6 + $Nov_7 ?> ],
["Dec", <?php echo $Dec_1 + $Dec_2 + $Dec_3 + $Dec_4 + $Dec_5 + $Dec_6 + $Dec_7 ?> ],
]);

var options = {
title: 'Månadsutveckling under år 2020',
curveType: 'function',
legend: { position: 'none' }
};

var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
chart.draw(data, options);
}

</script>
<div id="curve_chart" style="width: 1000px; height: 600px; margin-left:12.5%;"></div>