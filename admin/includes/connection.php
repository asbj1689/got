<?php

//Koden forsøger at forbinde til en database

$host = "localhost";
$user = "root";
$password = "";
$database = "game_of_thrones";

$con = new mysqli($host, $user, $password, $database);
$con->set_charset("utf8");

if($con->connect_errno) {
    die('Can not connect to database: (' . $con->connect_errno . ')' . $con->connect_error);
}

?>