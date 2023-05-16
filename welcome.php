<?php

session_start();

if(isset($_SESSION["user_id"])){
    $mysqli = require __DIR__ . "/connection.php";

    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";

    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title>Home</title>
</head>
<body>

    <?php
          if (isset($user)): ?>

    <h1>Welcome, <?= $user["email"] ?></h1> <!-- "Folosiți e-mail pe post de username" -->

    <p><a href="logout.php">Log out</a></p>

        <?php else: ?>
            <h1>Home</h1>
            <p><a href="login.php">Log in</a> or <a href="signup.html">sign up</a></p>

    <?php endif; ?>
</body>
</html>