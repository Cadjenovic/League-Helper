<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "itehdomaci1";

$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if ($mysqli->connect_errno) {
    printf("Konekcija neuspešna: %s\n", $mysqli->connect_error);
    exit();
}

?>