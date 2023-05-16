<?php

$is_invalid = false;

//Detecting that a user pressed the "submit" button

if($_SERVER["REQUEST_METHOD"] === "POST") {
    $mysqli = require __DIR__ . "/connection.php";


    $sql = sprintf("SELECT * FROM user
            WHERE email = '%s'",
            $mysqli->real_escape_string($_POST["email"])); //Using real_escape_string to avoid sql injections


    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();

//Veryfing a successful login, then starting the "session"
//for the now logged-in user

    if($user) {
        if(password_verify($_POST["password"], $user["password_hash"])){

            session_start(); //starting the session for the logged in user

            session_regenerate_id();//fixing vulnerability of a "session fixation" attack

            $_SESSION["user_id"] = $user["id"];

            header("Location: index.php");
            exit;

        }
    }

//If this variable is true, then the login failed

    $is_invalid = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>

    <?php if($is_invalid): ?>
        <em>Invalid login</em>
    <?php endif; ?>

    <form method="post">
        <label for="email">Enter your email:</label>
        <input type="email" name="email" id="email">

        <label for="password">Enter your password:</label>
        <input type="password" name="password" id="password">

        <button>Log in</button>
    </form>
</body>
</html>