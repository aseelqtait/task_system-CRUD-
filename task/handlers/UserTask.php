<?php

$sql="SELECT tasks.id as taskid ,title , bady,tasks.status as statusTask ,name from tasks JOIN users WHERE user_id=users.id";
$showTask=mysqli_query($conn,$sql);