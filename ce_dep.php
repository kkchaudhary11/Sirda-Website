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
<div id="main">
<?php
mysql_connect('localhost','root','');
mysql_select_db('sirda');

$result = mysql_query("SELECT * FROM facultytable where dept='CE'");



echo "<table cellspacing='20'>";
while($row = mysql_fetch_array($result))
{
  echo "<tr>";
  echo "<td colspan='3' >" . "<img src='images/$row[image]' width='150' height='150'>" . "</td>";
  echo "<td>" . $row['name'] . "<br>";
  echo  "Department: ".$row['dept'] . "<br>";
    echo  $row['desig'] . "<br>";
  echo  $row['qualif'] . "<br>";
  echo  $row['email'] . "<br>";

    echo  $row['contact'] . "</td>";
   
  echo "</tr>";
  
}

echo "</table>";


?>
</div>

<?php
include ("footer.php");
?>

</body>
</html>