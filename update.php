<?php
include_once"db.php";
$query=$username=$password=$email=$gender=$city=$subject=$phone=$text=$user_edit_id="";
if(!isset($_POST['submit'])){
	$user_id = $_GET['my_id'];
	$sql="SELECT*FROM curd214 Where id='".$user_id."'";
	$query=mysqli_query($conn,$sql);
	$result = mysqli_fetch_array($query);
	$username = $result['username'];
	$password = $result['password'];
	$email = $result['email'];
	$gender = $result['gender'];
	$city = explode(" ",$result['city']);
	$subject = $result['subject'];
	$phone = $result['phone'];
	$text = $result['textbox'];
	mysqli_close($conn);
}
if(isset($_POST['submit'])){
	$username_update = $_POST['username'];
	$password_update = $_POST['password'];
	$email_update = $_POST['email'];
	$gender_update = $_POST['gender'];
	$city_update = implode(" ",$_POST['city']);
	$subject_update = $_POST['subject'];
	$phone_update = $_POST['phone'];
	$text_update = $_POST['textbox'];
	$user_edit_id = $_POST['user_edit_id'];
	if($username_update!="" && $password_update!=""){
		$sql="UPDATE  curd214 SET username='".$username_update."',password='".$password_update."',email='".$email_update."',gender='".$gender_update."',city='".$city_update."',subject='".$subject_update."',phone='".$phone_update."',textbox='".$text_update."' where id='".$user_edit_id."'";
		if($conn->query($sql)===TRUE){
			header("location: home.php");
		}else{
			echo "error".$sql."</br>".$conn->error;
		}
	}else{
		echo "data is not founded";
	}
}
?>
<html>
<body>
<form action="update.php" method="post">
<input type="hidden" name="user_edit_id" value="<?php echo $user_id;?>;"/>
<tr>
   <th>username</th>
   <td><input type="text" name="username" value="<?php echo $username;?>"/></td></br></br>
</tr>
<tr>
   <th>password</th>
   <td><input type="password" name="password" value="<?php echo $password;?>"/></td></br></br>
</tr>
<tr>
<th>email</th>
<td><input type="email" name="email" value="<?php echo $email;?>"/></td></br></br>
</tr>
<tr>
<th>gender</th>
<td><input type="radio" name="gender" value="male"<?php if($gender=="male"){ echo "checked";}?>/>male</td>
<td><input type="radio" name="gender" value="female"<?php if($gender=="female"){ echo "checked";}?>/>female</td></br></br>
</tr>
<tr>
 <th>city</th>
 <td><input type="checkbox" name="city[]" value="delhi"<?php if(in_array("delhi",$city)){ echo "checked";}?>/>delhi</td>
 <td><input type="checkbox" name="city[]" value="punjab"<?php if(in_array("punjab",$city)){ echo "checked";}?>/>punjab</td>
 <td><input type="checkbox" name="city[]" value="kanpur"<?php if(in_array("kanpur",$city)){ echo "checked";}?>/>kanpur</td>
 <td><input type="checkbox" name="city[]" value="lucknow"<?php if(in_array("lucknow",$city)){ echo "checked";}?>/>lucknow</td></br></br>
</tr>
<tr>
 <th>subject</th>
 <td>
   <select name="subject">
   <option value="">subject</option>
   <option <?php if($subject=="php"){ echo "selected";}?>>php</option>
   <option <?php if($subject=="java"){ echo "selected";}?>>java</option>
   <option <?php if($subject=="c++"){ echo "selected";}?>>c++</option>
   <option <?php if($subject=="python"){ echo "selected";}?>>python</option>
   </select>
   </td></br></br>
</tr>
<tr>
  <th>Phone</th>
  <td><input type="tel" name="phone" value="<?php echo $phone;?>"/></td></br></br>
</tr>
<tr>
<th>Message</th>
<td><textarea name="textbox" rows="10" cols="40"><?php echo htmlspecialchars($text);?></textarea></td></br></br>
</tr>
<tr>
<td><input type="submit" name="submit" value="update"/></td>
</tr>
</form>
</body>
</html>