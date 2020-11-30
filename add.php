<?php
require_once('includes/db_connect_local.php');

echo "<p>Add a new record</p>";

if(isset($_POST['submitted'])) {
    $title = mysqli_real_escape_string($dbc, $_POST['title']);
    $comments = mysqli_real_escape_string($dbc, $_POST['comments']);
    $url = mysqli_real_escape_string($dbc, $_POST['url']);
    $query = "INSERT INTO bookmarks (title, url, comments) VALUES ('$title', '$url', '$comments')";
    $result = @mysqli_query($dbc, $query);
    if ($result) {
      echo "<p>A new record has been added.</p>";
      echo "<p><a herf=index.php> Show all records.</a></p>";
    } else {
        echo "<p>The record could not be added due to a system error." . mysqli_error($dbc) . "</p>";
    }
}
mysqli_close($dbc)
 ?>
 <form action="add.php" method="POST">
    <p>Title <input type="text" name="title" size="50"></p>
    <p>URL <input type="text" name="url" size="50"></p>
    <p>Comments<br>
    <textarea name="comments" rows="3" cols="50"></textarea></p>
    <p><input type="submit" name="submitted" size="Submit"></p>
  </form>
