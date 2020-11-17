<?php
require_once('includes/mysqli_connect.php');
$id = $_GET['id'];
$query = "SELCET * FROM bookmarks WHERE id=$id";
$result = mysqli_query($dbc, $query);
$num = mysqli_num_rows($result);

while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
?>

  <form action="update.php" method="post">
    Title: <input type="text" name="title" size="50" value="<?php echo $row['title'];?>"><br>
    URL: <input type="text" name="url" size="50" value="<?php echo $row['url'];?>"><br>
    Comments: <br>
    <textarea name="comments" rows="5" cols="100"><?php echo $row['comments'];?></textarea>
    <br>
    <input type="submit" value="update">
    <input type="reset" value="reset">
    <input type="hidden" name="id" value="<?php echo $row['id'];?>">
  </form>

<?php
}
mysqli_close($dbc);
?>
