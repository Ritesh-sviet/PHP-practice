<?php
include "db.php";
$stateid = $_POST['id'];
$query = "select cityname,id from TempCity where stateid = $stateid";
$result = mysqli_query($conn, $query) or die("Query not found");

if (mysqli_num_rows($result))
{
    while($city = mysqli_fetch_assoc($result))
    {
        echo "<option value= ".$city["id"].">".$city["cityname"]."</option>"; 
    }
}


?> 