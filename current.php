<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Current Students</title>
</head>

<body>
<?php 
include ("header.php");
?>
<br>
<?php
mysql_connect('localhost','root','');
mysql_select_db('sirda');

$result = mysql_query("SELECT * FROM sinfo");

echo "<table cellspacing='20' align='center'>";
while($row = mysql_fetch_array($result))
{
  echo "<tr>";
  echo "<td colspan='3' >" . "<img src='images/$row[pp]' width='100' height='100'>" . "</td>";
  echo "<td>" . $row['fname'] . $row['mname']. $row['lname']. "</td>";
  echo  "<td>".$row['dob'] . "</td>";
    echo  "<td>".$row['gender'] . "</td>";
	  echo  "<td>".$row['email'] . "</td>";
	    echo  "<td>".$row['address'] . "</td>";
		  echo  "<td>".$row['pcode'] . "</td>";
  echo "<td>". $row['branch'] . "</td>";
  echo "</tr>";
  
}
echo "</table>";

?>

<?php 
include ("footer.php");
?>
</body>
</html>