<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Alumini_admin_update</title>
</head>

<body>
<?php 
include ("header.php");
?>
<div id="main">
<center>
<h3>Alumini Admin</h3>
<hr>
To add new<a href="alumini_admin_add.php" class="error">Click Here</a>

<?php
mysql_connect('localhost','root','');
mysql_select_db('sirda');
$sm = mysql_query("SELECT * FROM aluminitable");
while($row = mysql_fetch_array($sm))
{
	$sid=$row['sirdaid'];
	$marks=$row['marks'];

$result = mysql_query("SELECT * FROM sinfo where sirdaid='$sid'");

echo "<table cellspacing='20' align='center'>";
while($row = mysql_fetch_array($result))
{
  echo "<tr>";
  echo "<td colspan='3' >" . "<img src='images/$row[pp]' width='100' height='100'>" . "</td>";
  echo "<td>" . $row['fname'] .$row['mname'].$row['lname']. "<br>";
  echo  $row['branch'] . "<br>";
  echo  $marks . "</td>";
  echo "<td>"."<a href='alumini_admin_delete.php?t1=$sid' class='link'>DELETE</a>"."</td>";
  echo "</tr>";
}
}
echo "</table>";
?>


</div>
<br>
<?php 
include ("footer.php");
?>


</body>
</html>