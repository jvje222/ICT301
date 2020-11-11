<?php
$id = $_GET['id'];

echo "<p>Are you sure that you want to delete this record?</p>";
echo "<p><a href=delete.php?id=$id>YES</a>";
echo "<a href=index.php>NO</a></p>";
 ?>
