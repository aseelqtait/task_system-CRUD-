<?php
//echo "<pre>";
//print_r($_POST);
//echo "</pre>";

session_start();
include("connect.php");


$name=$_POST["name"];
$email=$_POST["email"];
$password=$_POST["password"];

$password=password_hash($password,PASSWORD_DEFAULT);
$sql="INSERT INTO users(`name`,`email`,`password`) 
VALUES('$name','$email','$password')";

if(mysqli_query($conn,$sql)) {

   $_SESSION["SUCSEES"]="SUCSEEFULLY ADD USER";
   header("location: ../admin/addUser.php");
}
