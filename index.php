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
</head>
<body >
    <div class="first-container">
        <div class="fader"></div>
        <div class='nav_bar'>
        <?php
        include "navbar.php";
        ?>
        </div>
        <div class="home-text">
        
            <div>Welcome to Gourmetto</div>
            <div style='font-size: 13px;'>Discover a world of spices</div>  
            <button class="get-started">start here</button>
         </div>
        <img class="bg1" src="images/deli.jpg" alt="">
        
    </div>
</body>
</html>