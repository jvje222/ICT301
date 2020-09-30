<!DOCTYPE html>
<html>
  <head>
    <title>Assignment #5</title>
  </head>
  <body>

<?php

$home = array("Dayton"=>"Ohio", "Springboro"=>"Ohio", "Troy"=>"Ohio", "Colubus"=>"Ohio", "Lexington"=>"Kentucky", "Richmond"=>"Kentucky", "Villa Hills"=>"Kentucky");

ksort($home);
foreach($home as $key=>$value) {
	echo"<p>I have lived near $key in $value</p>";
}
 ?>

  </body>
</html>
