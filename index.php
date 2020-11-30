<?php
require_once('includes/mysqli_connect.php');

$query = "SELECT * FROM bookmarks";
$result = @mysqli_query($dbc, $query);
$num = mysqli_num_rows($result);

if($num > 0) {
  echo "<p>There are $num records</p>";
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC) ) {
      echo "<p>Title: $row[title] <br>";
      echo "Comments: $row[comments] <br>";
      echo "URL: <a href=$row[url] target=_blank>$row[url]</a></p>";
    }
} else {
    echo "<p>There is no record</p>";
}
mysqli_close($dbc);
?>
