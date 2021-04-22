<?php
include_once"db.php";
if(!isset($_POST['submit'])){
	$user_id = $_GET['my_id'];
	$sql="Delete from curd214 where id='".$user_id."'";
	if(mysqli_query($conn,$sql)){
		header("location: home.php");
	}else{
		echo "deleting editing record".mysqli_error($conn);
	}
	mysqli_close($conn);
}
?>