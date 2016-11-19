<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>almuini_admin_delete.php</title>
</head>

<body>
<?php
mysql_connect('localhost','root','');
mysql_select_db('sirda');
$sid=$_GET['t1'];
$result = mysql_query("delete FROM aluminitable where sirdaid='$sid'");
echo "Record Deleted";
?>
</body>
</html>