<?php
session_start();
include("connect.php");


$email=$_POST['email'];
$password=$_POST['password'];


$sql="SELECT *FROM USERS WHERE EMAIL='$email'";


$query=mysqli_query($conn,$sql);
$data=mysqli_fetch_assoc($query);
     

if(mysqli_num_rows($query)>0){
if(password_verify($password,$data['password'])){
$_SESSION['id']=$data['id'];

header("location: ../admin/layouts.php");

}else{
    $_SESSION['errors']="invailed password";
    header("location: ../admin/login.php");

}

}
else{
    $_SESSION['errors']="invailed emails";
    header("location: ../admin/login.php");

}
