<?php
include("connect.php");

$TID=$_GET['taskid'];
$sql="DELETE FROM TASKS WHERE ID=$TID";
if(mysqli_query($conn,$sql)){

header("location: ../admin/showTask.php");
}