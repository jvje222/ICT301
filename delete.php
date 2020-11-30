<?php
require_once('mysqli_connect.php');
$id = $_GET['id'];
$query = "DELETE FROM bookmarks WHERE id=$id";
$result = mysqli_query($dbc, $query)
if ($result) {
  echo "The selcted record has been deleted.";
} else {
    echo "The selected record could not be deleted.";
}
echo "<p><a href=index.php>Go back to the main page.</a></p>";
mysqli_close($dbc)
 ?>
