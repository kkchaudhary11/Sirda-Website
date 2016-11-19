<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Industries</title>
</head>
<body>
<?php 
include ("header.php");
?>
<br>
<center>
<div id="main">
<h3>PLACEMENTS IN SIRDA</h3>
<hr>
<?php
mysql_connect('localhost','root','');
mysql_select_db('sirda');
$result = mysql_query("SELECT * FROM industry");
while($row = mysql_fetch_array($result))
{
  echo "<img src='images/$row[image]' width='150' height='100'>";  
}

echo "</table>";
?>
<hr>
</div>
<br>
<?php 
include ("footer.php");
?>






</body>
</html>