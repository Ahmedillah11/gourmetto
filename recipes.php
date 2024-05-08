<?php
include 'connection.php';
session_start();

// if(!isset($_SESSION['gm8category']) ||$_SESSION['loggedin']!='true'){
//   echo '<a class="navlink" href="signin.php">Sign In<a>';
// } 
// if(isset($_SESSION['gm8category'])){
//   $currsession= $_SESSION['gm8category'];
//   $sql0= "SELECT name, body, image from recipes";
//   $result0 = mysqli_query($db, $sql0);
//   $result0Array = $result0 -> fetch_array(MYSQLI_NUM);
//   if ($result0Array!=[]) {
//     if($currsession=='featured'){
//      $rand_keys= array_rand($result0Array, 9);
//      $arrSize= sizeof($result0Array);
//      $total= 9;
//      if($arrSize<9){
//       $total= $arrSize;
//      }
//      for ($i=0; $i < $total; $i++) { 
//       echo '<div><div>'.$result0Array[$random_keys[$i]]['name'].'</div></div>';
//      }

//     }
//   }
// } 



//Values 
if(isset($_POST['category'])){
    $category= $_POST['category'];
    $_SESSION['gm8category'] = $_POST['category'];
    header("Location: recipes.php");
} else {
    $category= '';
}





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
<body>
  <?php
    include 'nav2.php';
  ?>
  <div style='margin-left: 30px; margin-top: 30px; margin-right: 30px; overflow: hidden; height: 450px; border-radius: 10px'>
    <img style='width: 100vw;' src="images/pexels-pixabay-361184.jpg" alt="">
  </div>
  <div style='margin-top: 60px; margin-left: 60px'>
  <div>
    <?php
    if(isset($_SESSION['category'])){
      if ($_SESSION['category']=='chef') {
        echo "<a href='create_recipe.php' class='create_recipe'>create recipe</a>";
      }
    }
    ?>
    </div>
  <form method='post' action="" >
    <select name="category" class='auth_select' id="">
        <option disabled selected><span style='font-size: 12px'>select recipe category</span></option>
        <option name="category" value="salad">featured</option>
        <option name="category" value="salad">salad</option>
        <option name="category" value="soup">soup</option>
        <option name="category" value="sweet">sweet</option>
        <option name="category" value="pasta">pasta</option>
        <option name="category" value="bread">bread</option>
        <option name="category" value="vegan">vegan</option>
    </select>  
    <input type="submit" value='submit'>
  </form>
    <?php
      if(isset($_SESSION['gm8category'])){
        $currsession= $_SESSION['gm8category'];
        $sql0= "SELECT name, body, photo from recipes";
        $result0 = mysqli_query($db, $sql0);
        $result0Array = $result0 -> fetch_array(MYSQLI_NUM);
        if ($result0Array!=[]) {
          if($currsession=='featured'){
           $rand_keys= array_rand($result0Array, 9);
           $arrSize= sizeof($result0Array);
           $total= 9;
           if($arrSize<9){
            $total= $arrSize;
           }
           for ($i=0; $i < $total; $i++) { 
            echo '<div><div>'.$result0Array[$random_keys[$i]]['name'].'</div></div>';
           }
      
          } else {
            $query1= "SELECT name, body, photo from recipes where type='$currsession'";
            $prod1 = mysqli_query($db, $query1);
            $prod1Array = $prod1 -> fetch_array(MYSQLI_NUM);
            $total= 9;
            $arrSize= sizeof($prod1Array);
            if($prod1Array<9){
              $total= $arrSize;
            }
            for ($i=0; $i < $total; $i++) { 
              echo '<div><div>'.$prod1Array[$i]['name'].'</div></div>';
             }
          }
        }
      }
    ?>
  </div>
</body>
</html>