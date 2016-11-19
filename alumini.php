<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Alumini</title>
</head>

<body>
<?php 
include ("header.php");
?>
<br>

<div id="main">
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
  echo "</tr>";
  
}
}
echo "</table>";
?>
<h4>Alumni Relations</h4>
More than 1,000 College of Engineering students and alumni are impacting the world. They are alleviating energy poverty, they are solar decathletes, National Science Foundation Graduate Research Fellows, business owners, professors and even inaugural poets. We appreciate the many alumni who stay connected with the college, donating their time and resources to make a difference in the lives of our students.
<ul>
<li>We invite you to remain an active member of the SIRDA family.</li>
<li>Keep in Touch: Update your Contact Info, Submit a Class Note, or like our Facebook page.</li>
<li>News: Keep current on News and Events from the college. Subscribe here to receive the college’s newsletter.</li>
<li>Enrich your career: Access the College’s Executive Education and Professional Master’s Degree Programs. Contact us to discuss a specific training solution for your company.</li>
</ul>
</div>
<?php 
include ("footer.php");
?>


</body>
</html>