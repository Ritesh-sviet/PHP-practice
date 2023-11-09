<?php
$hostname = "localhost";
$username = "root";
$password = "";
$databasename = "Inventory_System";

$conn = mysqli_connect($hostname, $username, $password, $databasename);


  if(!$conn) {
    echo "Connection failed;( " . mysqli_connect_error();
  }
    // else
    // {
    //     echo "success       ";
    // }
?>    