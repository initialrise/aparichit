<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/video_view.css" />
    <link rel="stylesheet" href="css/index.css" />
    <link rel="stylesheet" href="css/corruption_upload.css" />
    <link rel="stylesheet" href="./css/view_suggestions.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css">

    <title>Project Aparichit</title>
</head>
<body>
        <div class="container"> 
            <div class="navbar">
                <div class="logo">
                    <a class= "button" href="index.php"><img src="image/logo.png" alt="Logo"></a>
                </div>
                <div class="nav-items">
                    <div class="home"><a class= "home" href="/index.html">Home</a></div>
                    <div class="dropdown">
                        <button class="dropbtn">Services <i class="fa fa-caret-down"></i></button>
                        <div class="dropdown-content">
                          <a href="corruption.php">Corruption Footage</a>
                          <a href="suggestions.php">View Suggestions</a>
                          <a href="helpposts.php">View Ticket Issued</a>
                          <a href="emergency.html">Emergency Services</a>
                        </div>
                      </div>
                    <div class="news-dropdown"><a class= "news" href="#">News</a></div>
                    <div class="contact"><a class= "contact" href="#">Contact</a></div>
                     <?php if(isset($_SESSION["username"])){
                    echo '<div class="login"><a class= "login" href="../login.php">' . $_SESSION["username"] . '</a></div>';
                    }
                    else {
                        echo '<div class="login"><a class= "login" href="../login.php">LOGIN</a></div>';
                    } ?>
                    <!-- <div class="services"><a class= "services" href="#">Services</a></div> -->
                   
                </div>           

            </div>