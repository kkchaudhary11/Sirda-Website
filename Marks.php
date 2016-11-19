<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Enter Marks</title>


</head>

<body>
<?php
include ("header.php");
?>

<div id="main"  >
<h3>MARKS</h3>
<center>
<hr>


<?php
/*
if(isset($_SESSION['user']))
{
	$n=$_SESSION['user'];
mysql_connect('localhost','root','');
mysql_select_db('sirda');
$name=mysql_query("select * from sinfo where sirdaid='$n'");
	echo "<table cellspacing='20'>";
while($row = mysql_fetch_array($name))
{
  echo "<tr>";
  echo "<td colspan='3'>" . "<img src='images/$row[pp]' width='50' height='50'>" . "</td>";
  echo "<td>" ."Hello!". "</td>"."<td>".$row['fname']."&nbsp;" . $row['mname']."&nbsp;" . $row['lname']. "</td>";
  echo "<td width='3%'><hr style='width:.07em; height: 3em; background:#C00;'> </td>";

  echo "<td>"."<a href='logout.php' class='button'>LOG OUT</a>"."</td>";
  echo "</tr>";
 
}
echo "</table>";
 echo "<tr><td><hr></td></tr>";
}
else
{
	echo "Expired";
}
<style type="text/css">
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th,td {
    padding: 15px;
}
</style>

*/?>

<?php
echo   $c=$_GET["c"];
echo   $b=$_GET["b"];
echo   $y=$_GET["y"];



mysql_connect('localhost','root','');
mysql_select_db('sirda');
$result = mysql_query("SELECT * FROM sinfo where course='$c' and branch='$b' and year='$y'");
echo "<br>";



echo "<table align='center' class='it'>";
echo "<tr><th class='th1'>Roll No</th> <th class='th1'>Image</th> <th class='th1'>Name</th> <th class='th1'>ID</th> <th class='th1'>ClassTest 1</th><th class='th1'>ClassTest 2</th><th class='th1'>MST 1</th><th class='th1'>MST 2</th><th class='th1'>Assignment 1</th><th class='th1'>Assignment 2</th><th class='th1'>Attendence</th><th class='th1'>Other</th><th class='th1'>Update</th></tr>";
 while($row = mysql_fetch_array($result))
{
echo "<tr><td class='td1'>".$row['rollno']."</td>";
echo "<td class='td1'>"."<img src='images/$row[pp]' width='50' height='50'>"."</td>";
  echo  "<td class='td1'>".$row['fname'].$row['lname']."</td>" ; 
$sirdaid=$row['sirdaid'];
echo "<form name='marks' method='post' action='marks_reged.php' enctype='multipart/form-data'>";
echo "<td class='td1' align='center'><input type='text' value='$row[sirdaid]' name='sid' style='width:70px'></td>";

echo "<td class='td1' align='center'><input type='number' name='cls1' maxlength='2' style='width:50px'></td>";
echo "<td class='td1' align='center'><input type='number' name='cls2' maxlength='2' style='width:50px'></td>";
echo "<td class='td1' align='center'><input type='number' name='mst1' maxlength='2' style='width:50px'></td>";

echo "<td class='td1' align='center'><input type='number' name='mst2' maxlength='2' style='width:50px'></td>";
echo "<td class='td1' align='center'><input type='number' name='ass1' maxlength='2' style='width:50px'></td>";
echo "<td class='td1' align='center'><input type='number' name='ass2' maxlength='2' style='width:50px'></td>";
echo "<td class='td1' align='center'><input type='number' name='att' maxlength='2' style='width:50px'></td>";
echo "<td class='td1' align='center'><input type='number' name='oth' maxlength='2' style='width:50px'></td>";
echo "<td class='td1' align='center'><input type='submit' value='UPDATE' class='button'></form></a></td>";
}





echo "</table>";
echo "<br>";
?>



<input type="submit" value="UPDATE" class="button">
</form>

</div>
<br>
<br>
<?php
include ("footer.php");
?>
</body>
</html>



<tr> <td><input type="number" name="cls2"></td></tr>

<tr><td colspan="2"><hr></td></tr>

<tr><td>MST 1 </td> <td><input type="number" name="mst1"></td></tr>
<tr> <td>MST 2 </td> <td><input type="number" name="mst2"></td></tr>

<tr><td colspan="2"><hr></td></tr>

<tr><td>Assignment 1 </td> <td><input type="number" name="ass1"></td></tr>
<tr> <td>Assignment 2 </td> <td><input type="number" name="ass2"></td></tr>

<tr><td colspan="2"><hr></td></tr>
<tr><td>Attendance</td> <td><input type="number" name="att"></td></tr>

<tr><td colspan="2"><hr></td></tr>

<tr><td>Other </td> <td><input type="number" name="other"></td></tr>
</table>
<hr>