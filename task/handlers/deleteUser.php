<?php
require("connect.php");
$uid=$_GET['userid'];
$sql="DELETE FROM USERS WHERE ID=$uid ";
if(mysqli_query($conn,$sql)){


    header("location: ../admin/showUser.php");
}
