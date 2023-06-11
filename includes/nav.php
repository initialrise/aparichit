<?php session_start(); ?>
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
                    echo '<div class="login"><a class= "login" href="login.php">' . $_SESSION["username"] . '</a></div>';
                    }
                    else {
                        echo '<div class="login"><a class= "login" href="login.php">LOGIN</a></div>';
                    } ?>
                    <!-- <div class="services"><a class= "services" href="#">Services</a></div> -->
                   
                </div>           

            </div>