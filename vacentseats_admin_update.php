<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Vacent Seats update</title>
</head>

<body>
<?php
mysql_connect('localhost','root','');
mysql_select_db('sirda');
$dept=$_POST['department'];
$post=$_POST['designation'];
$seats=$_POST['seats'];
mysql_query("insert into jobs values('$dept','$post','$seats')");	
echo mysql_error();
echo "<h3>Record inserterd";
?>
</body>
</html>