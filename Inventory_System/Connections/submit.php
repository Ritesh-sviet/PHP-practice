<?php
include "db.php";
if($_SERVER["REQUEST_METHOD"] == "POST") {
$firstname = $_POST['fname']; 
echo $firstname. "<br/>";
$lastname = $_POST['lname']; 
echo $lastname. "<br/>";
$dob = $_POST['DOB']; 
echo $dob. "<br/>";
$email = $_POST['email']; 
echo $email. "<br/>";
$phone = $_POST['phone']; 
echo $phone. "<br/>";
$gender = $_POST['gridRadios']; 
echo $gender. "<br/>";
$department = $_POST['department']; 
echo $department. "<br/>";
$username = $_POST['username']; 
echo $username. "<br/>";
$password = $_POST['password']; 
echo $password. "<br/>";
$confirm_password = $_POST['confirm']; 
echo $confirm_password. "<br/>";
$profile_image = $_POST['profile']; 
echo $profile_image. "<br/>";
$terms = $_POST['terms']; 
echo $terms. "<br/>";
$country = $_POST['country']; 
echo $country. "<br/>";
$state = $_POST['state']; 
echo $state. "<br/>";
$city = $_POST['city']; 
echo $city. "<br/>";
$pincode =$_POST['pincode']; 
echo $pincode. "<br/>";
$district = $_POST['District'];
 echo $district. "<br/>";
$streetaddress = $_POST['fulladdress']; 
echo $streetaddress. "<br/>";

$addUser = "insert into Users(firstname,lastname,DOB,email,phone,gender,department,username,passwd,confirm_passwd,profile,terms,country,state,city,pincode,District,streetaddress) values ('$firstname','$lastname','$dob','$email','$phone','$gender','$department','$username','$password','$confirm_password','$profile_image','$terms','$country','$state','$city','$pincode','$district','$streetaddress')";
$sql = mysqli_query($conn, $addUser);
if ($sql) {
    echo "New record created successfully";
} else {
    echo "Error: " . $addUser . "<br>" . mysqli_error($conn);
}



}
?>