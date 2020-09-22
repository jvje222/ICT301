<!DOCTYPE html>
<html>
  <head>
    <title>Assignment #4</title>
  </head>
  <body>

<header>
  <p>ICT301-001 HTML Coding</p>
</header>

<main>

    <form action="form_validation.php" method"get">
  <label for="fname">Your Number:</label>
  <input type="text" name="num"><br><br>
  <input type="submit" value="Submit">

<?php
  if (!empty($_GET['num']) && is_numeric ($_GET['num'])) {$num = $_GET['num'];
      echo "Your number is $num. <br>";}
      else {echo '<p> Please enter a number. </p>';}

      if ($num < 10) {echo "$num is less than 10";}
      else {echo '<p> Please enter a number. </p>';
          }
?>

</main>

  </body>
</html>
