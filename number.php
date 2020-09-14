<!DOCTYPE html>
<html>
  <head>
    <title>Jason Jewsikow PHP Coding</title>
  </head>
  <body>

<header>
  <p>ICT301-001 HTML Coding</p>
</header>

<main>

  <?php
  //Setting variables:
  $quality = 5;// Buying packs of gum
  $price = 1.99;
  $taxrate = 0.05;//5% sales tax on the total

  //Calculating the total:
  $total = $quality * $price;
  $total = $total + ($total * taxrate);//Calculating and then adding the sales tax

  //Format the total:
  $total = number_format ($total, 2);

  //Results:
  echo '<p> I am purchasing <strong>'. $quality . '</strong> packs of gum at the cost of <strong>$' . $price . '</strong> each. With tax, the total comes to <strong>$' . $total . '</strong>.</p>';
  ?>


</main>

  </body>
</html>
