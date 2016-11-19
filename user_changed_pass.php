<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$curr=$_POST['cpass'];
$new=$_POST['npass'];
session_start();
if(isset($_SESSION['user']))
{
	$u=$_SESSION['user'];
mysql_connect('localhost','root','');
mysql_select_db('sirda');
mysql_query("UPDATE sinfo SET pass='$new' WHERE userid='$u' and pass='$curr'");
echo mysql_error();
echo "<h3>Password changed";	
}
?>
</body>
</html>