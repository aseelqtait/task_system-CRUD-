<?php 
session_start();
include("connect.php");
$title=$_POST['name'];
$bady=$_POST['bady'];
$uid=$_POST['user_name'];

$sql="INSERT INTO TASKS(`title`,`bady`,`user_id`) VALUES('$title','$bady','$uid')";

if(mysqli_query($conn,$sql)){



    header("location: ../admin/addTask.php");
}