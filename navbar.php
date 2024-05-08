<?php
include 'connection.php';
session_start();
// $sql = "SELECT Lastname, Age FROM Persons ORDER BY Lastname";
// $result = mysqli_query($mysqli, $sql);


// // Fetch all
// mysqli_fetch_all($result, MYSQLI_ASSOC);

// // Free result set
// mysqli_free_result($result);

// mysqli_close($mysqli);
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
</head>
<body >
    <nav class="other-nav">
        <div class="logo">Gourmetto</div>
        <div class="options">
            <a class="navlink" style="color: #f87474;" href="index.php">home</a>
            <a href='recipes.php' class="navlink">recipes</a>
            <a class="navlink">stories</a>
            <a class="navlink">about</a>
            <a class="navlink" href="blog.php">contact us</a>
            <!-- <a class="navlink" href="signin.php"><?php if(!isset($_SESSION['loggedin']) ||$_SESSION['loggedin']!='true'){
                echo 'Sign In';
            } 
            ?> </a> -->
            <!-- <a class="navlink" href="logout.php"><?php if(isset($_SESSION['loggedin'])&&$_SESSION['loggedin']=='true'){
                echo 'Log Out';
            } 
            ?> </a> -->
            <!-- <a class="navlink" href="signup.php">Sign Up</a>
            <a class="navlink" href="signin.php">Sign In</a>
            <a style="display: none;">Log Out</a> -->
        </div>
        <div>
            <input type="search" class='search' name="search" placeholder="Search..">
        </div>
        <div class="options">
        <a class="navlink" href=""><?php if(isset($_SESSION['loggedin'])&&$_SESSION['loggedin']=='true'){
                echo 'welcome '.$_SESSION['username'];
            } 
            ?> </a>
            <?php if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!='true'){
                // echo 'Sign Up';
              echo  '<a class="navlink" href="register.php">Sign Up<a>';
            } 
            ?> </a>
            <?php if(!isset($_SESSION['loggedin']) ||$_SESSION['loggedin']!='true'){
                echo '<a class="navlink" href="login.php">Sign In<a>';
            } 
            ?> </a>
            <?php if(isset($_SESSION['loggedin'])&&$_SESSION['loggedin']=='true'){
                echo '<a class="navlink" href="logout.php">Log Out<a>';
            } 
            ?> </a>
        </div>
    </nav>
</body>
</html>



