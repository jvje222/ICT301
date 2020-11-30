<?php
$email = $_POST['email'];
$pass = $_POST['pass'];
$errors = [];

if (empty($email)) {
  $errors[] = 'You forget to enter your email address.'
}

if (empty($pass)) {
  $errors[] = 'You forget to enter your password.'
}

if (empty($email)) {
  require_once('mysqli_connect_local.php');
  $q = "SELECT * FROM users WHERE email='$email' AND pass=SHA2 ('$pass', 512)";
  $result = @mysquli_qiery($dbc, $q);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
  if($row) {
    session_start();
    $_SESSION['id'] = $row['id'];
    $_SESSION['first_name'] = $row['first_name'];
    $_SESSION['last_name'] = $row['last_name'];
    $_SESSION['email'] = $row['email'];
    header("Location:loggin.php");
    exit();
  }
}

$errors[] = 'Your email address and password do not match.';
if (!empty($errors)) {
  echo '<h1>Error!</h1> <p>The following error(s) occured:<br>';
  foreach ($errors as $msg) {
    echo "$msg<br>";
  }
  echo '</p><p><a href=index.php>Please try again.</a></p>';
}
mysqli_close($dbc);
?>
