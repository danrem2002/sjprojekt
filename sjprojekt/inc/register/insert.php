<?php
if(empty($_POST["name"])){
    die("Nevyplnene meno.");

}
if( ! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
    die("Zle zadany email");

}
if (strlen($_POST["password"]) < 8){
    die("Heslo musi mat aspon 8 charakterov");

}
if (! preg_match("/[a-z]/i", $_POST["password"])){
    die("Heslo musi obsahovat aspon jedno pismeno");

}
if (! preg_match("/[0-9]/i", $_POST["password"])){
    die("Heslo musi obsahovat aspon jedno cislo");

}
if($_POST["password"] !== $_POST["password_confirm"]){
    die("Hesla nie su rovnake.");

}

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

$mysqli = require('../database.php');

$sql = "INSERT INTO user(name, email, password_hash)
        VALUES (?, ?, ?)";

$stmt = $mysqli->stmt_init();

if(! $stmt ->prepare($sql)){
    die("SQL error: " . $mysqli -> error);

}
print_r($_POST);
var_dump($password_hash);

