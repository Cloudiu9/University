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
    <title>UOL - Knowledge is power</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
<div id="wrapper">

<header> <!-- making the drop-downs / links at the top (STRUCTURE, ALUMNI, ...) -->

<div> <!-- NEED TO ADD LOGOUT BUTTON ON INDEX.PHP -->
    <div id="logged_in">
        <h1>You are now logged in as: <?= $user["email"] ?></h1>
    </div>
</div>

<a href="index.php">
<img src="Logo.png" alt="Logo" id="logo">  <!-- replace all images with corresponding links from the database -->
</a>
    <div class="row"> <!-- need to make all of these links AND text drop-downs -->
    <p>
     <a href="structure.php">STRUCTURE</a>
     <a href="alumni.php">ALUMNI</a> 
     <a href="contact.php">CONTACT</a>
     <a href="about.php">ABOUT</a>
     <a href="admission.php">ADMISSION</a> 
     <a href="faculties.php">FACULTIES</a> 
     <a href="students.php">STUDENTS</a>
    </p>

<a href="welcome.php">
<i class="fa fa-user" aria-hidden="true"></i>
</a>

    <!--<p>RESEARCH <span>UKRAINIAN CRISIS</span> <span>VIRTUAL TOUR</span> <span>JOB OPENINGS</span> <span>INTERNATIONAL RELATIONS</span></p>-->
    </div>
</header>

<div id="headerm">
    <a href="index.php">
        <img src="Logo.png" alt="Logo" id="logom">
    </a>

    <div class="hamburger">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </div>

    <!-- Add this div element for the mobile menu -->
    <div class="nav-menu">
        <ul>
            <li><a href="#">STRUCTURE</a></li>
            <li><a href="#">ALUMNI</a></li>
            <li><a href="#">CONTACT</a></li>
            <li><a href="#">ABOUT</a></li>
            <li><a href="#">ADMISSION</a></li>
            <li><a href="#">FACULTIES</a></li>
            <li><a href="#">STUDENTS</a></li>
        </ul>
    </div>
</div>



<section id="section_main"> <!-- is gonna be pulled from database -->

<img src="University.png" alt="Building" id="building"> <!-- main uni logo, big -->

<div id="faculties"> <!-- not sure if they should all be in one div or diff divs, seems to work now -->
    <div>
        <h2>Faculty of Computer Science</h2>
        <a href="CS.php"> <!--  !!!change to each faculty's page!!! -->
        <img src="Comp Sci.png" alt="Comp Sci" class="f_img">
        </a>
    </div>
    <div>
        <h2>Faculty of History</h2>
        <a href="History.php">
        <img src="History.png" alt="History" class="f_img">
        </a>
    </div>
    <div>
        <h2>Faculty of Economics</h2>
        <a href="Economics.php">
        <img src="Economics.png" alt="Economics" class="f_img">
        </a>
    </div>
    <div>
        <h2>Faculty of Psychology</h2>
        <a href="Psychology.php">
        <img src="Psychology.png" alt="Psychology" class="f_img">
        </a>
    </div>
</div> 


<div class="facultiesm"> <!-- not sure if they should all be in one div or diff divs, seems to work now -->
    <div>
        <h2>Faculty of Computer Science</h2>
        <a href="CS.php"> <!--  !!!change to each faculty's page!!! -->
        <img src="Comp Sci.png" alt="Comp Sci" class="f_img">
        </a>
    </div>
    <div>
        <h2>Faculty of History</h2>
        <a href="History.php">
        <img src="History.png" alt="History" class="f_img">
        </a>
    </div>
</div>

<div class="facultiesm">
    <div>
        <h2>Faculty of Economics</h2>
        <a href="Economics.php">
        <img src="Economics.png" alt="Economics" class="f_img">
        </a>
    </div>
    <div>
        <h2>Faculty of Psychology</h2>
        <a href="Psychology.php">
        <img src="Psychology.png" alt="Psychology" class="f_img">
        </a>
    </div>
</div> 

</section>

<section id="section_events"> <!-- is gonna be pulled from database -->

<h2 class="section_title">Events</h2> <!-- needs to be centered -->

<div id="events"> <!-- events section, img + title + desc, not sure if they need to be in diff divs or just one, may need to add other events for "All Events" button -->
    <div id="EventCon">
        <div class="event">
            <img src="Event_1.png" alt="Event 1" class="event_img">
            <h2 class="event_title">EVALUATION OF COURSES AND TEACHERS</h2>
            <p class="event_desc">Date: 3-3-2023
                                Time: 10:00
            </p>
        </div>

        <div class="event">
        <img src="Event_2.png" alt="Event 2" class="event_img">
            <h2 class="event_title">THE GLOBAL GOALS PRESENTATION</h2>
            <p class="event_desc">Date: 3-14-2023
                                Time: 12:00
            </p>
        </div>
    </div>

</div>



<!--
<a href="events.php">
<h2 id="All">All Events <i class="fa fa-angle-double-right" aria-hidden="true"></i>
</a>
-->
</h2>

</section>

<section id="news"> <!-- is gonna be pulled from database -->

<h2 class="section_title">News</h2> <!-- needs to be centered -->

<div id="NewsCon">
    <div class="news_con"> <!-- news container, making 4 or 5 (whatever fits without that much space) -->
        <h2 class="news_title">University of Lorem Introduces New Artificial Intelligence Program</h2>
            <p class="news_desc">The University of Lorem has announced a new program in Artificial Intelligence (AI) that will prepare students for the future of technology. The AI program will focus on advanced machine learning techniques, natural language processing, and data analysis. The university aims to produce graduates who will drive innovation in the tech industry. The program is set to launch in the upcoming fall semester.
            </p>
    </div>

    <div class="news_con"> <!-- news container, making 4 or 5 (whatever fits without that much space) -->
        <h2 class="news_title">University of Lorem Named Best Green Campus in the State</h2>
            <p class="news_desc">The University of Lorem has been recognized as the best green campus in the state by the Environmental Protection Agency. The university has implemented sustainable practices such as energy-efficient buildings, composting, and solar energy to reduce its carbon footprint. The university is committed to reducing its environmental impact and inspiring its students to do the same.
            </p>
    </div>

    <div class="news_con"> <!-- news container, making 4 or 5 (whatever fits without that much space) -->
        <h2 class="news_title">University of Lorem Researchers Discover New Species of Fossil</h2>
            <p class="news_desc">A team of researchers from the University of Lorem has discovered a new species of dinosaur fossil in a remote part of the country. The fossil has been identified as a previously unknown species of carnivorous dinosaur that lived during the Cretaceous period. The discovery is a significant contribution to the field of paleontology and sheds light on the evolution of dinosaurs.
            </p>
    </div>

    <div class="news_con"> <!-- news container, making 4 or 5 (whatever fits without that much space) -->
        <h2 class="news_title">University of Lorem Launches Program to Assist First-Generation College Students</h2>
            <p class="news_desc">The University of Lorem has launched a new program to assist first-generation college students in their academic pursuits. The program will provide mentoring, tutoring, and financial assistance to students who are the first in their family to attend college. The university is committed to providing opportunities for all students to succeed and believes that this program will help close the achievement gap for first-generation college students.
            </p>
    </div>

</div>
<!--
<a href="news.php">
<h2 id="All">All News <i class="fa fa-angle-double-right" aria-hidden="true"></i>
</a>
-->
</section>


<footer>
    <h2>SOCIAL MEDIA</h2>
    <a href="https://www.facebook.com/uab.oficial.ro">
        <img src="social.png" alt="social" id="social">
    </a>
</footer>
</div>


<script src="script.js"></script>

</body>
</html>