<!DOCTYPE html>
<html>
  <head>
    <title>Assignment #4</title>
  </head>
  <body>


<?php
  if (!empty($_GET['num']) && is_numbric ($_GET['num'])) {$num = $_GET['num'];
  echo "Your number is $num. <br>";}
  else
  {echo "<p><ahref=for_loop_form.html>Go back and enter a number.</a></p>";

  for ($counter=1; $counter <= $num; $counter++){echo "<p>Hello<br>";}
 ?>

  </body>
</html>
