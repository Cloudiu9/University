<?php

//Validating the different fields

if(! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
    die("A valid email is required");
}

if(strlen($_POST["password"])<8) {
    die("Password must be at least 8 characters long.");
}

if(! preg_match("/[a-z]/i", $_POST["password"])){
    die("Password must contain at least one letter.");
}

if(! preg_match("/[0-9]/", $_POST["password"])){
    die("Password must contain at least one number.");
}

if($_POST["password"] !== $_POST["password_confirmation"]){
    die("Passwords must match.");
}

//Encrypting the password

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

//Linking the database

$mysqli = require __DIR__ . "/connection.php";

$sql = "INSERT INTO user (email, password_hash)
        VALUES (?, ?)";

//Checking for mysql statement syntax errors
//with the statement object "stmt"

$stmt = $mysqli -> stmt_init();

if(! $stmt -> prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

//Using "ss" because we have 2 strings

$stmt->bind_param("ss",
                  $_POST["email"],
                  $password_hash);

if($stmt -> execute()) {

//Redirecting if the signup was successful

header("Location: signup-success.html");
exit;

//Checking for errors (duplicate email, email is
//unique in database)

} else{
    die($mysqli-> error);
    }

?>