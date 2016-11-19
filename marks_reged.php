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
$cls1=$_POST['cls1'];
$cls2=$_POST['cls2'];
$mst1=$_POST['mst1'];
$mst2=$_POST['mst2'];
$ass1=$_POST['ass1'];
$ass2=$_POST['ass2'];
$attend=$_POST['att'];
$Other=$_POST['oth'];

mysql_query("insert into internal values('$sirdaid','$cls1','$cls2','$mst1','$mst2','$ass1','$ass2','$attend','$Other')");	
echo mysql_error();
echo "<h3>Record Inserterd";
?>
</body>
</html>