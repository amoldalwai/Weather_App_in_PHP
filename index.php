<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design for Bootstrap</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="css/style.css">
</head>
	<style>
	#wcard
	{
color:white;
	background: #667db6;  /* fallback for old browsers */
background: -webkit-linear-gradient(to top, #667db6, #0082c8, #0082c8, #667db6);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to top, #667db6, #0082c8, #0082c8, #667db6); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

border-radius:15px;
	height:600px;


	}
	/*
	background: #667db6;  /* fallback for old browsers */
background: -webkit-linear-gradient(to top, #667db6, #0082c8, #0082c8, #667db6);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to top, #667db6, #0082c8, #0082c8, #667db6); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

background: #0f0c29;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #24243e, #302b63, #0f0c29);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #24243e, #302b63, #0f0c29); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

	*/
	body 
	{
  
background: #fafafa;  /* fallback for old browsers */

	}
	
	
	</style>
<body>

<div class="card weather-card mask waves-effect  rgba-white-slight" style="margin:15px" id="wcard">

<form class="form-inline mr-auto " style="margin:15px;" action="index.php" method="POST">
  <input class="form-control mr-sm-2 btn-rounded  " name="searchtext"  type="text" placeholder="Search" aria-label="Search">
 
</form>



<?php

$searchtext="";
require 'simple_html_dom.php';
$searchtext = $_POST["searchtext"];
$country_url1="https://www.weather-forecast.com/locations/";
$country_url2="/forecasts/latest";
$search_url=$country_url1.$searchtext.$country_url2;
$html = file_get_html($search_url);
?>

<div class="card-body pb-3 ">

    <!-- Title -->
    <h4 class="card-title font-weight-bold" id="locname">
	
	<?php
	echo $html->find('p[class="large-loc"]',0)->find('b',0)->innertext;
    echo "<br>";
	
	?>
	
	
	
	</h4>
    <!-- Text -->
    <p class="card-text">
	
	<?php
	echo "<span style='color:white'>".date("l").",&nbsp;&nbsp;".date("Y/m/d")."</span>";
    
	
	
	?>
	
	
	</p>
	
	 <p class="card-text">
	
	<?php
	echo "<span style='color:white'>".$html->find('span[class="latitude"]',0)->innertext."</span>";

//long
echo "<span style='color:white;margin-left:10px'>".$html->find('span[class="longitude"]',0)->innertext."</span>"; 
 echo "<br>";
	
	
	?>
	
	
	</p>
    <div class="d-flex justify-content-between">
      <p class="display-1 degree">
	  
	  <?php
	  echo $html->find('span[class="temp b-forecast__table-value"]',0)->innertext."&#8451;";echo "<br>";
	  ?>
	  
	  
	  </p>
      <i class="fas fa-sun-o fa-5x pt-3 amber-text"></i>
    </div>
    <div class="d-flex justify-content-between mb-4">
      <p><i class="fas fa-tint fa-lg text-info pr-2"></i>
	  <?php
	  echo $html->find('span[class="rain b-forecast__table-value"]',0)->innertext." in mm";
echo "<br>";
	  
	  ?>
	  
	  
	  </p>
      <p><i class="fas fa-cloud fa-lg white-text pr-2">
	  </i>
	  <?php
	   echo $html->find('div[class="mid"]',0)->innertext."";
       echo "<br>";
	  ?>
	  </p>
	   <p><i class="fas fa-leaf fa-lg green-text pr-2">
	  </i>
	  <?php
	   echo $html->find('span[class="windp"]',0)->innertext." km/ph";
       echo "<br>";
	  ?>
	  </p>
    </div>
	<p class="card-text">
	<h4>Description:</h4>
	<?php
    echo "<span style='color:white;font-size:14px'>".$html->find('span[class="phrase"]',0)->innertext."</span>"; 
 echo "<br>";?>
 </p>
    </div>

  </div>

</body>
 <script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript">

  </script>
  
</html>