<?php 

require("connect.php");

$uid=$_GET['userid'];
$sql="UPDATE USERS SET status=1 WHERE ID=$uid";
if(mysqli_query($conn,$sql)){

    header("location: ../admin/showUser.php");

}
