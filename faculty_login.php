<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Facult Log In</title>

</head>

<body>
<?php
include ("header.php");
?>
<div id="main">
<h3>Faculty Sign In</h3>
<hr>
<center>
Welcome to SIRDA LOG IN Portal!<br>
<i>Please provide a valid username and password. If you have forgotten your username or password, or you are a new user, click on the respective link given below</i><br><br>
<div id="form" style="width:600px">
<form name='f' method="post" action="formvalidation_teacher.php">
<br><br>
<table>
<tr><td>User Name </td> <td><input type="text" name="username"></td></tr>
<tr><td>Password </td> <td><input type="password" name="password"></td></tr>
</table>
<input type="submit" value="Log In" class="button">
<form>
<br><br>
<a href="login.php" class="link">Student LogIn</a><br>
<a href="registration.php" class="link">Click here to Register now</a><br>
<a href="change_forgot_pass.php" class="link">Change Password/Forgot Password</a>
<br><br>
</form>
</div>
<br><br>
</div>
<?php
include ("footer.php");
?>
</div>
</body>
</html>