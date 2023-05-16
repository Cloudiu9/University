<?php

$host = "localhost";
$dbname = "university";
$username = "root";
$password = "claudiu";

$mysqli = new mysqli($host, $username, $password, $dbname);

if( $mysqli -> connect_errno){
    die("Connection erorr: " . $mysqli->connect_error);
}

return $mysqli;

?>