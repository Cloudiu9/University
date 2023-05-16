<?php

//Every time we use sessions, we need to use
//session_start();

session_start();

//Logging out by destroying the current session,
//then redirectiong to the home page

session_destroy();

header("Location: welcome.php");
exit;

?>