<?php

DEFINE ('DB_USER', 'jvje222')
DEFINE ('DB_PASSWORD', '4odaNzgo*')
DEFINE ('DB_HOST', 'localhost')
DEFINE ('DB_NAME', 'jvje222ict301')


$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die ('could not connect to MYSQL: ' . mysqli_error());
?>
