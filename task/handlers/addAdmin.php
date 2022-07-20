<?php
//echo "<pre>";
//print_r($_POST);
//echo "</pre>";

session_start();
include("connect.php");


$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];

$password=password_hash($password,PASSWORD_DEFAULT);
$type=$_POST["type"];
$sql="INSERT INTO admans(`name`,`email`,`password`,`type`) 
VALUES('$name','$email','$password','$type')";

if(mysqli_query($conn,$sql)) {

  $_SESSION["SUCSEES"]="SUCSEEFULLY ADD USER";
   header("location: ../admin/addAdmin.php");

   echo "yes";
}
