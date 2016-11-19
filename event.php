<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Event</title>
</head>

<body>
<?php 
include ("header.php");
?>
<br>
<center>

<div id="main">
<marquee direction="up" align="middle">
<?php
mysql_connect('localhost','root','');
mysql_select_db('sirda');


$result = mysql_query("SELECT * FROM event");

echo "<table cellspacing='20' align= 'center' >";
while($row = mysql_fetch_array($result))
{
  echo "<tr>";
  
   echo "<td>" ."<b>" .$row['title'] . "</b>"."<br>";
    echo "<td>" .$row['desc'] ."<br>";
  echo "<td>"  .$row['date'] . "<br>";
   
  echo "</tr>";
  
}

echo "</table>";
?>
</div>

</marquee>
</center>
<br>
<?php 
include ("footer.php");
?>


</body>
</html>