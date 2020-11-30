<?php
require_once('mysqli_connect_local.php');

$query = "SELECT * FROM bookmarks";
$result = @mysqli_query($dbc, $query);
$num = mysqli_num_rows($result);

echo "<p><a href=add.php>Add a new record</a></p>";

if($num > 0) {
  echo "<p>There are $num records</p>";
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC) ) {
      echo "<p>Title: $row[title] <br>";
      echo "Comments: $row[comments] <br>";
      echo "URL: <a href=$row[url] target=_blank>$row[url]</a></p>";
      echo "<a href=deleteconfirm.php?id=$row[id]Delete</a></p>";
    }
} else {
    echo "<p>There is no record</p>";
}
mysqli_close($dbc);
?>
