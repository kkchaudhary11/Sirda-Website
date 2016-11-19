<?php
$c=$_POST['current'];
$p1=$_POST['pass1'];
$p2=$_POST['pass2'];
mysql_connect('localhost','root','');
mysql_select_db('sirda');
$a='admin';
$o=mysql_query("select password from login'");
$row=mysql_fetch_row($o);
if($c==$row[2])
{
	
mysql_query("update login set password='$p1' where name='admin'");
 echo "passwod changed successfully";
}

else
{
 echo "password doesn't match";
	echo $row[2];
}
?>
