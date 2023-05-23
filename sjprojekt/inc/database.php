<?php

$host = "localhost";
$dbname = "bikeland";
$username = "root";
$password = "";


$mysqli = new mysqli(hostname: $host,
                     username: $username,
                     database: $dbname,
                     password: $password );


if($mysqli->connect_errno){

    die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;