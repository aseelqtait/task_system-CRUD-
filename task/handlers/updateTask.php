<?php

require("connect.php");

$TID=$_GET['taskid'];

$sql="UPDATE TASKS SET status=1 WHERE id=$TID";
if(mysqli_query($conn,$sql)){


    header("location: ../admin/showTask.php");
}