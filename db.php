<?php
$servername="localhost";
$username="root";
$password="";
$database="user_raish_123";
$conn=new mysqli($servername,$username,$password,$database);
if($conn->connect_error){
	die("connection faild"
	  .$conn->connect_error);
}
echo "connection success";
?>