<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

mysql_connect('localhost','root','');
mysql_select_db('sirda');

$sirdaid=$_POST['sid'];
$marks=$_POST['marks'];

mysql_query("insert into aluminitable values('$sirdaid','$marks')");	
echo mysql_error();
echo "<h3>Record inserterd";
?>



</body>
</html>