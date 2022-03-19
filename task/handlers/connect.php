<?php

define("servername",'localhost');

define("dbname",'tasks');
define("username",'root');
define("password",'');

$conn=mysqli_connect(servername,username,password,dbname);
if ($conn){


    echo "hello";
}else{



    echo "error";
}




?>