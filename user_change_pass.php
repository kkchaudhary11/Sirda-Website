<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>


<?php
session_start();

include ("header.php");
?>

<div id="main">
<h3>Change Password</h3>
<hr>
<center>
	
<br>
<div id="form" style="width:600px">
<form method="post" action="user_changed_pass.php">
<br>
<table>
<tr><td>Current Password</td> <td><input type="password" name="cpass" ></td></tr>

<tr><td>New Password</td> <td><input type="password" name="npass"></td></tr>
<tr><td>Confirm Password</td> <td><input type="password" name="cnpass"></td></tr>

</table>
<input type="submit" value="Change" class="button">
<br><br>
</div>
<br><br>
</div>


<?php
include("footer.php");
?>
</body>
</html>