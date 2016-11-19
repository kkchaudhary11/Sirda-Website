<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HOD | Logged In</title>
</head>

<body>
<?php
include ("header.php");


?>

<br>
<br>
<div id ="main">
<center>
<div id ="form" style="width:500px">
<?php
if(isset($_SESSION['user']))
{
	$n=$_SESSION['user'];
mysql_connect('localhost','root','');
mysql_select_db('sirda');
$name=mysql_query("select * from tinfo where uid='$n'");
	echo "<table cellspacing='20'>";
while($row = mysql_fetch_array($name))
{
  echo "<tr>";
  echo "<td colspan='3'>" . "<img src='images/$row[img]' width='50' height='50'>" . "</td>";
  echo "<td>" ."Hello!". "</td>"."<td>".$row['fname']."&nbsp;" . $row['mname']."&nbsp;" . $row['lname']. "</td>";
  
  echo "<td width='3%'><hr style='width:.07em; height: 3em; background:#C00;'> </td>";

  echo "<td>"."<a href='logout.php' class='button'>LOG OUT</a>"."</td>";
  echo "</tr>";
  $c=$row['course'];
 $b=$row['branch'];
 $y=$row['year'];
}
echo "</table>";
 echo "<tr><td><hr></td></tr>";
 
echo "
         <li><a href='user_change_profile.php' class='link'>Change Profile Info</a></li>
	     <li><a href='user_change_pass.php' class='link'>Change Password</a></li>
    	 <li><a href='post_admin_add.php' class='link'>Post</a></li>
	     <li><a href='sel_sem.php' class='link'>View Marks</a></li>
	 	 <li><a href='teacher_prog_view.php' class='link'>Teacher Progress</a></li>";
}
else
{
	echo "Expired";
}
 
?>




<HR>
Any Update will be post behalf of you.
<br><br>
</div>
<BR>
</div>
<?php
include ("footer.php");

?>
</body>
</html>