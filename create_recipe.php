<?php
include 'connection.php';
session_start();



$image_file = $_FILES["photo"];

// Image not defined, let's exit
// if (!isset($image_file)) {
//     die('No file uploaded.');
// }
if (isset($_POST["btn"])) {
    if(isset($_POST['name'])){
        $name= $_POST['name'];
    } else {
        $name= '';
    }
    
    if(isset($_POST['body'])){
        $body= $_POST['body'];
    } else {
        $body= '';
    }
    if(isset($_POST['type'])){
        $type= $_POST['type'];
    } else {
        $type= '';
    }
    if (isset($_FILES["photo"])) {
        echo 'yh';
        $image_dir= "/images/" . $image_file["name"];
        move_uploaded_file(
            // Temp image location
            $image_file["tmp_name"],
        
            // New image location, __DIR__ is the location of the current PHP file
            __DIR__ . "/images/" . $image_file["name"]
        );
    }
    
    // if(isset($_POST['title'])&&isset($_POST['content'])&&isset($image_file)){
    //     echo $image_dir;
    //      $userid= $_SESSION['foodbizuser'];
    //         $sql = "INSERT INTO recipes (author, title, content, image) VALUES ('$userid','$title', '$content', '$image_dir')";
    //         $result = mysqli_query($mysqli, $sql);
    //         header("Location: upload_recipe.php");
    //         die();
    //         // // Fetch all
    //         // mysqli_fetch_all($result, MYSQLI_ASSOC);
    // } else {
    //     $title= '';
    // }
    if(isset($_POST['name'])&&isset($_POST['body'])&&isset($image_file)&&isset($_POST['type'])){
        echo 'nah';
        $uuid= '';
        if(isset($_SESSION['gm8account'])){
            echo 'trup';
            $uuid= $_SESSION['gm8account'];
        }
        echo 'vup';
            $sql = "INSERT INTO recipes (writer, name, body, photo, type) VALUES ('$uuid','$name', '$body', '$image_dir', '$type')";
            $result = mysqli_query($db, $sql);
            header("Location: create_recipe.php");
            die();
    } else {
        $name= '';
    }
    
}


// Move the temp image file to the images/ directory


// mysqli_close($mysqli);
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>
<body >
    <div style='background-color: #f8fae4;' class="first-container">
          <div style='display: flex;'>
          <!-- <?php
            include "sideboard.php";
            ?> -->
            <div style='padding-left: 30px;padding-top: 40px;'>
                <form method='post' action="create_recipe.php" enctype='multipart/form-data'>
                    <input type="hidden" name="upload_recipe" value="upload_recipe">
                    <label for="name">Name</label>
                    <div>
                    <input class='recipe_input' placeholder='' type="text" name="name" required><br>
                    </div>
                    <label for="body">Body</label>
                    <div>
                    <textArea rows=20 class='recipe_input' placeholder='' type="text" name="body" required></textArea><br>
                    </div>
                    <label for="photo">Photo</label>
                    <div>
                    <input  type="file"  name="photo" accept="image/*" required><br>
                    </div>
                    <div>
                <select name="type" class='auth_select' id="">
                    <option disabled selected><span style='font-size: 12px'>select recipe category</span></option>
                    <option value="salad">featured</option>
                    <option value="salad">salad</option>
                    <option value="soup">soup</option>
                    <option value="sweet">sweet</option>
                    <option value="pasta">pasta</option>
                    <option value="bread">bread</option>
                    <option value="vegan">vegan</option>
                </select> 
                </div>
                    <div>
                    <input class='auth_buttton' type="submit" name='btn' value="Submit">
                    </div>  
                </form>
            </div>
          </div>
    </div>
</body>
<!-- <script src='js/recipe.js'></script> -->
  
</html>