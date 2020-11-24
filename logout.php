<?php
session_start();
if (!isset($_SESSION['id'])) {
  header('Location:index.php');
} else {
  $_SESSION = [];
  session_destory();
}
echo "<h1>Logged Out!</h1>";
echo "<p>You are now logged out!</p>";
echo "<p><a href=index.php>Go back to the main page</a></p>";
?>
