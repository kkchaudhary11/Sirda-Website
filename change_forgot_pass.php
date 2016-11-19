<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Change/Forgot Password</title>
</head>

<body>

<div id="main">
<h3>Change/Forgot Password</h3>
<hr>
<center>
	
Please select the appropriate option and provide the required information. To change your password you will need your User ID and current password. If you have forgotten your password, you will need either your User ID or email address that you registe<br><br>
<div id="form" style="width:600px">
<form name='f' method="post" action="formvalidation.php">
<br>
<table>
<tr><td>Use ID</td> <td><input type="text" name="username"></td></tr>
<tr><td>Current Password</td> <td><input type="password" name="username" ></td></tr>

<tr><td>New Password</td> <td><input type="password" name="password"></td></tr>
<tr><td>Confirm Password</td> <td><input type="password" name="password"></td></tr>

</table>
<input type="submit" value="Change" class="button">
<form>
<hr>
<b>OR</b>
<hr>
<table>
<tr><td>Use ID</td> <td><input type="text" name="username"></td></tr>
<tr><td>Email-ID</td> <td><input type="email" name="username"></td></tr>
</table>
<input type="submit" value="SEND CODE" class="button">
<br><br>
</form>
</div>
<br><br>
</div>
<?php
include ("footer.php"); 
?>

</div>
</center>
</body>
</html>