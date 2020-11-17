<?php
require_once('includes/mysqli_connect.php');
$id = mysqli_real_escape_string($dbc, $_POST['id']);
$title = mysqli_real_escape_string($dbc, $_POST['title']);
$comments = mysqli_real_escape_string($dbc, $_POST['comments']);
$url = mysqli_real_escape_string($dbc, $_POST['url']);
$query = "UPDATE bookmarks SET title='$title', url='$url', comments='$comments' WHERE id='$id' ";
$results = @mysqli_query ($dbc, $query);

if ($result) {
  echo "<p><b>The selectde record has been updated.</b></p>";
  echo "<a href=index.php>Home</a>";
}else {
  echo "<p>The record could not be updated due to a system error" . mysqli_error($dbc) . "</p>";
}
mysqli_close($dbc);
?>
