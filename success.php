<?php
require"db.php";
$phone="";
if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$city = implode(",",$_POST['city']);
	$subject = $_POST['subject'];
	$phone = $_POST['phone'];
	$textbox = $_POST['textbox'];
	if($username!="" && $password!=""){
		$sql="INSERT INTO curd214(`username`,`password`,`email`,`gender`,`city`,`subject`,`phone`,`textbox`)
		VALUES('".$username."','".$password."','".$email."','".$gender."','".$city."','".$subject."','".$phone."','".$textbox."')";
		if($conn->query($sql)===TRUE){
			header("location: home.php");
		}else{
			echo "error".$sql."</br>".$conn->error;
		}
		$conn->close();
	}else{
		echo "data is not founded";
	}
}
?>