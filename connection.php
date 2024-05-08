<?php

$db = mysqli_connect("localhost", "root", "", "tj007");
// Check connection
if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
error_reporting(E_ALL);
ini_set('display_errors','Off');

?>