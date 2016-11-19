<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Event Update</title>
</head>

<body>
<?php
mysql_connect('localhost','root','');
mysql_select_db('sirda');
$title=$_POST['title'];
$desc=$_POST['desc'];
$date=$_POST['date'];
mysql_query("insert into event values('$title','$desc','$date')");	
echo mysql_error();
echo "<h3>Record inserterd";
	?>



</body>
</html>