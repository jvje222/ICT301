<!DOCTYPE html>
<html>
  <head>
    <title>Assignment #5</title>
  </head>
  <body>

<?php
//Create a Associative Array about favorite Hip-Hop Artists
$artists = array("Juice WRLD" => "Drake" => "Trippie Red" => "Lil Uzi" => "Lil Skies" => "Post Malone" => "Travis Scott");

//Sort the items by key
ksort($artists);

//Print out all sorted values for $artists
echo "My favorite artists include: <br>";
foreach ($artists as $key => $value) {
  echo "$value in $key <br>";
}
 ?>

  </body>
</html>
