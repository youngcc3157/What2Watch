<?php

DEFINE ('DB_USER', 'youngcc');
DEFINE ('DB_PASSWORD', 'Dudcjfsla12!');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'sample');

$conn = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die('Could not connect to MySQL : ' . mysqli_connect_error());

?>