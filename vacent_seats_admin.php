<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>vacent_seats_add</title>
</head>

<body>

<?php 
include ("header.php");
?>
<div id="main">
<center>
<h3>Vacent Seats Admin</h3>
<hr>
To enter new jobs <a href="vacent_seats_add.php" class="error">Click here</a>
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
<input type="submit" value="UPDATE" class="button">
<input type="submit" value="DELETE" class="button">

</div>
<br>


<?php 
include ("footer.php");
?>
</body>
</html>