<?php
require"db.php";
$result=$conn->query("SELECT*FROM curd214" );
?>
<html>
<head>
  <style>
     body{background-color:yellow;}
	 body,th,td{border: 1px solid black;}
	 table{width: 100%;}
  </style>
</head>
<body>
   <table>
     <tr>
	   <td>USERNAME</th>
	   <td>PASSWORD</th>
	   <td>EMAIL</th>
	   <td>GENDER</th>
	   <td>CITY</th>
	   <td>SUBJECT</th>
	   <td>PHONE</th>
	   <td>MESSAGE</th>
	   <td>UPDATE</th>
	   <td>DELETE</th>
	 </tr>
	<?php while($row=mysqli_fetch_array($result)){?>
	<tr>
	   <td><?php echo $row['username'];?></td>
	   <td><?php echo $row['password'];?></td>
	   <td><?php echo $row['email'];?></td>
	   <td><?php echo $row['gender'];?></td>
	   <td><?php echo $row['city'];?></td>
	   <td><?php echo $row['subject'];?></td>
	   <td><?php echo $row['phone'];?></td>
	   <td><?php echo $row['textbox'];?></td>
	   <td><a href="update.php?my_id=<?php echo $row['id'];?>"/>Edit</a></td>
	   <td><a href="delete.php?my_id=<?php echo $row['id'];?>"/>Delete</a></td>
	</tr>
	<?php }?>
	</table>
</body>
</html>