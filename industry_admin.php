<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Industry Admin</title>
</head>

<body>
<?php 
include ("header.php");
?>
<div id="main">
<center>
<h3>Industry Admin</h3>
<hr>
To add new<a href="industry_admin_add.php" class="error">Click Here</a>

<?php
mysql_connect('localhost','root','');
mysql_select_db('sirda');
$result = mysql_query("SELECT * FROM industry");
echo "<table cellspacing='20'>";
while($row = mysql_fetch_array($result))
{
  echo "<tr>";
  echo "<td colspan='3' >" . "<img src='images/$row[image]' width='100' height='100'>" . "</td>";
   echo "<td>"."<a href='industry_admin_delete.php' class='link'>DELETE</a>"."</td>";
  echo "<td>"."<a href='' class='link'>UPDATE</a>"."</td>";
  echo "</tr>";
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