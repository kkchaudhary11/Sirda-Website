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
<div id ="main">
<center>
<h3>MARKS</h3>

<hr>
<?php
$s=$_GET["s"];


mysql_connect('localhost','root','');
mysql_select_db('sirda');
$result = mysql_query("SELECT * FROM internal where sirdaid='$s'");
echo "<br>";



echo "<table align='center' class='it'>";
echo "<tr><th class='th1'>ID</th> <th class='th1'>ClassTest 1</th><th class='th1'>ClassTest 2</th><th class='th1'>MST 1</th><th class='th1'>MST 2</th><th class='th1'>Assignment 1</th><th class='th1'>Assignment 2</th><th class='th1'>Attendence</th><th class='th1'>Other</th></tr>";
 while($row = mysql_fetch_array($result))
{
echo "<tr><td class='td1' align='center'>".$row['sirdaid']."</td>";
echo "<td class='td1' align='center'>".$row['cls1']."</td>";
echo "<td class='td1' align='center'>".$row['cls2']."</td>";
echo "<td class='td1' align='center'>".$row['mst1']."</td>";
echo "<td class='td1' align='center'>".$row['mst1']."</td>";
echo "<td class='td1' align='center'>".$row['ass1']."</td>";
echo "<td class='td1' align='center'>".$row['ass2']."</td>";
echo "<td class='td1' align='center'>".$row['attend']."</td>";
echo "<td class='td1' align='center'>".$row['Other']."</td>";

}





echo "</table>";
echo "<br>";

?>
</div>
<?php
include ("footer.php");
?>

</body>
</html>