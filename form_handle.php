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

//Creating a shorthand fot the form data:
$name = $_POST ['name']
$email = $_POST ['email']
$website = $_POST ['website']
$comment = $_POST ['comments']
$gender = $_POST ['gender']

//Printing the submitted information:
echo "<p>$name information can found through $website .</p>";
echo "<p>Thank you for the following comment: <br> $comment .</p>";
echo "<p>We will reply to you at $email as soon as possible.</p>";
 ?>

</main>

  </body>
</html>
