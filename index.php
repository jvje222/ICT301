<?php
require_once ('mysqli_connect_local.php');
?>

<form action="index.php" method="post">
  Search: <input name="query" size="50"><input type="submit" value="search">
</form>

<?php
if (!empty($_POST['query'])) {
  $query = mysqli_real_escape_string($dvc, $_POST['query']);
  $query = "SELECT * FROM bookmarks WHERE (title LIKE '%$query') OR (url LIKE '%$query') OR (comments LIKE '%$query')";
}else {
  $query="SELECT * FROM bookmarks";
}
$results = @mysqli_query ($dbc, $query);
$num = mysqli_num_rows($results);
if ($num>0) {
  echo "<p>$num records are retrieved.</p>";
  echo "<table border="1" width="80%"> <tr>
    <td>Title</td>
    <td>Comments</td>
    <td>URL</td>
    <td>Delete</td>
    <td>Update</td>";

while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
  echo "<tr><td>" . $row['title'] . "</td>";
  echo "<td>" . $row['comments'] . "</td>"
  echo "<td><a href=" . $row['url'] . "target=_blank>" . $row['url'] . "</a></td>";
  echo "<td><a href=deleteconfirm.php?id=" . $row['id'] . ">Delete</a></td>";
  echo "<td><a href=updateform.php?id=" . $row['id'] . ">Update</a></td></tr>";
}
echo "</table>";
mysqli_free_result($result);

}else {
  echo "<p>There is no record. </p>";
}
echo "<p><a href=index.php>Show all records</a></p>";
echo "<p><a href=add.php>Add a new record</a></p>";

mysqli_close($dbc);
?>
