<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Jobs At Sirda</title>
</head>

<body>
<?php 
include ("header.php");
?>
<br>
<center>

<div id="main">
<center>
<h3>VACENT SEATS</h3>
<hr>
<?php
mysql_connect('localhost','root','');
mysql_select_db('sirda');
$result = mysql_query("SELECT * FROM jobs");


echo "<table cellspacing='20' style='text-align:center'>";
echo "<th>Department</th>
<th>Designation</th>
<th>Seats</th>";
while($row = mysql_fetch_array($result))
{
  echo "<tr>";
  
  echo "<td>" . $row['dept'] . "</td>";
    echo "<td>" .$row['post'] . "</td>";
  echo "<td>" .$row['seats'] . "</td>";
   
  echo "</tr>";
  
}
echo "</table>";
?>
<hr>
<a href="job.php" class="error">Click Here </a> to apply job
</div>
<br>
<?php 
include ("footer.php");
?>




</body>
</html>