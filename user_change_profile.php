<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Update info</title>

</head>
<body>


<?php
session_start();
include ("header.php");
?>
<br>
<center>
<div id="main"  >
<h3>Profile Update</h3>
<hr>
Only the Highlighted fields can be updated.
<BR><br>
<div id=form style='width:600px'>

<?php
if(isset($_SESSION['user']))
{
	$u=$_SESSION['user'];
mysql_connect('localhost','root','');
mysql_select_db('sirda');

$result = mysql_query("SELECT * FROM sinfo where userid='$u'");
echo "<form method='post' action='user_changed_profile.php' enctype='multipart/form-data'>";

echo "<table align='center'>";

while($row = mysql_fetch_array($result))
{
	echo "<tr><td>"."First Name:" ."</td><td>" . $row['fname']."</td></tr>"; 
	echo "<tr><td>"."Middle Name:" ."</td><td>" . $row['mname']."</td></tr>"; 
	echo "<tr><td>"."Last Name:" ."</td><td>" . $row['lname']."</td></tr>";
    echo "<tr><td>"."D.O.B:" ."</td><td>" . $row['dob']."</td></tr>"; 
	echo "<tr><td>"."Gender:" ."</td><td>" . $row['gender']."</td></tr>";
	echo "<tr><td colspan='2'><hr></td></tr>";

    echo "<tr><td>"."E-mail ID". "</td><td><input type='email' name='email_id' onclick=this.value='' value=". $row['email'] ." ></td></tr>";
echo "<tr><td>"."Address:". "</td><td><textarea rows='2' cols='17' name='address' onclick=this.value='' value=". $row['address'] ."></textarea></td></tr>";
echo "<tr><td>"."Postal Code". "</td><td><input type='number' name='p_code' onclick=this.value='' value=". $row['pcode'] ." ></td></tr>";
echo "<tr><td>"."Contact No.(Primary)". "</td><td><input type='tel' name='contact1' onclick=this.value='' value=". $row['cnop'] ." ></td></tr>";
echo "<tr><td>"."Contact No. (Secondary if any)". "</td><td><input type='tel' name='contact2' onclick=this.value='' value=". $row['cnos'] ." ></td></tr>";

	echo "<tr><td>"."Profile Picture(Current):" ."</td><td>" . "<img src='images/$row[pp]' width='150' height='100'>"."</td></tr>";
echo "<tr><td>"."Profile Picture(New):". "</td><td><input type='file' name='pp'></td></tr>";

echo "<tr><td colspan='2'><hr></td></tr>";

	echo "<tr><td>"."Course:" ."</td><td>" . $row['course']."</td></tr>";
	echo "<tr><td>"."Branch:" ."</td><td>" . $row['branch']."</td></tr>";
	echo "<tr><td>"."Year". "</td><td><input type='text' name='year' onclick=this.value='' value=". $row['year'] ." ></td></tr>";
	echo "<tr><td colspan='2'><hr></td></tr>";
	echo "<tr><td>"."Sirda ID:" ."</td><td>" . $row['sirdaid']."</td></tr>";
		echo "<tr><td><b>"."User ID:" ."</b></td><td>" . $row['userid']." (require to login)"."</td></tr>";

}
echo "</table>";
echo "<hr>";
echo "<input type='submit' value='CHANGE' class='button'> <input type='reset' value='Reset' class='button'>";
echo "</form>";


}
else
{
	echo "Session Expired";
}


?>


<br><br>
</div>
<br>
</div>
<br>

<?php

?>

<?php
include ("footer.php"); 
?>

</body>
</html>