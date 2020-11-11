<?php
require_once ('includes/mysql_connect.php');
$query = "SECLECT * FROM bookmarks";
$result = @mysqli_query ($dbc, $query);
$num  = mysqli_num_rows ($results);

if ($num > 0) {
  echo "<p> There are $sum records</p>";
    while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
      echo "<p>Title: $row[title] <br>";
      echo "Comments: $row[comments] <br>";
      echo "URL: <a href=$row[url] target=_blank>$row[url]</a><br>";
      echo "<a href=deleteconfirm.php?id=$row[id]>Delete</a></p>";
    }
} else {
    echo "<p>There is no record</p>";
}
mysuli_close($dbc);
 ?>
