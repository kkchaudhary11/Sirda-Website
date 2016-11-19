<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Post</title>
</head>

<body>
<?php 
include ("header.php");
?>
<br>
<center>

<div id="main">
<h3>RECENT POSTS</h3>
<HR>
<?php
mysql_connect('localhost','root','');
mysql_select_db('sirda');

$result = mysql_query("SELECT * FROM post");

echo "<table align= 'center'>";
while($row = mysql_fetch_array($result))
{
  echo "<tr>";
    echo "<td colspan='3' >" . "<img src='images/$row[image]' width='600' height='400'>" . "</td></tr>";

  echo "<tr><td><b>" . $row['title'] . "</b></td></tr>";
  echo "<tr><td>". $row['desc'] ."<a href='$row[link]' class='error'>$row[linkname]</a>" .  "</td></tr>";
  
  $n=$row['userid'];
  $name=mysql_query("select * from sinfo where userid='$n'");
	
while($row = mysql_fetch_array($name))
{
	echo "<tr><td>"."POSTED BY - ";
  echo $row['fname']."&nbsp;" . $row['mname']."&nbsp;" . $row['lname']; 
  echo "</td></tr>";
    echo "<tr><td><hr></td></tr>";

} 

}


echo "</table>";

?>
</div>
</center>
<br>
<?php 
include ("footer.php");
?>


</body>
</html>