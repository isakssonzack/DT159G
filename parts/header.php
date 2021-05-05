<!DOCTYPE html>

<html lang="sv">
<head>
    <title> Kriminalitet.se </title>
    <meta charset="utf-8">
    
    <!-- ChartJS (Java) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.2.0/chart.min.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"> </script>

    <!-- ChartJS (CSS) -->
    <link rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"  
      integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" 
      crossorigin="anonymous">
      
    <script src="js/script.js"> </script>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
<header id="mainheader">
    <h1>Välkommen till Kriminalitet.se</h1>

    <div id="sidebar">
        <div class="toggle-btn" onclick="show()">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <ul>
            <li> <form action="Index.php"> <input type="submit" value="Start" /> </form> </li>
            <li> <form action="OmOss.php"> <input type="submit" value="Om oss" /> </form></li>
            <li> <form action="Kallor.php"> <input type="submit" value="Källor" /> </form>  </li>
        </ul>
    </div>
</header>  