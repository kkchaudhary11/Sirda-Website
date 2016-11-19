<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
include ("header.php");
?>

<center>
<?php
mysql_connect('localhost','root','');
mysql_select_db('sirda');
$a="kamal";

$result = mysql_query("SELECT * FROM facultytable where $dep=ME");

echo "<table >
<tr>
<th>NAME</th>
<th>DEPARTMENT</th>
<th>DESIGNATION</th>
<th>QUALIFICATION</th>
<th>EMAIL_ID</th>
<th>CONTACT</th>
<th>IMAGE</th>
</tr>";
while($row = mysql_fetch_array($result))
{
  echo "<tr>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['dep'] . "</td>";
  echo "<td>" . $row['desig'] . "</td>";
   echo "<td>" . $row['qualif'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
	 echo "<td>" . $row['contact'] . "</td>";
   echo "<td>" . "<img src='images/$row[image]' width='100' height='100'>" . "</td>";
  echo "</tr>";
  
}

echo "</table>";
?>


</body>
</html>