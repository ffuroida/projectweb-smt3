<?php
error_reporting(0);
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location:fatin furoida (4) - Copy/admin - Copy/");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Form in PHP with Session</title>
<link href="stylee.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="main">
<div id="login">
<h2>Login Form</h2>
<form action="login.php" method="post">
<table>
<tr>	
<td>UserName :</td>
<td><input id="name" name="username" placeholder="username" type="text"></td>
</tr>
	<tr>
<td>Password :</td>
<td><input id="password" name="password" placeholder="**********" type="password"></td>
	</tr>
<tr><td>&nbsp;</td>
	<td>
	<input name="submit" type="submit" value=" Login "><input type="submit" name="reset" value="Reset">
	</td></tr>

	</table>
	<span><?php echo $error; ?></span>
</form>
</div>
</div>
</body>
</html>