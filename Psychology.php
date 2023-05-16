<?php
$mysqli = require __DIR__ . "/connection.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Faculty of Computer Science</title>
</head>
<body>

<header> <!-- making the drop-downs / links at the top (STRUCTURE, ALUMNI, ...) -->
<a href="index.php">
<img src="Logo.png" alt="Logo" id="logo">  <!-- replace all images with corresponding links from the database -->
</a>
    <div class="row"> <!-- need to SOMEHOW make all of these links/ some text drop-downs -->
    <p>STRUCTURE ALUMNI CONTACT ABOUT ADMISSION FACULTIES STUDENTS</p>

    <p>RESEARCH <span>UKRAINIAN CRISIS</span> <span>VIRTUAL TOUR</span> <span>JOB OPENINGS</span> <span>INTERNATIONAL RELATIONS</span></p>
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
    
    <div class="FacultyCon">
        <div class="Faculty">
            <h1>Faculty of Psychology</h1>
            <img src="Psychology.png" alt="Comp Sci" class="fac_img">
        </div>
    </div>

    <div class="FacultyCon">
    <p class="f_text">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate modi dignissimos rem odio, quibusdam, et dolore perspiciatis aliquam, alias quidem ex quos magnam optio consequatur nesciunt blanditiis est fuga perferendis?
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt saepe exercitationem tempora porro voluptatum obcaecati quia hic pariatur magnam assumenda tempore voluptatibus qui, nam officiis amet recusandae labore possimus ut.
    </p>

    <p class="f_text">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate modi dignissimos rem odio, quibusdam, et dolore perspiciatis aliquam, alias quidem ex quos magnam optio consequatur nesciunt blanditiis est fuga perferendis?
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum fuga veritatis facilis hic, enim facere impedit repellendus dolor repudiandae, deserunt sequi debitis eos quia ullam, tempora quod corporis veniam porro?
    </p>

    <p class="f_text">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate modi dignissimos rem odio, quibusdam, et dolore perspiciatis aliquam, alias quidem ex quos magnam optio consequatur nesciunt blanditiis est fuga perferendis?
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum placeat repellat recusandae distinctio! Officiis, officia ad fugiat id veritatis ducimus, eum ea soluta possimus saepe blanditiis perferendis fuga cumque exercitationem.
    </p>
    </div>

    <div class="Container">
        <div class="Faculty_Icons">
            <a href="Research.php">
                <img src="Research_icon.png" alt="Research" class="icon">
            </a>
            <h2>Research</h2>
        </div>

        <div class="Faculty_Icons">
            <a href="Students.php">
                <img src="Students_icon.png" alt="Students" class="icon">
            </a>
            <h2>Students</h2>
        </div>

        <div class="Faculty_Icons">
            <a href="Admission.php">
                <img src="Admission_icon.png" alt="Admission" class="icon">
            </a>
            <h2>Admission</h2>
        </div>

        <div class="Faculty_Icons">
            <a href="Study.php">
                <img src="StudyPrograms_icon.png" alt="Programs" class="icon">
            </a>
            <h2>Study Programs</h2>
        </div>
    </div>

<footer>
    <h2>SOCIAL MEDIA</h2>
    <a href="social.php">
        <img src="social.png" alt="social" id="social">
    </a>
</footer>

<script src="script.js"></script>

</body>
</html>