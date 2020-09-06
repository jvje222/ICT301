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
$first_name = "Jason";
$last_name = "Jewsikow";
$school_name = "University of Kentucky";
$city = "Dayton";
$state = "Ohio";
$address = $city . $state;
echo "<h3> PHP Examples </h3>";
#created on 9/6
#Use this information for website/future assignments
#PHP practice below
echo "<p>My name is $first_name $last_name and I am currently a Junior at the $school_name and I'm majoring in Business Manageemnt and Information Communication Technology (ICT). I come from a small town near $address but chose to come to the $school_name to be apart of a SEC college close to home.</p>"; //Can add more detail about personal life here
echo "<p>Some of my favorite hobbies include playing/watching any sport, hanging out with my friends, and I am currently learning how to edit using multiple Abobe programs on my own. This website will explain how my past experiences and current interests allow's me to be a qualified canadite for job opportunites.</p>";// Talk about resume and experience;
  ?>

</main>

  </body>
</html>
