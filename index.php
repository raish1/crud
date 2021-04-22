<html>
<head>
   <style>
    body{text-align:center;}
	body{background-color:pink;}
   </style>
</head>
<body>
<h1>#USER FORM#</h1>
<form action="success.php" method="post">
<tr>
  <th>USERNAME:</th>
  <td><input type="text" name="username" value=""/></td></br></br>
</tr>
<tr>
  <th>PASSWORD:</th>
  <td><input type="password" name="password" value=""/></td></br></br>
</tr>
<tr>
  <th>EMAIL:</th>
  <td><input type="email" name="email" value=""/></td></br></br>
</tr>
<tr>
  <th>GENDER:</th>
  <td><input type="radio" name="gender" value="male"/>M</td>
  <td><input type="radio" name="gender" value="female"/>F</td></br></br>
</tr>
<tr>
  <th>CITY:</th>
  <td><input type="checkbox" name="city[]" value="delhi"/>delhi</td>
  <td><input type="checkbox" name="city[]" value="punjab"/>punjab</td>
  <td><input type="checkbox" name="city[]" value="kanpur"/>kanpur</td>
  <td><input type="checkbox" name="city[]" value="lucknow"/>lucknow</td></br></br>
</tr>
<tr>
  <td>SUBJECT</th>
  <td>
  <select name="subject">
  <option value="">subject</option>
  <option>php</option>
  <option>java</option>
  <option>c++</option>
  <option>python</option>
  </select>
  </td></br></br>
</tr>
<tr>
  <th>M.No:</th>
  <td><input type="tel" name="phone" value=""/></td></br></br>
</tr>
<tr>
  <th>MESSAGE:</th></br>
  <td><textarea placeholder="comment" name="textbox" rows="10" cols="100" value=""/></textarea></td></br></br>
</tr>
<tr>
   <td><input type="submit" name="submit" value="login"/></td>
</tr>
</body>
</html>