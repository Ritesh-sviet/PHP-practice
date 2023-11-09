<?php
include "db.php";
$countryid = $_POST['idofcountry'];
$query = "select name,id from states where country_id = $countryid";
$result = mysqli_query($conn, $query) or die("Query not found");

if (mysqli_num_rows($result))
{
    while($rows = mysqli_fetch_assoc($result))
    {
        echo "<option value= ".$rows["id"].">".$rows["name"]."</option>"; 
    }
}


?>