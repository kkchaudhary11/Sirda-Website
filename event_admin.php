<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>event_admin_update</title>
</head>

<body>
<?php 
include ("header.php");
?>
<div id="main">
<center>
<h3>Event Admin</h3>
<hr>
To add new<a href="event_admin_add.php" class="error">Click Here</a>

<?php
mysql_connect('localhost','root','');
mysql_select_db('sirda');
$result = mysql_query("SELECT * FROM event");
echo "<table cellspacing='20'>";
while($row = mysql_fetch_array($result))
{
  echo "<tr>";
  echo "<td>" ."<b>" .$row['title'] . "</b>"."<br>";
    echo "<td>" .$row['desc'] ."<br>";
  echo "<td>"  .$row['date'] . "<br>";

  echo "<td>"."<a href='event_admin_delete.php' class='link'>DELETE</a>"."</td>";
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